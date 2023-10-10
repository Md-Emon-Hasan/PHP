<!DOCTYPE html>
<html>
<head>
	<title>Variable and Intro</title>
</head>
<body>

	<h1>String Functions</h1>

	<?php

		echo "<h2>php is fun</h2><hr>";
		print "php is fun<hr>";

	?>

	<?php

		$x = 5985;
		var_dump($x);

	?>

	<hr/>

	<?php

		$x =array("aaaa","emon","hasan");
		var_dump($x);

	?>

	<hr>

	<?php

		$x ="hello world";
		echo strlen($x);

	?>

	<hr/>

	<?php

		echo str_word_count("Hello world!");

	?>

	<hr/>

	<?php

		$x ="hello world";
		echo strrev($x);

	?>

	<hr/>

	<?php

		$x ="hello world";
		echo str_replace("world", "emon", "$x");

	?>

</body>
</html>