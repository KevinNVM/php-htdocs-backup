<?php 
session_start();

// cek session login
if ( !isset($_SESSION['login']) ) {
	header("Location: login.php");
	exit;
}


// impor function dari lib
require '../../Function-Lib/functions.php';
// query
$students = query("SELECT * FROM datasiswa ORDER BY no ASC");
if (isset($_POST['cari'])) {
	$students = cari1($_POST['keyword']);
} 


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<title>PHPMySQL</title>
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
			color: whitesmoke;
			text-decoration: none;
		}
		a:hover {
			color: darkgray;
		}
		.titel {
			display: inline-flex;
			margin: 10px;
			
		}
		.button-my {
			display: inline-flex;
			margin: 0px;
			float: right;
			padding-top:32px;
			font-size: large;
		}
		.btn-new {
			font-size: large;
			display: inline-flex;
		}
		.loader {
			display: none;
		}
		#scrollTopBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 20px;
  border: none;
  outline: black;
  cursor: pointer;
  padding: 5px;
  background-color: #131516;
  color: whitesmoke;
}


#scrollTopBtn:hover {
  background-color: lightgrey;
  color: black;
}
.bg-light {
	background-color: #e3f2fd;

}
	</style>
</head>
<body>

	<div>
	<button title="Top Page" class="border border-info rounded" onclick="topFunction()" id="scrollTopBtn" title="Go to top"><i class="bi-chevron-up"></i>
	</div>

	<!-- navbar -->
	<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a title="Home" class="navbar-brand" href="index.php">PHP & MySQL</a>
    <button title="Show Menu" style="color: whitesmoke;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav text-light">
        <a title="Home" class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a title="Sign Out of your Account" class="nav-link" onclick="return confirm('Are you sure?')" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>
	<!-- end  navbar -->
<br><br><br>

	<p class="h1 container-fluid text-center">Daftar Siswa</p>

<div class="container pt-2">

	<!-- search -->
	<form class="d-flex user-select-none" method="post">
      <input title="search for existing data by typing in keywords" id="keyword" name="keyword" class="form-control me-2" type="search" placeholder="Search by Keyword" aria-label="Search" autofocus autocomplete="off" value="">
      <button id="cari" class="btn btn-outline-success" type="submit" name="cari">Search</button>

      <img src="../../img/loader.gif" class="loader me-2">

      	<a title="Print or Save this page (.pdf)" id="printBtn" href="print.php" target="_blank"><button type="button" class="btn btn-outline-info"><i class="bi bi-printer"></i></button></a>
    </form>
    <!-- end search -->

    <div id="container">

   
	<div id="container-table" class="table-responsive-md mt-2 ms-2 me-2">

	<table id="table" class="table table-dark table-hover m-0 table-striped rounded">
  <thead>
   <tr>
			<th scope="col">No.</th>
			<th title="Add New Data" scope="col"><a class="" id="addnew-btn" href="tambah.php">Add New</a></th>
			<th scope="col">Foto</th>
			<th scope="col">Nama</th>
			<th scope="col">Kelas</th>
			<th scope="col">NISN</th>
			<th scope="col">Jurusan</th>
			<th scope="col">Email</th>
		</tr>
  </thead>
  <tbody>

  	<?php $no = 1;  ?>
		<?php foreach ( $students as $student ) : ?>
    <tr>
			<th scope="row"><?php echo $no ?></th>
			<td>
				<a title="Edit selected data" class="text-primary" id="ubahBtn" href="ubah.php?id=<?php echo $student['no'] ?>">Edit</a> 
				<a title="Delete selected data (Cannot be Undone!" class="text-primary" id="delBtn" onclick="return confirm('Are You Sure?')
" id="confirm" href="hapus.php?id=<?php echo $student['no'] ?>">Delete</a>
			</td>
			<td><a title="Click to open image 
in a new tab" target="_blank" href="../../img/<?php echo $student['foto'] ?>"><img class="img-pfp" alt="img" src="../../img/<?php echo $student['foto']; ?>"></a></td>
			<td><?php echo $student['nama']; ?></td>
			<td><?php echo $student['kelas']; ?></td>
			<td><?php echo $student['nisn']; ?></td>
			<td><?php echo $student['jurusan']; ?></td>
			<td><?php echo $student['email']; ?></td>
		</tr>
		<?php $no++; ?>
	<?php endforeach; ?>
	


  </tbody>
</table>
</div>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
	//Get the button
var mybutton = document.getElementById("scrollTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>