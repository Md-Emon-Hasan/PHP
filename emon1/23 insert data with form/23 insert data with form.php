<!DOCTYPE html>
<html>
<head>
	<title>insert data with form</title>
</head>
<body>

	<h1 style="text-align: center;">insert data with form</h1>

	<?php

		/* if (isset($_REQUEST["action"])) {
			echo "Data inserted";
		} else {
			echo "Data not inserted";
		}; */

		if (isset($_REQUEST["action"])) {
			if (($_REQUEST["action"])=="true") {
				echo "Data inserted";
			} else {
				echo "Data not inserted";
			};
			
		};
		
	?>

	<form action="savedata_core.php" method="POST">
		<input type="text" name="fname" placeholder="First Name">
		<input type="text" name="lname" placeholder="Last Name">
		<input type="email" name="email_addr" placeholder="User Email">
		<input type="Password" name="usr_pwd" placeholder="User Password">
		<input type="submit" value="submit">
	</form>

</body>
</html>