<?php 
/*

*/

session_start();
require_once("initialize.php");
require_once('notification.php');
?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Page Title -->

		<title>AdminPanel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<!-- Linking Styles and Scripts -->

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" >
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Rancho&effect=ice|3d-float">
		<link rel="stylesheet" type="text/css" href="css/datatable.css">
		<link rel="stylesheet" type="text/css" href="css/tenderform.css">
		<link rel="stylesheet" type="text/css" href="css/AdminPanel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.css"> 	

	</head>

	<body data-spy="scroll" data-offset="10" data-target="#accordion1">

		<!-- ********************************************************** Top Navbar **************************************************** -->
		<!-- ********************************************************** Top Navbar **************************************************** -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top offset-md-2">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">		
			    <div class="morph-shape" data-morph-open="M158.5,0H0v53.1c0,0,19.6-4.6,66-0.2s60.5-3.8,92.5-0.1V0z" data-morph-trans="							M158.5,0H0v53.1c0,0,35.4,15.4,82,13.8s76.5-14.1,76.5-14.1V0z">
		          	<svg width="100%" height="100%" viewBox="0 0 158.5 61.2" preserveAspectRatio="none">
		            	<path fill="none" d="M158.5,0H0v15.6c20.9-12.8,38.5,19.5,73.5-10.9s70.2-7.8,8" style="fill:#00c3ff;" />
		          	</svg>
		        </div>
			    <ul class="navbar-nav mr-auto">
			        <li class="nav-item dropdown">
				        <a class="navbar-brand" href="#">
						    <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
						    KickStart
						</a>
					</li>
					<li class="nav-item">
				        <a class="nav-link" href="#">
				          
				        </a>
				    </li>
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle custom-dropdown" data-toggle="dropdown" role="button" aria-expanded="false">
					    Prahar<span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu alert alert-secondary" role="menu">
			            <li><a href="#">Logout</a></li>
			          </ul>
			        </li>
		      	</ul>
			</div>
		</nav>
		
		<!-- ********************************************************** Sidebar **************************************************** -->
		<!-- ********************************************************** Sidebar **************************************************** -->

		<div id="accordion1" class="nav nav-pills flex-column vertical-menu navbar-dark col-2 getSidebarWidth sidebar" data-spy="affix">
		  
			<li class="nav-item main-menu">
		    <a class="nav-link header" ><img src="images/capture.png" style="width: 100%;"></a>
		    
		  </li>
		  <li class="nav-item main-menu">
		    <a class="nav-link header" data-toggle="collapse" href="#item-1" data-parent="#accordion1">Dashboard</a>
		    <div id="item-1" class="collapse">
		      <ul class="nav flex-column ml-0 sub-menu">
		        <li class="nav-item">
		          <a class="nav-link 1 " href="#TenderList"><i class="fa fa-list"></i>&nbsp;&nbsp;TenderList</a>
		        </li>
		      </ul>
		    </div>
		  </li>
		  <li class="nav-item main-menu">
		    <a class="nav-link header" data-toggle="collapse" href="#item-2" data-parent="#accordion1">Upload</a>
		    <div id="item-2" class="collapse">
		      <ul class="nav flex-column ml-0 sub-menu">
		        <li class="nav-item">
		          <a class="nav-link " href="#NewTender"><i class="fa fa-upload"></i>&nbsp;&nbsp;New Tender</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link " href="#UploadDocuments"><i class="fa fa-file-upload"></i>&nbsp;&nbsp;&nbsp;Documents</a>
		        </li>
		      </ul>
		    </div>
		  </li>
		  <li class="nav-item main-menu">
		    <a class="nav-link header" data-toggle="collapse" href="#item-3" data-parent="#accordion1">Modify</a>
		    <div id="item-3" class="collapse">
		      <ul class="nav flex-column ml-0  sub-menu">
		        <li class="nav-item">
		          <a class="nav-link " href="#EditTender"><i class="fa fa-list"></i>&nbsp;&nbsp;Edit Tender</a>
		        </li>
		      </ul>
		    </div>
		  </li>
		</div>

		<!-- ********************************************************** New Tender **************************************************** -->
		<!-- ********************************************************** New Tender **************************************************** -->

		<section id="TenderList" class="col-10 offset-md-2 ">
			<div class="design wow bounceInUp" data-wow-delay="0.5s"><h3>List of Tenders !</h3><br><p>If you want to upload more documents,then go to the documents section.</p></div>
			<div class="container wow flipInY" data-wow-delay="1s">
				<div class="row">
			      <div class="col-9	border rounded main-section offset-md-1">

						<table class="table" id="myTable" style="text-align: center;"> 
					    	<thead class="position">
					      		<tr>
					        		<th>Form no</th>
					        		<th>Department name</th>
					       			<th>Last Date & Time for Receipt of Bids</th>
					            <th>Action</th>
					      		</tr>
					    	</thead>
					    	<tbody class="position">
					    		<?php
								 	$connect = mysqli_connect("127.0.0.1","root","","Kickstart");
								    $execute=mysqli_query($connect,"SELECT * FROM tender");
								    $no = 0;
									while($datarow = mysqli_fetch_array($execute)){
											$id = $datarow["id"];
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
							      <tr>
							        <td><?php echo $no; ?></td>
							        <td><?php echo $Department; ?></td>
							        <td><?php echo $EndDate; ?></td>
							        <td>
							        <a data-download="<?php echo $download; ?>" class="downloadtender"><button type="submit" class="space btn btn-default fa fa-file-download"></button></a>
							        <a href="#EditTender"><button type="submit" class="space btn btn-default fa fa-edit"></button></a>
							        <a href="#" class="ViewTender" data-toggle="modal" data-id="<?php echo $id; ?>"><button type="submit" class="space btn btn-default fa fa-eye"></button></a>
							        <a href="#" class="deletetender" data-toggle="modal" data-id="<?php echo $id; ?>"><button type="submit" class="space btn btn-default fa fa-trash"></button></a>
							      	</td>
							      </tr>
							      <?php } ?>
						      
					    	</tbody>
				  		</table>  
					</div>
				</div>
			</div>
		</section>


		
		<!-- ********************************************************** New Tender **************************************************** -->
		<!-- ********************************************************** New Tender **************************************************** -->

		<section id="NewTender" class="col-10 offset-md-2 ">
			<div class="design wow bounceInUp" data-wow-delay="0.5s"><h3>Fill Up New Tender Form !</h3><br><p>If you want to upload more documents,then go to the documents section.</p></div>
			<div class="container wow flipInY" data-wow-delay="1s">
			    <div class="row">
			      <div class="col-9	 border rounded main-section offset-md-1">
			      	
			        <form action="formsubmit.php" method="post" id="tender-validation" novalidate enctype="multipart/form-data"> 
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
			                <label class="text-inverse" for="validationCustom06">Bid Security/EMD (INR)</label>d
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
			          <div class="row" style="text-align: center;">
			            <div class="col-lg-12 col-sm-12 col-12 text-center">
			                <button class="btn btn-primary" class="uploadtenderevent" name="submit" type="submit">Submit Tender</button>
			            </div>
			            
			            
			          </div> 
			          <br> 
			          <div class="UploadTenderMessage alert hidden text-center"></div>
			        </form>
			      </div>
			    </div>  
			</div>
		</section>


		<!-- ********************************************************** Upload Documents **************************************************** -->
		<!-- ********************************************************** Upload Documents **************************************************** -->

		<section id="UploadDocuments" class="col-10 offset-md-2 ">
			<div class="design wow bounceInUp" data-wow-delay="0.5s"><h3>Upload Documents !</h3><br><p>If you want to upload more documents,then go to the documents section.</p></div>
			<div class="container wow flipInY" data-wow-delay="1s">
				<?php
					$dir    = 'documents/'; 
					$files2 = scandir($dir, 1);
					$n=sizeof($files2);
				?>
	            <div class="col-6 border rounded main-section offset-md-2">
	                <div class="list-group">
		                <button type="button" class="text-center text-inverse list-group-item list-group-item-action active mybtn ">
		                	Upload Docs
		                	
		                </button>
		                <hr>
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
                  	</div><hr>
                  	
	                <form class="form-group" action="uploadform.php" id="doc-validation" method="post" id="needs-validation" novalidate enctype="multipart/form-data" style="text-align: center;">
		                <input type="file" name="doc" class="btn btn-default btn-block form-control" required>
		                <hr>
                  	
		                <button type="submit" name="submit" class="uploaddocevent btn btn-primary">
		                    UPLOAD DOCUMENT
		                </button>
		                <br><br>
		                <div class="UploadDocumentMessage alert hidden"></div>
	                </form>
                </div>
			</div>	  
		</section>

		<!-- ********************************************************** Edit Tender **************************************************** -->
		<!-- ********************************************************** Edit Tender **************************************************** -->

		<section id="EditTender" class="col-10 offset-md-2 ">
			<div class="design wow bounceInUp" data-wow-delay="0.5s"><h3>Edit Tenders !</h3><br><p>Changing your profile options lets </p></div>
			<div class="container wow flipInY searchedit" data-wow-delay="1s">
				<div class="row">
			      <div class="col-9	border rounded main-section offset-md-1">
					<div class="input-group">
		                <div class="input-group-btn search-panel">
		                    <button type="button" class="btn btn-default dropdown dropdown-toggle" data-toggle="dropdown">
		                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
		                    </button>
		                    <ul class="dropdown-menu" role="menu">
		                      <li><a href="#contains">Contains</a></li>
		                      <li><a href="#its_equal">It's equal</a></li>
		                      <li><a href="#greather_than">Greather than ></a></li>
		                      <li><a href="#less_than">Less than < </a></li>
		                      <li class="divider"></li>
		                      <li><a href="#all">Anything</a></li>
		                    </ul>
		                </div>
		                <input type="hidden" name="search_param" value="all" id="search_param">         
		                <input type="text" class="form-control" id="searchTender" placeholder="Search term...">
		                <span class="input-group-btn search">
		                    <button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
		                </span>
		            </div>
		            <div class="doedit" style="display: none;">
		            		
				    </div>
		        </div>
		    </div>
		</div>
		
		</section>

		<script src="js/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	  	<script type="text/javascript" src="js/datatable.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
	  	<script src="js/custom.js"></script>
		
