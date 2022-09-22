<?php 
// Array di dalam array
// (ARRAY ASSOC)

$students = [
	["nama" => "Kevin Darmawan",
	"kelas" => "X TKJ 1", 
	"nisn" => "234234123", 
	"jurusan" => "Teknik Komputer Jaringan", 
	"email" => "kevin@email.com",
	"foto" => "../img/man1.jpg"],
	
	["nama" => "Asep Sudirman",
	"kelas" => "X TKJ 2", 
	"nisn" => "2348906", 
	"jurusan" => "Teknik Komputer Jaringan", 
	"email" => "Assep@email.com",
	"foto" => "../img/man2.jpg"],

	["nama" => "Udin Udman",
	"kelas" => "XI MM 1", 
	"nisn" => "7890234", 
	"jurusan" => "multimedia", 
	"email" => "udman@email.com",
	"foto" => "../img/man3.jpg"]
];


 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Latihan Array</title>
 	<style type="text/css">
 		.foto {
 			width: 75px;
 			height: 75px;
 			border-radius: 10%;
 		}
 		body {
 			background-color: #131516;
 			color: #d8d4cf;
 		}
 	</style>
 </head>
 <body style="font-family: arial;">
 	<h1 style="margin: 0px;">Daftar Siswa</h1>


 	<?php foreach ($students as $student) : ?>
 	<ul>
 		<img class="foto" src="<?php echo $student['foto']; ?>"></li>
 		<li>Nama : <?= $student["nama"]; ?></li>
 		<li>Kelas : <?= $student["kelas"]; ?></li>
 		<li>NISN : <?= $student["nisn"]; ?></li>
 		<li>Jurusan : <?= $student["jurusan"]; ?></li>
 		<li>Email : <?= $student["email"]; ?></li>
 	</ul>
 	<hr>
 <?php endforeach; ?>

 </body>
 </html>