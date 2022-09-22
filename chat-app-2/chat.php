<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VnChat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css");

    ::-moz-selection {
        /* Code for Firefox */
        color: #000;
        background: #6c757d;
    }

    ::selection {
        color: #000;
        background: #6c757d;
    }

    body {
        height: 100vh;
        background: #000;
        color: #6c757d;
    }

    .container {
        width: 750px;
        height: 750px;
    }
    </style>
</head>

<?php 
    include 'utils/functions.php';

    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
    }

    (!isset($_GET['uid']) || !isset($_GET)) ? header("Location: index.php") : $uid = $_GET['uid'] ;

    // query message
    $sender = $_SESSION['login'];
    $receiver = $uid;
    $query = query("SELECT * FROM messages WHERE receiver_msg_id = '$receiver' AND sender_msg_id = '$sender' ORDER BY msg_id ASC");
    echo '<pre>' . var_export($query, true) . '</pre>'; die;

?>

<body class="d-flex align-items-center">

    <div class="container border border-secondary shadow position-relative">

        <section class="receiver bg-black position-absolute d-flex align-items-center ">
            <img src="img/default.jpg" width="50" height="50" class="mt-2 me-3">
            <h5>John Everest</h5>
            <div class="status ms-2 mb-2 fst-italic">Typing...</div>
            <div class="dropdown">
                <a class="text-decoration-none text-secondary fs-3" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </a>

                <ul class="dropdown-menu rounded-0 shadow-none bg-black border border-secondary"
                    aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item text-secondary " href="#">Action</a></li>
                    <li><a class="dropdown-item text-secondary " href="#">Another action</a></li>
                    <li><a class="dropdown-item text-secondary " href="#">Something else here</a></li>
                </ul>
            </div>
        </section>
        <br>
        <main class="conversation my-5 font-monospace">
            <p class="text-center m-0 p-0">Chat Started</p>
            <hr class="text-white">
            <small class="d-block text-success"><span class="fst-italic">John:</span> <span>Hello, How Are
                    You?</span></small>
            <small class="d-block text-warning"><span class="fst-italic">You:</span> <span>I am Fine, Thank
                    You</span></small>
        </main>
        <form action="#">
            <div class="input-group position-absolute bottom-0 pb-2 pe-4">
                <input type="text"
                    class="form-control rounded-0 bg-transparent text-secondary border border-secondary bg-black font-monospace"
                    placeholder="Type Message" autocomplete="off" autofocus name="msg">
                <button class="btn btn-dark text-secondary rounded-0 font-monospace">Send</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>