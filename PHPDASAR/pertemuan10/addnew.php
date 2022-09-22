<?php 
require 'functions.php';
	//koneksi DBSM

	// check input 
	if (isset($_POST['submit'])) {
		//get data from form

		if ( tambah($_POST) > 0 ) {
			echo "<script>alert('Data berhasil ditambahkan');
				document.location.href = 'index.php'; </script>";
		} else {
			echo "<script>alert('Data gagal ditambahkan');
				document.location.href = 'index.php'</script>";
		}

				
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form method="post" action="">
		<ul>
			<li><input type="text" name="nama" placeholder="Nama" required></li>
			<li><input type="Email" name="email" placeholder="Email" required></li>
			<li><input type="text" name="username" placeholder="Username" required></li>
			<li><input type="password" name="password" placeholder="Password" required></li>
			<li><input type="text" name="jabatan" placeholder="Jabatan" required></li>
			<li><input type="text" name="foto" placeholder="Foto" required></li>
			<li><button type="submit" name="submit">Tambah</button></li>
		</ul>
	</form>
<footer>
	<a href="../pertemuan10/index.php">Kembali</a>
</footer>
</body>
</html>