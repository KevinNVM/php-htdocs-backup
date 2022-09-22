<?php
session_start();

// cek session login
if ( !isset($_SESSION['login']) ) {
	header("Location: login.php");
	exit;
}

require '../Function-Lib/functions.php';

$id = $_GET['id'];

if ( hapus($id) > 0) {
	echo "<script>alert('Data berhasil dihapus!'); window.location.href = 'index.php'</script>";
} else {
	echo "<script>alert('Data gagal dihapus!'); window.location.href = 'index.php'</script>";
}


 ?>