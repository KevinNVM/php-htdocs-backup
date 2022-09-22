<?php 
	// koneksi database

// mysqli_connect('namahost', 'usernamesql', 'password', 'namaDATABASE');
$conn = mysqli_connect("localhost", "root", "", "datasekolah");

// ambil data dari tabel / query
$result = mysqli_query($conn, "SELECT * FROM datasiswa");
if( !$result ) {
	echo "mysqli error";
}

// ambil data dari $result (fetch)
// 1. mysqli_fetch_row()
// 2. mysqli_fetch_assoc()
// 3. mysqli_fetch_array()
// 4. mysqli_fetch_object()

// menampilkan data
// mysqli_fetch hanya mengembalikan 1 data jadi harus menggunakan looping

// menampilkan semua data dari table
// while ($siswa = mysqli_fetch_assoc($result)) {
// var_dump($siswa);
// }


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	</style>
</head>
<body>

	<h1>Daftar Siswa</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		
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
		<?php while ( $datasiswa = mysqli_fetch_assoc($result) ): ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td>
				<a href="#">Edit</a>
				<a href="#">Delete</a>
			</td>
			<td><img src="../img/<?php echo $datasiswa['foto']; ?>"></td>
			<td><?php echo $datasiswa['nama']; ?></td>
			<td><?php echo $datasiswa['kelas']; ?></td>
			<td><?php echo $datasiswa['nisn']; ?></td>
			<td><?php echo $datasiswa['jurusan']; ?></td>
			<td><?php echo $datasiswa['email']; ?></td>
		</tr>
		<?php $no++; ?>
	<?php endwhile; ?>

	</table>

</body>
</html>