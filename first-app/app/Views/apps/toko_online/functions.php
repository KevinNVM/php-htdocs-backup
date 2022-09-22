<?php 
$GLOBALS['db'] = mysqli_connect('localhost', 'root', '', 'myapp') or die('gagal koneksi database');

function slugify($text, string $divider = '-')
{
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, $divider);

  // remove duplicate divider
  $text = preg_replace('~-+~', $divider, $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

function truncate($str, $len = 50) {
  substr($str, 0, $len);

  return $str;
}


function query($query) {
	$db = $GLOBALS['db'];
	$result = mysqli_query($db, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function setCart($product = []) {
  setcookie('CART', [
    'product' => $product
  ], 0);
}

function addNew($data) {
  $db = $GLOBALS['db'];
  $pd_name = htmlspecialchars($data['product_name']);
  $pd_category = htmlspecialchars($data['product_category']);
  $pd_slug = slugify(htmlspecialchars($data['product_name']));
  $pd_price = htmlspecialchars($data['product_price']);
  $pd_stock = htmlspecialchars($data['product_stock']);
  $pd_desc = htmlspecialchars($data['product_desc']);
  $pd_rating = htmlspecialchars('0');
  dd($data);
  $pd_img_1 = htmlspecialchars($data['product_img_1']);

  $pd_img_1 = upload();
	if (!$pd_img_1) {
		return false;
	}
  // validation

  if (strlen($pd_stock) > 5) {
    $_SESSION['flash'] = ['status' => 'warning', 'msg' => "Product Stocks Is Too Much!", 'head' => 'Failed'];
    return false;
  }

  if (strlen($pd_name) === 0) {
    $_SESSION['flash'] = ['status' => 'warning', 'msg' => "Product Name Cannot Be Empty!", 'head' => 'Failed'];
    return false;
  }

  if (strlen($pd_desc) == 0) {
    $_SESSION['flash'] = ['status' => 'warning', 'msg' => "Product Description Cannot Be Empty!", 'head' => 'Failed'];
    return false;
  }

  if (strlen($pd_stock) == 0) {
    $_SESSION['flash'] = ['status' => 'warning', 'msg' => "Product Stock Cannot Be Empty!", 'head' => 'Failed'];
    return false;
  }

  if (strlen($pd_img_1) == 0) {
    $_SESSION['flash'] = ['status' => 'warning', 'msg' => "Product Image Cannot Be Empty!", 'head' => 'Failed'];
    return false;
  }

  if (strlen($pd_category) == 0) {
    $_SESSION['flash'] = ['status' => 'warning', 'msg' => "Product Category Cannot Be Empty!", 'head' => 'Failed'];
    return false;
  }

  $query = "INSERT INTO `tb_toko_online_product` 
  (`product_id`, 
   `category_id`, 
   `product_name`, 
   `product_slug`, 
   `product_price`, 
   `product_desc`,
   `product_img_1`, 
   `product_img_2`, 
   `product_rating`, 
   `product_stock`, 
   `created_at`)
  VALUES 
  (NULL,
   '$pd_category', 
   '$pd_name', 
   '$pd_slug', 
   '$pd_price', 
   '$pd_desc', 
   '$pd_img_1', 
   '$pd_img_2', 
   '$pd_rating', 
   '$pd_stock',
    current_timestamp()) ";
  mysqli_query($db, $query);
  
  return mysqli_affected_rows($db);
}

function upload() {

	$namaFile = $_FILES['product_img_1']['name'];
	$ukuranFile = $_FILES['product_img_1']['size'];
	$error = $_FILES['product_img_1']['error'];
	$tmpName = $_FILES['product_img_1']['tmp_name'];

	// cek foto
	if ($error === 4) {
		$_SESSION['flash'] = ['status' => 'warning', 'msg' => 'Product Image Cannot Be Empty!', 'head' => 'Failed'];
    return false;

	}

	// cek ekstensi file
	$extFotoValid = ['jpeg', 'jpg', 'png', 'webp'];
	$extFoto = explode('.', $namaFile);
	$extFoto = strtolower(end($extFoto));
	if ( !in_array($extFoto, $extFotoValid) ) {
		$_SESSION['flash'] = ['status' => 'error', 'msg' => 'Forbidden Product Image File Extesion', 'head' => 'Failed'];
    return false;
	}

	// cek ukuran
	$ukuranValid = 5000000;
	if ( $ukuranFile > $ukuranValid ) {
		$_SESSION['flash'] = ['status' => 'error', 'msg' => 'Product Image File Size Is Too Big', 'head' => 'Failed'];
    return false;
	}

	// upload img
	// generate nama baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $extFoto;


	move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

	return $namaFileBaru;

}

function upload_2() {

	$namaFile = $_FILES['product_img_2']['name'];
	$ukuranFile = $_FILES['product_img_2']['size'];
	$error = $_FILES['product_img_2']['error'];
	$tmpName = $_FILES['product_img_2']['tmp_name'];

	// cek foto
	if ($error === 4) {
		$_SESSION['flash'] = ['status' => 'warning', 'msg' => 'Product Image Cannot Be Empty!', 'head' => 'Failed'];
    return false;

	}

	// cek ekstensi file
	$extFotoValid = ['jpeg', 'jpg', 'png', 'webp'];
	$extFoto = explode('.', $namaFile);
	$extFoto = strtolower(end($extFoto));
	if ( !in_array($extFoto, $extFotoValid) ) {
		$_SESSION['flash'] = ['status' => 'error', 'msg' => 'Forbidden Product Image File Extesion', 'head' => 'Failed'];
    return false;
	}

	// cek ukuran
	$ukuranValid = 5000000;
	if ( $ukuranFile > $ukuranValid ) {
		$_SESSION['flash'] = ['status' => 'error', 'msg' => 'Product Image File Size Is Too Big', 'head' => 'Failed'];
    return false;
	}

	// upload img
	// generate nama baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $extFoto;


	move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

	return $namaFileBaru;

}