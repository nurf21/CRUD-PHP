<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
</head>
<body>
	<a href="index.php">Home</a>
	<br><br>
	<form action="add.php" method="post" name="form1">
		<table width="25%">
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>

			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>

			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>

			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>

<?php 
if(isset($_POST['submit'])) {
	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];

	include_once("koneksi.php");

	$result = mysqli_query($mysqli,"INSERT INTO produk(nama_produk,keterangan,harga,jumlah)
		VALUES('$nama_produk','$keterangan','$harga','$jumlah')");

	echo "Produk Telah Ditambah.<a href='index.php'>Lihat Data</a>";
}

?>
</body>
</html>