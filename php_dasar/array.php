<?php  
	$product = ["Buku", "Meja", "Lemari"];
	echo $product[1];
	
	echo "<br>";
	unset($product[2]);
	echo count($product);
	
	echo "<br>";
	$product[1] = "kulkas";
	
	var_dump($product);

	// Assoc
	$manusia = [
		'nama' => "Rizki",
		'umur' => "25",
	];

	echo $manusia['nama'];

?>