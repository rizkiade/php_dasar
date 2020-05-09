<?php  
	// echo "Konfigurasi database";
	$conn = mysqli_connect('localhost', 'root', '', 'crud_php');

	if(!$conn){
		echo "Failed Connect Database";
	}
?>