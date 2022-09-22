<?php 
// impor function dari lib
require '../Function-Lib/functions.php';

$students = query("SELECT * FROM datasiswa");


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHPMySQL</title>
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
			display: inline-flex;
			margin: 10px;
			
		}
		.btn-new {
			display: inline-flex;
			margin: 0px;
			float: right;
			padding-top:32px;
		}
	</style>
</head>
<body>

	<h1 class="title">Daftar Siswa</h1>
	<a href="tambah.php"><h3 class="btn-new">Add New</h3></a>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No.</th>
			<th>⋮</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>NISN</th>
			<th>Jurusan</th>
			<th>Email</th>
		</tr>

		<?php $no = 1; ?>
		<?php foreach ( $students as $student ) : ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td>
				<a href="#">Edit</a>
				<a href="#">Delete</a>
			</td>
			<td><img src="../img/<?php echo $student['foto']; ?>"></td>
			<td><?php echo $student['nama']; ?></td>
			<td><?php echo $student['kelas']; ?></td>
			<td><?php echo $student['nisn']; ?></td>
			<td><?php echo $student['jurusan']; ?></td>
			<td><?php echo $student['email']; ?></td>
		</tr>
		<?php $no++; ?>
	<?php endforeach; ?>

	</table>

</body>
</html>