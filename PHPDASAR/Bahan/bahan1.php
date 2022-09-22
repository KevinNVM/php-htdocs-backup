
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
	<meta charset="utf-8">
	<style type="text/css">
		.warna-baris {
			color: blue;
		}
	</style>
</head>
<body>

	<table border="2" cellpadding="10%" padding="0">
		<?php for($i = 1; $i <= 5; $i ++) : ?>
			<?php if($i % 2 == 0) : ?>
				<tr class="warna-baris">
				<?php else : ?>
				<tr>
				<?php endif; ?>
					<?php for($j = 1; $j <= 5; $j++) :?>
						<td><?= "$i, $j"; ?></td>
					<?php endfor; ?>
				</tr> 
			<?php endfor; ?>
				
	</table>


</body>
</html>