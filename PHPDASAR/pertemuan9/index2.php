<?php 
	// konek mysql
require 'functions.php';
$akun = query("SELECT * FROM akun");


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
	<title>PHP</title>
</head>
<body>
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

		<?php foreach ($akun as $akun1) { ?>
		<tr>
			<td><?php echo $akun1["id"] ?></td>
			<td><?php echo $akun1["nama"] ?></td>
			<td><?php echo $akun1["email"] ?></td>
			<td><?php echo $akun1["username"] ?></td>
			<td><?php echo $akun1["password"] ?></td>
			<td><?php echo $akun1["jabatan"] ?></td>
			<td><?php echo $akun1["foto"] ?></td>
			<td> <a href="">Edit |</a>
				 <a href="">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>