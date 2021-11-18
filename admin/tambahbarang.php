<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/styleeee.css">
</head>
<body class="bd2">
</body>
<form action="tb_barang.php" method="POST" class="frm3" enctype="multipart/form-data">
<div class="kotak-login">
        <h1 class="p-login">Tambah</h1><a href="tabel.php"><input type="Button" value="Kembali"></a>
        <hr>
        <br>
            <label>Kode Barang</label>
            <input type="text" name="kode" class="form-login" placeholder="Kode Barang .." required="">

            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-login" placeholder="Nama Barang .." required="">

            <label>Merek</label>
            <input type="text" name="merek" class="form-login" placeholder="merek .." required="">

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
            <input type="text" name="harga" class="form-login" placeholder="Harga .." required="">

            <label>Gambar</label>
            <input type="file" name="gambar" class="form-login">

            <input type="submit" class="tombol-login" value="Simpan">
            <input type="reset"  value="RESET">
            <br>
            <br>
            <br><br><br>
    </div>
</form>
</body>
</html>