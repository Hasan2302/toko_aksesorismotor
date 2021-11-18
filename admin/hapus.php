<?php
include('config.php');
$kode = $_GET['kode'];
$hapus= "DELETE FROM tb_barang WHERE kode='$kode'";
mysqli_query($host, $hapus);
echo"
<script>
alert('Yess Data Berhasil Dihapus!');
window.location='tabel.php';
</script>"
?>