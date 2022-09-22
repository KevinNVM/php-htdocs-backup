 <?php 
	// $siswa = [["nama1", "1", "085435324", "10"], ["nama2", "2", "0854332324", "10"], ["nama3", "3", "08544324324", "10"]] 

		// array asosiaitif

 $siswa = [["nama" => "nama1", 
 			"Absen" => "1",
 			"Telp" => "0812384796",
 			"Kelas" => "10"], 

 			["nama" => "nama2", 
 			"Absen" => "2",
 			"Telp" => "0813453434",
 			"Kelas" => "10"]];


	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Testo</title>
</head>
<body>

	<h1>Daftar Siswa</h1>
	<?php foreach ($siswa as $sus) { ?>
	<ul>
		<li><?php echo $sus["nama"] ?></li>
		<li><?php echo $sus["Absen"] ?></li>
		<li><?php echo $sus["Telp"] ?></li>
		<li><?php echo $sus["Kelas"] ?></li>

	</ul>
<?php } ?>
</body>
</html>