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


        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            <form action="<?= route_to('login') ?>" method="post"
                                class="bg-white  rounded-5 shadow-5-strong p-5">
                                <?= csrf_field() ?>
                                <h3 class="mb-4"><?=lang('Auth.loginTitle')?></h3>
                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <?php if ($config->validFields === ['email']): ?>
                                <!-- Email Input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form1Example1"
                                        class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                        name="login" />
                                    <label class="form-label" for="form1Example1"><?=lang('Auth.email')?></label>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>

                                <?php else: ?>
                                <!-- Email Input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form1Example1"
                                        class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                        name="login" />
                                    <label class="form-label"
                                        for="form1Example1"><?=lang('Auth.emailOrUsername')?></label>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form1Example2"
                                        class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                        placeholder="<?=lang('Auth.password')?>" name="password" />
                                    <label class="form-label" for="form1Example2"><?=lang('Auth.password')?></label>
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <?php if ($config->allowRemembering): ?>
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form1Example3"
                                                <?php if(old('remember')) : ?> checked <?php endif ?> name="remember"
                                                checked />
                                            <label class="form-check-label text-truncate" for="form1Example3">
                                                <?=lang('Auth.rememberMe')?>
                                            </label>
                                        </div>
                                    </div>
                                    <?php endif; ?>


                                    <div class="col text-center">
                                        <div class="row">
                                            <div class="col">
                                                <?php if ($config->allowRegistration) : ?>
                                                <p><a
                                                        href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col">
                                                <?php if ($config->activeResetter): ?>
                                                <p class="text-truncate"><a
                                                        href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit"
                                    class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
                                <div class="row">
                                    <div class="col">
                                        <a class="link-primary" href="/">Home</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
</body>

</html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
</body>

</html>