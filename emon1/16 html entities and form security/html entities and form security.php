<!DOCTYPE html>
<html>
<head>
	<title>html entities and form security</title>
</head>
<body>

	<h1 style="text-align: center;">html entities and form security</h1>

	<form action="contact.php" action="POST">
		<input type="text" name="fname">
		<input type="text" name="lname">
		<input type="text" name="email">
		<input type="password" name="password">
		<input type="submit" value="REGISTER">
	</form>

	<?php

		if (isset($_REQUEST["pwd_error"])) {
			echo $_REQUEST["pwd_error"];
		} elseif (isset($_REQUEST["fname_error"])) {
			echo $_REQUEST["fname_error"];
		};
		
	?>

</body>
</html>