<?php 

session_start();

// hapus sesi
session_destroy();
session_unset();
$_SESSION = [];

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

// redirect ke halaman login
header("Location: login.php");