<?php 
	// akan diload setiap kali dipanggil
	include("../config/database.php");
	// Hanya di panggil 1 kali dan tidak akan menumpuk ketika dipanggil ulang
	include_once("../config/database.php");
?>