<?php 

session_start();
if ($_SESSION['login'] !== true) {
    header("Location: login.php");
}

include 'functions.php';
$displayName = $_SESSION['adm_name'];


$data = query("SELECT * FROM tb_admin WHERE admin_name = '$displayName'");




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Toko Kevin</title>
    <style>
        nav {
            font-family: 'Send Flowers', 'Montserrat', Arial, Helvetica, sans-serif;
        }
        * {
            margin: 0;
            padding: 0;
        }
        body {
            
            overflow-y:scroll;
        }
       #welcome {
        color: black;
        font-size: 1.25rem;
        font-family: 'Send Flowers', 'Montserrat';
       }
       .none {
        display: none;
        opacity: 0;
        user-select: none;
       }
    </style>
</head>
<body class="bg-black bg-opacity-75">

    <!-- navbar -->
    <nav class="navbar border-bottom m-0 navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="dashboard.php">Toko Kevin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profil.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_category.php">Data Kategori</a>
        </li>
        <li class="nav-item">
          <a onclick="return confirm('Are You Sure')" title="Logout" class="nav-link" href="logout.php"><i class="bi bi-box-arrow-left"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- end navbar -->

    <!-- content -->
    <div class="container-sm mt-4">
    <input id="welcome" class="form-control" type="text" value="Selamat Datang, <?php echo ucwords($displayName); ?>" disabled>
<hr class="text-white">
    <div class="container">
        <p class="h1 text-white">Profil</p>

<input style="display: none;" type="hidden" name="id" value="<?php echo $data[0]['admin_id'] ?>">


    <div class="input-group mb-2">
  <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data[0]['admin_name'] ?>">
</div>

    <div class="input-group mb-2">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data[0]['admin_email'] ?>">
</div>

<div class="input-group mb-2">
  <span class="input-group-text" id="inputGroup-sizing-default">No Hp</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $data[0]['admin_hp'] ?>">
</div>

<button type="submit" name="submit1" class="btn btn-dark">Ubah</button>
<br class="user-select-none">
<a style="cursor: pointer; text-decoration: none;" class="changepass h6 user-select-none" onclick="changePassword()">Ubah Password</a>

<div class="changepass none" id="changepass">

<div class="input-group mb-2">
  <span class="input-group-text" id="inputGroup-sizing-default">Password Sekarang</span>
  <input id="password2" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="form-check form-switch">
  <input onchange="showpass1()" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Show Password</label>
</div>

<div class="input-group mb-2">
  <span class="input-group-text" id="inputGroup-sizing-default">Password Baru</span>
  <input id="password3" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-2">
  <span class="input-group-text" id="inputGroup-sizing-default">Konfirmasi Password Baru</span>
  <input id="password31" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="form-check form-switch">
  <input onchange="showpass2()" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Show Password</label>
</div>
<div class="input-group mb-2">
  <button type="submit" name="submit" class="btn btn-dark">Submit</button>
</div>

</div>

    </div>



    <!-- /content -->


    

        

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
<script type="text/javascript">
    function changePassword() {
        let x = document.getElementById('changepass');
        x.classList.toggle("none");

    }

    function showpass1() {
  var x = document.getElementById("password2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function showpass2() {
  var x = document.getElementById("password3");
  var y = document.getElementById("password31");
  if (x.type === "password") {
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