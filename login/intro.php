<?php  
	$counter = 0;
	if(isset($_COOKIE['counter'])){
		$counter = $_COOKIE['counter'] + 1;
	}

	setcookie("counter", $counter, time()+3600);
	echo "Anda Sudah Mengunjungi Web sebanyak : ".$_COOKIE['counter'];
?>