<?php 
	// konek mysql
$db = mysqli_connect("localhost", "root", "", "websekolah");

$result = mysqli_query($db, "SELECT * FROM akun");
if ( !$result) {
	echo mysqli_error($db);
}

// mysqli_fetch :

// mysqli_fetch_row() // return = array numeric
// mysqli_fetch_assoc() // return = array assoc
// mysqli_fetch_array() // return = array numeric % assoc
// mysqli_fetch_object() // return = object
// while ($akun = mysqli_fetch_assoc($result)) {
// 	print_r($akun["nama"]); }
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php mysql</title>
</head>
<body>
	<h1>Database Sekolah</h1>
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
			<td> <a href="">Edit |</a>
				 <a href="hapus.php?id=<?= $row["id"] ?>">Delete</a></td>
		</tr>
	<?php } ?>
	</table>
	<a href="addnew.php">Tambah Data</a>
</body>
</html>