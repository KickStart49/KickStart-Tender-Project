<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/tenderform.css">
  <link rel="stylesheet" type="text/css" href="css/view.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/tenderform.js"></script>
  
</head>
<body>

       <?php
$dir    = 'documents/'; 
$files2 = scandir($dir, 1);
$n=sizeof($files2);


?>
            <div class="col-12">
              <div class="form-group" style="text-align: center;">
                <div class="row">
                  <div class="col-3"></div>
                  <div class="col-6">
                  <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active mybtn">
                      All Uploaded Documents
                    </button>
<?php
$f1 = array();
for($i=0; $i<=$n-3; $i++)
{
echo '
                    <input type="button" class="form-control select list-group-item list-group-item-action" value="'.$files2[$i].'">
';
array_push($f1,"documents/$files2[$i]");
}
$f1 = implode(' ',$f1);

?>                   
                  </div>
                  
                  <form class="container form-group" action="uploadform.php" method="post" id="needs-validation" novalidate enctype="multipart/form-data">
                    <input type="file" name="doc" class="btn btn-default btn-block form-control">
                      
                    
                    <button type="submit" name="submit" class="btn btn-dark btn-block">
                      UPLOAD DOCUMENT
                    </button>
                  </form>
                </div>
</body>
</html>