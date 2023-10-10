<!DOCTYPE html>
<html>
<head>
	<title>php arrays</title>
</head>
<body>

	<h1>php arrays</h1>

	<?php

	$myarray = array("emon","emon1","emon2","emon3","emon4");
	echo $myarray[1];

	?>

	<hr>

	<?php

	$myarray = array("emon","emon1","emon2","emon3","emon4");
	echo count($myarray);

	?>

	<hr>

	<?php

	$myarray = array("emon","emon1","emon2","emon3","emon4");

	$arrayCount = count($myarray); //4

	for ($x=0; $x < $arrayCount;++$x) { 
		echo $x;
	}

	?>

	<hr/>

	<?php

	$myarray = array("emon","emon1","emon2","emon3","emon4");

	$arrayCount = count($myarray); //4

	for ($x=0; $x < $arrayCount;++$x) { 
		echo $myarray[1];
	}

	?>

	<hr>

	<?php

	$myarray = array("emon","emon1","emon2","emon3","emon4");

	$arrayCount = count($myarray); //4

	for ($x=0; $x < $arrayCount;++$x) { 
		echo $myarray[$x]."<br>";
	}

	?>

	<hr>

	<?php

	$myarray = array("emon","emon1","emon2","emon3","emon4");

	$arrayCount = count($myarray); //4

	for ($x=0; $x < $arrayCount;++$x) { 
		echo "$x"." ".$myarray[$x]."<br>";
	}

	?>

	<hr/>

	<?php

		$myarray = array("name"=>"emon","address"=>"dhaka","profession"=>"student");
		echo $myarray["name"];

	?>

	<hr/>

	<?php

		$myarray = array("name"=>"emon","address"=>"dhaka","profession"=>"student");
		foreach ($myarray as $myindex => $value) {
			echo $myindex." : ".$value;
		}

	?>

	<hr>

	<?php

		$myarray = array("name"=>"emon","address"=>"dhaka","profession"=>"student");
		foreach ($myarray as $myindex => $value) {
			echo $myindex." : ".$value."<br>";
		}

	?>

	<hr>

	<?php

	$myarray = array("emon","emon1","emon2","emon3","emon4");
	sort($myarray);
	$arrayCount = count($myarray); //4

	for ($x=0; $x < $arrayCount;++$x) { 
		echo "$x"." ".$myarray[$x]."<br>";
	}

	?>

	<hr>

	 <?php
		$x = 75;
		$y = 25;
		 
		function addition() {
		  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		 
		addition();
		echo $z;
	?> 

	<hr>

	 <?php
		echo $_SERVER['PHP_SELF'];
		echo "<br>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo $_SERVER['HTTP_HOST'];
		echo "<br>";
		echo $_SERVER['HTTP_REFERER'];
		echo "<br>";
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		echo $_SERVER['SCRIPT_NAME'];
	?> 

	<hr>

	

</body>
</html>