<!DOCTYPE html>
<html>
<head>
	<title>Dates & Timestamps</title>
</head>
<body>

	<h1 style="text-align: center;">Dates & Timestamps</h1>

	<?php

		echo date("d"); // Date
		echo "<br>";
		echo date("m"); // Month
		echo "<br>";
		echo date("y"); // Year
		echo "<br>";
		echo date("m-d-y"); // Full date
		echo "<br>";
		echo date("m/d/y"); // Full date
		echo "<br>";

		echo date("D"); // Day of thr week
		echo "<br>";
		echo date("M"); // Month of the year
		echo "<br>";
		echo date("Y"); // Year
		echo "<br>";
		echo date("M-D-Y"); // Full date
		echo "<br>";
		echo date("M/D/Y"); // Full date
		echo "<br>";

		echo date("h"); // Hour
		echo "<br>";
		echo date("i"); // Minute
		echo "<br>";
		echo date("s"); // Second
		echo "<br>";
		echo date("a"); // AM/PM
		echo "<br>";
		echo date("h:i:s a"); // Full time
		echo "<br>";
		
		// Set Time Zone

		date_default_timezone_set("Asia/Dhaka");
		echo date("h:i:s a");
		echo "<br>";

		$Timestamps = mktime(10,14,54,8,28,2001);
		echo $Timestamps;
		echo "<br>";
		echo date("m/d/y h:i:s a",$Timestamps);
		echo "<br>";

		$Timestamps2 = strtotime("7:00pm march 22 2016");
		echo $Timestamps2;
		echo "<br>";
		echo date("m/d/y h:i:s a",$Timestamps2);
		echo "<br>";

		$Timestamps3 = strtotime("tomorrow");
		echo date("m/d/y h:i:s a", $Timestamps3);
		echo "<br>";

		$Timestamps4 = strtotime("next friday");
		echo date("m/d/y h:i:s a", $Timestamps4);
		echo "<br>";

		$Timestamps5 = strtotime("+2 month");
		echo date("m/d/y h:i:s a", $Timestamps5);
		echo "<br>";

		$Timestamps6 = strtotime("+2 year");
		echo date("m/d/y h:i:s a", $Timestamps6);
		echo "<br>";

		$Timestamps7 = strtotime("+2 day");
		echo date("m/d/y h:i:s a", $Timestamps7);
		echo "<br>";

	?>

</body>
</html>