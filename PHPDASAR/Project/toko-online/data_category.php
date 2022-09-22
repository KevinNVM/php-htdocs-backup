<?php 
include 'functions.php';

session_start();
if ($_SESSION['login'] !== true) {
    header("Location: login.php");
}

$kategoris = query("SELECT * FROM tb_kategori ORDER BY kategori_id DESC");

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
       a {
       	color: white;
       }
       a:hover {
       	color: grey;
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
    <input id="welcome" class="form-control" type="text" value="Data Kategori" disabled readonly>
    </div>

    <div class="section mt-2">
    	<div class="container">
    		<div class="box text-white">
    			<table border="1" cellspacing="0" class="table table-dark table-hover table-responsive">
    				<thead>
    					<tr>
    						<th>No</th>
    						<th>Kategori</th>
    						<th><a id="addnew-btn" style="text-decoration:none;" href="tambah-kategori.php">Tambah Data <i class="bi bi-plus-square"></i></a></th>
    					</tr>
    				</thead>
    				<tbody>
    					<?php 
    					$i = 1;
    					foreach ($kategoris as $kategori) :
    					?>
    					<tr>
    						<td><?php echo $i ?></td>
    						<td><?php echo $kategori['kategori_name'] ?></td>
    						<td>
    							<a style="text-decoration: none;" href="edit-kategori.php?id=<?php echo $kategori['kategori_id'] ?>">Edit</a> | <a style="text-decoration: none;" href="hapus-kategori.php?id=<?php echo $kategori['kategori_id'] ?>">Hapus</a>
    						</td>
    					</tr>
    					<?php $i++ ?>
    					<?php endforeach; ?>
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
    <!-- end content -->


    

        

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
</body>
</html>