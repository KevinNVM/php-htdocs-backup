<?php 
// Array di dalam array
// (ARRAY NUMERIC)

$students = [
	["Kevin Darmawan",
	"X TKJ 1", 
	"234234123", 
	"Teknik Komputer Jaringan", 
	"kevin@email.com"],
	
	["Asep Sudirman",
	"X TKJ 2", 
	"3490782", 
	"Teknik Komputer Jaringan", 
	"Assep@email.com"],

	["Udin Man",
	"XI MMM 1", 
	"234079247", 
	"Multimedia", 
	"udman@email.com"]
]




 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<h1>Daftar Siswa</h1>


 	<?php foreach ($students as $student) : ?>
 	<ul>
 		<li>Nama : <?php echo $student[0]; ?></li>
 		<li>Kelas : <?php echo $student[1]; ?></li>
 		<li>NISN : <?php echo $student[2]; ?></li>
 		<li>Jurusan : <?php echo $student[3]; ?></li>
 		<li>Email : <?php echo $student[4]; ?></li>
 	</ul>
 <?php endforeach; ?>

 </body>
 </html>