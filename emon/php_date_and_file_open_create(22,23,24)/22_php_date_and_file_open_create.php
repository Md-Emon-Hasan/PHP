<!DOCTYPE html>
<html>
<head>
	<title>php date and file open create</title>
</head>
<body>

	<h1>php date and file open create</h1>

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

	?>

	<?php

	//include '23_index.php';//

	//require '23_index.php';//

	require_once '23_index.php';

	echo $x;
	echo "<hr>";

	?>

	<?php

	echo fwrite(fopen("24_index.php","w"),"hasan");

	?>

</body>
</html>