<?php 
	require 'fungsi.php';
	$result = mysqli_query($db, "SELECT * FROM datalogin");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Login</title>
</head>
<body>
	<h1>Database Login Web</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Password</th>
		</tr>

		<?php foreach ($result as $row) { ?>
			<tr>
				<td><?= $row["id"] ?></td>
				<td><?= $row["nama"] ?></td>
				<td><?= $row["password"] ?></td>
			</tr>
		<?php } ?>
	</table>
	<a href="../latihanlogin/index.php" img ><button>Kembali</button></a>

</body>
</html>