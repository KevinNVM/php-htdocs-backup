<?php 	
// koneksi database

// mysqli_connect('namahost', 'usernamesql', 'password', 'namaDATABASE');
$conn = mysqli_connect("localhost", "root", "", "datasekolah");

// ambil data dari tabel / query
// $result = mysqli_query($conn, "SELECT * FROM datasiswa");
// if( !$result ) {
// 	echo "mysqli error";
// }

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

// Functions

// fungsi utk query
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

// utk tambah
function tambah($data) {
	global $conn;

	// ambil data dari input 
	$nama = htmlspecialchars($data['nama']);
	$kelas = htmlspecialchars($data['kelas']);
	$nisn = htmlspecialchars($data['nisn']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$email = htmlspecialchars($data['email']);
	
	// upload foto
	$foto = upload();
	if (!$foto) {
		return false;
	}


	// query insert data
	$query = "INSERT INTO datasiswa VALUES
				('', '$nama', '$kelas', '$nisn', '$jurusan', '$email', '$foto') 
			";
			mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

}

// v11
function tambah2($data) {
	global $conn;

	// ambil data dari input 
	$nama = htmlspecialchars($data['nama']);
	$kelas = htmlspecialchars($data['kelas']);
	$nisn = htmlspecialchars($data['nisn']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$email = htmlspecialchars($data['email']);
	
	// upload foto
	$foto = upload();
	if (!$foto) {
		return false;
	}


	// query insert data
	$query = "INSERT INTO datasiswa VALUES
				('', '$nama', '$kelas', '$nisn', '$jurusan', '$email', '$foto') 
			";
			mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

}

// funtion upload

// tambah data
function upload() {

	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	// cek foto
	if ($error === 4) {
		echo "<script>alert('Silahkan Upload Foto')</script>";

		return false;

	}

	// cek ekstensi file
	$extFotoValid = ['jpeg', 'jpg', 'png'];
	$extFoto = explode('.', $namaFile);
	$extFoto = strtolower(end($extFoto));
	if ( !in_array($extFoto, $extFotoValid) ) {
		echo "<script>alert('Ekstensi tidak sah!')</script>";

		return false;
	}

	// cek ukuran
	$ukuranValid = 5000000;
	if ( $ukuranFile > $ukuranValid ) {
		echo "<script>
		alert('Ukuran Tidak diperbolehkan \n<1MB')
		</script>";

		return false;
	}

	// upload img
	// generate nama baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $extFoto;


	move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

	return $namaFileBaru;

}

//  v11
function upload2() {

	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	// cek foto
	if ($error === 4) {
		echo "<script>alert('Silahkan Upload Foto')</script>";

		return false;

	}

	// cek ekstensi file
	$extFotoValid = ['jpeg', 'jpg', 'png'];
	$extFoto = explode('.', $namaFile);
	$extFoto = strtolower(end($extFoto));
	if ( !in_array($extFoto, $extFotoValid) ) {
		echo "<script>alert('Ekstensi tidak sah!')</script>";

		return false;
	}

	// cek ukuran
	$ukuranValid = 5000000;
	if ( $ukuranFile > $ukuranValid ) {
		echo "<script>
		alert('Ukuran Tidak diperbolehkan \n<1MB')
		</script>";

		return false;
	}

	// upload img
	// generate nama baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $extFoto;


	move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

	return $namaFileBaru;

}


// hapus row
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM datasiswa WHERE no = $id");

	return mysqli_affected_rows($conn);
}





// ubah row
function ubah($data) {
	global $conn;

	// ambil data dari input
	$no = $data['no'];
	$nama = htmlspecialchars($data['nama']);
	$kelas = htmlspecialchars($data['kelas']);
	$nisn = htmlspecialchars($data['nisn']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$email = htmlspecialchars($data['email']);
	$gambarLama = htmlspecialchars($data['gambarLama']);


	// cek gambar baru
	if ($_FILES['foto']['error'] === 4) {
		$foto = $gambarLama;
	} else {
		$foto = upload();
	}

	
	

	// query insert data
	$query = "UPDATE datasiswa SET 
				nama = '$nama', 
				kelas = '$kelas', 
				nisn = '$nisn', 
				jurusan = '$jurusan', 
				email = '$email', 
				foto = '$foto'   
			WHERE no = $no
				";


			mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

// v11
function ubah2($data) {
	global $conn;

	// ambil data dari input
	$no = $data['no'];
	$nama = htmlspecialchars($data['nama']);
	$kelas = htmlspecialchars($data['kelas']);
	$nisn = htmlspecialchars($data['nisn']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$email = htmlspecialchars($data['email']);
	$gambarLama = htmlspecialchars($data['gambarLama']);


	// cek gambar baru
	if ($_FILES['foto']['error'] === 4) {
		$foto = $gambarLama;
	} else {
		$foto = upload();
	}

	
	

	// query insert data
	$query = "UPDATE datasiswa SET 
				nama = '$nama', 
				kelas = '$kelas', 
				nisn = '$nisn', 
				jurusan = '$jurusan', 
				email = '$email', 
				foto = '$foto'   
			WHERE no = $no
				";


			mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

// function cari v10

function cari($keyword, $awalData, $jumlahBaris) {
	$query = "SELECT * FROM datasiswa WHERE
				nama LIKE '%$keyword%'OR 
				kelas LIKE '%$keyword%'OR 
				nisn LIKE '%$keyword%'OR 
				jurusan LIKE '%$keyword%'OR 
				email LIKE '%$keyword%'
				LIMIT $awalData, $jumlahBaris";

	return query($query);
}

// function cari v10.2

function cari1($keyword) {
	$query = "SELECT * FROM datasiswa WHERE
				nama LIKE '%$keyword%'OR 
				kelas LIKE '%$keyword%'OR 
				nisn LIKE '%$keyword%'OR 
				jurusan LIKE '%$keyword%'OR 
				email LIKE '%$keyword%'";

	return query($query);
}


// register
function register($data) {
	global $conn;

$username = strtolower(stripcslashes($data["username"]));
$password = mysqli_real_escape_string($conn, $data["password"]);
$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// check unique username
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

	if ( mysqli_fetch_assoc($result) ) {
		
		echo "<script>
			alert('Username has already been taken')
		</script>";

		return false;
	}


	// cek confirm password
	if ($password !== $password2) {
	echo "<script>
		alert('Passwords did not Match!')
	</script>";
	return false;
		}

	// enkripsi pw
		$password = password_hash($password, PASSWORD_DEFAULT);


		// insert akun ke db
		mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password') ");;

		return mysqli_affected_rows($conn);
}






 ?>