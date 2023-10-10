<?php

	require_once 'connect.php';

	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$email_addr = $_REQUEST['email_addr'];
	$usr_pwd = $_REQUEST['usr_pwd'];

	// echo $fname;

	if (isset($_REQUEST['fname']) && isset($_REQUEST['lname']) && isset($_REQUEST['email_addr']) && isset($_REQUEST['usr_pwd'])) {

		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email_addr = $_REQUEST['email_addr'];
		$usr_pwd = $_REQUEST['usr_pwd'];

		echo $fname;
	};

	$insertQuery = "INSERT INTO hasan (fname,lname,usr_email,usr_pwd) VALUES ('$fname','$lname','$email_addr','$usr_pwd')";
	$runQuery = mysqli_query($connect,$insertQuery);

	if ($runQuery == true) {
		header('location: 23 insert data with form.php?action=true');
	} else {
		header('location: 23 insert data with form.php?action=false');
	};
	
?>