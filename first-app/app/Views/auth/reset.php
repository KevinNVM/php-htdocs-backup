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
    <title>Login | MyApp</title>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <style>
        #intro {
            background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
            height: 100vh;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
            }
        }
        </style>

        <?= $this->include('template/navbar') ;?>

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            <form action="<?= route_to('reset-password') ?>" method="post"
                                class="bg-white  rounded-5 shadow-5-strong p-5">
                                <?= csrf_field() ?>
                                <h3 class="mb-4"><?=lang('Auth.resetYourPassword')?></h3>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <p><?=lang('Auth.enterCodeEmailPassword')?></p>


                                <div class="form-outline mb-4">
                                    <input type="text" id="form1Example1"
                                        class="form-control <?php if(session('errors.token')) : ?>is-invalid<?php endif ?>>"
                                        name="token" value="<?= old('token', $token ?? '') ?>" />
                                    <label class="form-label" for="form1Example1"><?=lang('Auth.token')?></label>
                                    <div class="invalid-feedback">
                                        <?= session('errors.token') ?>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form1Example2"
                                        class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>>"
                                        name="email" value="<?= old('email') ?>" />
                                    <label class="form-label" for="form1Example2"><?=lang('Auth.email')?></label>
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form1Example1"
                                        class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>>"
                                        name="password" />
                                    <label class="form-label" for="form1Example1"><?=lang('Auth.newPassword')?></label>
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form1Example1"
                                        class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>>"
                                        name="pass_confirm" />
                                    <label class="form-label"
                                        for="form1Example1"><?=lang('Auth.newPasswordRepeat')?></label>
                                    <div class="invalid-feedback">
                                        <?= session('errors.pass_confirm') ?>
                                    </div>
                                </div>







                                <button type="submit"
                                    class="btn btn-primary btn-block"><?=lang('Auth.resetPassword')?></button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <?= $this->include('template/footer') ;?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
</body>

</html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
</body>

</html>