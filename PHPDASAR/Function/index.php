<?php 

// FUNCTION
// ex: 

// date()
// echo date("l,d-M-y");
// l = nama hari
// d = tgl (angka)
// M = bulan (huruf)
// y = tahun (angka)

// time()
// echo time() <== Output : <detik dari 1 januari 1970>
// echo date("l" , time() + 60 * 60 * 24); <== Output :  <hari dari time()>

// mktime
// mktime(<jam>, <menit>, <detik>, <bulan>, <tanggal>, <tahun>)
// echo date("l", mktime(0, 0, 0, 3, 15, 2022)) <== Output : <hari di tanggal 15-3-22>

// strtotime
// echo date("l", strtotime("15 mar 2022")) <== Output : <hari di tgl 15-mar-22>

// strlen() ==> Panjang String
// strchmp() ==> membandingkan string
// explode() ==> memecah array
// htmlspecialchars() ==> mencegah syntax html

// var_dump()
// isset()
// print_r()
// empty()
// die()
// sleep()

// FUNCTION SENDIRI : 
// function namaFunction(<tempat parameter>) {
// 	<isi function>
// }
// ex:

function greetings($i = "Datang", $j = "Admin") {
	return "Selamat $i, $j";
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Function</title>
 </head>
 <body>
 
<h1><?php echo greetings("Pagi", "Owner") ?></h1>
<hr>
 </body>
 </html>