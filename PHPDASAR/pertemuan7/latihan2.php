<?php 
// redirect user

if (!isset($_GET["cpu"]) || isset($_GET["harga"]) || isset($_GET["spc"]) || isset($_GET["img"])) {
	//redirect 
	header("Location: latihan1.php");
	exit();
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<style type="text/css">
		.image	{
			width: 75px;
			height: 75px;
		}
		img {
			width: 50px;
			height: 50px;
		}

		img#suck:hover {
			width: 65px;
			height: 65px;
			
		}
	</style>
</head>
<body>
	<ul>
		<img class="image" src="<?php echo $_GET["img"] ?>">
		<li>
			<strong><?php echo $_GET["cpu"] ?></strong></li>
		<li>Spesifikasi : <br> <?php echo $_GET['spc'] ?></li>
		<li>Harga : <?php echo $_GET['harga'] ?></li>
	</ul>
<a href="latihan1.php"><img title="Kembali" id="suck" src="data:image/png;base64,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"></a>
</body>
</html>