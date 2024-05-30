<?php

// Database connection details
$host = 'localhost';
$username = 'root'; // Replace with your database username
$password = '';     // Replace with your database password
$database = 'shop';

// Create a new MySQLi connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <!-- Dołączanie linków do czcionek bez powtórzeń -->
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
    <style>
        .navbar-brand {
            text-align: center;
            position: relative;
            z-index: 2;
            /* Ustawienie z-index na 2, aby napis był na wierzchu */
        }

        .navbar-brand img {
            position: absolute;
            top: -22px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
            /* Ustawienie z-index na 1, aby logo było pod napisem */
            width: 50px;
            /* Nowe, mniejsze wymiary logo */
            height: 50px;
        }

        /* Style dla nagłówka "Raccoons Trending" */
        .product h1 {
            font-family: 'Righteous', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #fef6ff;
            transition: font-size 0.3s ease; /* Dodaj przejście dla płynnej animacji */
        }

        .product h1:hover {
            font-size: 2.7rem; /* Ustal wielkość tekstu po najechaniu */
            background: linear-gradient(to right, #c9c9e6, #6c4177); 
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
                </ul>
                <form class="d-flex" role="search">
                    <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn0" type="submit">
                      <span>S</span><span>E</span><span>A</span><span>R</span><span>C</span><span>H</span>
                    </button>
            </div>
        </div>
    </nav>

    <!--======== TU SEKCJA WYBORU SZOPÓW Z OB


    <!-======== TU SEKCJA WYBORU SZOPÓW Z OBRAZKAMI ========-->

    <section class="product">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-5 m-auto text-center">
                    <h1>Racoon's Trending</h1>
                    <h6>Choose your wea(racoo)pon</h6>
                </div>
            </div>
            <div class="row">
                <?php

                $query = "SELECT id, name, price, description, image_path FROM raccoons";
                $result = $mysqli->query($query);

                if (!$result) {
                    die("Query failed: " . $mysqli->error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo
                    '<div class="col-lg-3 text-center">
                        <div class="card border-0 bg-light mb-2">
                            <div class="card-body">
                                <img src="/pracze/img/'. htmlspecialchars($row['image_path']) .'" class="img-fluid fixed-size" alt="">
                            </div>
                        </div>
                        <p class="centered-text">
                            <strong>'. htmlspecialchars($row['name']) .':</strong><br>
                            '. htmlspecialchars($row['description']) .'
                        </p>
                        <p class="centered-price">$'. htmlspecialchars($row['price']) .'</p>
                        <div class="row pt-1"></div>
                        <button class="btn2"><a href="#">ADD TO CART!</a></button>
                        <div class="row pb-1"></div>
                    </div>';

                }
                $result->free();

                ?>
            </div>
        </div>
    </section>
</body>
</html>

<?php $mysqli->close(); ?>