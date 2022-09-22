<?= $this->extend('template/head') ?>
<?= $this->section('head') ?>
<link rel="stylesheet" href="<?= baseurl ?>/src/css/main.css">
<link rel="stylesheet" href="<?= baseurl ?>/src/css/toko_online.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?= $this->endSection() ?>

<?= $this->extend('template/main') ?>

<?= $this->section('body') ?>
<?php $this->include('apps/toko_online/functions'); ?>
<?= $this->include('apps/toko_online/navbar') ;?>

<div class="container-fluid mt-4">
    <form class="input-group form-outline mb-5" action="<?= baseurl ?>/toko_online/search">
        <input autocomplete="off" type="search" class="form-search form-control rounded"
            placeholder="cari : RTX 3090..." style="min-width: 125px;" name="search_query" />
        <label for="search" class="form-label"><i class="fa-solid fa-magnifying-glass"></i> Search</label>
    </form>
    <div class="row g-2">
        <div class="col-12 col-sm-10">
            <?= $this->include('apps/toko_online/toko_online_content') ?>
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


    <?php //d($_SESSION) ?>
    <?php if(isset($_SESSION['flash'])): ?>
    swal("<?= $_SESSION['flash']['head'] ?>", "<?= $_SESSION['flash']['msg'] ?>",
        "<?= $_SESSION['flash']['status'] ?>");
    <?php unset($_SESSION['flash']); endif; ?>

});
</script>
<?= $this->endSection() ;?>