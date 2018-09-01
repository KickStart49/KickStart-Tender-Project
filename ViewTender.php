<?php 		 				
			 				
if(isset($_POST["formid"])){
		$_SESSION["formid"] = $_POST["formid"];
		echo $_SESSION["formid"];

    
    								$id = $_SESSION["formid"];

								 	$connect = mysqli_connect("127.0.0.1","root","","Kickstart");
								    $execute=mysqli_query($connect,"SELECT * FROM tender where id='$id'");
								    
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

				      		<tr>
				        		<th>Form-no.</th>
				        		<td><?php echo $id; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Department Name</th>
				        		<td><?php echo $Department; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Name of Work</th>
				        		<td><?php echo $Work; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Estimated contract value (INR)</th>
				        		<td><?php echo $Contract; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Bidding Type</th>
				        		<td><?php echo $BidType; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Tender Fee</th>
				        		<td><?php echo $TenderFee; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Bid Security/EMD (INR)</th>
				        		<td><?php echo $BidEMD; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Bid Document Downloading Start Date (INR)</th>
				        		<td><?php echo $StartDate; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Bid Document Downloading End Date (INR)</th>
				        		<td><?php echo $EndDate; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Pre Bid Meeting</th>
				        		<td><?php echo $PreBid; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Last Date & Time for Receipt of Bids</th>
				        		<td><?php echo $Receipt; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Submission of Documents</th>
				        		<td><?php echo $Submission; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Bid Operating Date Technical Bid</th>
				        		<td><?php echo $TechnicalBid; ?></td>
				      		</tr>
				      		<tr>
				        		<th>Bid Operating Date Commercial Bid</th>
				        		<td><?php echo $CommercialBid; ?></td>
				      		</tr>
				      		<?php } ?>
?>