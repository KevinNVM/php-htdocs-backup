<?php 	
// koneksi database
require '../Function-Lib/functions.php';


// cek button submit
if ( isset($_POST['submit']) ) {

 // cek insert data success or fail
	if ( tambah($_POST) > 0 ) {
		echo "<script>alert('Data BERHASIL ditambahkan!'); window.location.href = 'index.php'</script>";
	} else {
		echo "<script>alert('Data GAGAL ditambahkan!'); window.location.href = 'index.php'</script>";
	}



}



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- alertify -->
	
	<meta name="viewport" content="width=device-width">
	<title>Add New</title>
	<style type="text/css">
		body {
			background-color: #131516;
			color: #d8d4cf;
			margin: 1px;
			font-family: arial;
		}
		img {
			width: 40px;
			height: 40px;
			border-radius: 20%;
		}
		a {
			color: whitesmoke;
			text-decoration: none;
		}
		a:hover {
			color: darkgray;
		}
		.title {
			display: flex;
			margin: 10px;
			
		}
		.btn {
			display: inline-flex;
			margin: 0px;
			float: right;
			color: whitesmoke;
		}
		.table-data {
			text-align: right;
			font-size: large;
		}
		.input-text {
			width: 17.5rem;
			height: 2rem;
			font-size: 80%;
			background-color: #181a1b;
			color: #e8e6e3;
			border-radius: 5%;
		}
		.btn-submit {
			font-size: 75%;
			background-color: royalblue;
			border-radius: 50px;
			color: #e8e6e3;
			box-shadow: 20px;
		}
		.btn-submit:hover {
			background-color: darkslateblue;
		}
		.btn:hover {
			color: grey;
		}
	</style>
</head>
<body>
		<h1 class="title">Tambah Data Siswa</h1>
		<a href="index.php"><h3 class="btn">Kembali</h3></a>

		<form method="post" action="" enctype="multipart/form-data">
				
			<table class="table-data" border="0" cellpadding="5" cellspacing="0">
				<tr>
					<th><label for="nama">Nama :</label></th>
					<th><input class="input-text" type="text" name="nama" id="nama" required></th>
				</tr>
				<tr>
					<th><label for="kelas">Kelas :</label></th>
					<th><input class="input-text" type="text" name="kelas" id="kelas" required></th>
				</tr>
				<tr>
					<th><label for="nisn">NISN :</label></th>
					<th><input class="input-text" type="text" name="nisn" id="nisn" required></th>
				</tr>
				<tr>
					<th><label for="jurusan">Jurusan :</label></th>
					<th><input class="input-text" type="text" name="jurusan" id="jurusan" required></th>
				</tr>
				<tr>
					<th><label for="email">E-Mail :</label></th>
					<th><input class="input-text" type="email" name="email" id="email" required></th>
				</tr>
				<tr>
					<th><label for="foto">Foto :</label></th>
					<th><input class="input-text" type="file" name="foto" id="foto" ></th>
				</tr>
				<tr>
					<th><button type="submit" class="btn btn-primary" name="submit" id="foto">Kirim</button></th>
				</tr>
			</table>

		</form>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
