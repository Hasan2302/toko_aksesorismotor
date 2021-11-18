<?php
	include 'config.php';

	if(isset($_POST['tombol-total'])) {

	
	$kode				= $_POST['kode'];
	$nama_pembeli		= $_POST['nama_pembeli'];
	$tanggal_pembelian	= $_POST['tanggal_pembelian'];
	$membeli			= $_POST['membeli'];
	$harga				= $_POST['harga'];
	$jumlah				= $_POST['jumlah'];
	$total				= floatval($harga) * floatval($jumlah);
	}
?>

<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="css/styleeee.css">
<form action="tb_pembeli.php" method="post" enctype="multipart/form-data">
	<div class="kotak-login">
			<label>Nama Panjang</label>
            <input type="text" name="nama_pembeli" class="form-login" value="<?php echo $nama_pembeli;?>" placeholder="Nama Panjang    .." required="">

            <label>Tanggal</label>
            <input type="date" name="tanggal_pembelian" class="form-login" value="<?php echo $tanggal_pembelian;?>" required="">

			<label>Kode Barang</label>
            <input type="text" name="kode" class="form-login" value="<?php echo $kode;?>" readonly="">

            <label>Barang Yang Dibeli</label>
            <input type="text" name="membeli" class="form-login" value="<?php echo $membeli;?>" readonly="">

            <label>Harga</label>
            <input type="text" name="harga" class="form-login" value="<?php echo $harga;?>" id="harga" placeholder="Harga .." required="">

            <label>Jumlah</label>
            <input type="text" name="jumlah" class="form-login" value="<?php echo $jumlah;?>" id="jumlah" placeholder="Jumlah .." required="">


            <label>Total</label>
            <input type="text" name="total" class="form-login" value="<?php echo $total;?>" readonly="">

            <input type="submit" name="tombol-total" class="tombol-login" value="Beli">
           </div>

</form>
</html>