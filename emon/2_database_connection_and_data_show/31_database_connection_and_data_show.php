<!DOCTYPE html>
<html>
<head>
	<title>database connection and data show</title>
</head>
<body>

	<h1>database connection and data show</h1>

	<?php

		$host = "localhost";
		$dbUser = "emon1";
		$dbPwd = "520522";
		$dbName = "emon1";

		$connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);

		if ($connect==false) {
			echo "<h2>Error Database Disconnected</h2>";
		} else {

		};

		// Data count
		
		$myquery = "SELECT * FROM new_users";
		$run_Query = mysqli_query($connect,$myquery);
		

		 while ($mydata = mysqli_fetch_array($run_Query)) {
			echo $mydata["fname"];
		}; 

	?>

</body>
</html>