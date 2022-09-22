<?= $this->extend('template/main') ;?>
<?= $this->section('content') ;?>

<div class="container">
    <div class="row">
        <div class="col justify-content-center">
            <h3>Welcome To My Projects!</h3>
            <h5>Available Projects :</h5>
            <div class="row row-cols-md-2 row-cols-sm-1 g-md-2 g-sm-3 my-2">
                <div class="col">
                    <div class="card shadow rounded-4 p-1">
                        <img src="https://i.imgur.com/JiLL2Rp.png" class="card-img-top img-thumbnail rounded-4">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-teal">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow rounded-4 p-1">
                        <img src="https://i.imgur.com/JiLL2Rp.png" class="card-img-top img-thumbnail rounded-4">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-teal">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow rounded-4 p-1">
                        <img src="https://i.imgur.com/JiLL2Rp.png" class="card-img-top img-thumbnail rounded-4">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-teal">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ;?>