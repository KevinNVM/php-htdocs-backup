<?php 	
if ( isset($_POST['submit']) ) {
	if ( $_POST["username"] = "admin" && $_POST["password"] == "admin" ) {
		header("Location: ../web/index.php");
		exit();
	} else {
		$error = true;
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="icon"href="https://png.pngtree.com/png-vector/20191110/ourmid/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg">
	<style type="text/css">
		@import "login.css"
	</style>

</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post">
			<h3>Belum Punya Akun?</h3>
			<h1>Buat Akun</h1>
			<input type="text" placeholder="Nama" name="s.nama" />
			<input type="username" placeholder="Email / Username" name="s.username" />
			<input type="password" placeholder="Password" name="s.password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post">
			<h1>Login</h1>
			<span>Login dengan akunmu untuk masuk ke halaman ini</span>
			<input type="username" placeholder="Email / Username" name="username" />
			<input type="password" placeholder="Password" name="password" />
			<?php if (isset($error)) { ?>
			<p style="color: red; font-style: italic; font-weight: bold;">Username / Password SALAH!</p>
		<?php } ?>
			<a href="#">Lupa Password?</a>
			<input id="login1" type="submit" name="submit">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Selamat Datang!</h1>
				<p>Belum Punya Akun? Buat Akunmu Sekarang!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript" src="scripty.js"></script>
</body>
</html>