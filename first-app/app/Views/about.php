<?= $this->extend('template/head') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="<?= baseurl ?>/src/css/main.css">
<?= $this->endSection() ?>

<?= $this->extend('template/main') ?>

<?= $this->section('body') ?>

<div class="container-fluid my-4 pb-2">
    <div class="row g-2">
        <div class="col-">
            <div class="side-content sticky-top rounded-3 pt-2 me-2 py-2">
                <a href="/" class="my-3 fs-4 px-2"><i class="bi bi-arrow-left-circle" title="Home"></i></a>
                <ul>
                    <li><a class="links" href="#about-page">About</a></li>
                    <li><a class="links" href="#about-me">Creator</a></li>
                    <li><a class="links" href="#contact">Contact</a></li>
                </ul>
            </div>

        </div>
        <div class="col-9">
            <section id="about-page">
                <h2>About This Page</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae adipisci voluptas accusamus explicabo
                    mollitia at, vitae officiis sed tempore dolores suscipit quaerat, veritatis inventore maiores
                    consequatur tenetur rem a cum aliquam, error pariatur sequi. Eveniet aspernatur velit molestias
                    porro nesciunt.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut et quo assumenda sunt libero
                    voluptatibus minima officia quis iure tempore!</p>

                <hr>
            </section>
            <section id="about-me">
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
                <hr>
            </section>
            <section id="contact">
                <h2>Contact Me</h2>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailcustomer"
                        placeholder="Email">
                    <small id="emailcustomer" class="form-text text-muted">We Never Share Your Email To Anyone </small>
                    <div class="mb-3">
                        <label for="Subject" class="form-label">Subject</label>
                        <input type="Subject" class="form-control" name="Subject" id="Subject"
                            aria-describedby="Subjectcustomer" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <label for="msg" class="form-label">Message</label>
                        <textarea class="form-control" name="msg" id="msg" rows="4"></textarea>
                    </div>
                </div>
                <div class="button">
                    <button name="send" id="send" class="btn btn-warning" href="#" role="button">Sent</button>
                </div>
            </section>
        </div>
        <div class="col">
            <div class="side-content sticky-top rounded-3 pt-2 px-2 py-3">
                <h4>Links</h4>
                <a class="d-block links" href="/">&raquo; Home</a>
                <a class="d-block links" href="/">&raquo; Home</a>
                <a class="d-block links" href="/">&raquo; Home</a>
                <a class="d-block links" href="/">&raquo; Home</a>
                <a class="d-block links" href="/">&raquo; Home</a>
                <a class="d-block links" href="/">&raquo; Home</a>
            </div>
        </div>
    </div>
</div>

<?= $this->include('template/footer') ;?>
<?= $this->endSection() ?>