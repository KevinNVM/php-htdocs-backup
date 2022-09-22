<?php 
require 'fungsi.php';
	//koneksi DBSM

	// check input 
	if (isset($_POST['submit'])) {
		//get data from form

		if ( tambah($_POST) > 0 ) {
			echo "<script>alert('Data berhasil ditambahkan');
				 </script>";
		} else {
			echo "<script>alert('Data gagal ditambahkan');
				</script>";
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
			<li><input type="password" name="password" placeholder="Password" required></li>
			<li><button type="submit" name="submit">Buat</button></li>
		</ul>
	</form>
<footer>
	<a href="../latihanlogin/index.php" img ><button>Kembali</button></a>
</footer>
</body>
</html>