<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= baseurl ?>">BelajarCodeIgniter</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link <?php echo($title === "Home")?( "fw-bold active"):("") ?>" aria-current="page"
                    href="<?= baseurl ?>">Home</a>
                <a class="nav-link <?php echo($title === "Comics")?( "fw-bold active"):("") ?>"
                    href="<?= baseurl ?>/comics">Comics</a>
                <a class="nav-link <?php echo($title === "Persons")?( "fw-bold active"):("") ?>"
                    href="<?= baseurl ?>/persons">Orang</a>
                <a class="nav-link <?php echo($title === "About")?( "fw-bold active"):("") ?>"
                    href="<?= baseurl ?>/pages/about">About</a>
                <a class="nav-link <?php echo($title === "Contact")?( "fw-bold active"):("") ?>"
                    href="<?= baseurl ?>/pages/contact">Contact</a>
            </div>
        </div>
    </div>
</nav>