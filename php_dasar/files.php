<?php  
	$folder_name = "data";

	// Cek foler ada atau tidak
	if(is_dir($folder_name)){
		echo "Folder sudah ada";
	}else{
		mkdir($folder_name);
	}

	echo "<br>";
	$file_location = "data/isi.txt";

	//Set Mode data R/W/A
	$file = fopen($file_location, "w");
	fwrite($file, "Selamat Malam");

	echo file_get_contents($file_location);

	echo "<br>";

	if (file_exists($file_location)){
		echo "File $file_location sudah ada";
	}else{
		echo "File $file_location tidak ada";
	}

	echo "<br>";
	$files = scandir($folder_name);
	var_dump($files);
?>