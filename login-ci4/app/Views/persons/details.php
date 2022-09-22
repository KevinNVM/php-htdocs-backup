<?= $this->extend('layouts/main') ?>

<?= $this->section('container') ?>
<!-- Main Content -->

<?= $this->include('layouts/persontabs') ?>


<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $person['name'] ?></h5>
                <p class="card-text">
                <p class="p-0 m-0">Address : </p>
                <address>
                    <pre class="fw-bold bg-light rounded fs-6 p-2"><?= $person['address'] ?></pre>
                </address>
                <br>
                <p class="p-0 m-0">Email : </p>
                <pre class="text-wrap fw-bold bg-light rounded fs-6 p-2"><?= $person['email'] ?></pre>
                </p>
                <p class="card-text"><small class="text-muted">Last updated at <?= $person['updated_at'] ?></small></p>

                <a href="/persons/edit/<?= $person['name'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="/persons/delete/<?= $person['id'] ?>" class="btn btn-sm btn-danger"><i
                        class="bi bi-trash"></i></a>
                <br class="user-select-none">
                <br class="user-select-none">
                <a class="text-decoration-none" href="<?= baseurl ?>/persons">Kembali</a>
            </div>
        </div>
    </div>
</div>
<!-- End Main Content -->
<?= $this->endSection() ?>