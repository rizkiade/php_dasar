<?php  
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<h2>Selamat Datang</h2>
	<a href="logout.php">Logout</a>
</body>
</html>