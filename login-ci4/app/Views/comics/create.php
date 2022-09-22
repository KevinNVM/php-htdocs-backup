<?= $this->extend('layouts/main') ?>


<?= $this->section('container') ?>
<!-- Main Content -->

<?= $this->include('layouts/comictabs') ?>


<div class="row">
    <div class="col-sm-8">
        <h2 class="my-2">Add New Comic</h2>
        <form action="/comics/save" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="title" class="form-label">Comic's Title</label>
                <input type="text" value="<?= old('title') ?>"
                    class="form-control <?= ($validation->hasError('title'))?'is-invalid':'' ?>" id="title" name="title"
                    autofocus val>
                <div class="invalid-feedback"><?= $validation->getError('title') ?></div>
                <label for="author" class="form-label"> Author</label>
                <input type="text" value="<?= old('author') ?>" name="author" class="form-control" id="author">
                <label for="publisher" class="form-label"> Publisher</label>
                <input type="text" value="<?= old('publisher') ?>" name="publisher" class="form-control" id="publisher">
                <div class="Img-Container">
                    <label for="inputGroupFile01" class="form-label">Cover</label>
                    <input type="file" class="form-control <?= ($validation->hasError('cover'))?'is-invalid':'' ?>" name="cover" onchange="loadFile(event)"
                    id="inputGroupFile01">
                    <img id="output" class="thumbnail w-25 m-2 rounded user-select-none">
                    <div class="invalid-feedback"><?= $validation->getError('cover') ?></div>
                </div>
                <button class="btn btn-outline-primary">Add</button>
            </div>
        </form>
    </div>
</div>
<!-- End Main Content -->
<?= $this->endSection() ?>


<?= $this->section('footer') ?>
<script>
<?php if ($validation->hasError('title') || $validation->hasError('cover')): ?>
<?php 
    $error_msg = ($validation->hasError('title')) ? $validation->getError('title'):$validation->getError('cover');    
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