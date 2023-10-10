<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<?php

		$fname = $_REQUEST["fname"];
		$lname = htmlspecialchars($_REQUEST["lname"]);
		$email = ltrim($_REQUEST["email"]);
		$password = $_REQUEST["password"];

		$checkPwdLen = strlen($password);
		$checfname = strlen($fname);

		if (($checkPwdLen==6)==false) {
			header("location: 19_html_entities_and_form_security.php?pwd-error=Password caracter is too short!");
		} elseif(($checfname==4)==false) {
			header("location: 19_html_entities_and_form_security.php?fname-error=Name is too short");
		};

		echo "<br>";
		echo "$fname";
		echo "<br>";
		echo "$lname";
		echo "<br>";
		echo "$email";
		echo "<br>";
		echo "$password";
		echo "<br>";

	?>

</body>
</html>