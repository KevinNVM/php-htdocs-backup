<?php //dd($alamat) ?>

<?= $this->extend('layouts/main') ?>

<?= $this->section('container') ?>
<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col">
                Contact Me
                <ul class="list-group">
                    <li class="list-group-item"><?= $alamat['tipe'] ?></li>
                    <li class="list-group-item">Alamat : <?= $alamat['alamat'] ?></li>
                    <li class="list-group-item">Kota : <?= $alamat['kota'] ?></li>
                    <li class="list-group-item">Email : <?= $email ?></li>
                </ul>
            </div>
        </div>
    </div>
<!-- End Main Content -->
<?= $this->endSection() ?>
