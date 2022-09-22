<?php $hari = ["Senin", "Selasa", "Rabu"]; ?>
<?php $days = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"] ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Arrayyyyyyyyyyyyyyyyyyyyyyyyyy</title>
 	<style type="text/css">
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: lightpink;
 			margin: 3px;
 			text-align: center;
 			line-height: 50px;
 			float: left;
 			font-size: 15px;
        }
        .clear {
            clear: both;
        } 

 	</style>
 </head>
 <body>
 		<?php for ($i=0; $i < count($hari) ; $i++) { ?>
 	<div class="kotak"><?php echo $hari[$i] ?></div>
 		<?php } ?>


        <!-- dengan foreach : -->

        <div class="clear"></div>

        <?php foreach ($days as $day) { ?>
                <div class="kotak"><?php echo $day ?></div>
        <?php } ?>
 </body>
 </html>