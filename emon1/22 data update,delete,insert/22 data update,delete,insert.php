<!DOCTYPE html>
<html>
<head>
	<title>data update,delete,insert</title>
</head>
<body>

	<h1 style="text-align: center;">data update,delete,insert</h1>

	<?php

	 $host = "localhost";
	 $dbUser = "hasan";
	 $dbPwd = "iconicemon01@";
	 $dbName = "hasan";

	 $connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);

	 if ($connect == false) {
	 	echo "<h2>Error Database connection!</h2>";
	 };

	// UPDATE 'hasan' SET 'fname' = 'Freelancer' WHERE 'hasan' id = 8;

	 $updateQuery = "UPDATE hasan SET fname='new',lname='bangladesh' WHERE id=5 ";
	 // mysqli_query($connect,$updateQuery);
	 $runUpQuery = mysqli_query($connect,$updateQuery);

	 if ($runUpQuery == true) {
	 	echo "Data uploade";
	 } else {
	 	echo "Data could not be updated";
	 };

	 echo "<br>";

	 // Data Delete

	  $DeleteQuery = "DELETE FROM hasan WHERE id=4";
	  $runDeleteQuery = mysqli_query($connect,$DeleteQuery);

	  if ($runDeleteQuery == true) {
	  	echo "Data deleted";
	  } else {
	  	echo "Data could not be deleted";
	  };

	  echo "<br>";

	  // Insert Query

	  $insertQuery = "INSERT INTO hasan (fname,lname,usr_email,usr_pwd)VALUES('emon','hasan','emon@gmail.com','123456789')";
	  $runInsertQuery = mysqli_query($connect,$insertQuery);
	  if ($runInsertQuery == true) {
	  	echo "Data inserted";
	  } else {
	  	echo "Data not inserted";
	  };

	?>

</body>
</html>