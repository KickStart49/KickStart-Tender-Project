<?php
include("include/db.php");

if(isset($_POST["submit"])){
	$docarr=json_decode($_POST['docarr']);
	$Department = $_POST["Department"];
	$Work = $_POST["Work"];
	$Contract = $_POST["Contract"];
	$BidType = $_POST["BidType"];
	$TenderFee = $_POST["TenderFee"];
	$BidEMD = $_POST["BidEMD"];
	$StartDate = $_POST["StartDate"];
	$EndDate = $_POST["EndDate"];
	$PreBid = $_POST["PreBid"];
	$Receipt = $_POST["Receipt"];
	$Submission = $_POST["Submission"];
	$TechnicalBid = $_POST["TechnicalBid"];
	$CommercialBid = $_POST["CommercialBid"];
	$uploaddir = 'uploads/';
	$upload = $_FILES['maindoc']['name'];
	$target = $uploaddir . basename($_FILES['maindoc']['name']);
	
	$t = "uploads/";
	$mt = $t.$upload;
	array_push($docarr, $mt);
	$docarr = implode(' ',$docarr);

	


	if (move_uploaded_file($_FILES['maindoc']['tmp_name'], $target)) {
	} else {
		echo "error";
	}


	$date = date("Y/m/d");

	$execute1=mysqli_query($connect,"INSERT INTO tender(Department,Work,Contract,BidType,TenderFee,BidEMD,StartDate,EndDate,PreBid,Receipt,Submission,TechnicalBid,CommercialBid,maindoc,download)VALUES('$Department','$Work','$Contract','$BidType','$TenderFee','$BidEMD','$StartDate','$EndDate','$PreBid','$Receipt','$Submission','$TechnicalBid','$CommercialBid','$upload','$docarr')");
	

}
echo '<script>location.href="TenderForm";</script>';

?>