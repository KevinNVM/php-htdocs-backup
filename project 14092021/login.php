<?php 
	session_start();
	include "conn.php";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>
 		Login
 	</title>
 </head>
 <body>

 	<form method="post">
 		<input type="text" name="fusername" placeholder="Username">
 		<br>
 		<input type="password" name="fpassword" placeholder="password">
 		<br>
 		<button type="submit">Login</button>
 	</form>

 	<?php 
 		if (isset($_POST['fmasuk'])) {
		$username = $_POST['fusername'];
		$password = $_POST['fpassword'];
		$qry = mysqli_query($koneksi, "SELECT * FROM userdata WHERE username = '$username' AND password = md5('$password')");
		$cek = mysqli_num_rows($qry);
		if ($cek = 1) {
			$_SESSION['userweb'] = $username;
			header ("location:user.php");
			exit;
		}
		else {
			echo "Maaf username/password SALAH!";
		}
	}
 ?>
 	
 
 </body>
 </html>