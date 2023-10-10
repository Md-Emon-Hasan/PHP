<!DOCTYPE html>
<html>
<head>
	<title>Loops</title>
</head>
<body>

	<h1 style="text-align: center;">Loops</h1>

	<?php

		//For Loop

		for ($i=0; $i <10 ; $i++) { 
			echo $i;
		};

		echo "<br>";

		for ($a=1; $a <=10 ; $a++) { 
			echo "Number:"." ".$a;
			echo "<br>";
		};

		echo "<hr>";

		//While Loop

		$a = 0;

		while ($a <= 10) {
		 	echo $a;
		 	$a++;
		 	echo "<br>";
		};

		echo "<hr>";

		// Do... While 

		$b = 0;

		do{
			echo $b;
			echo "<br/>";
			$b++;
		} while ($b < 10);

		echo "<hr>";

		//Foreach Loop

		$people = array("brad","jose","willims");

		foreach ($people as $person) {
			echo $person;
			echo "<br>";
		};

		$people1 = array("brad" => "brad@gmail.com","jose" => "jose@gmail.com","willims" => "willims@gmail.com");

		foreach ($people1 as $person1 => $email) {
			echo $person1.": ".$email;
			echo "<br>";
		};

	?>

</body>
</html>