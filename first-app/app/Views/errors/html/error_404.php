<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
    <link rel="stylesheet" href="<?= baseurl ?>/src/css/errors.css">
    <title>404 - Not Found</title>
</head>

<body class="user-select-none">
    <div class="container text-center">
        <h1>404</h1>
        <h3>Page Not Found</h3>
        <p>
            <?php if (! empty($message) && $message !== '(null)') : ?>
            <?= nl2br(esc($message)) ?>
            <?php else : ?>
            Sorry! Cannot seem to find the page you were looking for.
            <?php endif ?>
        </p>
        <div class="divider mt-2"></div>
        <br>
        <a href="/">Back To Homepage</a>
    </div>


    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'>
    </script>
</body>

</html>