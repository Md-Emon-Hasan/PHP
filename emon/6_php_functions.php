<!DOCTYPE html>
<html>
<head>
	<title>php functions</title>
</head>
<body>

	<h1>php functions</h1>

	<?php

	function cal(){
		echo "hello world";
	}
	cal();

	?>

	<hr>

	<?php

	function cal(){
		return "hello world";
	}
	echo cal();

	?>

	<?php

	function cal(){
		$x =10;
		$y =10;

		echo $x + $y;
	}

	cal();

	?>

	<?php

	function cal ($newNumber1,$newNumber2){
		echo $newNumber1+$newNumber2;
	}
	cal("12","15");

	?>

	<?php

	$nasim ="emon hasan";

	function cal ($newNumber1,$newNumber2){
		echo $newNumber1+$newNumber2;
		global $nasim;
		echo "<br>".$nasim;
	}
	cal("12","15");

	?>

</body>
</html>