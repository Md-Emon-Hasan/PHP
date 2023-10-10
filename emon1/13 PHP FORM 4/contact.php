
<pre>

<?php

	// $submitted_name = $_FILES["profilepicture"];

	// var_dump ($submitted_name);

?>

<?php

	$submitted_name = $_FILES["profilepicture"];

	$fileName = $submitted_name["name"];

	$fileType = $submitted_name["type"];

	$fileSize = $submitted_name["size"];

	$fileTmpName = $submitted_name["tmp_name"];

	echo "File Name: ".$fileName;
	echo "<br>";
	//echo "File Size: ".floor($fileSize/1000)." KB";

	$convertSize = floor($fileSize/1000);
	if ($convertSize>1000) {
		echo "File Size: ".floor($convertSize/1000)." MB";
	} else {
		echo floor($convertSize)."KB";
	}
	

	echo "<br>";
	echo "File Type: ".$fileType;
	echo "<br>";
	echo "File Tmp Name: ".$fileTmpName;

	// move_uploaded_file($fileTmpName, "img/$fileName");
	move_uploaded_file($fileTmpName, "img/$fileName");
	echo "<br>";
	echo "<img src='img/$fileName'/>";

?>

</pre>