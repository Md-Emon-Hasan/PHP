<!DOCTYPE html>
<html>
<head>
	<title>loops and foreach loops</title>
</head>
<body>

	<h1>loops and foreach loops</h1>

	<?php

	$x = 0;
	while ( $x<= 100) {
		echo $x;
		++$x;
	}

	?>

	<hr/>

	<?php

		$x = 0;
		while ( $x<= 100) {
			echo "this is number:".$x."<br>";
			++$x;
		}

	?>

	<hr>

	<?php

		$x = 0;
		do {
			echo "this is number:".$x."<br>";
			++$x;
		} while ( $x<= 100);

	?>

	<hr>

	<?php

		$x = 0;
		while ( $x<= 100) {
			echo "this is number:".$x."<br>";
			++$x;
		}

		for ($x=0; $x <=100 ; $x++) { 
			echo "this number is:".$x."<br/>";
		}

	?>

	<hr/>

	<?php

	$myarray = array("emon1","emon2","emon3"."emon4");

		echo $myarray[1];

	?>

	<hr/>

	<?php

	$myarray = array("emon1","emon2","emon3","emon4");

		foreach ($myarray as $name) {
			echo $name."<br>";
		}

	?>

	<hr/>

	<?php

	$myarray = array("emon1","emon2","emon3","emon4");

	$x = 1;

		foreach ($myarray as $name) {
			echo $x." ".$name."<br>";
			++$x;
		}

	?>

</body>
</html>