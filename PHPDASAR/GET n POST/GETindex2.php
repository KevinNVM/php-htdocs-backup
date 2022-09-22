<?php 
	// cek apakah ada data di $_GET

	if ( !isset($_GET['nama']) || !isset($_GET['nisn']) || !isset($_GET['kelas']) || !isset($_GET['jurusan']) || !isset($_GET['foto']) || !isset($_GET['email']) ) {
		// redirect user
		header("Location: getindex.php");
		exit;
	} 


 ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Siswa</title>
	<style type="text/css">
		body {
 			background-color: #131516;
 			color: #d8d4cf;
 			font-family: arial;
 		}
 		.back:link {
 			text-decoration: none;
 		}
 		.foto {
 			width: 210px;
 			height: 210px;
 			border-radius: 10%;
	</style>
</head>
<body>
	<h1 style="margin-top: 0px;">Detail Siswa</h1>
<ul>
	<img class="foto" src="<?php echo $_GET['foto'] ?>">
	<li><?php echo $_GET['nama'] ?></li>
	<li><?php echo $_GET['kelas'] ?></li>
	<li><?php echo $_GET['nisn'] ?></li>
	<li><?php echo $_GET['jurusan'] ?></li>
	<li><?php echo $_GET['email'] ?></li>
</ul>

<a href="getindex.php" style="font-size: 20px;" class="back">
← Back</a>
</body>
</html>