<?php 
// pengulangan pada array
// for & foreach

$numbers	= [1,3,5,6,12,54,123,532];



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Array</title>
 	<style type="text/css">
 		body {
 			font-family: Helvetica;
 		}
 		.box1 {
 			width:50px;
 			height:50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
 		.box2 {
 			width:50px;
 			height:50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
 		.clear { clear: both; }
 	</style>
 </head>
 <body>
 	<h4>$numbers	= [1,3,5,6,12,54,123,532];</h4>
 	<h1>Metode FOR</h1>
 	<?php for ( $i = 0; $i < count($numbers); $i++ ) : ?>
 	<div class="box1"><?php echo $numbers[$i] ?></div>
 <?php endfor; ?>
<br>
 	<div class="clear"></div>
<hr>
	<h1>Metode FOREACH</h1>

 	<?php foreach ( $numbers as $number ) : ?>
 		<div class="box2"><?php echo $number; ?></div>
 	<?php endforeach; ?>


 </body>
 </html>