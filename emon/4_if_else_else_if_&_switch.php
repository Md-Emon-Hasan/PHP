<!DOCTYPE html>
<html>
<head>
	<title>if else, else if & switch</title>
</head>
<body>

	<h1>if else, else if & switch</h1>

	<?php

		$age = 10;
		$dbage =11;

		if ($age==$dbage) {
			echo "You are right";
		} else {
			echo "you are wrong";
		}

	?>

	<hr>

	<?php

		$age1 = 10;

		if ($age1==10) {
			echo "You can register";
		} else {
			echo "you can't register";
		}
		
	?>

	<hr>

	<?php

		$age3 = 13;

		if ($age3==20) {
			echo "You can register";
		} elseif ($age3==13) {
			echo "you are under 18";
		}
		
	?>

	<hr/>

	<?php

		$age3 = 18;

		if ($age3==10) {
			echo "You can register";
		} elseif ($age3==13) {
			echo "you are under 18";
		} elseif ($age3==18) {
			echo "you are 18.now you can register here";
		}
		
	?>

	<hr>

	<?php

		$age3 = 9;

		if ($age3<10) {
			echo "You can register";
		} elseif ($age3==13) {
			echo "you are under 18";
		} elseif ($age3==18) {
			echo "you are 18.now you can register here";
		}
		
	?>

	<hr>

	<?php

		$age3 = 9;

		if ($age3==15) {
			echo "You can register";
		} elseif ($age3<=13) {
			echo "you are under 18";
		} elseif ($age3==18) {
			echo "you are 18.now you can register here";
		}
		
	?>

	<hr>

	<?php

		$age3 = 9;

		if ($age3==15) {
			echo "You can register";
		} elseif ($age3<=13) {
			echo "you are under 18";
		} elseif ($age3==18) {
			echo "you are 18.now you can register here";
		}
		
	?>

	<hr>

	<?php

		$age3 = 25;

		if ($age3==15) {
			echo "You can register";
		} elseif ($age3<=13) {
			echo "you are under 18";
		} elseif ($age3>=18) {
			echo "you are 18.now you can register here";
		}
		
	?>

	<hr>

	<?php

		$age3 = 25;

		if ($age3==15) {
			echo "You can register";
		} elseif ($age3==13) {
			echo "you are under 18";
		} elseif ($age3==18) {
			echo "you are 18.now you can register here";
		} else{
			echo "Nothing found";
		}
		
	?>

	<hr>

	<?php

		$name ="emon";

		switch ($name) {
			case "emon":
			echo "Emon Hasan";
				break;
			
			case "hasan":
			echo "Hasan Emon";
				break;
		}
	?>	

	<hr>

</body>
</html>