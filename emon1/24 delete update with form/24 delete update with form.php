<!DOCTYPE html>
<html>
<head>
	<title>delete update with form</title>
</head>
<body>

	<h1 style="text-align: center;">delete update with form</h1>

	<?php

		/* if (isset($_REQUEST["action"])) {
			echo "Data inserted";
		} else {
			echo "Data not inserted";
		}; */

		if (isset($_REQUEST["action"])) {
			if (($_REQUEST["action"])=="true") {
				echo "Data inserted";
			} else {
				echo "Data not inserted";
			};
			
		};
		
	?>

	<form action="savedata_core.php" method="POST">
		<input type="text" name="fname" placeholder="First Name">
		<input type="text" name="lname" placeholder="Last Name">
		<input type="email" name="email_addr" placeholder="User Email">
		<input type="Password" name="usr_pwd" placeholder="User Password">
		<input type="submit" value="submit">
	</form>

	<br>
	<br>

	<?php

		if (isset($_REQUEST["deleted"])) {
			echo "Data has been deleted";
		}elseif (isset($_REQUEST["edited"])) {
			echo "Data edited";
		};

	?>

	<table border="5">
		<tr>
			<td><b>Serial No:</b></td>
			<td><b>DB ID</b></td>
			<td><b>First Name</b></td>
			<td><b>Last Name</b></td>
			<td><b>Email Address</b></td>
			<td><b>User Password</b></td>
			<td><b>Action</b></td>
		</tr>

	<?php

		require 'connect.php';

		$showDataQuery = "SELECT * FROM hasan";
		$runDataQuery = mysqli_query($connect,$showDataQuery);

		if ($runDataQuery == true) {
			$snCount = 1;
			while ($myData = mysqli_fetch_array($runDataQuery)) { 
				?>

				<tr>
					<td><?php echo $snCount; $snCount++;?></td>
					<td><?php echo $myData["id"]; ?></td>
					<td><?php echo $myData["fname"]; ?></td>
					<td><?php echo $myData["lname"]; ?></td>
					<td><?php echo $myData["usr_email"]; ?></td>
					<td><?php echo $myData["usr_pwd"]; ?></td>
					<td><a href='editdata.php?edit_id=<?php echo $myData["id"]; ?>'>Edit</a>|<a href='deletedata_core.php?id=<?php echo $myData["id"];?>'>Delete</a></td>
				</tr>
				
			<?php };
		};
		
	?>
		
	</table>

</body>
</html>