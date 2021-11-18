<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="css/styleeee.css" type="text/css">
		<link href="Sunset.jpg" rel="shortcut icon">
	</head>
<body class="body">
	<nav id="nav">
						<a class="link" href="index2.php">home</a>
						<a class="link" href="aboutme.php">about</a>
						<a class="link" href="../admin/halamanlogin.php">Admin</a>
						<a class="link1" href="halamanlogin.php">Log Out</a>
	</nav>
<form id="form l"name="form l" method="post"action="">
		<table width="90%"height=""valign=""cellspcacing="1" border="0" class="tbl">
					<br>
					<tr>
			<td align=""valign="top">
					<h2 align="center">Tabel Barang</h2>
<a href="index2.php"><input type="Button" value="Kembali"></a>
<hr>
	<form method="POST" action="tabel.php" class="search">
                <table border="0">
                    <tr>
                        <input type="text" name="cari">
                        <input type="submit" name="go" class="tombol" value="Cari">
                        <a href="tabel.php"><input type="button" value="Refresh"></a>
                    </tr>
                </table>
                </form>
		<table border="0" width="100%">
		<tr class="tbl5" align="center" style="background-color: white; color: black">
			<td>Kode Barang</td>
			<td>Nama Barang</td>
			<td>Stok</td>
			<td>Merek</td>
			<td>Satuan</td>
			<td>Harga</td>
			<td>Gambar</td>
			<td>Action</td>
		</tr>
<?php 
			include "config.php";
			if(isset($_POST['go'])){
			$cari = $_POST['cari'];
			$sql = "SELECT * FROM tb_barang WHERE nama_barang LIKE '%".$cari."%' OR kode LIKE  '%".$cari."%'";
			}else{
				$sql = "SELECT * FROM tb_barang";
			}
			$hasil = mysqli_query($host, $sql);
			while($data = mysqli_fetch_array($hasil)){
					?>
		<tr align="center">
			<td><?php echo $data['kode'];?><hr></td>
			<td><?php echo $data['nama_barang'];?><hr></td>
			<td><?php echo $data['stok'];?><hr></td>
			<td><?php echo $data['merek'];?><hr></td>
			<td><?php echo $data['satuan'];?><hr></td>
			<td><?php echo $data['harga'];?><hr></td>
			<td><img src="<?php echo "img/".$data['gambar']; ?>"><hr></td>

			<td><a href="beli.php?kode=<?php echo $data['kode'];?>"><input type="Button" value="Beli"></a><hr></td>
		</tr>
<?php
}
?>
		</table>
					</td>
					<td width="20%"align="top"background="" class="tb2">
						<br>
						<br>
						<hr color="black">
						<hr color="black">
						<hr color="black">
						<asside class="sidebar">
						<div class="widget">
							<h2>TABEL BARANG</h2>
							<a href="tabel.php">KLIK</a>
							</div>
						</asside>
						<hr color="black">
						<hr color="black">
						<hr color="black">
						<asside class="sidebar">
								<div class="widget">
									<h2>RIWAYAT</h2>
									<a href="riwayat.php">KLIK</a>
								</div>
						</asside>


			</td>

		</tr>
		</table>
		</form>
</body>
</html>