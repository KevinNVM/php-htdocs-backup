<?= $this->extend('template/main') ;?>
<?= $this->section('content') ;?>

<?= $this->include('template/navbar') ;?>
<div class="container my-4">
    <h3>Welcome, <?= user()->username ?></h3>

    <div class="row">
        <div class="col-12">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="/admin/userlist" class="btn btn-primary btn-rounded"><i class="fa-solid fa-users"></i>
                        Manage Users</a>
                </li>
                <li class="list-group-item">
                    <a href="/admin/notifications_center" class="btn btn-secondary btn-rounded"><i
                            class="fa-solid fa-bell"></i> Manage
                        Notifications</a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="btn btn-warning btn-rounded">Coming Soon..</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?= $this->endSection() ;?>