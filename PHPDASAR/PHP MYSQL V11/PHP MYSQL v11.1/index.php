<?php 
// faker
require_once '../vendor/autoload.php';
$faker = Faker\Factory::create();
// $faker->text();
// $faker->email();
// $faker->name();


// end faker

session_start();

// cek session login
if ( !isset($_SESSION['login']) ) {
	header("Location: login.php");
	exit;
}


// impor function dari lib
require '../../Function-Lib/functions.php';


// pagination
// CONFIG

$jumlahBaris = 5;
$jumlahData = count(query('SELECT * FROM datasiswa'));
$jumlahHalaman = ceil($jumlahData / $jumlahBaris);

$halamanAktif = ( isset($_GET['halaman']) ) ? $_GET['halaman'] : 1;
$awalData = ( $jumlahBaris * $halamanAktif  ) - $jumlahBaris;




// query
$students = query("SELECT * FROM datasiswa ORDER BY no ASC LIMIT $awalData, $jumlahBaris");


if (isset($_POST['cari'])) {
	$students = cari($_POST['keyword'], $awalData, $jumlahBaris);
} 

 
	// cek button
	if (isset($_POST['paginasi'])) {
		$jumlahBaris = $_POST['pagin'];
		$students = cari("", $awalData, $jumlahBaris);
	} 

	if (isset($_POST['paginasi'])) {
		$jumlahBaris = $_POST['pagin'];
		$students = cari("", $awalData, $jumlahBaris);
	} 

	if (isset($_POST['paginasi'])) {
		$jumlahBaris = $_POST['pagin'];
		$students = cari("", $awalData, $jumlahBaris);
	} 
	



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PHPMySQL</title>
	<style type="text/css">
		
		.img-pfp {
			width: 40px;
			height: 40px;
			margin: 0px;
			border-radius: 5px;
		}
		.navbar {
			background-color: var(--bs-gray-600);
		}
		.navbar-brand {
			text-decoration: none;
			color: var(--bs-gray-dark);
		}
		.navbar-brand:hover {
			text-decoration: none;
			color: var(--bs-gray-dark);
		}

		.dark-Navbar .navbar-brand {
			color: var(--bs-light);
		}

		.dark-bavbar .navbar-brand:hover {
			color: var(--bs-light);
		}

		body.dark-body {
			background-color: var(--bs-dark);
		}
		a {
			color: var(--bs-dark);
			text-decoration: none;
		}
		a:hover {
			color: var(--bs-gray-500);
			text-decoration: none;
		}
		a.dark-a {

			color: var(--bs-gray-200);
			text-decoration: none;
		}
		a.dark-a:hover {
			color: var(--bs-gray-500);
			text-decoration: none;
		}




/*non editable*/

		.pagingman {
			display: inline;
		}
		button.jb50 {
			background: none;
			border: none;
			margin: 0;
			padding: 0;
			display: inline-flex;
		}



	</style>
</head>
<body >



	<div>
	<button class="border border-info rounded" onclick="topFunction()" id="scrollTopBtn" title="Go to top"><i class="bi-chevron-up"></i>
	</div>



	<!-- navbar -->
	<nav class="navbar navbar-expand-md user-select-none fixed-top mb-0 pb-0 mt-0 pt-0">
  <div class="container-fluid mb-0 pb-0 mt-0 pt-0">
    <a class="navbar-brand fw-bolder" href="#">PHP & MySQL</a>
    <button class="btn-sm navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-three-dots-vertical"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      	<hr class="m-0 mt-2 mb-2" style="border: 1px solid grey;">
        <li class="nav-item d-inline-flex">
        <a class="nav-link" href="index.php"><button type="button" class="btn btn-sm btn-outline-dark"><i class="bi bi-house"></i> Home</button></a>
        </li>

        <li class="nav-item d-inline-flex">
          <a class="nav-link" onclick="return confirm('Are you sure?')" href="logout.php"><button type="button" class="btn btn-sm btn-outline-dark"><i class="bi bi-box-arrow-left"></i> Sign Out</button></a>
        </li>

        <li class="nav-item d-inline-flex">
          <a class="nav-link" href="print.php" target="_blank"><button type="button" class="btn btn-sm btn-outline-info"><i class="bi bi-printer"> </i>Print Page</button></a>
        </li>

        <li class="nav-item form-check form-switch ms-3 pt-2">
  				<label class="h4 form-check-label text-dark" for="flexSwitchCheckChecked" id="dmLabel"><i class="bi bi-moon"></i></label>
  				<input onchange="modeSwitch()" class="h5 form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
        </li>
      </ul>

    </div>
  </div>
</nav>
	<!-- end  navbar -->
<br>


	<h1 id="heading" class="pt-5 pb-2 h1 text-center">Daftar Siswa</h1>
	<div class="search container pb-2">
		<form class="d-flex user-select-none" method="post">
      <input id="keyword" name="keyword" class="form-control me-2" type="search" placeholder="Search by Keyword" aria-label="Search" autofocus autocomplete="off" value="">
      <button class="btn btn-outline-success me-2" type="submit" name="cari" id="searchBtn">Search</button>

      <a id="printBtn" href="print.php" target="_blank"><button type="button" class="btn btn-outline-info"><i class="bi bi-printer"></i></button></a>

    </form>
	</div>


