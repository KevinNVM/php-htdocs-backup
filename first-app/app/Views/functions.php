<?php 

$GLOBALS['db'] = mysqli_connect('localhost', 'root', '', 'myapp') or die('gagal koneksi database');

function query($query) {
	$db = $GLOBALS['db'];
	$result = mysqli_query($db, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}