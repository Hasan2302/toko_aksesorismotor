<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/styleeee.css">
</head>
<body class="bd2">
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
<form action="tb_pembeli.php" method="POST" class="frm3">
<div class="kotak-login">
        <h1 class="p-login">Beli</h1><a href="tabel.php"><input type="Button" value="Kembali"></a>
        <hr>
        <br>
            <label>Nama Panjang</label>
            <input type="text" name="nama_pembeli" class="form-login" placeholder="Nama Panjang    .." required="">

            <label>Tanggal</label>
            <input type="date" name="tanggal_pembelian" class="form-login" required="">

            <label>Kode Barang</label>
            <input type="text" name="kode" class="form-login" value="<?php echo $data['kode'];?>" readonly="">

            <label>Barang Yang Dibeli</label>
            <input type="text" name="membeli" class="form-login" value="<?php echo $data['nama_barang'];?>" readonly="">

            <label>Harga</label>
            <input type="text" name="harga" class="form-login" value="<?php echo $data['harga'];?>" id="harga" placeholder="Harga .." required="">

            <label>Jumlah</label>
            <select class="form-login" name="jumlah" id="jumlah">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
            </select>
            <label>Total</label>
            <input type="text" name="total" class="form-login" value="<?php echo $data['total'];?>" id="total"placeholder="total .." required="">
            <input type="submit" class="tombol-login" value="Beli">
            <input type="reset"  value="RESET">
            <br>
            <br>
            <br><br><br>
    </div>
</form>
</body>
</html>

