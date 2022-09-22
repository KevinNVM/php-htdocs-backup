<?= $this->extend('layouts/main') ?>

<?= $this->section('container') ?>
<!-- Main Content -->

<?= $this->include('layouts/comictabs') ?>

<div class="row">
    <h3>Daftar Komik</h3>
    <div class="col">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Title</th>
                    <th scope="col">
                        <a href="/comics/create" class="text-decoration-none btn btn-sm btn-outline-primary">Add New</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($comics as $key => $comic): ?>
                <?php $key++ ?>
                <tr>
                    <th scope="row"><?= $key ?></th>
                    <td><img src="/img/<?= $comic['cover'] ?>" class="img-thumbnail rounded shadow" width="100"></td>
                    <td><?= $comic['title'] ?></td>
                    <td>
                        <a href="/comics/details/<?= $comic['slug'] ?>" class="btn btn-sm btn-success">Detail</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- End Main Content -->
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<!-- Main Content -->
<script>
<?php if (session()->getFlashdata('err')): ?>
swal("Success", "<?= session()->getFlashdata('err') ?>", "success");
<?php endif; ?>
</script>
<!-- End Main Content -->
<?= $this->endSection() ?>