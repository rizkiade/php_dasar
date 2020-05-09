<?php  
	
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == 'admin' && $password == 'admin'){
		// echo "Login Sukses";
		if(isset($_POST['remember'])){
			setcookie('last_username', $username, time()+3600*24);
		}else{
			setcookie('last_username', '', time() -1 );
		}
		$_SESSION['username'] = $username;
		header('Location: home.php');
	}else{
		// echo "Login Gagal";
		$_SESSION['error'] = "Username dan Password tidak sesuai";
		header('Location: login.php');
	}
?>