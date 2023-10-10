<!DOCTYPE html>
<html>
<head>
	<title>profile picture pload and delete</title>
</head>
<body>

	<h1 style="text-align: center;">25 profile picture pload and delete</h1>

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

	<form enctype="multipart/form-data" action="savedata_core.php" method="POST">
		<input type="text" name="fname" placeholder="First Name">
		<input type="text" name="lname" placeholder="Last Name">
		<input type="email" name="email_addr" placeholder="User Email">
		<input type="Password" name="usr_pwd" placeholder="User Password">
		<input type="file" name="avatar">
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
			<td><b>Profile Picture</b></td>
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

					<td><img src="avatar/<?php echo $myData['profile_picture']; ?>" style="height: 100px; width: 100px;"></td>

					<td><a href='editdata.php?edit_id=<?php echo $myData["id"]; ?>'>Edit</a>|<a onclick="return confirm('Are you sure');" href='deletedata_core.php?id=<?php echo $myData["id"];?>'>Delete</a></td>
				</tr>
				
			<?php };
		};
		
	?>
		
	</table>

</body>
</html>