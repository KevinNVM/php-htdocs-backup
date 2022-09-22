<?php 
require '../../../function-lib/functions.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM datasiswa WHERE
				nama LIKE '%$keyword%'OR 
				kelas LIKE '%$keyword%'OR 
				nisn LIKE '%$keyword%'OR 
				jurusan LIKE '%$keyword%'OR 
				email LIKE '%$keyword%'";

$students = query($query);



 ?>

	<div id="container-table" class="table-responsive-md mt-2 ms-2 me-2 rounded">

	<table id="table" class="table table-dark table-hover m-0 table-striped">
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