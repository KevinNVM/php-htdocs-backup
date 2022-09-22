<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="<?= baseurl ?>/src/css/home.css">
    <title><?= $title ?></title>
</head>

<body>
    <header class="shadow">
        <nav class="navbar navbar-expand-md navbar-scroll"
            style="position: absolute; display:block; z-index: 10000; width: 100%;">
            <div class="container-fluid">
                <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon d-flex justify-content-start align-items-center">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link navigation" aria-current="page" href="javascript:void(0)"
                                draggable="false">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navigation" href="/apps" rel="nofollow">Apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navigation" href="#about">About</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link pe-2" href="https://www.youtube.com/" rel="nofollow">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="https://www.facebook.com/" rel="nofollow">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="https://twitter.com/" rel="nofollow">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2" href="https://github.com/kevinnvm" rel="nofollow">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="intro" class="bg-image"
            style="background-image: url(<?= baseurl ?>/src/img/tracks.jpg); height: 100vh;">
            <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.8)">
                <div class="container d-flex align-items-center text-center h-100">
                    <div>
                        <h1 class="mb-5 title">Hello There,</h1>
                        <p class="phar text-capitalize">
                            my name is made kevin darmawan, i am a student and someone who likes to learn something
                            new,
                            this web contains applications that i created and i show on this site.
                        </p>
                        <a class="browse me-3" href="/apps">Browse</a>
                        <a class="browse" href="#about">About</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid my-4 pb-2" id="about">
        <div class="row g-2">
            <div class="col-12 col-sm-2">
                <div class="side-content sticky-top rounded-3 pt-2 me-2 py-2">
                    <h5>Contents List</h5>
                    <ul>
                        <li><a class="links" href="#about-page">About</a></li>
                        <li><a class="links" href="#about-me">Creator</a></li>
                        <li><a class="links" href="#contact">Contact</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-9">
                <section id="about-page" class="my-5">
                    <h2>About This Page</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae adipisci voluptas accusamus
                        explicabo
                        mollitia at, vitae officiis sed tempore dolores suscipit quaerat, veritatis inventore maiores
                        consequatur tenetur rem a cum aliquam, error pariatur sequi. Eveniet aspernatur velit molestias
                        porro nesciunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut et quo assumenda sunt libero
                        voluptatibus minima officia quis iure tempore!</p>

                </section>
                <hr>
                <section id="about-me" class="my-5">
                    <h2>About Me</h2>
                    <img src="<?= baseurl ?>/src/img/stock_man.jpg" width="200" class="img-thumbnail rounded-3 shadow">
                    <p class="mt-3">
                        My name is Made Kevin Darmawan, I am a Student and a Learner.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae asperiores sint necessitatibus
                        reiciendis dicta sequi voluptatibus modi aliquid, incidunt autem ipsum, vero perspiciatis. Odit
                        labore rem doloribus a unde voluptatibus?
                    </p>
                </section>
                <hr>
                <section id="contact" class="my-5">
                    <h2>Contact Me</h2>
                    <div class="container">
                        <div class="row row-cols-1 g-2">
                            <div class="col form-outline mb-2">
                                <p class="m-0 p-0">Your Email</p>
                                <div class="form-outline mb-2">
                                    <input type="email" class="form-control" id="email">
                                    <label for="email" class="form-label">Email</label>
                                </div>
                            </div>
                            <p class="m-0 p-0">Email Subject</p>
                            <div class="col form-outline mb-2">
                                <input type="text" class="form-control" id="subject">
                                <label for="subject" class="form-label">Subject</label>
                            </div>
                            <p class="m-0 p-0">Message</p>
                            <div class="col form-outline mb-2">
                                <textarea name="msg" id="msg" cols="30" rows="4" class="form-control"></textarea>
                                <label for="msg" class="form-label">Message</label>
                            </div>
                            <div class="col">
                                <button class="btn btn-warning">Send</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 col-sm-1">
                <div class="side-content sticky-top rounded-3 pt-2 px-2 py-3">
                    <h4>Links</h4>
                    <a class="d-block links" href="/">&raquo; Home</a>
                    <a class="d-block links" href="/apps">&raquo; Apps</a>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('template/footer') ;?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
</body>

</html>