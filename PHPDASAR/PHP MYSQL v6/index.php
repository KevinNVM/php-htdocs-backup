<?php 
// impor function dari lib
require '../Function-Lib/functions.php';
// query
$students = query("SELECT * FROM datasiswa ORDER BY no ASC");
if (isset($_POST['cari'])) {
	$students = cari($_POST['keyword']);
} 


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
	<div class="container">
	<!-- navbar -->
	<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP & MySQL</a>
    <a href="tambah.php"><h3 class="btn-new">Tambah Data</h3></a>
    <form class="d-flex" method="post">
      <input id="keyword" name="keyword" class="form-control me-2" type="search" placeholder="Search by Keyword" aria-label="Search" autofocus autocomplete="off" value="">
      <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
    </form>
  </div>
</nav>
	<!-- end  navbar -->
	

	<table border="10" cellpadding="10" cellspacing="0">
		
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
				<a href="ubah.php?id=<?php echo $student['no'] ?>">Edit</a>
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

	</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>