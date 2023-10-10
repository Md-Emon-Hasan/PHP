<?php

require_once 'connect.php';

if (isset($_REQUEST["editButton"])) {
	$fname = $_REQUEST["fname"];
	$lname = $_REQUEST["lname"];
	$usr_email = $_REQUEST["usr_email"];
	$usr_pwd = $_REQUEST["usr_pwd"];
	$editing_ID = $_REQUEST["editingID"];

	$upquery ="UPDATE hasan SET fname='$fname',lname='$lname',usr_email='$usr_email',usr_pwd='usr_pwd' WHERE id=$editing_ID";

	$runquery = mysqli_query($connect,$upquery);

		if ($runquery==true) {
			header("location: 24 delete update with form.php?edited");
		}
	};	

?>