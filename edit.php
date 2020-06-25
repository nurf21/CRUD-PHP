<?php
include_once("koneksi.php");
if (isset($_POST['update'])) {
 	$id = $_POST ['id'];
 	$nama_produk = $_POST ['nama_produk'];
 	$keterangan = $_POST['keterangan'];
 	$harga = $_POST['harga'];
 	$jumlah = $_POST['jumlah'];

 	$result = mysqli_query($mysqli, "UPDATE produk 
 		SET nama_produk='$nama_produk',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' 
 		WHERE id=$id");
 	header("Location:index.php");
 }
 ?>

 <?php 
 $id = $_GET['id'];
 $result = mysqli_query($mysqli,"SELECT * FROM produk WHERE id=$id");

 while ($data_produk = mysqli_fetch_array($result)) {
 	$id = $data_produk['id'];
 	$nama_produk = $data_produk['nama_produk'];
 	$keterangan = $data_produk['keterangan'];
 	$harga = $data_produk['harga'];
 	$jumlah = $data_produk['jumlah'];
 }
 ?>

 <html>
 <head>
 	<title>Edit</title>
 </head>
 <body>
 	<a href="index.php">Edit</a><br><br>
 	<form action="edit.php" method="post" name="update_produk">
 		<table>
 			<tr>
 				<td>Nama Produk</td>
 				<td><input type="text" name="nama_produk" value= <?php echo $nama_produk;?>> </td>
 			</tr>

 			<tr>
 				<td>Keterangan</td>
 				<td><input type="text" name="keterangan" value= <?php echo $keterangan;?>> </td>
 			</tr>

 			<tr>
 				<td>Harga</td>
 				<td><input type="text" name="harga" value= <?php echo $harga;?>> </td>
 			</tr>

 			<tr>
 				<td>Jumlah</td>
 				<td><input type="text" name="jumlah" value= <?php echo $jumlah;?>> </td>
 			</tr>

 			<tr>
 				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
 				<td><input type="submit" name="update" value="update"></td>
 			</tr>
 		</table>
 	</form>
 </body>
 </html>