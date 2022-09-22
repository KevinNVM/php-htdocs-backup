<?php 
session_start();

// cek session login
if ( !isset($_SESSION['login']) ) {
	header("Location: login.php");
	exit;
}


// impor function dari lib
require '../Function-Lib/functions.php';


// pagination
// CONFIG

$jumlahBaris = 6;
$jumlahData = count(query('SELECT * FROM datasiswa'));
$jumlahHalaman = ceil($jumlahData / $jumlahBaris);

$halamanAktif = ( isset($_GET['halaman']) ) ? $_GET['halaman'] : 1;
$awalData = ( $jumlahBaris * $halamanAktif  ) - $jumlahBaris;




// query
$students = query("SELECT * FROM datasiswa ORDER BY no ASC LIMIT $awalData, $jumlahBaris");


if (isset($_POST['cari'])) {
	$students = cari($_POST['keyword'], $awalData, $jumlahBaris);
} 


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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
		.titel {
			display: inline-flex;
			margin: 10px;
			
		}
		.button-my {
			display: inline-flex;
			margin: 0px;
			float: right;
			padding-top:32px;
			font-size: large;
		}
		.btn-new {
			font-size: large;
			display: inline-flex;
		}
	</style>
</head>
<body>

	<!-- navbar -->
	<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top user-select-none">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP & MySQL</a>
    <button style="color: whitesmoke;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav text-light">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" onclick="return confirm('Are you sure?')" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>
	<!-- end  navbar -->
<br><br><br>

	<p class="h1 text-center">Daftar Siswa</p>

<div class="container">
	<form class="d-flex user-select-none" method="post">
      <input id="keyword" name="keyword" class="form-control me-2" type="search" placeholder="Search by Keyword" aria-label="Search" autofocus autocomplete="off" value="">
      <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
    </form>
	<table class="table text-light">
  <thead>
   <tr>
			<th scope="col">No.</th>
			<th scope="col"><a href="tambah.php">Add New</a></th>
			<th scope="col">Foto</th>
			<th scope="col">Nama</th>
			<th scope="col">Kelas</th>
			<th scope="col">NISN</th>
			<th scope="col">Jurusan</th>
			<th scope="col">Email</th>
		</tr>
  </thead>
  <tbody>

  	<?php $no = $awalData + 1;  ?>
		<?php foreach ( $students as $student ) : ?>
    <tr>
			<th scope="row"><?php echo $no ?></th>
			<td>
				<a href="ubah.php?id=<?php echo $student['no'] ?>">Edit</a> |
				<a onclick="return confirm('Are You Sure?')
" id="confirm" href="hapus.php?id=<?php echo $student['no'] ?>">Delete</a>
			</td>
			<td><a target="_blank" href="../img/<?php echo $student['foto'] ?>"><img alt="img" src="../img/<?php echo $student['foto']; ?>"></a></td>
			<td><?php echo $student['nama']; ?></td>
			<td><?php echo $student['kelas']; ?></td>
			<td><?php echo $student['nisn']; ?></td>
			<td><?php echo $student['jurusan']; ?></td>
			<td><?php echo $student['email']; ?></td>
		</tr>
		<?php $no++; ?>
	<?php endforeach; ?>
	


  </tbody>
</table>
</div>

	</table>
	<div class="container user-select-none">
	<!-- navigasi halaman/baris per halaman -->

	<?php if ($halamanAktif > 1) : ?>

	<a href="?halaman=<?php echo $halamanAktif - 1 ?>"><i class="bi bi-arrow-left"></i></a>
<?php endif; ?>


	
	<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
		<?php if ($i == $halamanAktif) : ?>
		<a class="fw-bolder text-info h5" href="?halaman=<?php echo $i; ?>"><?php echo $i ?></a>
	<?php else : ?>
		<a class="h6" href="?halaman=<?php echo $i; ?>"><?php echo $i ?></a>
	<?php endif; ?>

	<?php endfor; ?>

<?php if ($halamanAktif < $jumlahHalaman) : ?>

	<a href="?halaman=<?php echo $halamanAktif + 1 ?>"><i class="bi bi-arrow-right"></i></a>
<?php endif; ?>

	</div>

	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>