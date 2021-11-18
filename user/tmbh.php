<?php
include 'config.php';

$username		= $_POST['username'];
$password		= $_POST['password'];

$host = mysqli_query ($host, "INSERT INTO tb_riwayat_pembelian VALUES('','$username','$password')") or die(mysqli_error($host));
if($host)
{
echo "<script>alert('Yess Data Berhasil Ditambahkan!');
window.location='tabel.php'</script>";
}
else{
echo "<script>alert('Aduhh Data Gagal Ditambahkan!');
window.location='masuk.php'</script>";
}
?>