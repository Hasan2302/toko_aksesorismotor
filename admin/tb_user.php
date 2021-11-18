<?php
include 'config.php';

$id				= $_POST['id'];
$nama			= $_POST['nama'];
$username		= $_POST['username'];
$password		= $_POST['password'];

$host = mysqli_query ($host, "INSERT INTO user VALUES('$id','$nama','$username','$password')") or die(mysqli_error($host));
if($host)
{
echo "<script>alert('Yess Data Berhasil Ditambahkan!');
window.location='index2.php'</script>";
}
else{
echo "<script>alert('Aduhh Data Gagal Ditambahkan!');
window.location='tambah_admin.php'</script>";
}
?>