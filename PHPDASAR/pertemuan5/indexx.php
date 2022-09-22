<?php 
// Function pada PHP
// cara memanggil Function :

// echo date("d")
// echo time()

// menghitung brp hari dari sekarang 

// echo date("l", time() + 60*60*24*5)
// 60 x 60 x 24 x (hari)

// echo date("l", mktime(0,0,0,21,1,2007));

// Function buatan sendiri :
// sama seperti javascript wkwk, liat sendiri 

// funtion greet($waktu, $nama) {
// 	$waktu;
// 	if ( date("") )
// }


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>FUNCTION</title>
</head>
<body>
	<?php 
			if (date("H") < 10) {
				$waktu = "Pagi";
			} else if (date("H") > 12 && date("H") < 10) {
				$waktu = "Siang";
			} else if (date("H") > 12 && date("H") < 17) {
				$waktu = "Sore";
			} else {
				$waktu = "Malam";
			}
	 ?>

	 <h1>
	 	
	 	<?php 
	 			function waktuy($waktu) {
	 				return "$waktu";
	 			}
	 	 ?>

	 	Selamat <?php echo waktuy($waktu);?><?php echo ", " ?>Admin
	 </h1>

</body>
</html>