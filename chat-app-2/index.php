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

    tr {
        transition: all 100ms;
    }

    tr:hover {
        background-color: rgba(177, 170, 170, 0.15);
        cursor: pointer;
    }

    .inbox {
        overflow: hidden;
        overflow-y: scroll;
        height: 600px;
    }
    </style>
</head>

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
                    Messages
                    <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger   rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </button>
                <ul class="dropdown-menu rounded-0 shadow-none bg-black border border-secondary"
                    aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item text-secondary "
                            href="http://localhost:82/chat-app-2/contacts.php">Contacts</a></li>
                    <li><a class="dropdown-item text-secondary "
                            href="http://localhost:82/chat-app-2/logout.php">Logout</a></li>
                </ul>
            </div>
            <small class="bg-success text-white rounded p-1 me-2">Online</small>
        </section>

        <section id="inbox-container">

            <form action="#" id="search-messages">
                <div class="input-group my-2">
                    <input type="text"
                        class="form-control rounded-0 bg-transparent text-secondary border border-secondary bg-black font-monospace"
                        placeholder="Search" autocomplete="off" autofocus name="q">
                    <button class="btn btn-dark text-secondary rounded-0 font-monospace visually-hidden">Search</button>
                </div>
            </form>

            <div class="inbox mt-2">
                <table class="table table-borderless text-secondary">
                    <thead>
                        <tr class="border-top border-bottom border-secondary">
                            <th scope="col"></th>
                            <th scope="col">From:</th>
                            <th scope="col">At:</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr onclick="redirect(1)">
                            <td scope="row">1</td>
                            <td>mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </section>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    function redirect(msgId) {
        console.log(msgId);
        location = '/chat-app-2/#' + msgId;
    }
    </script>
</body>

</html>