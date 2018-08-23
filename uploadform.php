<?php
include("include/db.php");


	if(isset($_POST['submit'])){
	
	$uploaddir = 'documents/';
	$upload = $_FILES['doc']['name'];
	$target = $uploaddir . basename($_FILES['doc']['name']);
	if (move_uploaded_file($_FILES['doc']['tmp_name'], $target)) {
	} else {
		
	}
	}
	
echo '<script>location.href="upload";</script>';
	

	



?>