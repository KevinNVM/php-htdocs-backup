<?= $this->extend('layouts/main') ?>

<?= $this->section('container') ?>
<!-- Main Content -->

<?= $this->include('layouts/persontabs') ?>


<div class="row">
    <div class="col-sm-8">
        <h2 class="my-2">Add New Person's</h2>
        <form action="/persons/save" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="name" class="form-label">Person's Name</label>
                <input type="text" value="<?= old('name') ?>"
                    class="form-control <?= ($validation->hasError('name'))?'is-invalid':'' ?>" id="name" name="name"
                    autofocus val>
                <div class="invalid-feedback"><?= $validation->getError('name') ?></div>
                <label for="address" class="form-label">Address</label>
                <input type="text" value="<?= old('address') ?>" name="address" class="form-control" id="address">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="<?= old('email') ?>" name="email" class="form-control" id="email">
            </div>
            <button class="btn btn-outline-primary">Add</button>
        </form>
    </div>
</div>
<!-- End Main Content -->
<?= $this->endSection() ?>


<?= $this->section('footer') ?>
<script>
<?php if ($validation->hasError('name')): ?>
<?php 
    $error_msg = ($validation->getError('name'))  
?>
swal("Error", "<?= $error_msg ?>", "error");
<?php endif; ?>
</script>
<?php //d($validation) ?>
<?= $this->endSection() ?>