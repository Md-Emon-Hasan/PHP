
<?php

	// Message vars
	$msg = "";
	$msgClass = "";

	// Check for submit
	if (filter_has_var(INPUT_POST, 'submit')) {
		// Get form data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check required fields
		if (!empty($email) && !empty($name) && !empty($message)) {
			echo "Passed";
			/* if (filter_ver($email, FILTER_VALIDATE_EMAIL) === false) {
				// failed
				$msg = "Please fill in all fields";
				$msgClass = "alert-danger";
			} else{
				// Passed
				echo "passed";
			} */
			
		} else {
			// faild
			$msg = "Please fill in all fields";
			$msgClass = "alert-danger";
		}
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Contact Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

	<h1 style="text-align: center;">PHP Contact Form</h1>

	<div class="container">

		<?php

			if ($msg != ""); 

		?>

			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label>Name:</label>
			<input class="form-control" type="text" name="name" value="<?php echo isset($_POST["name"]) ? $name : ""; ?>">
			<br>
			<label>Email:</label>
			<input class="form-control" type="email" name="email" value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">
			<br>
			<label>Message:</label>
			<input class="form-control" type="textarea" name="message" value="<?php echo isset($_POST["message"]) ? $message : ""; ?>">
			<br>
			<input class="btn btn-primary form-control" type="submit" name="submit" value="SUBMIT">
		</form>

	</div>

</body>
</html>