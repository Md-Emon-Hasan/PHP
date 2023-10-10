<?php

	$fname = htmlspecialchars($_REQUEST["fname"]);
	$lname = ltrim($_REQUEST["lname"]);
	$email = $_REQUEST["email"];
	$password = $_REQUEST["password"];

	$checkPwdLen = strlen($password);
	// echo $checkPwdLen;
	$checkFnameLen = strlen($fname);
	echo "<br>";

	/* if ($checkPwdLen == 6) {
		echo "Your Password Is Correct";
	} else {
		header("location: html entities and form security.php");
	};

	echo "<br>"; */

	if (($checkPwdLen == 6)==false) {
		header("location: html entities and form security.php?pwd_error=Password is to short!");
	} elseif (($checkFnameLen == 4)==false) {
		header("location: html entities and form security.php?fname_error=Your first name should be 4 characters");
	};
	

	echo $fname;
	echo "<br>";
	echo $lname;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $password;
	echo "<br>";

?>