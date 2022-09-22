<?php 	
require_once '../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
require '../../Function-Lib/functions.php';


// pagination
// CONFIG

$jumlahBaris = 5;
$jumlahData = count(query('SELECT * FROM datasiswa'));
$jumlahHalaman = ceil($jumlahData / $jumlahBaris);

$halamanAktif = ( isset($_GET['halaman']) ) ? $_GET['halaman'] : 1;
$awalData = ( $jumlahBaris * $halamanAktif  ) - $jumlahBaris;




// query
$students = query("SELECT * FROM datasiswa ORDER BY no ASC");


if (isset($_POST['cari'])) {
	$students = cari1($_POST['keyword']);
} 



$html= '<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<style>
 	body {
			margin: 0px;
			font-family: arial;
		}
		img {
			width: 40px;
			height: 40px;
			border-radius: 20%;
			margin: 0;
		}
	table {
		margin: 0px;
	}
 	</style>
 </head>
 <body>
<h1>Daftar Siswa</h1>
<table border="1" cellpadding="10" cellspacing="0">

	<tr>
	<th>No</th>
	<th>Foto</th>
	<th>Nama</th>
	<th>Kelas</th>
	<th>NISN</th>
	<th>Jurusan</th>
	<th>Email</th>
	</tr>';  

$i = 1;
	foreach ( $students as $row ) {
		$html .= '
		<tr>
		<td>'.$i++.'</td>
		<td><img src="../../img/'. $row['foto'] .'"></td>
		<td>'. $row['nama'] .'</td>
		<td>'. $row['kelas'] .'</td>
		<td>'. $row['nisn'] .'</td>
		<td>'. $row['jurusan'] .'</td>
		<td>'. $row['email'] .'</td>

		</tr>

		';
	}


$html .='</table>

 </body>
 </html>';





$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$name = 'docname'. date("dmY").'.pdf';
$mpdf->Output($name, 'I');


 ?>
 