<!-- The Modal -->
  	<div class="modal fade" id="ViewTender">
    	<div class="modal-dialog modal-dialog-centered">
      		<div class="modal-content">
      
        <!-- Modal Header -->
        		<div class="modal-header">
          			<h4 class="modal-title " id="TenderId"></h4>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		</div>
        
        <!-- Modal body -->
        		<div class="modal-body">
          			<div class="container">

			 			<h2 style="text-align: center">Details</h2>
						<table class="table table-bordered position tenderviewtable">
			 				
				      	</table>
		    		</div>
		    	</div>
        
        <!-- Modal footer -->
        		<div class="modal-footer">
          			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		</div>
        
      		</div>
    	</div>
  	</div>

<!-- =========================
    FOOTER SECTION   
============================== -->
<footer class="col-10 offset-md-2 ">
	<br>
	<footer class="footer1" style="background-color:;justify-content: justify;">
<div class="">

<div class="row"><!-- row -->

				<div class="col-lg-3 col-md-3 animated fadeInLeft">
            	<img src="images/capture.png" style="width: 60%;">
            	<br><br>
                
            </div>
            
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget" style="padding-top: 10px;">Useful Links</h1>
                                
                                <ul>
                                	<li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i> Linkdin Profile </a></li>
                                   
                                
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget" style="padding-top: 10px;">Our Projects</h1>
                                
                                <ul>
 									<li><a  href="#"><i class="fa fa-angle-double-right"></i>  KickStart Career </a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  KickStart Management </a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  KickStart Dynamic Blog Project</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  KickStart Internship Project </a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  KickStart Tender Project </a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  KickStart TechFest Project </a></li>
                                   
                                    
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget" style="padding-top: 10px;">Contact Detail </h1>
                                
                                <div class="footerp"> 
                                
                                <h2 class="title-median">KickStart Tender Project</h2>
                                <div class="input-group">
                
                <form>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search here.."></form>
                <span class="input-group-btn" style="justify-content: justify;">
                    <button class="btn btn-default" type="button"><span><i class="fa fa-search" aria-hidden="true"></i>
