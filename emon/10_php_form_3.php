<!DOCTYPE html>
<html>
<head>
	<title>php form 3</title>
</head>
<body>

	<h1>php form 3</h1>

	<form action="11_index.php" method="GET">
		Username: <input type="text" name="username">
		<br>
		<textarea cols="30" rows="10" name="comment" id="">
			
		</textarea>
		<br>
		<input type="submit" name="" value="GET COMMENT">

		<hr>

		Username: <input type="text" name="username1">
		<br>
		<textarea cols="30" rows="10" name="comment1" id="">
			
		</textarea>
		<br>
		<input type="submit" name="" value="GET COMMENT">

	</form>

	<hr>

	<form method="POST" action="11_index.php">

		Username: <input type="text" name="username2">
		<br>
		<textarea cols="30" rows="10" name="comment2" id="">
			
		</textarea>
		<br>
		<input type="submit" name="" value="POST COMMENT">

	</form>

	<hr>

	<form method="POST" action="11_index.php">

		Username: <input type="text" name="username3">
		<br>
		<textarea cols="30" rows="10" name="comment3" id="">
			
		</textarea>
		<br>
		<input type="submit" name="" value="REQUEST COMMENT">

	</form>

</body>
</html>