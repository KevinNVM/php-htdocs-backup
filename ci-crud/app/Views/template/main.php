<!DOCTYPE html>
<html lang="en">
<?php helper('auth'); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('css/mdb.min.css') ?>" id="css">
    <link rel="stylesheet" href="<?= base_url('css/mdb.dark.min.css') ?>" id="css_dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('css/spinner.css') ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" defer></script>
    <style>
    pre {
        font-family: 'Roboto';
    }
    </style>
    <?= $this->renderSection('head') ;?>
    <title><?= $title ?></title>
</head>

<body>
    <?= $this->renderSection('content') ;?>
    <!-- Other Scripts -->
    <script src="<?= baseurl ?>js/darkMode.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?= $this->renderSection('foot') ;?>
    <script src="<?= baseurl ?>js/mdb.min.js"></script>
    <script src="<?= baseurl ?>js/app.js"></script>
</body>

</html>