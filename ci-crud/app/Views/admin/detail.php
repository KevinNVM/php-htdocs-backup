<?php $user=$user[0] ?>
<h2 class="text-center text-muted m-2 text-truncate">
    <pre><?= $user->username ?>'s Details</pre>
</h2>
<form action="/admin/editProfile/<?= $user->userid ?>" method="POST" enctype="multipart/form-data">
    <div class="row border border-2 p-2">
        <div class="col-6">Profile Picture</div>
        <div class="col-6">
            <img id="output" src="<?= base_url('img/'.$user->user_pfp) ?>" width="75" class="bg-secondary rounded-5"
                style="padding: 1px 1px 1px 1px">
        </div>
    </div>
    <div class="row border border-2 p-2">
        <div class="col-6">Email</div>

        <div class="col-6">
            <input type="email" value="<?= $user->email ?>" class="form-control px-2 bg-transparent" placeholder="Email"
                name="email" required disabled>
        </div>
    </div>
    <div class="row border border-2 p-2">
        <div class="col-6">Fullname</div>
        <div class="col-6">
            <input type="text" value="<?= $user->fullname ?>" class="form-control px-2 bg-transparent"
                placeholder="fullname" name="fullname" disabled>
        </div>
    </div>
    <div class="row border border-2 p-2">
        <div class="col-6">Username</div>
        <div class="col-6">
            <input type="text" value="<?= $user->username ?>" class="form-control px-2 bg-transparent"
                placeholder="username" name="username" required disabled>
        </div>
    </div>
    <div class="row border border-2 p-2">
        <div class="col-6">Role</div>
        <div class="col-6">
            <div class="badge bg-primary text-wrap" style="width: 6rem"><?= $user->role ?></div>
        </div>
    </div>
    <div class="row border border-2 p-2">
        <div class="col-6">Force Reset Password</div>
        <div class="col-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="force_pass_reset" id="force_pass_reset1" value="1"
                    <?= ($user->force_pass_reset == '1')?'checked':'' ?> disabled />
                <label class="form-check-label rounded px-1 bg-success" for="force_pass_reset1">TRUE</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="force_pass_reset" id="force_pass_reset0" value="0"
                    <?= ($user->force_pass_reset == '1')?'':'checked' ?> disabled />
                <label class="form-check-label rounded px-1 bg-danger" for="force_pass_reset0">FALSE</label>
            </div>
        </div>
    </div>

    <div class="row border border-2 p-2">
        <div class="col-6">Activated</div>
        <div class="col-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="active" id="active1" value="1"
                    <?= ($user->active == '1')?'checked':'' ?> disabled />
                <label class="form-check-label rounded px-1 bg-success" for="active1">TRUE</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="active" id="active0" value="0"
                    <?= ($user->active == '1')?'':'checked' ?> disabled />
                <label class="form-check-label rounded px-1 bg-danger" for="active0">FALSE</label>
            </div>
        </div>
    </div>
    <div class="row border border-2 p-2">
        <div class="col-6">Updated At</div>
        <div class="col-6"><?= $user->updated_at ?></div>
    </div>
    <div class="row border border-2 p-2">
        <div class="col-6">Created At</div>
        <div class="col-6"><?= $user->created_at ?></div>
    </div>
    <div class="fixed-action-btn" id="fixed1">
        <a class="btn btn-floating btn-primary btn-lg btn-edit" href="javascript:void(0)"
            style="background-color: #f44336;">
            <i class="fas fa-pencil-alt"></i>
        </a>
    </div>
</form>

<script>
$('button').hide();
$('.btn-edit').on('click', function() {
    $('input').removeAttr('disabled');
    $('button').show('slow', 'linear');
    $('.fixed-action-btn').html(`
    <button class="btn btn-floating btn-primary btn-lg" type="submit"><i class="fas fa-check fa-lg"></i></button>
    `);
});
</script>