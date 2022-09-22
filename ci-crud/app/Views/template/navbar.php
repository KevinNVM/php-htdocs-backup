<?php helper('auth'); ?>
<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
            <!-- Brand -->
            <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
                <i class="fa-solid fa-code fa-lg"></i><span class="fw-bold ms-1">Vn</span>
            </a>

        </div>
        <!-- Left elements -->

        <!-- Right elements -->
        <ul class="navbar-nav flex-row">
            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-chevron-circle-down fa-lg"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="/"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/about"><i class="fa-solid fa-circle-info"></i> About</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/blog"><i class="fa-solid fa-paragraph"></i> Blog</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/about#contact"><i class="fas fa-phone"></i> Contact</a>
                    </li>
                </ul>
            </li>
            <?php 

$db = mysqli_connect('localhost', 'root', '', 'ci_crud');
$query = mysqli_query($db, "SELECT * FROM notifications");
$result = [];
while($q = mysqli_fetch_object($query))
{
    $result[] = $q;
}    

?>

            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell fa-lg"></i>
                    <?php if(count($result) != 0): ?>
                    <span class="badge rounded-pill badge-notification bg-danger"><?= count($result) ?></span>
                    <?php endif; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <?php if(count($result) != 0): ?>
                    <?php $key = 1; foreach($result as $row): ?>
                    <li class="border">
                        <a class="dropdown-item fs-6" title="<?= $row->created_at ?>"
                            href="/notification/<?= $row->notif_id ?>"><?= $row->notif_head ?></a>
                    </li>
                    <?php $key++; endforeach; ?>
                    <?php else: ?>
                    <li class="border">
                        <a class="dropdown-item fs-6">No Newer Notification</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>

            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                    <i class="fa-solid fa-gear fa-lg"></i>
                </a>
                <div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                    <div class="modal-dialog modal-sm ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-gears fa-lg"></i>
                                    Settings</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body container">
                                <div class="row row-cols-1 g-4">
                                    <div class="col">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input mode-switch" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault" />
                                            <label class="form-check-label" for="flexSwitchCheckDefault"><i
                                                    class="fa-solid fa-moon"></i> Dark
                                                Mode</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item me-3 me-lg-1">
                <a class="nav-link d-sm-flex align-items-sm-center" href="#" id="dropdownMenuLink"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('img/'.user()->user_profile) ?>" class="rounded-circle bg-dark "
                        style="padding: 1px 1px 1px 1px;" height="22" loading="lazy" />
                    <strong class="d-none d-sm-block ms-1"><?= user()->username ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item text-muted disabled" href="#" id="dropdownMenuLink"
                            data-mdb-toggle="tooltip" data-mdb-html="true"
                            title="<b><?= user()->username ?></b><br><em><?php foreach(user()->roles as $roles){echo $roles;} ?></em>"
                            aria-expanded="false">
                            <img src="<?= base_url('img/'.user()->user_profile) ?>"
                                class="d-inline rounded-circle bg-dark " style="padding: 1px 1px 1px 1px;" height="22"
                                loading="lazy" />
                            <strong><?= user()->username ?></strong>
                        </a></li>
                    <li>
                        <a data-mdb-toggle="tooltip" data-mdb-html="true"
                            title="<b><?= user()->username ?></b><br><em><?php foreach(user()->roles as $roles){echo $roles . ' ';} ?></em>"
                            class="dropdown-item" href="/profile"><i class="fa-solid fa-user"></i> Profile</a>
                    </li>
                    <?php if(in_groups('OWNER') || in_groups('ADMIN')): ?>
                    <li>
                        <a class="dropdown-item" href="/admin"><i class="fa-solid fa-users"></i> Admin Page</a>
                    </li>
                    <?php endif; ?>
                    <?php if(logged_in()): ?>
                    <li><a class="dropdown-item" href="/logout"><i class="fa-solid fa-right-from-bracket"></i> Log
                            Out</a>
                    </li>
                    <?php else: ?>
                    <li><a class="dropdown-item" href="/login"><i class="fa-solid fa-right-from-bracket"></i> Log In</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
        <!-- Right elements -->
    </div>
</nav>
<!-- Navbar -->