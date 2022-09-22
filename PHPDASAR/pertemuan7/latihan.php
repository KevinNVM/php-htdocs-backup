<?php 
//superglobal variabel php
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION

// contoh mengisi var superglobal GET :
// (url)?(index)=(isi elemen)&(index)=(isi elemen)
// http://localhost/phpdasar/pertemuan7/latihan1.php?angka=dua puluh&huruf=abcd


$_GET

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<h1><?php echo $_GET["angka"] ?> </h1>
 	<h1><?php echo $_GET["huruf"] ?> </h1>
 </body>
 </html>