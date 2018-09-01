<?php if($_POST["formid"]){

				            
				            		$id = $_POST["formid"];
								 	$connect = mysqli_connect("127.0.0.1","root","","Kickstart");
								    $execute=mysqli_query($connect,"SELECT * FROM tender WHERE id = '$id'");
								    $numrow = mysqli_num_rows($execute);
								    if($numrow > 0){
								    $no = 0;
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
								      		$no++;
								    ?>
								    <div class="row ">
				                <div class="col-md-12"><br><br>
				                    <h4>Form Details</h4>
				                    <hr>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col-md-12">
					                <form action="formsubmit.php" method="post" id="needs-validation" novalidate enctype="multipart/form-data"> 
							            <div class="col-12">
							               <div class="form-group">
							                <label class="text-inverse" for="validationCustom01">Department Name</label>
							                <input type="text" class="form-control" name="Department" id="validationCustom01" value="<?php echo $Department;?>"  required>
							              </div>
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom02">Name of Work</label>
							                <input type="text" class="form-control" name="Work" id="validationCustom02"  value="<?php echo $Work;?>" required>
							              </div>  
							            </div>
							            <div class="col-12">
							               <div class="form-group">
							                <label class="text-inverse" for="validationCustom03">Estimated contract value (INR)</label>
							                <input type="number" class="form-control" name="Contract" id="validationCustom03" value="<?php echo $Contract;?>"  required>
							              </div>
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom04">Bidding Type</label>
							                <input type="text" class="form-control" name="BidType" id="validationCustom04" value="<?php echo $BidType;?>"  required>
							              </div>  
							            </div>
							            <div class="col-12">
							               <div class="form-group">
							                <label class="text-inverse" for="validationCustom05">Tender Fee</label>
							                <input type="number" class="form-control" name="TenderFee" id="validationCustom05" value="<?php echo $TenderFee;?>" required>
							              </div>
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom06">Bid Security/EMD (INR)</label>d
							                <input type="datetime-local" class="form-control" name="BidEMD" id="validationCustom06" value="<?php echo $BidEMD;?>" required>
							              </div>  
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom07">Bid Document Downloading Start Date (INR)</label>
							                <input type="datetime-local" class="form-control" name="StartDate" id="validationCustom07" value="<?php echo $StartDate;?>" required>
							              </div>  
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom08">Bid Document Downloading End Date (INR)</label>
							                <input type="datetime-local" class="form-control" name="EndDate" id="validationCustom08"  value="<?php echo $EndDate;?>" required>
							              </div>  
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom09">Pre Bid Meeting</label>
							                <input type="datetime-local" class="form-control" name="PreBid" id="validationCustom09" value="<?php echo $PreBid;?>" required>
							              </div>  
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom010">Last Date & Time for Receipt of Bids</label>
							                <input type="datetime-local" class="form-control" name="Receipt" id="validationCustom010" value="<?php echo $Receipt;?>"  required>
							              </div>  
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom011">Submission of Documents</label>
							                <input type="datetime-local" class="form-control" value="<?php echo $Submission;?>" name="Submission" id="validationCustom011" required>
							              </div>  
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom012">Bid Operating Date Technical Bid</label>
							                <input type="datetime-local" class="form-control" value="<?php echo $TechnicalBid;?>" name="TechnicalBid" id="validationCustom012" required>
							              </div>  
							            </div>
							            <div class="col-12">
							              <div class="form-group">
							                <label class="text-inverse" for="validationCustom013">Bid Operating Date Commercial Bid</label>
							                <input type="datetime-local" class="form-control" value="<?php echo $CommercialBid;?>" name="CommercialBid" id="validationCustom013" required>
							              </div>  
							            </div>
							             
							          <hr>
							          <div class="row">
							            <div class="col-lg-12 col-sm-12 col-12 text-center">
							                <button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
							            </div>
							          </div>  
						        </form>
				            </div>  
				        </div>

				        <?php } else{ ?><br><div class="col-12"><p style="text-align: center;">No Data Found</p></div><?php } 
				    }else{ ?><br><div class="col-12"><p style="text-align: center;">No Data Found</p></div><?php }?> 