<?php
	
	session_start();
	$last_username = "";
	if(isset($_COOKIE['last_username'])){
		$last_username = $_COOKIE['last_username'];
	}

	if(isset($_SESSION['username'])){
		header('Location: home.php');
	}

	$error = "";
	if(isset($_SESSION['error'])){
		$error = $_SESSION['error'];
		unset($_SESSION['error']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<p><?= $error; ?></p>
	<form action="do_login.php" method="POST">
		<div>
			<label>Username</label>
			<input type="text" name="username" value="<?= $last_username; ?>">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password"> 
		</div>
		<input type="checkbox" name="remember" <?= ($last_username != "" ? 'checked' : ''); ?> > Remember
		<input type="submit" value="Login">
	</form>
	
</body>
</html>