<div id="container-table" class="table-responsive-md border border-secondary mt-2 ms-2 me-2 rounded">

	<table id="table" class="table table-hover m-0 table-striped">
  <thead>
   <tr>
			<th scope="col">No.</th>
			<th scope="col"><a class="" id="addnew-btn" href="tambah.php">Add New</a></th>
			<th scope="col">Foto</th>
			<th scope="col">Nama</th>
			<th scope="col">Kelas</th>
			<th scope="col">NISN</th>
			<th scope="col">Jurusan</th>
			<th scope="col">Email</th>
		</tr>
  </thead>
  <tbody>

  	<?php $no = $awalData + 1;  ?>
		<?php foreach ( $students as $student ) : ?>
    <tr>
			<th scope="row"><?php echo $no ?></th>
			<td>
				<a class="text-primary" id="ubahBtn" href="ubah.php?id=<?php echo $student['no'] ?>">Edit</a> 
				<a class="text-primary" id="delBtn" onclick="return confirm('Are You Sure?')
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

	</table>
	<div class="container-fluid user-select-none">
	<!-- navigasi halaman/baris per halaman -->

		<div class="navigasi">
	<?php if ($halamanAktif > 1) : ?>
	<a id="nav-bottom" href="?halaman=<?php echo $halamanAktif - 1 ?>"><i class="bi bi-arrow-left text-secondary"></i></a>
<?php endif; ?>


	
	<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
		<?php if ($i == $halamanAktif) : ?>
		<a class="fw-bolder text-info h5" href="?halaman=<?php echo $i; ?>"><?php echo $i ?></a>
	<?php else : ?>
		<a class="h6 text-info" href="?halaman=<?php echo $i; ?>"><?php echo $i ?></a>
	<?php endif; ?>

	<?php endfor; ?>

<?php if ($halamanAktif < $jumlahHalaman) : ?>

	<a id="nav-bottom" href="?halaman=<?php echo $halamanAktif + 1 ?>"><i class="bi bi-arrow-right text-secondary"></i></a>
<?php endif; ?>
</div>

<!-- jumlah baris perhalaman -->
<form class="text-light user-select-none pagingman" method="post">
	<input type="hidden" name="pagin" value="5" id="pagin5">
	<button class="jb50 text-warning" type="submit" name="paginasi">5</button>
</form>

<form class="text-light user-select-none pagingman" method="post">
	<input type="hidden" name="pagin" value="50" id="pagin5">
	<button class="jb50 text-warning" type="submit" name="paginasi">50</button>
</form>

<form class="text-light user-select-none pagingman" id="paging" method="post">
	<input type="hidden" name="pagin" value="100" id="pagin5">
	<button class="jb50 text-warning" type="submit" name="paginasi">100</button>
</form>


	</div>

<div>
	
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>

// switch dark mode
var toggleMode = document.getElementById('flexSwitchCheckChecked')
var labelMode = document.getElementById('dmLabel')
var table = document.getElementById('table')
var	addBtn = document.getElementById('addnew-btn')
var	ubahBtn = document.getElementById('ubahBtn')
var	delBtn = document.getElementById('ubahBtn')
var headier = document.getElementsByTagName('h1')
var	navB = document.getElementById('nav-bottom')
var jb50 = document.getElementsByClassName('jb50')


if (localStorage['darkmode'] == 'true') {
	// alert('on')
toggleMode.checked = true
		table.setAttribute('class', 'table-dark table table-hover m-0 table-striped')
		addBtn.classList.toggle('dark-a')
		document.body.setAttribute('class', 'bg-dark')
		heading.setAttribute("class", "text-light pt-5 pb-2 h1 text-center")
		navB.classList.toggle('dark-a')
		localStorage['darkmode']
} else {
	labelMode.innerHTML = "<i class='bi bi-brightness-high-fill'></i>"
}


function modeSwitch() {
	if (toggleMode.checked) {
		// alert('on')
		labelMode.innerHTML = '<i class="bi bi-moon"></i>'
		table.setAttribute("class", "table-dark table table-hover m-0 table-striped")
		heading.setAttribute("class", "text-light pt-5 pb-2 h1 text-center")
		document.body.setAttribute('class', 'bg-dark')
		navB.classList.toggle('dark-a')
		addBtn.classList.toggle("dark-a")
		console.log(localStorage.setItem('darkmode', true))
		
	} else {
		// alert("off")
		labelMode.innerHTML = "<i class='bi bi-brightness-high-fill'></i>"
		table.setAttribute("class", "table table-hover m-0 	table-striped")
		heading.setAttribute("class", "text-dark pt-5 pb-2 h1 text-center")
		document.body.setAttribute('class', 'bg-light')
		navB.classList.toggle('dark-a')
		addBtn.classList.toggle("dark-a")
		localStorage.setItem('darkmode', false)


	}
}

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