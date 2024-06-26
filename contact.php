<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Luckiest+Guy&family=Mukta:wght@200;300;400;500;600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Sevillana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=DM+Serif+Display:ital@0;1&family=Peralta&family=Ranchers&family=Redressed&family=Righteous&family=Sigmar&family=Spicy+Rice&display=swap"
        rel="stylesheet">
    <!-- Dodaj link do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha384-jLKHWM+gLrIo8RA5I8x8n7GfvGa9czH6p6ro5CQzXjdYw5F9b5o2OZkWJ5o6lFzj" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        integrity="sha384-+Q4dxFGGZ2hzs5K9RLaMJyTF7P1nF8hOmdcKfWzA+WyWoBDjnhLL+H+ChJb7ANc2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .homebody {
            background-image: url('img/maintlo.png');
            background-size: cover;
        }

        .navbar-brand {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .navbar-brand img {
            position: absolute;
            top: -22px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
            width: 50px;
            height: 50px;
        }

        body {
            background-image: url('img/maintlo.png') background-size: cover;
            background-repeat: no-repeat;
        }
        .homebody {
            background-image: url('img/maintlo.png');
        }
    </style>
</head>

<body class="homebody">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/szoplogo.png" alt="Logo" width="15" height="15" class="d-inline-block align-text-top">
                Raccoon Rascals
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store.php">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <p class="centered-text" style="text-align: center; margin-left: 390px;"><strong><br>Ready for some
                        mischief? Rent a raccoon today!</strong><br>Got a raccoon rental in mind? Our dumpster-diving
                    critters redefine 'trash pandas' with nightly antics. From snack scavenging to trash can parties,
                    they'll liven up your day. Secure those bins or prepare for a raccoon rave! <strong>Questions?
                        Contact us</strong>.</p>


            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-map-marker fa-3x text-light" aria-hidden="true" style="color:#8d5d93 !important"></i>
                <h8>Location</h8>
                <p style="color: white;">11 Raccoon Retreat Lane,<br> Raccoonville,<br> RaccoonLandia<br></p>
                <i class="fa fa-light fa-phone fa-3x text-light" aria-hidden="true"
                    style="color:#8d5d93 !important"></i>
                <h8>Call us</h8>
                <p style="color: white;">+92 325 876 555 22</p>
                <i class="fa fa-light fa-envelope fa-3x text-light" aria-hidden="true"
                    style="color:#8d5d93 !important"></i>
                <h8>Email</h8>
                <p style="color: white;">raccoonrascals@gmail.com</p>
            </div>
            <div class="col-md-8">
                <div class="contactform">
                    <div class="row">
                        <div class="col-md-8">
                            <span id="1B1Response" class="tab-content"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input name="tbName" type="text" id="tbName" class="form-control my-2" placeholder="Name">
                        </div>
                        <br>
                        <div class="col-md-6">
                            <input name="tbEmail" type="text" id="tbEmail" class="form-control my-2"
                                placeholder="Email">
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input name="tbSubject" type="text" id="tbSubject" class="form-control my-2"
                                placeholder="Subject">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="tbMessage" rows="10" cols="20" id="tbMessage" cols="30"
                                class="form-control my-2" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="row"></div>
                    <div class="col-md-12">
                        <input type="submit" name="btnSendMsg" value="SendMessage" id="btnSendMsg" type="submit"
                            class="btn btn-lg btn-submit btn-outline-light">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>