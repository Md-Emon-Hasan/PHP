<!DOCTYPE html>
<html>
<head>
	<title>php date and file open create</title>
</head>
<body>

	<h1 style="text-align: center;">php date and file open create</h1>

	<?php

		echo date("D");
		echo "<br>";
		echo date("d");
		echo "<br>";
		echo date("M");
		echo "<br>";
		echo date("m");
		echo "<br>";
		echo date("m d y");
		echo "<br>";
		echo date("m-d-y");
		echo "<br>";
		echo date("h");
		echo "<br>";
		echo date("i");
		echo "<br>";
		echo date("h:i");
		echo "<br>";
		echo date("m-d-y h:i");
		echo "<br>";
		date_default_timezone_set("Asia/Dhaka");
		echo date("h:i");
		echo "<br>";
		date_default_timezone_set("Asia/Dhaka");
		echo date("m-d-y h:i");
		echo "<br>";
		echo time();
		echo "<br>";

		echo "<hr>";

		// include 'contact.php';
		// include_once 'contact.php';
		// require 'contact.php';
		require_once 'contact.php';
		echo $x;

		echo "<hr>";

		echo fwrite(fopen("about.php", "w"), "Emon");

	?>

</body>
</html>