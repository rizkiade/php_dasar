<?php  
	echo $_SERVER['REQUEST_METHOD'];
	echo "<br>";
	var_dump($_GET);

	echo "<br>";
	$username = "";
	if(isset($_GET['username'])){
		$username = $_GET['username'] ;
	}
	
	echo "Username anda adalah : ".$username;
?>