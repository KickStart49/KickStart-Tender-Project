<?php 
$download=explode(' ',$_GET['n']);
use setasign\Fpdi\Fpdi;

require_once('fpdf/fpdf.php');
require_once('fpdi/src/autoload.php');

class ConcatPdf extends Fpdi
{
    public $files = array();

    public function setFiles($files)
    {
        $this->files = $files;
    }

    public function concat()
    {
        foreach($this->files AS $file) {
            $pageCount = $this->setSourceFile($file);
            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $pageId = $this->ImportPage($pageNo);
                $s = $this->getTemplatesize($pageId);
                $this->AddPage($s['orientation'], $s);
                $this->useImportedPage($pageId);
            }
        }
    }
}
$pdf = new ConcatPdf();
$pdf->setFiles($download);
$pdf->concat();
$pdf->Output('I', 'concat.pdf');


?>