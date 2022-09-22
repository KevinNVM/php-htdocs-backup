<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VnChat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    .img-profile {
        transition: all 200ms;
    }

    .img-profile:hover {
        opacity: 90%;
    }

    #receiver-list {
        height: 85%;
        overflow-y: scroll;
    }

    .card {
        overflow-x: hidden;
    }

    .receiver {
        cursor: pointer;
        transition: all 100ms;
    }

    .receiver:hover {
        background-color: rgba(177, 170, 170, 0.15);
    }
    </style>
</head>
<?php 
include 'utils/functions.php';
// echo '<pre>' . var_export($_SESSION['login'], true) . '</pre>'; die;


if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<body class="d-flex align-items-center">

    <div class="container border border-secondary shadow position-relative">

        <section id="user-id" class="d-flex flex-row-reverse align-items-center justify-content-between">
            <a href="#">
                <img src="img/default.jpg" width="50" height="50" class="img-profile mt-2 ms-3">
            </a>
            <div class="dropdown">
                <button type="button"
                    class="btn border border-secondary rounded-0 text-white position-relative mt-2 inbox-title"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Contacts
                </button>
                <ul class="dropdown-menu rounded-0 shadow-none bg-black border border-secondary"
                    aria-labelledby="dropdownMenuLink">
                    <li>
                        <a role="button" class="dropdown-item text-secondary " data-bs-toggle="modal"
                            data-bs-target="#addNewContact" data-id="newcontact">
                            Add New Contacts
                        </a>

                    </li>
                    <li>
                        <a class="dropdown-item text-secondary "
                            href="http://localhost:82/chat-app-2/index.php">Chat</a>
                    </li>
                    <li>
                        <a class="dropdown-item text-secondary "
                            href="http://localhost:82/chat-app-2/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <small class="bg-success text-white rounded p-1 me-2">Online</small>
        </section>

        <hr class="text-white">

        <form action="#" id="search-receiver">
            <div class="input-group mb-2">
                <input type="text"
                    class="form-control rounded-0 bg-transparent text-secondary border border-secondary bg-black font-monospace"
                    placeholder="Search" autocomplete="off" autofocus name="q">
                <button class="btn btn-dark text-secondary rounded-0 font-monospace visually-hidden">Search</button>
            </div>
        </form>

        <hr>

        <section aria-label="new contact">
            <div class="modal" id="addNewContact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="addNewContactLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-black rounded-0 border border-secondary">
                        <div class="modal-header border-bottom border-secondary">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Contacts</h5>
                            <button type="button" class="btn btn-dark text-secondary rounded-0 mb-3"
                                data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <form method="get">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="username">Username</label>
                                        <input type="text"
                                            class="form-control rounded-0 bg-transparent text-secondary border border-secondary bg-black font-monospace"
                                            maxlength="255" name="username">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-dark text-secondary rounded-0 mb-3">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="receiver-list">



            <div class="receiver">
                <div class="bg-transparent border border-secondary rounded-0 mb-3 p-1">
                    <a href="#" class="text-decoration-none text-secondary">
                        <div>
                            <img src="img/default.jpg" width="60" height="60" class="rounded-0">
                            <h5 class="card-title d-inline ms-1">Person Name</h5>
                            <small class="bg-success text-white rounded p-1 mx-2">Online</small>
                            <h6 class="card-subtitle my-2 text-secondary">20:48</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="receiver">
                <div class="bg-transparent border border-secondary rounded-0 mb-3 p-1">
                    <a href="#" class="text-decoration-none text-secondary">
                        <div>
                            <img src="img/default.jpg" width="60" height="60" class="rounded-0">
                            <h5 class="card-title d-inline ms-1">Person Name</h5>
                            <small class="bg-danger text-white rounded p-1 mx-2">Offline</small>
                            <h6 class="card-subtitle my-2 text-secondary">20:48</h6>
                        </div>
                    </a>
                </div>
            </div>

        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    $('a[data-id=newcontact]').click(function() {
        $('.modal-content').html('');
        $.ajax({
            type: "get",
            url: "others/newcontact.php",
            success: function(response) {
                $('.modal-content').html(response);
            }
        });
    });
    </script>
</body>

</html>