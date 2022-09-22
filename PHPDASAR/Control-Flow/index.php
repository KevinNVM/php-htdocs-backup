<?php 

//PENGULANGAN
// 1. for 
// 2. while
// 3. do.. while
////////////////

// //for
// for ($i=0; $i < 5; $i++) { 
// 	echo "Hello World " . $i . "<br>";
// }

// while
// $i = 1;
// while ($i <= 5) {
// 	echo "Hello World " . $i . "<br>";
// $i++;
// }

// do.. while
// $i = 1;
// do {
// 	echo "Hello World " . $i . "<br>";
// 	$i++;
// } while ($i <= 10);
	

	// ---- //

// Pengkondisian, Percabangan
// 1. if else
// 2. if elseif else
// 3. ternary
// 4. switch

// if
// $x = 1;
// if ($x < 3) {
//  	echo 'YES';
//  } 
//  else {
//  	echo "NO";
//  }


// if elseif else
// $i = 10;
// if ($i < 3) {
// 	echo "benar";
// } elseif ($i > 3) {
// 	echo "benar2";
// } else {
// 	echo "benar3";
// }


// ternary
// $i = 10;
// $angkaGenap;
// if ($i % 2 == 0) {
// 	$angkaGenap = true;
// } else { $angkaGenap = false; }
// $genap = $angkaGenap ? "Betul" : "Salah";
// echo "$genap"
// Output : Benar


// switch
// $warnaFav = "biru";
// switch ($warnaFav) {
// 	case 'biru':
// 		echo "Warna favorit saya adalah BIRU";
// 		break;

// 	case 'merah':
// 		echo "Warna favorit saya adalah MERAH";
// 		break;
	
// 	default:
// 		echo "Warna favorit saya bukan MERAH maupun BIRU";
// 		break;
// }




 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan</title>
 </head>
 <body>
 	<hr>
 <h1>Pengulangan dengan <?php echo "PHP"; ?></h1>
 	<table border="1" cellpadding="10" cellspacing="0">
 		<?php for ($i=1; $i <= 4; $i++) : ?>
 			<tr>
 				<?php for ($j=1; $j <= 5; $j++) : ?>
 				<td>
 					<?php echo "$i,$j" ?>
 				</td>
 			<?php endfor; ?>
 			</tr>
 		<?php endfor; ?>
 	</table>
 	<hr>

 	<h1>Pengkondisian, Percabangan dengan PHP</h1>

 </body>
 </html>