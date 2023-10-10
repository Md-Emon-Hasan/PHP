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
		$avatar_name = $_FILES['avatar']['name'];
		$avatar_tmpName = $_FILES['avatar']['tmp_name'];
		$location = "avatar/";
		$avatar_uniqueName = uniqid();

		// echo rand();
		// echo "<br>";
		// echo uniqid();
		// echo "<br>";
		// echo "FB".rand(0,99999);
		// echo "<br>";

		move_uploaded_file($avatar_tmpName, $location."$avatar_uniqueName.jpg");

		echo $fname;
	};

	$insertQuery = "INSERT INTO hasan (fname,lname,usr_email,usr_pwd,profile_picture) VALUES ('$fname','$lname','$email_addr','$usr_pwd','$avatar_uniqueName.jpg')";
	$runQuery = mysqli_query($connect,$insertQuery);

	if ($runQuery == true) {
		header('location: 26 search users and any data from table.php?action=true');
	} else {
		header('location: 26 search users and any data from table.php?action=false');
	};
	
?>