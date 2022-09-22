<?php 

$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'db-toko';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function ubah($data) {
	global $conn;

	// ambil data dari input
	$id = $data['id'];
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$passord = htmlspecialchars($data['passord']);
	$hp = htmlspecialchars($data['hp']);



	
	

	// query insert data
	$query = "UPDATE tb_admin SET 
				admin_name = 
			WHERE no = $no
				";


			mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}