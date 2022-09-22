<?php 
session_start();

// hapus sesi
session_destroy();
session_unset();
$_SESSION = [];

// redirect ke halaman login
header("Location: login.php");

 ?>