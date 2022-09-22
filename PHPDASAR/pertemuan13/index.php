<?php 
	// konek mysql
require 'functions.php';
$result = mysqli_query($db, "SELECT * FROM akun");

// mysqli_fetch :

// mysqli_fetch_row() // return = array numeric
// mysqli_fetch_assoc() // return = array assoc
// mysqli_fetch_array() // return = array numeric % assoc
// mysqli_fetch_object() // return = object
// while ($akun = mysqli_fetch_assoc($result)) {
// 	print_r($akun["nama"]); }

//search 
if (isset($_POST['cari'])) {
	// code...
	$result = cari($_POST['keyword']);

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php mysql</title>
	<style type="text/css">
		body {
			background-color: #FFD865;
		}
		div.title {
			background-color: #FFCC38;
		}
	</style>
</head>
<body>
	<div class="title"><h1>Database Sekolah</h1></div>
	<hr>
	<form action="" method="post">
		<input type="text" name="keyword" placeholder="Search.." autofocus autocomplete="off" value="<?php if (isset($_POST['cari'])): ?><?= $_POST['keyword'] ?><?php endif ?>" style="width: 213px; height: 20px;">
		<button type="submit" name="cari">Cari</button>
		<button style="height: 30px;"><a href="addnew.php">Tambah Data</a></button>
		<?php if (isset($_POST['cari'])): ?>
			<div><h3>Menampilkan Hasil dari pencarian : "<?= $_POST['keyword'] ?>"</h3></div>
		<?php endif ?>
	</form>
	<br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>E-mail</th>
		<th>Username</th>
		<th>Password</th>
		<th>Jabatan</th>
		<th>Foto</th>
		<th>Option</th>
		</tr>
		
	<?php foreach ($result as $row) { ?>
		<tr>
			<td><?php echo $row["id"] ?></td>
			<td><?php echo $row["nama"] ?></td>
			<td><?php echo $row["email"] ?></td>
			<td><?php echo $row["username"] ?></td>
			<td><?php echo $row["password"] ?></td>
			<td><?php echo $row["jabatan"] ?></td>
			<td><?php echo $row["foto"] ?></td>
			<td> <a href="ubah.php?id=<?= $row["id"] ?>"><button>Edit</button></a>
				 <a href="hapus.php?id=<?= $row["id"] ?>"><button>Delete</button></a></td>
		</tr>
	<?php } ?>
	</table>
 	<hr>
</body>
</html>