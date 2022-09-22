<?php 
// konek lib
require '../Function-Lib/functions.php';


// cek tombol login is checked
	if ( isset($_POST['login']) ) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
		// cek username
		if ( mysqli_num_rows($result) === 1 ) {
			
			// cek password
			$row = mysqli_fetch_assoc($result);
			if ( password_verify($password, $row['password']) ) {
				header("Location: index.php");
				exit;
			}

		}


		$error = true;

	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Sign Up - webname</title>
	<style type="text/css">
		body {
			background-color: #131516;
			color: #d8d4cf;
			margin: 1px;
			font-family: arial;
		}
		img {
			width: 40px;
			height: 40px;
			border-radius: 20%;
		}
		a {
			color: skyblue;
		}
		a:hover {
			color: steelblue;
		}
	</style>
</head>
<body class="user-select-none">

		<!-- navbar -->
	<nav class="navbar navbar-expand-sm navbar-danger bg-danger shadow-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP & MySQL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a> -->
      </div>
    </div>
  </div>
</nav>
	<!-- endnavbar -->
	</div>

	<!-- body -->

	<h1 class="container pt-3">Login to Your Account</h1>
	

	<form action="" method="post">
		
	<div class="container pt-5">

<!-- if pw salah -->
	<?php if ( isset($error) ) : ?>
	<h4 class="fw-bold text-danger">Incorrect Username or Password</h4>
<?php endif; ?>

  <div class="mb-1">
    <label for="username" class="form-label">Username</label>

    <!-- INPUT USERNAME -->
    <input style="width: 50%;" type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
    <!-- END INPUT USERNAME -->

    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-1">
    <label for="password" class="form-label">Password</label>

  	<!-- INPUT PASSWORD -->
    <input style="width: 50%;" type="password" class="form-control" id="password" name="password">
  </div>
  <!-- END INPUT PASSWORD -->

  <div class="mb-1 form-check">

    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="showPass()">

    <label class="form-check-label" for="exampleCheck1">Show Password</label>
    <br>
    <label>Didn't have account yet? </label><a href="signup.php"> Create now!</a>
  </div>

  <button type="submit" name="login" class="btn btn-danger mt-3 shadow-lg">Sign Up</button>



	</form>


<!-- script  -->
<script type="text/javascript">
	// show password function
function showPass() {
  var x = document.getElementById("password");
  var y = document.getElementById("password2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>