<!DOCTYPE html>
<html>
<head>
	<title>Variables, Constants & Data Types</title>
</head>
<body>

	<h1 style="text-align: center;">Variables, Constants & Data Types</h1>

	<?php

		//echo "single line comment";
		#echo "single line comment";

	?>

	<?php

		/*
		echo "Multiple line comment";
		echo "<br>";
		echo "Multiple line comment";
		*/

	?>
 
	<?php

		echo "Hello World";
		echo "<hr>";

	?>

	<?php

		$name = "hello World";
		echo $name;
		echo "<hr>";

	?>

	<?php

		$num1 = 10;
		$num2 = 10;

		$sum = $num1 + $num2;

		echo $sum;
		echo "<br>";

		$line1 = "hello";
		$line2 = "world";

		echo $line1." ".$line2;
		echo "<hr>";

		define('GREETING', 'Hello Everyone');
		echo GREETING;

	?>

</body>
</html>