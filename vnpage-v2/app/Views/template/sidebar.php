<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
        <div class="navbar-container">
            <button class="btn btn-sm border-0 m-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
                    class="bi bi-list fs-5"></i></button>
            <a class="navbar-brand fw-semibold" href="/">VNPage</a>
        </div>
    </div>
</nav>


<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="nav flex-column">
            <a class="nav-link <?= ($title === "Home")?'active':'' ?> link-dark fw-semibold" href="#">Active</a>
            <a class="nav-link link-secondary <?= ($title === "Link")?'active':'' ?>" href="#">Link</a>
            <a class="nav-link link-secondary <?= ($title === "About")?'active':'' ?>" href="/about">About</a>
            <a style="cursor:pointer;" class="nav-link link-secondary" data-bs-toggle="offcanvas"
                data-bs-target="#moreOptions" aria-controls="moreOptions"> Settings <i class="bi bi-gear"></i></button>
            </a>
        </nav>
        <p class="text-secondary fw-6 fixed-bottom mx-2 my-1">VNPage Copyright &copy; 2022</p>
    </div>
</div>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="moreOptions"
    aria-labelledby="moreOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="moreOptionsLabel">Settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="nav flex-column">
            <a class="nav-link active link-dark fw-semibold" href="#">Active</a>
            <a class="nav-link link-secondary" href="#">Link</a>
            <a class="nav-link link-secondary" href="#">Link</a>
        </nav>
        <p class="text-secondary fw-6 fixed-bottom mx-2 my-1">VNPage Copyright &copy; <?= date('Y') ?></p>
    </div>
</div>