<?php 

// $siswa = [
//   "nama" => "Kevin Darmawan",
//   "nisn" => "9012863",
//   "email" => "lorem@ipsum.com"
// ];

$dbh = new PDO('mysql:host=localhost;dbname=datasekolah', 'root', '');
$db = $dbh->prepare("SELECT * FROM datasiswa");
$db->execute();
$siswa = $db->fetchAll(PDO::FETCH_ASSOC);



$data = json_encode($siswa);

echo $data

?>