<?php

	 $host = "localhost";
	 $dbUser = "hasan";
	 $dbPwd = "iconicemon01@";
	 $dbName = "hasan";

	 $connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);

	 if ($connect == false) {
	 	echo "<h2>Error Database connection!</h2>";
	 };

?>