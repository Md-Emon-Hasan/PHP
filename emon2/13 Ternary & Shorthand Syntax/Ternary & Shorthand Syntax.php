<!DOCTYPE html>
<html>
<head>
	<title>Ternary & Shorthand Syntax</title>
</head>
<body>

	<h1 style="text-align: center;">Ternary & Shorthand Syntax</h1>

	<?php

		$loggedIn = true;

		if ($loggedIn) {
			echo "You are logged in";
		} else {
			echo "You are Not logged in";
		};

		echo "<hr>";
		
		$loggedIn1 = false;
		echo ($loggedIn1) ? "You are logged in" : "You are NOT logged in";

		echo "<hr>";

		$age = 15;
		$score = 20;

		echo "Your score is: ".($score > 10 ? ($age > 10? "Average": "Exceptional"):($age > 10? "horrible":"Average"));

	?>

</body>
</html>