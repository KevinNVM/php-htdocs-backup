<?php 
	require 'fungsi.php';
	$result = mysqli_query($db, "SELECT * FROM datalogin");

	if (isset($_POST['cari'])) {
	// code...
	$result = masuk($_POST['nama' && 'password']);

	if ( isset($masuk) > 0) {
	header("location: admin.php");
} else {
	echo ("Password salah");
}



}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
</head>
<body>
	<div>
		<h1>Login</h1>
	</div>
	<div>
		<form method="post" action="">
			<label for="nama">Nama </label>
			<input id="nama" type="text" name="nama" placeholder="Masukan Nama Anda">
			<br>
			<label for="password">Password </label>
			<input type="password" name="password" placeholder="Masukan Password Anda" id="password">
			<br>
			<button type="submit" name="Submit">Login</button>
		</form>
	</div>
	<h4>Tidak punya akun ? <a href="buatakun.php"><button>Buat Akun</button></a></h4>
</body>
</html>