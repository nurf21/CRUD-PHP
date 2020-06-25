<?php
include_once("koneksi.php");
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id ASC");
?>

<html>
<head>
	<title>Home</title>
</head>
<body>
	<a href="add.php">Tambah produk</a><br><br>

	<table width="80%" border="1">
		<tr>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Edit / Hapus</th>
		</tr>

		<?php 
		while($data_produk = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$data_produk ['nama_produk']."</td>";
			echo "<td>".$data_produk ['keterangan']."</td>";
			echo "<td>".$data_produk ['harga']."</td>";
			echo "<td>".$data_produk ['jumlah']."</td>";
			echo "<td><a href='edit.php?id=$data_produk[id]'>edit</a>
			| <a href='delete.php?id=$data_produk[id]'>delete</a></td><tr>";
		} 
		?>
	</table>
</body>
</html>