<!DOCTYPE html>
<html>
<head>
	<title>Conditionals & Comparison</title>
</head>
<body>

	<h1 style="text-align: center;">Conditionals & Comparison</h1>

	<?php

		$num = 5;

		if ($num == 5) {
			echo "5 passed";
		};

		echo "<br>";

		$num1 = 5;

		if ($num1 >= 5) {
			echo "5 passed";
		};

		echo "<br>";

		$num2 = 55;

		if ($num2 != 5) {
			echo "5 passed";
		};

		echo "<br>";

		$num3 = 5;

		if ($num3 == 6) {
			echo "5 passed";
		} else {
			echo "did not pass";
		}
		
		echo "<br>";

		$num4 = 6;

		if ($num4 == 5) {
			echo "5 passed";
		} elseif ($num4 == 6) {
			echo "6 passed";
		} else {
			echo "did not pass";
		};

		echo "<br>";
		
		// Nesting if

		$num5 = 6;

		if ($num5 > 4) {
			if ($num5 < 10) {
				echo "$num passed";
			};
		};

		echo "<br>";

		// logical operators

		$num6 = 6;

		if ($num6 > 4 AND $num6 < 10) {
			echo "$num6 passed";
		};

		echo "<br>";

		$num7 = 2;

		if ($num7 > 4 OR $num7 < 10) {
			echo "$num7 passed";
		};

		echo "<br>";

		$favColor = "blue";

		switch ($favColor) {
			case 'red':
				echo "Your favourite color is red";
				break;

			case 'green':
				echo "Your favourite color is green";
				break;

			case 'blue':
				echo "Your favourite color is blue";
				break;
			
			default:
				echo "Your favourite colur is anything else";
				break;
		};

	?>

</body>
</html>