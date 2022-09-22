<?= $this->extend('template/main') ;?>
<?= $this->section('content') ;?>

<?php //d($validation->hasError('fullname'), $validation->getError('fullname')) ?>

<?php $user = user(); ?>
<?= $this->include('template/navbar') ;?>
<div class="container my-4">

    <h1>My Profile</h1>
    <div class="row my-2">

        <div class="col me-2">
            <div class="card shadow mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="#" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img width="150" src="<?= base_url('img/'.$user->user_profile) ?>"
                                class="img-thumbnail m-2 rounded-start" />
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#" onclick="return $('.btn-edit-profile').click()">Change
                                    Profile Picture</a></li>
                        </ul>
                    </div>
                    <?php #d($user) ?>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                Welcome, <?= $user->username ?></h5>
                            <p class="card-text d-inline">
                                Fullname :
                            <pre><?= $user->fullname ?></pre>
                            </p>
                            <p class="card-text d-inline">
                                Email :
                            <pre class="m-0 p-0"><?= $user->email ?></pre>
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated <?= $user->updated_at ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
<div class="container my-4 container-edit visually-hidden">

    <h1>Edit Profile</h1>
    <div class="row my-2">

        <div class="col me-2">
            <form action="<?= base_url('profile/edit/'.user()->email) ?>" method="POST" enctype="multipart/form-data">
                <?php csrf_field() ?>
                <div class="card shadow mb-3 p-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="row">
                            <div class="col">
                                <h5>Profile Picture</h5>
                                <input type="file"
                                    class="form-control form-control-sm <?= ($validation->hasError('user_profile'))?'is-invalid':'' ?> mb-2"
                                    name="user_profile">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('user_profile') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img width="150" id="output" src="<?= base_url('img/'.$user->user_profile) ?>"
                                class="m-2 mt-4 rounded img-thumbnail" alt="Choose Image" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="my-5 form-outline input-group">
                                    <input type="text" name="username" id="username"
                                        class="form-control <?= $validation->hasError('username') ?>"
                                        value="<?= $user->username ?>" placeholder="ex: username123">
                                    <label for="username" class="form-label">Username</label>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('username') ?>
                                    </div>
                                </div>
                                <div class="my-5 form-outline">
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('fullname'))?'is-invalid':'' ?>"
                                        name="fullname" id="fullname" value="<?= $user->fullname ?>">
                                    <label for="fullname" class="form-label">Fullname</label>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('fullname') ?>
                                    </div>
                                </div>
                                <div class="my-5 form-outline">
                                    <input disabled type="email" name="email" id="email"
                                        class="form-control bg-transparent <?= $validation->hasError('email') ?>"
                                        value="<?= $user->email ?>">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email') ?>
                                    </div>
                                </div>
                                <div class="form-outline visually-hidden password-input">
                                    <input type="text" name="email" id="email"
                                        class="form-control <?= $validation->hasError('email') ?>"
                                        value="<?= $user->email ?>">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-rounded">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>


</div>
<div class="fixed-action-btn">
    <a class="btn btn-floating btn-primary btn-lg bg-primary btn-edit">
        <i class="fas fa-pencil-alt fa-lg"></i>
    </a>
    <ul class="list-unstyled">
        <li>
            <a class="btn btn-primary btn-floating btn-lg btn-edit-profile" style="background-color: #f44336;"
                title="Edit Profile">
                <i class="fas fa-pen-to-square fa-lg"></i>
            </a>
        </li>
        <li>
            <a class="btn btn-primary btn-floating btn-lg btn-change-password" style="background-color: #fdd700;"
                title="Change Password">
                <i class="fas fa-key fa-lg"></i>
            </a>
        </li>
    </ul>
</div>
<?= $this->endSection() ;?>

<?= $this->section('foot') ;?>
<script>
$(document).ready(function() {
    $('.btn-edit-profile').on('click', function() {
        document.querySelectorAll('.form-outline').forEach((formOutline) => {
            setTimeout(function() {
                new mdb.Input(formOutline).update();
            }, 500);
        });

        $('.container').toggle('fast', 'linear');
        $('.container-edit').toggle('fast', 'linear').toggleClass('visually-hidden');
    });

    $('input[type=file]').on('change', function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    });

    <?php if($validation->hasError('user_profile') || $validation->hasError('fullname') || $validation->hasError('email')) : ?>
    $('.btn-edit-profile').click();
    <?php endif; ?>

    <?php if(session()->getFlashdata('msg') !== null): ?>
    swal({
        title: "<?= session()->getFlashdata('msg')['head'] ?>",
        text: "<?= session()->getFlashdata('msg')['body'] ?>",
        icon: "<?= session()->getFlashdata('msg')['status'] ?>",
    });
    <?php endif; ?>



});
</script>
<?= $this->endSection() ;?>