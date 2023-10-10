
<?php

	$dbuser = "iconicemon01@gmail.com";
	$dbpwd = "0123456789";

	$userInputEmail = $_REQUEST["username"];
	$userInputPwd = $_REQUEST["userpassword"];

	echo "<h1>DATABASE INFO</h1>";
	echo $dbuser;
	echo "<br>";
	echo $dbpwd;
	echo "<hr>";

	echo "<h1>USER INFO</h1>";
	echo $userInputEmail;
	echo "<br>";
	echo $userInputPwd;
	echo "<hr>";

	echo "<h1>RESULT</h1>";

	if ($dbpwd == $userInputPwd) {
		echo "You Are Logged In";
	} else {
		echo "User Password Is In Correct";
	};

?>