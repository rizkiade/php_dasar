<?php  
	require("../config/database.php");

	$articles = mysqli_query($conn, "SELECT articles.*, categories.name as category_name FROM articles INNER JOIN categories ON articles.category_id = categories.id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Article</title>
</head>
<body>
	<h1>Data Article</h1>
	<a href="create.php">Tambah Artikel</a>
	
	<?php if(mysqli_num_rows($articles) > 0) : ?>
		<table border="1" cellpadding="5" cellspacing="0" width="50%">
			<thead>
				<tr>
					<th>Judul</th>
					<th>Konten</th>
					<th>Tanggal</th>
					<th>Kategori</th>
					<th>Cover</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php while($article = mysqli_fetch_assoc($articles)){?>
					<tr>
						<td><?= $article['title']; ?></td>
						<td><?= $article['content']; ?></td>
						<td><?= $article['date']; ?></td>
						<td><?= $article['category_name']; ?></td>
						<td>
							<?php if($article['cover']): ?>
								<img src="../crud/images/<?= $article['cover']; ?>" width="100">
							<?php else: ?>
								Cover Belum di Upload
							<?php endif; ?>
						</td>
						<td>
							<a href="create.php?id=<?= $article['id']; ?>">Edit</a>
							<a href="delete.php?id=<?= $article['id']; ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	<?php else: ?>
		<h2>Tidak ada data</h2>
	<?php endif; ?>	

</body>
</html>