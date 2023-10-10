<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<pre>

	<?php

		//$x = $_FILES["profilepicture"];

		//echo var_dump($x);

	?>

	<?php

		$submitted_name = $_FILES["profilepicture"];
		$fileName = $submitted_name["name"];
		$fileType = $submitted_name["type"];
		$fileSize = $submitted_name["size"];
		$fileTmpName = $submitted_name["tmp_name"];

		$convertSize = floor($fileSize/1000);
		if ($convertSize>1000) {
			echo "File Size:".($convertSize/1000)." MB";
		} else {
			echo "File Size: ".$convertSize."KB";
		};
		echo "<br/>";
		
		echo "File Name: ".$fileName."<br/>";
		echo "file Type: ".$fileType."<br/>";
		echo "File Tmp Name: ".$fileTmpName."<br/>";

		move_uploaded_file($fileTmpName, "img/emon.jpg");
		echo "<br/>";
		echo "<img src='img/emon.jpg'>";

	?>

	</pre>

</body>
</html>