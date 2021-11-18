<?php
include 'config.php';

$kode	= $_POST['kode'];
$nama_barang	= $_POST['nama_barang'];
$stok			= $_POST['stok'];
$merek			= $_POST['merek'];
$satuan			= $_POST['satuan'];
$harga			= $_POST['harga'];


$ekstensi_diperbolehkan		= array('png','jpg');
	$gambar					= $_FILES['gambar']['name'];
	$x						= explode('.', $gambar);
	$ekstensi 				= strtolower(end($x));
	$ukuran					= $_FILES['gambar']['size'];
	$file_tmp				= $_FILES['gambar']['tmp_name'];

if($ukuran < 1044070){
	move_uploaded_file($file_tmp,'img/'.$gambar);
$host = mysqli_query ($host, "INSERT INTO tb_barang VALUES('$kode','$nama_barang','$stok','$merek','$satuan','$harga','$gambar')") or die(mysqli_error());
if($host)
{
echo "<script>alert('Yess Data Berhasil Ditambahkan!');
window.location='tabel.php'</script>";
}
else{
echo "<script>alert('Aduhh Data Gagal Ditambahkan!');
window.location='tambahbarang.php'</script>";
}
}
?>