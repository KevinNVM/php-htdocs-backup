<?= $this->extend('layouts/main') ?>

<?= $this->section('container') ?>
<!-- Main Content -->

<?= $this->include('layouts/persontabs') ?>
<div class="row">
    <div class="col-8">
        <form action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Orang" name="keyword">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <h3>Daftar Orang</h3>
    <div class="col">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">
                        <a href="/persons/create" class="text-decoration-none btn btn-sm btn-outline-primary">Add
                            New</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $key = 1 + (10 * ($currentPage - 1)) ?>
                <?php foreach($persons as $person): ?>
                <tr>
                    <th scope="row"><?= $key ?></th>
                    <td><?= $person['name'] ?></td>
                    <td><a href="/persons/details/<?= $person['name'] ?>" class="btn btn-sm btn-success">Detail</a>
                    </td>
                </tr>
                <?php $key++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pager->links('persons', 'person_pagination') ?>
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