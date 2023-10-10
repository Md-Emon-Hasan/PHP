<!DOCTYPE html>
<html>
<head>
	<title>Get & Post Tutorial</title>
</head>
<body>

	<h1 style="text-align: center;">Get & Post Tutorial</h1>

	<form method="GET" action="get.php">
		<div>
			<label>Name:</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email:</label>
			<input type="email" name="email">
		</div>
		<div>
			<input type="submit" value="submit">
		</div>
	</form>

	<hr>

	<form method="POST" action="post.php">
		<div>
			<label>Name:</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email:</label>
			<input type="email" name="email">
		</div>
		<div>
			<input type="submit" value="submit">
		</div>
	</form>

</body>
</html>