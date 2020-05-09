<?php  
	
	$nama = "";

	if(isset($nama)){
		echo "isi variable nama adalah : ".$nama;
	}else{
		echo "isset bernilai false";
	}

	echo "<br>";

	if(!empty($nama)){
		echo "isi variable nama adalah : ".$nama;
	}else{
		echo "isset bernilai false";
	}

	echo "<br>";

	if(is_null($nama)){
		echo "Variable nama berisi null";
	}else{
		echo "isi variable nama adalah : ".$nama;
	}

	echo "<br>";

	$alamat = "Jalan Raya Keadilan";

	if(strlen($alamat) < 5 || strpos($alamat, "Jalan") !== 0){
		echo "Alamat tidak valid"; 
	}else{
		echo "Alamat valid"; 
	}

	echo "<br>";

	$angka = 10;
	
	if(is_numeric($angka)){
		echo "Ini angka";
	}else{
		echo "ini bukan angka";
	}
?>