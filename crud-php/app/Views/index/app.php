<?= $this->extend('index/template/main') ?>

<?= $this->section('content') ?>
<!-- Main Content -->
<?php 

if (isset($_POST['submit-product'])) {
    $pname = $_POST['product-name'];
    $pcategory = $_POST['product-category'];
    $pdesc = $_POST['product-desc'];
    $pprice = $_POST['product-price'];
    $ptags = $_POST['product-tags'];

    
}

$conn = mysqli_connect("localhost", "root", "", "crud-php") or die('gagal terkoneksi ke database');

function query($query) {
	$conn = mysqli_connect("localhost", "root", "", "crud-php") or die('gagal terkoneksi ke database');
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

$query = query("SELECT * FROM product_list");

?>
<section class="crud-list">
    <h4 class="fw-semibold border rounded px-2 py-1 d-inline">Products List</h4>
    <div class="container my-3">
        <table class="table text-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Tags</th>
                </tr>
            </thead>
            <tbody>
                <?php $key = 1 ; foreach($query as $data): ?>
                <tr>
                    <th scope="row"><?= $key ?></th>
                    <td><?= $data['product-name'] ?></td>
                    <td><?= $data['product-category'] ?></td>
                    <td><?= $data['product-desc'] ?></td>
                    <td><?= $data['product-price'] ?></td>
                    <td><?= ( $data['product-tags'] === NULL )?'<i>No Tags</i>': $data['product-tags'] ?></td>
                </tr>
                <?php $key++; endforeach; ?>
            </tbody>
        </table>
    </div>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="floating-container">
        <a type="button" class="floating-button fs-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="bi bi-plus-lg"></i>
        </a>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- End Main Content -->
<?= $this->endSection() ?>