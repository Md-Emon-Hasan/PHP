<!DOCTYPE html>
<html>
<head>
	<title>$_SERVER Superglobal</title>
</head>
<body>

	<h1 style="text-align: center;">$_SERVER Superglobal</h1>

	<?php

		// Create server Array
		$server = [
			"Host Server Name" => $_SERVER["SERVER_NAME"],
			"Host Header" => $_SERVER["HTTP_HOST"],
			"Server Software" => $_SERVER["SERVER_SOFTWARE"],
			"Document Root" => $_SERVER["DOCUMENT_ROOT"],
			"Current Name" => $_SERVER["PHP_SELF"],
			"Script Name" => $_SERVER["SCRIPT_NAME"],
			"Absolute Parh" => $_SERVER["SCRIPT_FILENAME"],
		];

		print_r($server);
		echo "<hr>";

		// Create Client Array

		$client = [
			"Client System info" => $_SERVER["HTTP_USER_AGENT"],
			"Client IP" => $_SERVER["REMOTE_ADDR"],
			"Remote Port" => $_SERVER["REMOTE_PORT"],

		];

		print_r($client);
		echo "<hr>";

	?>

</body>
</html>