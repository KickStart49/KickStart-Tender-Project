<?php 		 				
			 				
if(isset($_POST["formid"])){

		$_SESSION["formid"] = $_POST["formid"];
    	$id = $_SESSION["formid"];
		$connect = mysqli_connect("127.0.0.1","root","","Kickstart");
		$execute=mysqli_query($connect,"DELETE FROM tender where id='$id'");

	}
								    
									