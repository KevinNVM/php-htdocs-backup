<?php
 $db = mysqli_connect("localhost", "root", "", "websekolah");


 function query($query) {
 	global $db;
 	$result = mysqli_query($db, $query);
 	$rows;
 	while ($row = mysqli_fetch_assoc($result)) {
 		$rows[] = $row;
 	}
 	return $rows;
 }


function tambah($data) {
        global $db;
        $nama = htmlspecialchars($data['nama']);
        $email = htmlspecialchars($data['email']);
        $username = htmlspecialchars($data['username']);
        $password =  htmlspecialchars($data['password']);
        $jabatan = htmlspecialchars($data['jabatan']);
        $foto = htmlspecialchars($data['foto']);

        //query insert data
        $query = "INSERT INTO akun 
        VALUES ('', '$nama', '$email', '$username', '$password', '$jabatan', '$foto')
        ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM akun WHERE id = $id");
    mysqli_affected_rows($db);
}

function ubah($data) {
    global $db;

        $id = $data['id'];
        $nama = htmlspecialchars($data['nama']);
        $email = htmlspecialchars($data['email']);
        $username = htmlspecialchars($data['username']);
        $password =  htmlspecialchars($data['password']);
        $jabatan = htmlspecialchars($data['jabatan']);
        $foto = htmlspecialchars($data['foto']);

        //query insert data
        $query = "UPDATE akun SET
                nama = '$nama', 
                email = '$email', 
                username = '$username', 
                password = '$password', 
                jabatan = '$jabatan', 
                foto = '$foto' WHERE id = $id ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
}


 ?>