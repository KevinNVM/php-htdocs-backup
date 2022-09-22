 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Lat array</title>
 	<style type="text/css">
 		body {
 			font-family: Arial;
 		}
 		.box {
 			width: 30px;
 			height: 30px;
 			background-color: #bada55;
 			text-align: center;
 			line-height: 30px;
 			margin: 3px;
 			float: left;
 			transition: .50s;
 		}
 		.box:hover {
 			transform: rotate(360deg);
 			border-radius: 20%;
 		}
 		.clear	{ clear: both; }
 	</style>
 </head>
 <body>

<?php
$numbers = [
	[1,2,3],
	[4,5,6],
	[7,8,9]
]; 
?>

	<?php foreach ($numbers as $number) : ?>
	<?php foreach ($number as $num) : ?>
 	<div  class="box"><?php echo $num; ?></div>
 <?php endforeach; ?>
 <div class="clear"></div>
<?php endforeach; ?>
 

 </body>
 </html>