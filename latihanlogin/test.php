<?php 
	
	require 'fungsi.php';
	$q="SELECT COUNT(1) FROM datalogin WHERE id=2";
$r=mysqli_query($q);
$row=mysqli_fetch_row($r);
//Now to check, we use an if() statement
if($row[0] >= 1) {
 print "Record exists";
  } else {
 print "Record doesn't exist";
}


 ?>