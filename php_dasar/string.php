<?php  
	$nama_depan = "Rizki";
	$nama_belakang = "Ade Putranto";

	echo $nama_depan." ".$nama_belakang."<br>";
	echo "Menghitung Jumlah Karakater : ".strlen($nama_depan)."<br>";

	echo "Mencari kata 'Putranto' dari ".$nama_belakang." ada pada index ke : ".strrpos($nama_belakang,"Putranto")."<br>";

	echo "Mengubah huruf menjadi kecil : ".strtolower($nama_depan)."<br>";
	echo "Mengubah huruf menjadi besar : ".strtoupper($nama_depan)."<br>";
	echo "Mengubah text dari belakang ke depan : ".strrev($nama_depan)."<br>";
?>