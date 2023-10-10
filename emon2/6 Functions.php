<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>

	<h1 style="text-align: center;">Functions</h1>

	<?php

		// create simple function
		function simpleFunction(){
			echo "Hello World";
		};

		// run simple function
		simpleFunction();

		// function with parma

		echo "<br>";

		function sayHello($name){
			echo "Hello $name<br>";
		};

		sayHello("joe");
		sayHello("willime");

		function addNumber($num1, $num2){
			echo $num1 + $num2;
		};

		addNumber(2,3);
		echo "<br>";

		// By Reference

		$mynum = 10;

		function addFive($num){
			$num =+ 5;
		};

		function addTen(&$num){
			$num += 10;
		};

		addFive($mynum);

		echo "value: $mynum<br>";

		addTen($mynum);

		echo "value: $mynum<br>";

	?>

</body>
</html>