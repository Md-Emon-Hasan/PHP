<!DOCTYPE html>
<html>
<head>
	<title>search users and any data from table</title>
</head>
<body>

	<h1 style="text-align: center;">search users and any data from table</h1>

	<?php

	require_once ("connect.php");

	if (isset($_REQUEST["edit_id"])) {
		$editID = $_REQUEST["edit_id"];
	
	$selectInfo = "SELECT * FROM hasan WHERE id=$editID";
	$runInfo = mysqli_query($connect,$selectInfo);

	while ($getData = mysqli_fetch_array($runInfo)) {
		?>

		<form action="editdata_core.php" method="POST">
			<input type="text" name="fname" value="<?php echo $getData["fname"] ?>" placeholder="First Name">
			<input type="text" name="lname" value="<?php echo $getData["lname"] ?>" placeholder="Last Name">
			<input type="email" name="email_addr" value="<?php echo $getData["usr_email"] ?>" placeholder="User Email">
			<input type="Password" name="usr_pwd" value="<?php echo $getData["usr_pwd"] ?>" placeholder="User Password">

			<input type="hidden" name="editingID" value="<?php echo $editID; ?>">

			<input type="submit" name="editButton" value="UPDATE DATA">
		</form>

		<?php
	}

	} 

	?>

</body>
</html>