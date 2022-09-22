<?php
 $db = mysqli_connect("localhost", "root", "", "dataweb");


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
        $password =  htmlspecialchars($data['password']);


        //query insert data
        $query = "INSERT INTO datalogin 
        VALUES ('', '$nama', '$password')";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM datalogin WHERE id = $id");
    mysqli_affected_rows($db);
}

function ubah($data) {
    global $db;

        $id = $data['id'];
        $nama = htmlspecialchars($data['nama']);
        $password =  htmlspecialchars($data['password']);

        //query insert data
        $query = "UPDATE datalogin SET
                nama = '$nama', 
                password = '$password' WHERE id = $id ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
}

function cari($keyword) {
        $query = "SELECT * FROM datalogin WHERE 
        nama LIKE '%$keyword%' OR 
        username LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR 
        jabatan LIKE '%$keyword%' ";
        return query($query);
}

function masuk($nama, $password) {
       // cek apakah nama dan password ada di database
       $query = "SELECT * FROM datalogin WHERE 
       nama = '$nama' AND 
       password = $password ";
       
      if ( $nama >= 1 && $password >= 1) {
             header("location admin.php");
      }
      
}


 ?>