<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<?php

	$dbUser = "iconicemon01@gmail.com";
	$dbPassword = "123456";

	$userInputEmail = $_REQUEST["username"];
	$userInputPassword = $_REQUEST["password"];

	echo "<h1>DATABASE INFO</h2>";
	echo $dbUser;
	echo "<br>";
	echo $dbPassword;

	echo "<h1>USER INFO</h2>";
	echo $userInputEmail;
	echo "<br>";
	echo $userInputPassword;
	echo "<hr>";

	echo "<h1>RESULT<h1>";

	if ($dbUser==$userInputEmail) {
		echo "Correct Email address.";
	} else {
		echo "Incorrect Email addres!";
	};

	echo "<br>";
	
	if ($dbPassword==$userInputPassword) {
		echo "Correct Email password.";
	} else {
		echo "Incorrect Email password!";
	}
	

	?>

</body>
</html>