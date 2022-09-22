<?= $this->extend('layouts/main') ?>

<?= $this->section('container') ?>
<!-- Main Content -->

<?= $this->include('layouts/comictabs') ?>


<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $comic['cover'] ?>" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $comic['title'] ?></h5>
        <p class="card-text">
            Author : <?= $comic['author'] ?>
            <br>
            Publisher : <?= $comic['publisher'] ?>
        </p>
        <p class="card-text"><small class="text-muted">Last updated at <?= $comic['updated_at'] ?></small></p>

        <a href="/comics/edit/<?= $comic['slug'] ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="/comics/delete/<?= $comic['id'] ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
        <br class="user-select-none">
        <br class="user-select-none">
        <a class="text-decoration-none" href="<?= baseurl ?>/comics">Kembali</a>
      </div>
    </div>
  </div>
</div>
<!-- End Main Content -->
<?= $this->endSection() ?>
