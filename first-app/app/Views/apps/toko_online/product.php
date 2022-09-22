<?= $this->include('apps/toko_online/functions'); ?>
<?= $this->extend('template/head') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="<?= baseurl ?>/src/css/main.css">
<link rel="stylesheet" href="<?= baseurl ?>/src/css/toko_online.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?= $this->endSection() ?>

<?= $this->extend('template/main') ?>

<?= $this->section('body') ?>
<?= $this->include('apps/toko_online/navbar') ;?>

<?php 

$result = 
query("SELECT * FROM tb_toko_online_product INNER JOIN tb_toko_online_category ON tb_toko_online_product.category_id = tb_toko_online_category.category_id  WHERE product_slug = '{$slug}'")[0];

?>

<div class="container-fluid mt-4">
    <div class="row g-2">
        <div class="col-12 col-sm-10">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-2">
                    <div class="col">
                        <div class="img text-center rounded-4">
                            <?php if (!empty($result['product_img_2'])): ?>
                            <div id="carouselExampleIndicators" class="carousel slide carousel-dark"
                                data-mdb-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-mdb-target="#carouselExampleIndicators"
                                        data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"
                                        data-mdb-toggle="tooltip" title="Prev Images"></button>
                                    <button type="button" data-mdb-target="#carouselExampleIndicators"
                                        data-mdb-slide-to="1" aria-label="Slide 2" data-mdb-toggle="tooltip"
                                        title="Next Images"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?= baseurl . '/src/img/' . $result['product_img_1'] ?>"
                                            class="img-thumbnail shadow rounded-4 w-75" data-mdb-toggle="modal"
                                            data-mdb-target="#exampleModal" role="button">
                                        <div class="modal top fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true"
                                            data-mdb-backdrop="true" data-mdb-keyboard="true">
                                            <div class="modal-dialog modal-xl ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <a
                                                            href="<?= baseurl . '/src/img/' . $result['product_img_1'] ?>"><img
                                                                src="<?= baseurl.'/src/img/'. $result['product_img_1'] ?>"
                                                                class="img-fluid"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= baseurl . '/src/img/' . $result['product_img_2'] ?>"
                                            class="img-thumbnail shadow rounded-4 w-75" data-mdb-toggle="modal"
                                            data-mdb-target="#exampleModal1" role="button">
                                        <div class="modal top fade" id="exampleModal1" tabindex="-1"
                                            aria-labelledby="exampleModal1Label" aria-hidden="true"
                                            data-mdb-backdrop="true" data-mdb-keyboard="true">
                                            <div class="modal-dialog modal-xl ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <a
                                                            href="<?= baseurl . '/src/img/' . $result['product_img_1'] ?>"><img
                                                                src="<?= baseurl.'/src/img/'. $result['product_img_2'] ?>"
                                                                class="img-fluid"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <?php else : ?>
                            <img src="<?= baseurl . '/src/img/' . $result['product_img_1'] ?>"
                                class="img-thumbnail shadow rounded-4 w-75" data-mdb-toggle="modal"
                                data-mdb-target="#exampleModal" role="button">
                            <div class="modal top fade" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true"
                                data-mdb-keyboard="true">
                                <div class="modal-dialog modal-xl ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <a href="<?= baseurl . '/src/img/' . $result['product_img_1'] ?>"><img
                                                    src="<?= baseurl.'/src/img/'. $result['product_img_1'] ?>"
                                                    class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <h2><?= $result['product_name'] ?></h2>
                        Category :
                        <div class="badge bg-warning text-wrap mb-2">
                            <a class="link-dark"
                                href="/toko_online/category?view=<?= $result['category_slug'] ?>"><?= $result['category_name'] ?></a>
                        </div>
                        <h3 class="fw-semibold"><?= 'Rp ' . number_format($result['product_price'],2,",",".") ?></h3>
                        <div>
                            <strong>Description</strong>
                            <p class="desc-truncate">
                                <?= substr($result['product_desc'], 0, 250) ?>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <p>
                                    <?= $result['product_desc'] ?>
                                </p>
                            </div>
                            <?php if(strlen($result['product_desc']) > 250): ?>
                            <a id="viewMore" data-mdb-toggle="collapse" href="#collapseExample" role="button"
                                draggable="false" aria-expanded="false" aria-controls="collapseExample">
                                View More...
                            </a>
                            <?php endif; ?>
                            <p class="pt-2"><?= $result['product_rating'] / 10 ?> / 5 <i class="bi bi-star-half"></i>
                            </p>
                            <h5>Stock : <?= $result['product_stock'] ?> <i class="fa-solid fa-box-archive"></i></h5>
                            <small>
                                Published at : <?= $result['created_at'] ?>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div id="links">
                <h4><a href="/toko_online/category">Category</a></h4>
                <?= $this->include('apps/toko_online/category') ;?>
            </div>
        </div>
    </div>
</div>

<br class="user-select-none">
<br class="user-select-none">
<br class="user-select-none">
<br class="user-select-none">
<?= $this->include('template/footer') ;?>
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
            $('#search-input').css('width', '430')
        });
    }

    $('#viewMore').click(function() {
        $('.desc-truncate').toggleClass('d-none');
    })



});
</script>
<?= $this->endSection() ;?>