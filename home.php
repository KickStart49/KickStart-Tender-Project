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
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" >
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Rancho&effect=ice|3d-float">
		<link rel="stylesheet" type="text/css" href="css/datatable.css">
		<link rel="stylesheet" type="text/css" href="css/tenderform.css">
		

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

		<ul id="accordion1" class="nav nav-pills flex-column vertical-menu navbar-dark col-2 getSidebarWidth sidebar">
		  <li class="nav-item main-menu">
		    <a class="nav-link header" data-toggle="collapse" href="#item-1" data-parent="#accordion1">Dashboard</a>
		    <div id="item-1" class="collapse">
		      <ul class="nav flex-column ml-0 sub-menu">
		        <li class="nav-item">
		          <a class="nav-link 1" href="#TenderList"><i class="fa fa-list"></i>&nbsp;&nbsp;TenderList</a>
		        </li>
		      </ul>
		    </div>
		  </li>
		  <li class="nav-item main-menu">
		    <a class="nav-link header" data-toggle="collapse" href="#item-2" data-parent="#accordion1">Upload</a>
		    <div id="item-2" class="collapse">
		      <ul class="nav flex-column ml-0 sub-menu">
		        <li class="nav-item">
		          <a class="nav-link" href="#NewTender"><i class="fa fa-upload"></i>&nbsp;&nbsp;New Tender</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#UploadDocuments"><i class="fa fa-file-upload"></i>&nbsp;&nbsp;&nbsp;Documents</a>
		        </li>
		      </ul>
		    </div>
		  </li>
		  <li class="nav-item main-menu">
		    <a class="nav-link header" data-toggle="collapse" href="#item-3" data-parent="#accordion1">Modify</a>
		    <div id="item-3" class="collapse">
		      <ul class="nav flex-column ml-0  sub-menu">
		        <li class="nav-item">
		          <a class="nav-link" href="#EditTender"><i class="fa fa-list"></i>&nbsp;&nbsp;Edit Tender</a>
		        </li>
		      </ul>
		    </div>
		  </li>
		</ul>

		<!-- ********************************************************** New Tender **************************************************** -->
		<!-- ********************************************************** New Tender **************************************************** -->

		<section id="TenderList" class="col-10 offset-md-2">
			<div class="design"><h3>List of Tenders !</h3><br><p>If you want to upload more documents,then go to the documents section.</p></div>
			<div class="container">
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
						      <tr>
						        <td>1</td>
						        <td>abc</td>
						        <td>18/8/18</td>
						        <td>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-file-download"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-edit"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-eye"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-trash"></button></a>
						      	</td>
						      </tr>
						      <tr>
						        <td>2</td>
						        <td>xyz</td>
						        <td>18/8/18</td>
						     	   <td>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-file-download"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-edit"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-eye"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-trash"></button></a>
						      	</td>
						      </tr>
						      <tr>
						        <td>2</td>
						        <td>xyz</td>
						        <td>18/8/18</td>
						     	   <td>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-file-download"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-edit"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-eye"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-trash"></button></a>
						      	</td>
						      </tr>
						      <tr>
						        <td>2</td>
						        <td>xyz</td>
						        <td>18/8/18</td>
						     	   <td>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-file-download"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-edit"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-eye"></button></a>
						        <a href="#"><button type="submit" class="space btn btn-default fa fa-trash"></button></a>
						      	</td>
						      </tr>
					    	</tbody>
				  		</table>  
					</div>
				</div>
			</div>
		</section>


		
		<!-- ********************************************************** New Tender **************************************************** -->
		<!-- ********************************************************** New Tender **************************************************** -->

		<section id="NewTender" class="col-10 offset-md-2">
			<div class="design"><h3>Fill Up New Tender Form !</h3><br><p>If you want to upload more documents,then go to the documents section.</p></div>
			<div class="container">
			    <div class="row">
			      <div class="col-9	 border rounded main-section offset-md-1">
			      	
			        <form action="formsubmit.php" method="post" id="needs-validation" novalidate enctype="multipart/form-data"> 
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
			<div class="design"><h3>Upload Documents !</h3><br><p>If you want to upload more documents,then go to the documents section.</p></div>
			<div class="container">
				<?php
					$dir    = 'documents/'; 
					$files2 = scandir($dir, 1);
					$n=sizeof($files2);
				?>
	            <div class="col-9 border rounded main-section offset-md-1">
	                <div class="list-group">
		                <button type="button" class="text-center text-inverse list-group-item list-group-item-action active mybtn " style="background: none!important;display: none;">
		                	
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
	                <form class="form-group" action="uploadform.php" method="post" id="needs-validation" novalidate enctype="multipart/form-data">
		                <input type="file" name="doc" class="btn btn-default btn-block form-control">
		                <hr>
		                <button type="submit" name="submit" class="btn btn-primary">
		                    UPLOAD DOCUMENT
		                </button>
	                </form>
                </div>
			</div>	  
		</section>

		<!-- ********************************************************** Edit Tender **************************************************** -->
		<!-- ********************************************************** Edit Tender **************************************************** -->

		<section id="EditTender" class="col-10 offset-md-2">
			<div class="design"><h3>Edit Tenders !</h3><br><p>Changing your profile options lets </p></div>
			<div class="container" >
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
		                <input type="text" class="form-control" name="x" placeholder="Search term...">
		                <span class="input-group-btn">
		                    <button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
		                </span>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="container" >
			<div class="row">
			    <div class="col-9 border rounded main-section offset-md-1">
					<div class="card">
		        		<div class="card-body">
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
				                <input type="text" class="form-control" name="x" placeholder="Search term...">
				                <span class="input-group-btn">
				                    <button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
				                </span>
				            </div><br><br>
				            <div class="row">
				                <div class="col-md-12">
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
							                <button class="btn btn-primary" name="submit" type="submit">Save Changes</button>
							            </div>
							          </div>  
						        </form>
				            </div>  
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
		<link rel="stylesheet" type="text/css" href="css/AdminPanel.css">
		<script type="text/javascript" src="js/AdminPanel.js"></script>

	</body>
</html>