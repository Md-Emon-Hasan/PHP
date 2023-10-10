<!DOCTYPE html>
<html>
<head>
	<title>Common String Functions</title>
</head>
<body>

	<h1 style="text-align: center;">Common String Functions</h1>

	<?php

	$output = substr("hello", 1);
	echo $output;
	echo "<br>";
	$output1 = substr("hello", 1,2);
	echo $output1;
	echo "<br>";
	$output2 = substr("hello", -2);
	echo $output2;
	echo "<br>";

	// Finds the position of the occurence of a sub string

	$output3 = strpos("hello", "o");
	echo $output3;
	echo "<br>";

	$output4 = "hello World";
	var_dump($output4);
	echo "<br>";

	// Makes everything lowercase

	$output5 = strtolower("HELLO WORLD");
	echo $output5;
	echo "<br>";

	// repalcemant

	$text = "Hello World";
	$output6 = str_replace("World", "Everyone", $text);
	echo $output6;
	echo "<hr>";

	$values = array(true, false, "hello", 25, "25", "World", "bangladesh");

	foreach ($values as $key => $value) {
		if (is_string($value)) {
			echo "{$value} is a string<br>";
		};
	};

	echo "<hr/>";

	// gzcompress

	$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

	$compressed = gzcompress($string);
	echo $compressed;
	echo "<hr>";

	?>

</body>
</html>