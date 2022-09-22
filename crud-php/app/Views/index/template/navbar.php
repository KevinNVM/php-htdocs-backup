<nav class="navbar navbar-expand-md bg-dark bg-opacity-10 shadow-xs">
    <div class="container ">
        <button class="btn link-light fw-bold border-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
                class="bi bi-three-dots"></i></button>
        <a class="navbar-brand text-white" href="/">CRUD</a>
    </div>
</nav>



<div class="offcanvas offcanvas-start  bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($title === 'Home')?'fw-semibold':'opacity-75' ?>" aria-current="page"
                    href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title === 'App')?'fw-semibold':'opacity-75' ?>" href="/app">App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title === 'About')?'fw-semibold':'opacity-75' ?>" href="/about">About</a>
            </li>
        </ul>
    </div>
</div>