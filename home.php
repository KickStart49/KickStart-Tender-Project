<?php 
/*

*/
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
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/tenderform.css">
	  	<script src="js/jquery.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
	  	<script src="js/tenderform.js"></script>
		<link rel="stylesheet" type="text/css" href="css/AdminPanel.css">
		<script type="text/javascript" src="js/AdminPanel.js"></script>

	</head>

	<body>

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

		<ul class="nav nav-tabs flex-column navbar-dark bg-dark col-2 getSidebarWidth sidebar">
		  <hr>
		  <li class="nav-item">
		    <a class="nav-link sidebar-link active" href="#NewTender">New Tender</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link sidebar-link" href="#UploadDocuments">Upload Documents</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link sidebar-link" href="#">Link</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link sidebar-link disabled" href="#">Disabled</a>
		  </li>
		</ul>
		<script type="text/javascript">
			$(".nav a").on("click", function(){
			   $(".nav").find(".active").removeClass("active");
			   $(this).addClass("active");
			});
		</script>
		<script type="text/javascript">
			function width_resize(){
			    var sidebar_width = $('.getSidebarWidth').width();
			    $('.nav-link').css('width', (sidebar_width + 12));
			    
			    return false;
			}
			width_resize();
			$(document).ready(function(){
			    $(".dropdown").hover(            
			        function() {
			            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
			            $(this).toggleClass('open');        
			        },
			        function() {
			            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
			            $(this).toggleClass('open');       
			        }
			    );
			});
		</script>
		<!-- ********************************************************** New Tender **************************************************** -->
		<!-- ********************************************************** New Tender **************************************************** -->

		<section id="NewTender" class="col-10 offset-md-2">
			
			<div class="container">
			    <div class="row">
			      <div class="col-12 border rounded main-section">
			      	<h3 style="position: relative;" class="text-center text-inverse">Submit Tender Details !</h3>
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
			          <div class="row">
			            <div class="col-lg-12 col-sm-12 col-12 text-center">
			                <button class="btn btn-primary" name="submit" type="submit">Submit Tender</button>
			            </div>
			          </div>  
			        </form>
			      </div>
			    </div>  
			</div>
		</section>

		<!-- ********************************************************** Upload Documents **************************************************** -->
		<!-- ********************************************************** Upload Documents **************************************************** -->

		<section id="UploadDocuments" class="col-10 offset-md-2">
			<div class="container">
				<?php
					$dir    = 'documents/'; 
					$files2 = scandir($dir, 1);
					$n=sizeof($files2);
				?>
	            <div class="col-12 border rounded main-section">
	                <div class="list-group">
		                <button type="button" class="text-center text-inverse list-group-item list-group-item-action active mybtn">
		                	All Uploaded Documents
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
	                <form class="container form-group" action="uploadform.php" method="post" id="needs-validation" novalidate enctype="multipart/form-data">
		                <input type="file" name="doc" class="btn btn-default btn-block form-control">
		                <hr>
		                <button type="submit" name="submit" class="btn btn-primary">
		                    UPLOAD DOCUMENT
		                </button>
	                </form>
                </div>
			</div>	  
		</section>
<!-- <div class="modal fade" id="myModal">
	    <div class="modal-dialog modal-dialog-centered">
	      <div class="modal-content">
	      
	  <div class="modal-header">
	  
	          <h4 class="modal-title">Tender List</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>

	        <div class="container">
			 <h2 style="text-align: center">Details</h2>
			 <table class="table table-bordered position">
	      		<tr>
	        		<th>Form-no.</th>
	        		<td>hfhfhjghjgjjhjjhjhgh</td>
	      		</tr>
	      		<tr>
	        		<th>Department Name</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Name of Work</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Estimated contract value (INR)</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Bidding Type</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Tender Fee</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Bid Security/EMD (INR)</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Bid Document Downloading Start Date (INR)</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Bid Document Downloading End Date (INR)</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Pre Bid Meeting</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Last Date & Time for Receipt of Bids</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Submission of Documents</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Bid Operating Date Technical Bid</th>
	        		<td>1</td>
	      		</tr>
	      		<tr>
	        		<th>Bid Operating Date Commercial Bid</th>
	        		<td>1</td>
	      		</tr>
	      	</table>
	    	
	</div>
	        
	        <div class="modal-footer">
	         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        </div>
	    </div>
	</div>
	</div> -->
</body>
</html>