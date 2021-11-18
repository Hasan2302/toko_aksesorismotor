<?php
include 'config.php';

$kode	= $_POST['kode'];
$nama_barang	= $_POST['nama_barang'];
$stok			= $_POST['stok'];
$merek			= $_POST['merek'];
$satuan			= $_POST['satuan'];
$harga			= $_POST['harga'];

mysqli_query ($host, "UPDATE tb_barang SET nama_barang='$nama_barang',stok='$stok',merek='$merek',satuan='$satuan',harga='$harga' WHERE kode='$kode'");
header("location:tabel.php");
?>