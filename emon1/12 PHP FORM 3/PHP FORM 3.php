<!DOCTYPE html>
<html>
<head>
	<title>PHP FORM 3</title>
</head>
<body>

	<h1 style="text-align: center;">PHP FORM 3</h1>

	<form method="GET" action="contact.php">
		
		username:
		<input type="text" name="username">
		<br>
		<textarea name="usercomment" rows="10" cols="30"></textarea>
		<br>
		<input type="submit" value="GET COMMENT">

	</form>

	<hr>

	<form method="POST" action="contact.php">
		
		username:
		<input type="text" name="username1">
		<br>
		<textarea name="usercomment1" rows="10" cols="30"></textarea>
		<br>
		<input type="submit" value="POST COMMENT">

	</form>

	<hr>

	<form method="GET" action="contact.php">
		
		username:
		<input type="text" name="username2">
		<br>
		<textarea name="usercomment2" rows="10" cols="30"></textarea>
		<br>
		<input type="submit" value="GET REQUEST">

	</form>

	<hr>

	<form method="POST" action="contact.php">
		
		username:
		<input type="text" name="username3">
		<br>
		<textarea name="usercomment3" rows="10" cols="30"></textarea>
		<br>
		<input type="submit" value="POST REQUEST">

	</form>

</body>
</html>