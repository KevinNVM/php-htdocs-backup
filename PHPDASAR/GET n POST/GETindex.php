<?php 
// $x = 10;

// function showX() {
// 	global $x;
// 	echo $x; 
// 	// $x can be used here
// 	// output : 10

// }
// showX();

// GET & POST

// GET
// $_GET['nama'] = "Kevin Darmawan";
// $_GET['jurusan'] = "Teknik Jaringan Komputer";
// print_r($_GET); // output : Array ( [nama] => Kevin Darmawan [jurusan] => Teknik Jaringan Komputer )


// (http://localhost/PHPDASAR/GET%20n%20POST/index.php?nama=Kevin%20Darmawan&jurusan=Teknik%20Komputer%20Jaringan)
//print_r($_GET); // output : Array ( [nama] => Kevin Darmawan [jurusan] => Teknik Komputer Jaringan )


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
 			font-family: arial;
 		}
 		a {
 			color: #d8d4cf;
 			text-decoration: none;
 		}
 	</style>
 </head>
 <body style="font-family: arial;">
 	<h1 style="margin: 0px;">Daftar Siswa</h1>


 	<ul>
 	<?php foreach ($students as $student) : ?>
 		<a href="getindex2.php?nama=<?php echo $student['nama'] ?>&kelas=<?php echo	$student['kelas'] ?>&nisn=<?php echo $student['nisn'] ?>&jurusan=<?php echo $student["jurusan"] ?>&email=<?php echo $student['email'] ?>&foto=<?php echo $student['foto'] ?>">
 			<img class="foto" src="<?php echo $student['foto']; ?>"></li>
 		<li>Nama : <?= $student["nama"]; ?></li>
 		</a>
 	<hr>
 <?php endforeach; ?>
 	</ul>
	<a href="POSTindex.php">Logout</a>
 </body>
 </html>