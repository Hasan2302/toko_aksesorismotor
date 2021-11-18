<?php
include 'config.php';

$kode				= $_POST['kode'];
$nama_pembeli		= $_POST['nama_pembeli'];
$tanggal_pembelian	= $_POST['tanggal_pembelian'];
$membeli			= $_POST['membeli'];
$harga				= $_POST['harga'];
$jumlah				= $_POST['jumlah'];
$total				= $_POST['total'];


$qwe = mysqli_query ($host, "INSERT INTO tb_pembeli(kode, nama_pembeli, tanggal_pembelian, membeli, harga, jumlah, total) VALUES('$kode','$nama_pembeli','$tanggal_pembelian','$membeli','$harga','$jumlah','$total')") or die(mysqli_error($host));

if($qwe)
{
echo "<script>alert('Yess Data Berhasil Ditambahkan!');
window.location='riwayat.php'</script>";
}
else{
echo "<script>alert('Aduhh Data Gagal Ditambahkan!');
window.location='beli.php'</script>";
}
?>