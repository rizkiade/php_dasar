<?php
	require("../config/database.php");

	$id = $_POST['id_article'];
	$title = $_POST['title'];
	$category_id = $_POST['category_id'];
	$content = $_POST['content'];
	$date = date('Y-m-d');

	// var_dump($_FILES);
	// exit();
	if(isset($_FILES['cover'])){
		
		if(!empty($_FILES['cover']['name'])){

			$cover = $_FILES['cover'];
			$extension = pathinfo($cover['name'], PATHINFO_EXTENSION);
			$filename = uniqid().".".$extension;

			if($extension !== 'jpg' && $extension !== 'png'){
				echo "format tidak sesuai";
				exit();
			}

			$size = $cover['size'];
			$max = 100 * 1024;
			if($size > $max ){
				echo "Ukuran File terlalu besar";
				exit();
			}
			move_uploaded_file($cover['tmp_name'], "images/$filename");

		}else{

			$filename = '';

		}

	}

	if(!empty($id)){
		$query = "UPDATE articles 
				  SET title= '$title', category_id = $category_id, content = '$content', cover = '$filename'
				  WHERE id = $id";
	}else{
		$query = "INSERT INTO articles(title, category_id, content, date, cover) VALUES ('$title', '$category_id', '$content', '$date', '$filename')";
	}

	mysqli_query($conn, $query);

	header('Location: index.php');
?>

