<?php 
//Komponen pc
$cpus = [["cpu" => "Ryzen 3 3200g",
		 "harga" => "2.500.000",
		 "spc" => "4 Core, 4 Thread",
		 "img" => "r33200g.jpg"],

		["cpu" => "Ryzen 5 3400g",
		 "harga" => "3.500.500",
		 "spc" => "4 Core, 8 Thread",
		 "img" => "r53400g.jpg"],

		["cpu" => "Intel I3 9100f",
		 "harga" => "1.500.000",
		 "spc" => "4 Core, 4 Thread",
		 "img" => "i39100f.jpg"],

		 ["cpu" => "Intel I3 10100f",
		 "harga" => "1.450.000",
		 "spc" => "4 Core, 8 Thread",
		 "img" => "i310100f.jpg"]];

	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 	<style type="text/css">
 		img {
 			width: 15%;
 			height: 15%;
 		}
 	</style>
 </head>
 <body>
 	<h1>Cpu</h1>

 	<div class="list">
 		<?php foreach ($cpus as $cpu) { ?>
 		<ul>
 			<img src="imgbahan2/<?php echo $cpu["img"] ?>">
 			<li>Nama Produk : <?php echo $cpu["cpu"] ?></li>
 			<li>Spesifikasi : <?php echo $cpu["spc"] ?></li>
 			<li>Harga : <?php echo $cpu["harga"] ?><hr></li>
 		</ul>
 	</div>
 <?php } ?>
 </body>
 </html>