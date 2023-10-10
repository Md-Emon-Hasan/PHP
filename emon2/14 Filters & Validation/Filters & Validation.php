<!DOCTYPE html>
<html>
<head>
	<title>Filters & Validation</title>
</head>
<body>

	<h1 style="text-align: center;">Filters & Validation</h1>

	<?php

		// Check for posted data
		if (filter_has_var(INPUT_POST, "data")) {
			echo "Data Found";
		} else {
			echo "No Data";
		};

	?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Name:</label>
		<input type="text" name="data"><br>
		<button type="submit" value="submit">Submit</button>
	</form>

	<hr>

	<?php

		// Check for valid email
		if (filter_has_var(INPUT_POST, "email")) {
			$email = $_POST["email"];

			// Remove illegal chars
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			echo $email."<br>";

			if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
				echo "Email is valid";
			} else {
				echo "Invalid Email";
			};
			
		};

	?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Name:</label>
		<input type="text" name="email"><br>
		<button type="submit" value="submit">Submit</button>
	</form>

	<hr>

	<?php

	#FILTER_VALIDATE_BOOLEAN
	#FILTER_VALIDATE_EMAIL
	#FILTER_VALIDATE_FLOAT
	#FILTER_VALIDATE_INT
	#FILTER_VALIDATE_IP
	#FILTER_VALIDATE_REGEXP
	#FILTER_VALIDATE_URL

	#FILTER_SANITIZE_EMAIL
	#FILTER_SANITIZE_ENCODE
	#FILTER_SANITIZE_NUMBER_FLOAT
	#FILTER_SANITIZE_NUMBER_INT
	#FILTER_SANITIZE_SPECIAL_CHARS
	#FILTER_SANITIZE_EMAIL_STRING
	#FILTER_SANITIZE_EMAIL_URL

	?>

	<?php

	$var = "25";

	if (filter_var($var, FILTER_VALIDATE_INT)) {
		echo "is a number";
	} else {
		echo "is not a number";
	};

	?>

	<hr>

	<?php  

		$var1 = "54654dqwe4dww449ew4";
		var_dump(filter_var($var1, FILTER_SANITIZE_NUMBER_INT));

	?>

	<hr>

	<?php 

		$var2 = "<script>alert(1)</script>";
		echo $var2;

	?>

</body>
</html>