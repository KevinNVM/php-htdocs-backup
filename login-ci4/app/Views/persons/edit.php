<?= $this->extend('layouts/main') ?>


<?= $this->section('container') ?>
<!-- Main Content -->

<?= $this->include('layouts/persontabs') ?>


<div class="row">
    <div class="col-sm-8">
        <h2 class="my-2">Edit Existing Person</h2>
        <form action="/persons/update/<?= $person['id'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $person['id'] ?>">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="name" class="form-label">person's name</label>
                <input type="text" value="<?= $person['name'] ?>"
                    class="form-control <?= ($validation->hasError('name'))?'is-invalid':'' ?>" id="name" name="name"
                    autofocus>
                <div class="invalid-feedback"><?= $validation->getError('name') ?></div>
                <label for="address" class="form-label"> address</label>
                <input type="text" value="<?= $person['address'] ?>" name="address" class="form-control" id="address">
                <label for="email" class="form-label"> email</label>
                <input type="email" value="<?= $person['email'] ?>" name="email" class="form-control" id="email">
            </div>
            <button class="btn btn-outline-primary">Edit</button>
        </form>
    </div>
</div>
<!-- End Main Content -->
<?= $this->endSection() ?>


<?= $this->section('footer') ?>
<script>
<?php if ($validation->hasError('name') || $validation->hasError('cover')): ?>
<?php 
    $error_msg = ($validation->hasError('name')) ? $validation->getError('name'):$validation->getError('cover');    
?>
swal("Error", "<?= $error_msg ?>", "error");
<?php endif; ?>

var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};
</script>
<?= $this->endSection() ?>