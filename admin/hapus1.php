<?php
include('config.php');
$id_pembeli = $_GET['id_pembeli'];
$hapus= "DELETE FROM tb_pembeli WHERE id_pembeli='$id_pembeli'";
mysqli_query($host, $hapus);
echo"
<script>
alert('Yess Data Berhasil Dihapus!');
window.location='riwayat.php';
</script>"
?>