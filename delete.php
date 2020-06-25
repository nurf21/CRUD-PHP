<?php

include_once("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id =$id");
header("location:index.php");
?>