<?php  
	$nilai = 80;

	if($nilai > 60 ){
		echo "Anda Sudah Lulus";
	}elseif($nilai == 0){
		echo "Anda Tidak mengerjakan Ujian";
	}else{
		echo "Anda Tidak Lulus";
	}

	echo "<br>";
	$warna_lampu = "kuning";
	switch ($warna_lampu) {
		case 'merah':
			echo "Berhenti";
			break;
		case 'kuning':
			echo "Hati-Hati";
			break;
		default:
			echo "Hijau";
		break;	
	}
?>