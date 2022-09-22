<?php 
// konek lib
require '../Function-Lib/functions.php';


// cek tombol register is checked
	if ( isset($_POST['register']) ) {
		
		if ( register($_POST) > 0 ) {
			echo "<script>
				alert('Register Successful'); window.location.href = 'login.php'
			</script>";
		} else {
			echo mysqli_error($conn);
		}

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
	<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP & MySQL</a>
    <button style="color: whitesmoke;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav text-light">
        <a style="" class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="login.php">Login</a> 
        <!-- <a class="nav-link" onclick="return confirm('Are you sure?')" href="logout.php">Logout</a> -->
      </div>
    </div>
  </div>
</nav>
	<!-- endnavbar -->
	</div>

	<!-- body -->

	<h1 class="container pt-3">Create Your Account</h1>
	
	<form action="" method="post">
		
	<div class="container pt-5">
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

  <div class="mb-1 mt-2">
    <label for="password2" class="form-label">Confirm Your Password</label>

  	<!-- INPUT CONFIRM PASSWORD -->
    <input style="width: 50%;" type="password" class="form-control" id="password2" name="password2">
  </div>
  <!-- END INPUT CONFIRM PASSWORD -->

  <div class="mb-1 form-check">

    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="showPass()">

    <label class="form-check-label" for="exampleCheck1">Show Password</label>
    <br>
    <label>Already have an account? </label><a href="login.php"> Login</a>
  </div>

  <button type="submit" name="register" class="btn btn-danger mt-3">Sign Up</button>



	</form>


<!-- script  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript">
	// show password function
function showPass() {
  var x = document.getElementById("password");
  var y = document.getElementById("password2");
  if (x.type === "password" && y.type === "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}
</script>
</body>
</html>