<?php

	require_once ("connect.php");

	echo $getID = $_REQUEST["id"];

	$dltQuery = "DELETE FROM hasan WHERE id = $getID";

	$runQuery = mysqli_query($connect,$dltQuery);
	if ($runQuery == true) {
		header("location: 25 profile picture pload and delete.php?deleted");
	};
	
?>