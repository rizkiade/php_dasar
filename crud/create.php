<?php  
	require("../config/database.php");

	$data = mysqli_query($conn, "SELECT * FROM categories");
	$category = mysqli_fetch_all($data, MYSQLI_ASSOC);

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$article = mysqli_query($conn, "SELECT * FROM articles WHERE id = $id");
		$article = mysqli_fetch_assoc($article);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Article</title>
</head>
<body>
	<form action="action_create.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id_article" value="<?= @$id; ?>">
		<div>
			<label>Title</label><br>
			<input type="text" name="title" value="<?= @$article['title']; ?>">
		</div>
		<div>
			<label>Category</label><br>
			<select name="category_id">
				<?php foreach ($category as $c ) : ?>
					<option value="<?= $c['id']; ?>" <?= $c['id'] == @$article['category_id']? 'selected': '' ;?> ><?= $c['name']; ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div>
			<label>Content</label><br>
			<textarea name="content"><?= @$article['content']; ?></textarea>
		</div>
		<div>
			<label>Cover</label><br>
			<input type="file" name="cover"/>
		</div>
		<br>
		<div>
			<input type="submit" name=""/>
		</div>
	</form>
</body>
</html>