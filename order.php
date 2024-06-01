<?php
session_start();
include "helpers.php";
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

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container .form-check-input:checked+.form-check-label {
            color: #fff;
            background-color: #482451;
        }

        .form-container .form-check-input:checked {
            background-color: #482451;
            border-color: #482451;
        }

        .form-container .form-check-label {
            padding: 10px 15px;
            border: 1px solid #482451;
            border-radius: 5px;
            cursor: pointer;
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
                        <a class="nav-link" href="contact.html">Contact</a>
                      </li>
                </ul>
                <form class="d-flex" role="search" action="store.php" method="GET">
                    <input class="px-2 search" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn0" type="submit">
                      <span>S</span><span>E</span><span>A</span><span>R</span><span>C</span><span>H</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="form-container">
        
        <h2>
            Selected Racoons:
        </h2>    

        <?php

        
        $cart = $_SESSION['cart'];

        if (is_null($cart) || sizeof($cart) == 0) {
            echo "None.<br/>";
        } else {
            $query = "
                SELECT id, name, price, description, image_path
                FROM raccoons
                WHERE id IN (" .
                implode(",", array_map("intval", $cart))
                . ")";
            $result = dbget($query);

            $total = 0;

            foreach ($result as $row) {
                $price = intval($row["price"]);
                echo $row["name"] . ' - $'. $price .'<br>';
                $total += $price;
            }

            echo '<br>TOTAL: $' . $total . ' + shipping<br><br>';
        }
        
        ?>


        <form action="actions/placeOrder.php" method="POST">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name:</label>
                <input type="text" class="form-control" name="firstName" required maxlength="50">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="lastName" required maxlength="50">
            </div>
            <div class="mb-3">
                <label for="address1" class="form-label">Address Line 1:</label>
                <input type="text" class="form-control" name="address1" required maxlength="100">
            </div>
            <div class="mb-3">
                <label for="address2" class="form-label">Address Line 2:</label>
                <input type="text" class="form-control" name="address2" required maxlength="100">
            </div>
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Credit Card Number:</label>
                <input type="text" class="form-control" name="cardNumber" required maxlength="20">
            </div>
            <div class="mb-3">
                <label for="cardExpiration" class="form-label">Expiration Date:</label>
                <input type="text" class="form-control" name="cardExpiration" required maxlength="7">
            </div>
            <div class="mb-3">
                <label for="CVV" class="form-label">CVV:</label>
                <input type="text" class="form-control" name="CVV" required maxlength="3">
            </div>
            <div class="mb-3">
                <label class="form-label">Are you planning to provide your raccoon with cleaning supplies?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cleaningSupplies" id="cleaningYes" value="yes"
                        required>
                    <label class="form-check-label" for="cleaningYes">YES</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cleaningSupplies" id="cleaningNo" value="no"
                        required>
                    <label class="form-check-label" for="cleaningNo">NO</label>
                </div>
            </div>
            <button type="submit" class="btn1">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
