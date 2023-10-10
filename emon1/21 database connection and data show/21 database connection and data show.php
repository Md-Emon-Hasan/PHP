<!DOCTYPE html>
<html>
<head>
	<title>database connection and data show</title>
</head>
<body>

	<h1 style="text-align: center;">database connection and data show</h1>

	<?php

	 $host = "localhost";
	 $dbUser = "hasan";
	 $dbPwd = "iconicemon01@";
	 $dbName = "hasan";

	 $connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);

	 if ($connect == false) {
	 	echo "<h2>Error Database connection!</h2>";
	 };

	 $myquery = "SELECT * FROM hasan WHERE id=5";
	 $run_Query = mysqli_query($connect,$myquery);

	 // data count
	 // $dataCount = "mysqli_num_rows"($run_Query);
	 // echo $dataCount;

	 /* if ($run_Query == true) {
	 	while ($mydata = mysqli_fetch_array($run_Query)) {
			echo $mydata["fname"];
		};
	 } else{
	 	echo mysqli_error($connect);
	 }; */

	 if ($run_Query == true) {
	 	$dataCount = "mysqli_num_rows"($run_Query);
	 
	 	if ($dataCount>0) {
	 	while ($mydata = mysqli_fetch_array($run_Query)) {
			echo $mydata["fname"]." ".$mydata["lname"];
			// echo "<pre>";
			// print_r($mydata);
			// echo "</pre>";
		 };
		 } else{
		 	echo "No Data Available";
		 };	

	 } else{
	 	echo mysqli_error($connect);
	 };

	?>

</body>
</html>