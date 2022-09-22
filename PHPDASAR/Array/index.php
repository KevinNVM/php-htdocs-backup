<?php 

// Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

// menampilkan array
echo "var_dump:";
echo "<br>";
var_dump($hari); 
echo "<br>";
echo "<br>";
echo "Print_r:";
echo "<br>";
print_r($hari);
echo "<br>";
echo "<br>";
echo "echo:";
echo "<br>";
echo $hari[0];
echo "<br>";
echo "<br>";

// menambahkan array 
$hari[] = "Minggu";
// $hari[] = "Minggu"; <- output : array(7) { [0]=> string(5) "Senin" [1]=> string(6) "Selasa" [2]=> string(4) "Rabu" [3]=> string(5) "Kamis" [4]=> string(5) "Jumat" [5]=> string(5) "Sabtu" [6]=> string(6) "Minggu" [7]=> string(6) "Minggu" }
var_dump($hari);



 ?>
