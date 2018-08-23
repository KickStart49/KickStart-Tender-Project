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
$id = $_GET["fid"];
 $connect = mysqli_connect("127.0.0.1","root","","wordpress");
    $execute=mysqli_query($connect,"SELECT * FROM tender where id=$id");
		$datarow = mysqli_fetch_array($execute);
			

			$Department = $datarow["Department"];
			$Work = $datarow["Work"];
			$Contract = $datarow["Contract"];
			$BidType = $datarow["BidType"];
			$TenderFee = $datarow["TenderFee"];
			$BidEMD = $datarow["BidEMD"];
			$StartDate = $datarow["StartDate"];
			$EndDate = $datarow["EndDate"];
			$PreBid = $datarow["PreBid"];
			$Receipt = $datarow["Receipt"];
			$Submission = $datarow["Submission"];
			$TechnicalBid = $datarow["TechnicalBid"];
			$CommercialBid = $datarow["CommercialBid"];
			
      $download = $datarow["download"];
      ?>
  <div class="jumbotron">

    <h1 class="h1-reponsive mb-3 blue-text"><strong>Form No. <?php echo $id; ?>!</strong></h1>
      <div class="row">
        <div class="col-3"></div>
        <table class="table col-6">
          <tbody>
            <?php echo '
            <tr>
              <th>Department</th>
              <td>'.$Department.'</td>    
            </tr>
            <tr>
              <th>Work</th>
              <td>'.$Work.'</td>    
            </tr>
            <tr>
              <th>Contract</th>
              <td>'.$Contract.'</td>    
            </tr>
            <tr>
              <th>BidType</th>
              <td>'.$BidType.'</td>    
            </tr>
            <tr>
              <th>TenderFee</th>
              <td>'.$TenderFee.'</td>    
            </tr>
            <tr>
              <th>BidEMD</th>
              <td>'.$BidEMD.'</td>    
            </tr>
            <tr>
              <th>StartDate</th>
              <td>'.$StartDate.'</td>    
            </tr>
            <tr>
              <th>EndDate</th>
              <td>'.$EndDate.'</td>    
            </tr>
            <tr>
              <th>PreBid</th>
              <td>'.$PreBid.'</td>    
            </tr>
            <tr>
              <th>Receipt</th>
              <td>'.$Receipt.'</td>    
            </tr>
            <tr>
              <th>Submission</th>
              <td>'.$Submission.'</td>    
            </tr>
            <tr>
              <th>TechnicalBid</th>
              <td>'.$TechnicalBid.'</td>    
            </tr>
            <tr>
              <th>CommercialBid</th>
              <td>'.$CommercialBid.'</td>    
            </tr>
            <tr>
              <th>Final Document</th>
              <td><a href="http://127.0.0.1/TenderForm/download.php?n='.$download.'"><button class="btn btn-info">Download</button></td>    
            </tr>
              ';?>
          </tbody>
        </table>
      </div>
  </div>
</body>
</html>