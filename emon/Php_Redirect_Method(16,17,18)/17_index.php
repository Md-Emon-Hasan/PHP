<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<?php

	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];

	if ($username==emon) {
		header("location: http://google.com");
	} else {
		header("location: 18_index.php?text=Emon Hasan");
		// header("location: 18_index.php?text=$username"); //
	}
	
	?>

</body>
</html>