<?php

	$usrname = $_REQUEST["username"];
	$usrpwd = $_REQUEST["password"];

	if ($usrpwd == 123456) {
		header("location: about.php?text=emon");
		// header("location: about.php?text=.$usrname");
	} else {
		# code...
	}
	

?>