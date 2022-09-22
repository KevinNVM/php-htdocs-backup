<?php $time_start = microtime(true);  ?>
<?= $this->extend('template/head') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="<?= baseurl ?>/src/css/main.css">
<link rel="stylesheet" href="<?= baseurl ?>/src/css/toko_online.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style>

</style>
<?= $this->endSection() ?>

<?= $this->extend('template/main') ?>

<?= $this->section('body') ?>
<?php $this->include('apps/toko_online/functions'); ?>
<?= $this->include('apps/toko_online/navbar') ;?>

<?php
if (count($_GET) === 0) {
    $_GET['view'] = '';
}
$query = query("SELECT * FROM `tb_toko_online_category` ORDER BY `category_id` DESC ");
$key = 1;

?>

<div class="container-fluid mt-4">
    <div class="row g-2">
        <div class="col">
            <h3 class="title">Category List</h3>
            <ul class="list-group list-group-light list-group-small bullet-hidden">
                <?php foreach($query as $row): ?>
                <li class="list-group-item <?= ($_GET['view'] === $row['category_slug'])?'active':'' ?>">&rsaquo; <a
                        class="links"
                        href="/toko_online/category?view=<?= $row['category_slug'] ?>"><?= $row['category_name'] ?></a>
                </li>
                <?php $key++; endforeach; ?>
            </ul>
        </div>
    </div>
    <?php if (!empty($_GET['view'])): ?>
    <?php 
     $start = hrtime(true);
        $cs = $_GET['view'];
        $prs = query("SELECT * FROM tb_toko_online_product INNER JOIN tb_toko_online_category ON tb_toko_online_product.category_id = tb_toko_online_category.category_id  WHERE category_slug = '{$cs}'");   
     $end = hrtime(true);
     $eta = $end - $start;
     // convert nanoseconds to seconds
     $eta /= 1e+9;
     $eta .= ' seconds';

    ?>
    <div class="row g-2 mt-5 mb-5">
        <div class="col">
            <h4>Products For Category:</h4><span class="fst-italic">"<?= $_GET['view'] ?>"</span>
            <small class="d-block mb-3"><?= 'About ' . count($prs) . ' results (' . $eta . ')'; ?></small>
            <div class="row g-3 g-lg-4">
                <?php $key = 1; foreach ($prs as $row) : ?>
                <div class="col-md-4 col-sm-6">
                    <a href="/toko_online/product/<?= slugify($row['product_name']) ?>" class="card">
                        <div class="card shadow">
                            <img src="<?= baseurl ?>/src/img/<?= $row['product_img_1'] ?>"
                                class="card-img-top rounded-3 p-1">
                            <div class="card-body">
                                <h5 class="card-title text-truncate" title="<?= $row['product_name'] ?>">
                                    <?= $row['product_name'] ?>
                                </h5>
                                <p class="card-text text-truncate d-block fs-6">
                                    <?= substr(htmlspecialchars($row['product_desc']), 0, 20) . '...' ?>
                                </p>
                                <p class="card-text">Stock : <?= $row['product_stock'] ?></p>
                                <small class="text-white d-block"><?= $row['product_rating'] / 10 ?> <i
                                        class="bi bi-star-half"></i></small>
                                <h5 class="card-text"><?= 'Rp ' . number_format($row['product_price'],0,",",".") ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $key++; endforeach; ?>
            </div>
        </div>
    </div>
</div>

<br class="user-select-none">
<br class="user-select-none">
<br class="user-select-none">
<br class="user-select-none">
<?= $this->include('/template/footer') ;?>
<?php  endif; ?>


<?= $this->endSection() ?>


<?= $this->section('foot') ;?>
<script>
$(document).ready(function() {
    $('.nav-default').remove();
    $('nav').addClass('sticky-top');


    if (innerWidth < 720) {
        console.log('x');
    } else {
        $('#search-input').on('click', function() {
            $('#search-input').css('width', '500')
        });
        $('.btn-outline-success').click(function() {
            $('#search-input').css('width', '230')
        });
    }

});
</script>
<?= $this->endSection() ;?>