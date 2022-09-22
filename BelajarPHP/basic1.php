<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'sekolah';
$sql = "SELECT * FROM `data_siswa`;";

$konek_database = mysqli_connect($hostname, $username, $password, $database);
$query = mysqli_query($konek_database, $sql);
$hasil_query = mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
		<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
	<title>Coba</title>
</head>
<body>
<div class="container mt-4">
<ul class="list-group">
		<li class="list-group-item">ID : <?php echo $hasil_query["id"] ?></li>
		<li class="list-group-item">Nama : <?php echo $hasil_query["nama"] ?></li>
		<li class="list-group-item">Kelas : <?php echo $hasil_query["kelas"] ?></li>
		<li class="list-group-item">Jurusan : <?php echo $hasil_query["jurusan"] ?></li>
		<li class="list-group-item">No Telepon : <?php echo $hasil_query["notelp"] ?></li>
</ul>
</div>

<!-- Javascript with Popper -->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
<!-- /Javascript with Popper -->
</body>
</html>