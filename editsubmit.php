<?php
include("include/db.php");

if(isset($_POST["submit"])){
	$id = $_POST["id"];
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


	$date = date("Y/m/d");

	$execute1=mysqli_query($connect,"UPDATE tender set Department = '$Department',Work = '$Work',Contract = '$Contract',BidType = '$BidType',TenderFee = '$TenderFee',BidEMD = '$BidEMD',StartDate = '$StartDate',EndDate = '$EndDate',PreBid = '$PreBid',Receipt = '$Receipt' , Submission = '$Submission',TechnicalBid = '$TechnicalBid',CommercialBid = '$CommercialBid' WHERE id = '$id'");
	

}
echo '<script>location.href="home";</script>';

?>