<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<?php

	echo "<a href='http://google.com'>Go To Goggle</a>"."<br>";

	echo $_GET["username"]."<br>";

	echo "<h1>hello</h1>";

	?>

	<hr>

	<?php

	echo "<a href='#'>";
	echo "Google";
	echo "</a>"."<br>";

	echo "<a href='#'>";
	echo $_GET["username1"];
	echo "</a>";

	?>

	<hr>

	<?php

		echo $_POST["username2"];

	?>

	<hr>

	<?php

		echo $_REQUEST["username3"];

	?>

</body>
</html>