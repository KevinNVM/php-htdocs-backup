<?php 	
$cpus = [["cpu" => "AMD Ryzen 3 3200g",
		 "harga" => "2.500.000",
		 "spc" => "4 Core, 4 Thread",
		 "img" => "r33200g.jpg"],

		["cpu" => "AMD Ryzen 5 3400g",
		 "harga" => "3.500.500",
		 "spc" => "4 Core, 8 Thread",
		 "img" => "r53400g.jpg"],

		["cpu" => "Intel Core i3 9100f",
		 "harga" => "1.500.000",
		 "spc" => "4 Core, 4 Thread",
		 "img" => "i39100f.jpg"],

		 ["cpu" => "Intel Core i3 10100f",
		 "harga" => "1.450.000",
		 "spc" => "4 Core, 8 Thread",
		 "img" => "i310100f.jpg"]];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>A</title>
 	<style type="text/css">
 		.kotak {
 			width: 30%;
 			height: 20%px;
 			padding: 1px;
 			margin: 10px;
 			transition: 0.3s;
 			display: inline;
        }
        .clear {
            clear: both;
        } 

       .kotak:hover {
        	background-color: grey;
        	border-radius: 5%;
        }
        .kotak:active {
        	color: black;
        }

 	</style>
 </head>
 <body>
 	<h2>Daftar CPU</h2>
 
 	<ul>
 	<?php foreach ( $cpus as $cpu) { ?>
 		<div class="kotak">
 			<span> -
 		<a class="stp" href="latihan2.php?cpu=<?php echo $cpu["cpu"]; ?>&spc=<?php echo $cpu["spc"] ?>&img=<?php echo $cpu["img"] ?>&harga=<?php echo $cpu["harga"] ?>">
 			<?php echo $cpu["cpu"] ?>
 		</a>
 	<br></span></div>
 	<?php } ?>
 </ul>
 </body>
 </html>