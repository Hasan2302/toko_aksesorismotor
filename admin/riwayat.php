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
						<a class="link" href="">Colaborasi</a>
						<a class="link1" href="halamanlogin.php">Log Out</a>
	</nav>
<form id="form l"name="form l" method="post"action="">
		<table width="90%"height=""valign=""cellspcacing="1" border="0" class="tbl">
					<br>
					<tr>
			<td align=""valign="top">
					<h2 align="center">Tabel Riwayat</h2>
<a href="tabel.php"><input type="Button" value="Kembali"></a>
<hr>

		<table border="0" width="100%">
		<tr class="tbl5" align="center" style="background-color: white; color: black">
			<td>Id Pembeli</td>
			<td>Kode Barang</td>
			<td>Nama Pembeli</td>
			<td>Tanggal</td>
			<td>Membeli</td>
			<td>Harga</td>
			<td>Jumlah</td>
			<td>Total</td>
			<td>Action</td>
			<td>Action</td>
		</tr>
<?php
		include "config.php";
		$no=1;
		$tampil = mysqli_query($host, "SELECT * FROM tb_pembeli");
		while($data = mysqli_fetch_array($tampil)){
?>
		<tr align="center">
			<td><?php echo $data['id_pembeli'];?><hr></td>
			<td><?php echo $data['nama_pembeli'];?><hr></td>
			<td><?php echo $data['kode'];?><hr></td>
			<td><?php echo $data['tanggal_pembelian'];?><hr></td>
			<td><?php echo $data['membeli'];?><hr></td>
			<td><?php echo $data['harga'];?><hr></td>
			<td><?php echo $data['jumlah'];?><hr></td>
			<td><?php echo $data['total'];?><hr></td>

			<td>
			<a href="hapus1.php?id_pembeli=<?php echo $data['id_pembeli'];?>"><input type="Button" value="Hapus"></a><hr></td>
			<td><script>
    function printPage() {
        window.print();
    }
    </script><input type="Button" onclick="printPage()" value="Print"></a><hr></td>
		</tr>
<?php
}
?>
		</table>
		</tr>
		</table>
		</form>
</body>
</html>