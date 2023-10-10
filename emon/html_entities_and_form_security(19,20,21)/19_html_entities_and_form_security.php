<!DOCTYPE html>
<html>
<head>
	<title>html entities and form security</title>
</head>
<body>

	<h1>html entities and form security</h1>

	<form method="POST" action="20_index.php">
		<input type="text" name="fname">
		<input type="text" name="lname">
		<input type="email" name="email">
		<input type="password" name="password">
		<input type="submit" value="REGISTER">
	</form>

	<?php

		if (isset($_REQUEST["pwd-error"])) {
			echo $_REQUEST["pwd-error"];
		} elseif(isset($_REQUEST["fname-error"])) {
			echo $_REQUEST["fname-error"];
		}
		
	?>

</body>
</html>