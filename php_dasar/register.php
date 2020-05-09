<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="action-register.php" method="POST">
		<div>
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div>
			<label>Gender</label>
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
		</div>
		<input type="submit" value="Register">
	</form>
</body>
</html>