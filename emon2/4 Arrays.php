<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>

	<h1 style="text-align: center;">Arrays</h1>

	<?php

		// indexed

		$people = array("kevin","jermy","sara");
		echo $people[1];
		echo "<br>";

		$number = array(10,20,30);
		echo $number[2];
		echo "<br>";

		$people1 = array("kevin","jermy","sara");
		echo count($people1);
		echo "<br>";

		$people2 = array("kevin","jermy","sara");
		print_r($people2);
		echo "<br>";

		$people3 = array("kevin","jermy","sara");
		var_dump($people3);
		echo "<hr>";

		// Associative arrays

		$apeople = array('bred' => 35,'jose' => 22,'william' =>'19');
		echo $apeople['jose'];
		echo "<br>";

		$apeople1 = [22 => 'bred', 44 => 'jose'];
		echo $apeople1[22];
		echo "<hr>";

		// Multi-Dimension

		$cars = array(
			array('honda',10,11),
			array('toyota',12,13),
			array('ford',14,15)
		);

		echo $cars[1][0];

	?>

</body>
</html>