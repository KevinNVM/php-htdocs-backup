<?php 	
// check tombol submit is pressed
if (isset($_POST['submit'])) {
// cek username / password

	if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
		echo "<script>window.location.href = 'GETindex.php'</script>";
		exit;
	} else {
		$error = true;
	}

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST</title>
	<style type="text/css">
		body {
 			background-color: #131516;
 			color: #d8d4cf;
 			font-family: arial;
 		}
	</style>
</head>
<body>
<h1>Login</h1>

	<ul>
	<form action="" method="post">
		<li>
			<label for="username">Username : </label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="submit">Sent</button>
		</li>
	</form>
	</ul>
<script>
<?php if (isset($error)) : ?>
	alert("Username atau Password Salah!");
<?php endif; ?>
</script>
</body>
</html>