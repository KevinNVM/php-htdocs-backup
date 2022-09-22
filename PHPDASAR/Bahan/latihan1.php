<?php 
	// input text
if (isset($_GET['submit'])) {
	function tget() {
		$todo = $_GET['username'];
		echo $todo;
	}
}
	// cacth value


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>To Do List</title>
	<style type="text/css">
		div.container {
			background-color: skyblue;
			padding: 10px;
		}
		body {
			background-color: lightblue;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="header">
			<h1>To Do List</h1>
			<h4>type ur things below</h4>
		</div>
		<div class="main">
			<form>
				<input type="username" name="username">
				<input type="submit" name="submit">
			</form>
		</div>
	</div>


</body>
</html>