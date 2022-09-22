<?php 
require 'functions.php';
	//ambil data dari url
	$id = $_GET["id"];
	$akun = query("SELECT * FROM akun WHERE id = $id")[0];


	// check input 
	if (isset($_POST['submit'])) {

		if ( ubah($_POST) > 0 ) {
			echo "<script>alert('Data berhasil diubah');
				document.location.href = 'index.php'; </script>";
		} else {
			echo "<script>alert('Data gagal diubah');
				document.location.href = 'index.php'</script>";
		}

				
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data</h1>
	<form method="post" action="">
		<ul>
			<input type="hidden" name="id" value="<?= $akun['id'] ?>">
			<li>
				<label for="nama">Nama : </label>
				<input value="<?= $akun['nama'] ?>" id="nama" type="text" name="nama" placeholder="Nama" required>
			</li>
			<li>
				<label for="email">email : </label>
				<input value="<?= $akun['email'] ?>" id="email" type="Email" name="email" placeholder="Email" required>
			</li>
			<li>
				<label for="username">username : </label>
				<input value="<?= $akun['username'] ?>" id="username" type="text" name="username" placeholder="Username" required>
			</li>
			<li>
				<label for="password">password : </label>
				<input value="<?= $akun['password'] ?>" id="password" type="text" name="password" placeholder="Password" required>
			</li>
			<li>
				<label for="jabatan">jabatan : </label>
				<input value="<?= $akun['jabatan'] ?>" id="jabatan" type="text" name="jabatan" placeholder="Jabatan" required>
			</li>
			<li>
				<label for="foto">foto : </label>
				<input value="<?= $akun['foto'] ?>"id="foto" type="text" name="foto" placeholder="Foto" required>
			</li>
			<li>
				<button type="submit" name="submit">Ubah</button>
			</li>
		</ul>
	</form>
<footer>
	<a href="../pertemuan12/index.php">Kembali</a>
</footer>
</body>
</html>