</span></button>
                </span>
            </div>
            <br>
                                <p><b>Helpline Numbers </b>

    <b >(8AM to 10PM):</b>  +91-9601369815, +91-9924677710  </p>
    
    <p><b>Folow Us on :</b></p>
    
                                </div>
                                
                                <div class="social-icons">
                                
                                	<ul class="nomargin">
                                    
                <a href="https://www.facebook.com/bootsnipp"><i class="fab fa-facebook-square fa-3x social-fb" id="social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i class="fab fa-twitter-square fa-3x social-tw" id="social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i class="fab fa-google-plus-square fa-3x social-gp" id="social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                                    
                                    </ul>
                                </div>
                    		</li>
                          </ul>
                       </div>
                </div>
</div>
</footer>
<!--header-->

<div class="footer-bottom">

	<div class="">

		<div class="row">

			<div class="col-6">

				<div class="copyright">

					© 2018, KickStart, All rights reserved

				</div>

			</div>

			<div class="col-6">

				<div class="footerdesign">

					 <a href="#">Thanks for visiting our site. </a> |  <a target="_blank" href="https://praharpandya.blogspot.com">Prahar Pandya</a>

				</div>

			</div>

		</div>

	</div>

</div>
</footer>

  	<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
<script src="js/jquery.parallax.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/custom.min.js"></script>
	</body>
</html>

