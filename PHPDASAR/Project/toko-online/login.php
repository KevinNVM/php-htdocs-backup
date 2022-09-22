<?php 
session_start();

if ($_SESSION) {
    header("Location: dashboard.php");
}


include 'functions.php';



if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_email = '$email' AND admin_password = '$pass'");


if (mysqli_num_rows($query) === 1) {
    $i = query("SELECT * FROM tb_admin WHERE admin_email = '$email'");
    $_SESSION['data'] = $i[0];
    $_SESSION['adm_name'] = $i[0]['admin_name'];
    $_SESSION['login'] = true;
    echo "<script>window.location.href = 'dashboard.php'</script>";
} else {
    $error = 1;
    }

}

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

    </style>
</head>
<body class="bg-black bg-opacity-75">

    <!-- navbar -->
    <nav class="navbar border-bottom m-0 navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Toko Kevin</a>
  </div>
</nav>
    <!-- end navbar -->

    <!-- content -->
    <div class="container-sm mt-4">
<?php if ( isset($error) ) : ?>
    <h3 class="text-danger shadow border border-danger">
        Username atau Password Salah!
    </h3>
<?php endif; ?>

    <h2 class="text-white">Login</h2>

    <div class="container-sm mt-1 text-white">
        <form method="post">
        <label for="email">Email</label>
        <input style="width: 60%;" class="form-control" type="email" id="email" name="email" required>
        <label for="password">Password</label>
        <input style="width: 60%;" class="form-control" type="password" id="password" name="password" required>
        <button name="submit" class="mt-2 btn btn-dark">Submit</button>
        </form>
    </div>
    </div>
    <!-- end content -->


    

        

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
</body>
</html>