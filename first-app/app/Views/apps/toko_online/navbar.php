<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid justify-content-between">

        <div class="d-flex">

            <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="/">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="20" alt="MDB Logo"
                    loading="lazy" style="margin-top: 2px;" />
            </a>



        </div>



        <ul class="navbar-nav flex-row d-none d-md-flex">
            <li class="nav-item me-3 me-lg-1 active">
                <a class="nav-link" href="/toko_online" title="Home">
                    <span><i class="fas fa-home fa-lg"></i></span>
                </a>
            </li>

            <li class="nav-item me-3 me-lg-1">
                <a class="nav-link" href="/toko_online/search?search_query=" title="Search">
                    <span><i class="fas fa-search"></i></span>
                </a>
            </li>

            <li class="nav-item me-3 me-lg-1">
                <a class="nav-link" href="/toko_online/category" title="Category">
                    <span><i class="fas fa-list-alt"></i></span>
                </a>
            </li>

        </ul>



        <ul class="navbar-nav flex-row">
            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i>

                    <span class="badge rounded-pill badge-notification bg-danger">6</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown me-3 me-lg-1">
                <!-- notifications -->
                <?php 
                $query = query("SELECT * FROM tb_notifications");
                $key = 1;
                ?>
                <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell fa-lg"></i>
                    <span class="badge rounded-pill badge-notification bg-danger"><?= count($query) ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <?php foreach($query as $row): ?>
                    <li>
                        <a class="dropdown-item" href="<?= $row['related_links'] ?>">
                            <p class="fw-semibold">
                                <?= $row['notif_title'] ?> : <br>
                                <?= substr($row['notif_body'], 0, 20).".." ?>
                            </p>
                        </a>
                    </li>
                    <?php $key++; endforeach; ?>
                </ul>
            </li>
            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-list"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <?php if(logged_in()): ?>
                        <a class="nav-link d-sm-flex align-items-sm-center ms-2" href="/logout">
                            <img src="<?= baseurl ?>/src/img/stock_man.jpg" class="rounded-circle" height="22"
                                loading="lazy" />
                            <strong class="d-none d-sm-block ms-1">Sign Out</strong>
                        </a>
                        <?php else: ?>
                        <a class="nav-link d-sm-flex align-items-sm-center ms-2" href="/login">
                            <img src="<?= baseurl ?>/src/img/img_avatar1.png" class="rounded-circle" height="22"
                                loading="lazy" />
                            <strong class="d-none d-sm-block ms-1">Sign In</strong>
                        </a>
                        <?php endif; ?>
                    </li>
                    <?php if(logged_in()): ?>
                    <li>
                        <a class="dropdown-item" href="/toko_online/addnew">Add New Product</a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a class="dropdown-item" href="/toko_online/settings">Settings</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>