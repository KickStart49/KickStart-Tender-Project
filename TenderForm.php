<?php 
/*

*/
require_once('notification.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/tenderform.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/tenderform.js"></script>
</head>
<body>
  
<div class="container">
    <div class="row">
      <div class="offset-lg-2 col-8 border rounded main-section">
        <h3 class="text-center text-inverse">Submit Tender Details !</h3>
        <hr>
        <form class="container" action="formsubmit.php" method="post" id="needs-validation" novalidate enctype="multipart/form-data">
          
            <div class="col-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom01">Department Name</label>
                <input type="text" class="form-control" name="Department" id="validationCustom01"  required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom02">Name of Work</label>
                <input type="text" class="form-control" name="Work" id="validationCustom02"  required>
              </div>  
            </div>
            <div class="col-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom03">Estimated contract value (INR)</label>
                <input type="number" class="form-control" name="Contract" id="validationCustom03"  required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom04">Bidding Type</label>
                <input type="text" class="form-control" name="BidType" id="validationCustom04"  required>
              </div>  
            </div>
            <div class="col-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom05">Tender Fee</label>
                <input type="number" class="form-control" name="TenderFee" id="validationCustom05"  required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom06">Bid Security/EMD (INR)</label>
                <input type="datetime-local" class="form-control" name="BidEMD" id="validationCustom06"  required>
              </div>  
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom07">Bid Document Downloading Start Date (INR)</label>
                <input type="datetime-local" class="form-control" name="StartDate" id="validationCustom07"  required>
              </div>  
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom08">Bid Document Downloading End Date (INR)</label>
                <input type="datetime-local" class="form-control" name="EndDate" id="validationCustom08"  required>
              </div>  
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom09">Pre Bid Meeting</label>
                <input type="datetime-local" class="form-control" name="PreBid" id="validationCustom09"  required>
              </div>  
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom010">Last Date & Time for Receipt of Bids</label>
                <input type="datetime-local" class="form-control" name="Receipt" id="validationCustom010"  required>
              </div>  
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom011">Submission of Documents</label>
                <input type="datetime-local" class="form-control" name="Submission" id="validationCustom011" required>
              </div>  
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom012">Bid Operating Date Technical Bid</label>
                <input type="datetime-local" class="form-control" name="TechnicalBid" id="validationCustom012" required>
              </div>  
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom013">Bid Operating Date Commercial Bid</label>
                <input type="datetime-local" class="form-control" name="CommercialBid" id="validationCustom013" required>
              </div>  
            </div>
             <?php
$dir    = 'documents/'; 
$files2 = scandir($dir, 1);
$n=sizeof($files2);


?>
            <div class="col-12">
              <div class="form-group">
                <div class="row">
                  <div class="list-group col-6">
                    <button type="button" class="list-group-item list-group-item-action active mybtn">
                      Select The Required Documents
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

/* */
?>
          
                  </div>

                  <div class="list-group list2 col-6">
                    <button type="button" class="list-group-item list-group-item-action active mybtn">
                      Documents Selected
                    </button>
 
                  </div>
                </div>
              </div>  
            </div>
           <input type="hidden" class="form-control" value="" name="docarr" id="docarr">
            <div class="form-group">
              <input type="file" class="form-control" name="maindoc" id="validatedCustomFile" required>
              <div class="invalid-feedback">Please Upload your Tender Document</div>
            </div>
    
          <hr>
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
                <button class="btn btn-primary" name="submit" type="submit">Submit Tender</button>
            </div>
          </div>  
        </form>
      </div>
    </div>  
</div>

</body>
</html>