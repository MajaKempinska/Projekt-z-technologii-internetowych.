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
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="store.html">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.html">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
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
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="./img/szop18.jpg" class="img-fluid fixed-size" alt="">
                        </div>
                    </div>
                    <p class="centered-text"><strong>Gossip Racoon:</strong><br> There is more gossip than working.</p>
                    <p class="centered-price">$22.99</p>
                    <div class="row pt-1"></div>
                    <button class="btn2"><a href="#">ADD TO CART!</a></button>
                    <div class="row pb-1"></div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="./img/szop17.jpg" class="img-fluid fixed-size" alt="">
                        </div>
                    </div>
                    <p class="centered-text"><strong>Zorro Racoon:</strong><br> He will distribute your cleaning supplies to the most needy people.</p>
                    <p class="centered-price">$0.99</p>
                    <button class="btn2"><a href="#">ADD TO CART</a></button>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="./img/szop16.jpg" class="img-fluid fixed-size" alt="">
                        </div>
                    </div>
                    <p class="centered-text"><strong>Rockstar Racoon:</strong><br> More playing guitar than washing.</p>
                    <p class="centered-price">$220.99 (Autograph extra)</p>
                    <button class="btn2"><a href="#">ADD TO CART</a></button>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="./img/szop14.jpg" class="img-fluid fixed-size" alt="">
                        </div>
                    </div>
                    <p class="centered-text"><strong>Very Good Racoon:</strong><br> Your laundry will be perfectly washed.</p>
                    <p class="centered-price">$999.99</p>
                    <button class="btn2"><a href="#">ADD TO CART!</a></button>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="./img/szop15.jpg" class="img-fluid fixed-size" alt="">
                        </div>
                    </div>
                    <p class="centered-text"><strong>"I Don't Know What to Do" Racoon:</strong><br> Never knows what to do, you have to help him to wash</p>

                    <p class="centered-price">$10.00</p>
                    <button class="btn2"><a href="#">ADD TO CART</a></button>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="./img/szop20.jpg" class="img-fluid fixed-size" alt="">
                        </div>
                    </div>
                    <p class="centered-text"><strong>Postgraduate Racoon:</strong><br>Too busy to focus on your laundry all the time.</p>
                    <p class="centered-price">$45.00</p>
                    <button class="btn2"><a href="#">ADD TO CART</a></button>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="./img/szop12.jpg" class="img-fluid fixed-size" alt="">
                        </div>
                    </div>
                    <p class="centered-text"><strong>Thief Racoon:</strong><br>The price you will pay for his service will be a rip-off</p>

                    <p class="centered-price">$18.99 (Don't be attached to the money!)</p>
                    <button class="btn2"><a href="#">ADD TO CART</a></button>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">
                            <img src="./img/szop10.jpg" class="img-fluid fixed-size" alt="">
                        </div>
                    </div>
                    <p class="centered-text"><strong>Fat Racoon:</strong><br> Slow, almost not washing, probably eat your fridge.</p>
                    <p class="centered-price">$2.99</p>
                    <button class="btn2"><a href="#">ADD TO CART</a></button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
