 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Array</title>
 	<style type="text/css">
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: palegoldenrod;
 			margin: 3px;
 			text-align: center;
 			line-height: 50px;
 			float: left;
 			font-size: 15px;
 			transition: 0.5s;
        }
        .clear {
            clear: both;
        } 

       .kotak:hover {
        	transform: rotate(360deg);
        	border-radius: 50%;
        }

 	</style>
 </head>
 <body>
 	
 		<?php $angka = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20] ?>

 		<?php foreach ($angka as $a) { ?>
 	<div class="kotak"><?php echo $a ?></div>
 		<?php } ?>



 </body>
 </html>