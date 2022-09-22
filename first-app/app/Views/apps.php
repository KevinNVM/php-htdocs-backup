<?= $this->extend('template/head') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="<?= baseurl ?>/src/css/main.css">
<?= $this->endSection() ?>

<?= $this->extend('template/main') ?>

<?= $this->section('body') ?>
<?= $this->include('template/navbar') ;?>

<div class="container mt-4">
    <h2>Apps List</h2>
    <ul class="list-none">
        <li>&raquo; <a href="/toko_online" class="links">Toko Online</a></li>
    </ul>
</div>

<?= $this->endSection() ?>