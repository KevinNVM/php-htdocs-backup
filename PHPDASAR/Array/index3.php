<?php 
$students = ["Kevin Darmawan","X TKJ 1", "234234123", "Teknik Komputer Jaringan", "kevin@email.com"]




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

 	<ul>
 		<!-- <li>Nama Siswa</li>
 		<li>Kelas Siswa</li>
 		<li>NISN Siswa</li>
 		<li>Jurusan Siswa</li>
 		<li>Email Siswa</li> -->

 		<?php foreach ($students as $student) : ?>
 			<li><?php echo $student; ?></li>
 		<?php endforeach; ?>


 	</ul>

 </body>
 </html>