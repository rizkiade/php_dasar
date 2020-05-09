<?php  
	for ($i=0; $i < 10; $i++) { 
		echo "Selamat Belajar $i<br>";
	}

	echo "======================";
	echo "<br>";

	$i = 10;
	while ($i != 0) {
		echo "Selamat datang $i<br>";
		$i--;
	}

	echo "======================";
	echo "<br>";

	$j = 1;
	do {
		echo "Selamat makan $j<br>";
		$j++;
	} while ( $j <= 5);

	echo "======================";
	echo "<br>";

	$warna = ['merah','kuning','hijau','biru'];
	foreach ($warna as $w) {
		echo $w."<br>";
	}
?>