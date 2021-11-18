<html>
<head>
	<title>Edit Eskul</title>
	<link rel="stylesheet" type="text/css" href="css/styleeee.css">
</head>
<body>

<?php

include 'config.php';

$kode = $_GET['kode'];
$edit = "SELECT*FROM tb_barang where kode ='$kode'";
$query = mysqli_query($host, $edit);
$data=mysqli_fetch_array($query);
"
<script>
window.location='tabel.php';
</script>"
?>
<form action="update.php" method="POST" class="frm3">
<div class="kotak-login">
        <h1 class="p-login">Edit</h1><a href="tabel.php"><input type="Button" value="Kembali"></a>
        <hr>
        	<label>Kode Barang</label>
            <input type="text" name="kode" class="form-login" value="<?php echo $data['kode'];?>" placeholder="Kode Barang .." required="" readonly="">

            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-login" value="<?php echo $data['nama_barang'];?>" placeholder="Nama Barang .." required="">

            <label>Merek</label>
            <input type="text" name="merek" class="form-login" value="<?php echo $data['merek'];?>" placeholder="Merek .." required="">

            <label>Stok</label>
            <select class="form-login" name="stok">
                <option>ada</option>
                <option>habis</option>
            </select>

            <label>Satuan</label>
            <select class="form-login" name="satuan">
            	<option>pcs</option>
            	<option>set</option>
            </select>

            <label>Harga</label>
            <input type="text" name="harga" class="form-login" value="<?php echo $data['harga'];?>" placeholder="Harga .." required="">

            <input type="submit" class="tombol-login" value="Update">
            <input type="reset"  value="RESET">
            <br><br><br>
    </div>
</form>
</body>
</html>