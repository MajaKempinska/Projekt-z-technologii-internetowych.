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
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

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

    /* Dodane style dla sekcji main */
    .main {
      background-image: url('img/maintlo.png'); /* ścieżka do obrazka tła */
      background-size: cover; /* dopasuj obraz do rozmiaru obszaru sekcji main */
      background-repeat: no-repeat; /* nie powtarzaj tła */
      height: 100vh; /* dopasuj wysokość sekcji main do wysokości okna przeglądarki */
      display: flex; /* użyj flexbox do wyśrodkowania zawartości */
      justify-content: center; /* wyśrodkuj zawartość wzdłuż osi poziomej */
      align-items: center; /* wyśrodkuj zawartość wzdłuż osi pionowej */
    }

    .main .container {
      max-width: 800px; /* ustaw maksymalną szerokość kontenera */
    }

    .main h1 {
      font-size: 2.5rem; /* rozmiar nagłówka */
    }

    .btn1 {
      background-color: #663300;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 1.2rem;
      cursor: pointer;
    }

    .btn1 a {
      text-decoration: none;
      color: white;
    }

    .btn1:hover {
      background-color: #996633;
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

  <section class="main">


<div class="container">
    <h1 class="mt-5 text-center">Raccoons on the way!</h1>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $uuid = $_GET['uuid'];

    $query = "SELECT uuid, amount, first_name, last_name, address_line_1, address_line_2, card_number, card_expiration, cvv, cleaning_supplies 
              FROM receipt WHERE uuid = ?";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    if (!$stmt->bind_param("s", $uuid)) {
        die("Bind failed: " . $stmt->error);
    }

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $record = $result->fetch_assoc();

        if ($record) {
            echo "<div class='card mt-4 pb-5 px-5 pt-3'>
                    <div class='card-body'>
                        <h5 class='card-title mb-3'>Receipt for {$record['first_name']} {$record['last_name']}</h5>
                        <p class='card-text'>Thank you for using our services, {$record['first_name']}!<br>The payment has succeeded. You can expect a visit from our raccoon team soon!</p>
                        <p class='card-text'><strong>Amount:</strong> \${$record['amount']}</p>
                        <p class='card-text'><strong>Address:</strong></p>
                        <p class='card-text'>{$record['address_line_1']}</p>
                        <p class='card-text'>{$record['address_line_2']}</p>
                        <p class='card-text'><strong>Cleaning Supplies Included:</strong> {$record['cleaning_supplies']}</p>
                    </div>
                </div>";
        } else {
            echo "<div class='alert alert-danger mt-4'>No record found with the provided UUID.</div>";
        }
    } else {
        echo "<div class='alert alert-danger mt-4'>Error retrieving record: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
    ?>
</div>
</section>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
     crossorigin="anonymous"></script>
 </body>
 </html>

