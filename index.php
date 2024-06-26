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
      text-align: center; /* wyśrodkuj tekst w kontenerze */
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
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <!-- Zawartość nawigacji -->
</nav>


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
    <div class="container py-1">
        <div class="row py-5">
            <div class="col-lg-7 pt-5 text-center">
              <h1 class="pt-5">Rent-A-Raccoon:<br><span class="smaller-text">Your Go-To Trash Pandas for Hire!</span></h1>

                <button class="btn1 mt-3"><a href="#about">Learn more!</a></button>
            </div>
            <div class="col-lg-5 pt-5 text-center">
                <img src="./img/szopymain.png" class="img-fluid img-fluid-large larger-image" alt="Large Raccoon Image" style="width: 500px;">
            </div>
        </div>
    </div>
</section>


   <section class="new>">
     <div class="container">
       <div class="row">
         <div class="col-lg-7">
           <div class="row">
             <div class="col-lg-4">
               <div class="col-lg-4">
                 <div class="col-lg-4">
                   <img src="">
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
     crossorigin="anonymous"></script>
 </body>
 </html>

 <section id="about" class="about mx-lg-5 px-lg-5"> <!-- Dodano klasę px-lg-5 -->
   <div class="container py-5">
     <div class="row py-4">
       <div class="col-lg-8 m-auto text-center">
         <h1>Prepare for a Trashy Adventure in Raccoonville</h1>
         <h6 class="bold-text">Rent-A-Raccoon-Team: Your Hilarious, Dumpster-Diving Companions Await!</h6>
       </div>
     </div>
   </div>
 </section>
 <section class="px-lg-5"> <!-- Dodano klasę px-lg-5 -->
   <div class="row">
     <div class="col-lg-12 text-center">
       <div class="my-2"></div>
     </div>
   </div>
   <div class="row">
     <div class="col-lg-4">
       <img src="./img/Designer.jpeg" class="img-fluid" mb-3 alt="">
       <h5>Misbehaving Dumpster Diving Raccoons Rascals</h5>

       <p class="justified-text"> Watch out for those mischievous dumpster diving raccoons! They're the neighborhood's nocturnal ninjas,
         sneaking into dumpsters with the finesse of acrobats and the mischief of pranksters. From scavenging snacks to
         staging impromptu trash can parties, these raccoons redefine the meaning of 'trash pandas.' So lock up your
         bins tight, or you might just wake up to a raccoon rave in your backyard!</p>
     </div>
     <div class="col-lg-4">
       <img src="./img/Designer-2.jpeg" class="img-fluid" mb-3 alt="">
       <h5>Polite Trash Collectors: The Raccoon Edition</h5>
       <p class="justified-text">Introducing 'Polite Trash Collectors: The Raccoon Edition'—where manners meet mischief! These charming
         raccoons have mastered the art of trash collection with finesse and courtesy. With a polite paw and a
         mischievous twinkle in their eyes, they roam the neighborhood, tidying up discarded items with care. Whether
         it's neatly arranging recyclables or respectfully returning misplaced trash to its bin, these raccoons prove
         that even the most unconventional tasks can be done with grace. So, if you spot one of these dapper trash
         collectors in your area, rest assured that your neighborhood is in good paws.</p>
     </div>
     <div class="col-lg-4">
       <img src="./img/Designer-3.jpeg" class="img-fluid" mb-3 alt="">
       <h5>The Incredibly Talented Raccoon Troupers</h5>
       <p class="justified-text">It's all about hitting the right chords rather than the right wash cycle! While others are knee-deep in
         laundry, you'll find this raccoon rocking on stage, leaving the laundry basket untouched.
         And our postgraduate scholar? Well, let's just say their research paper is probably neater than their
         wardrobe! With their head buried in books and ambitions soaring, laundry day is just another thing that gets
         lost in the academic hustle. Who needs spotless socks when you're busy chasing those academic dreams, right?
       </p>
     </div>
   </div>
   <div class="row pt-1">
    <div class="col-lg-6 text-center m-auto">
      <div class="row pt-1">
        <div class="col-lg-6 text-center m-auto">
          <a href="store.php" class="btn1 mt-3">Sz(h)op More!</a>
          <div class="row pb-5">

          </div>
            
    </div>
</div>
    
</div>
</div>
 </section>

 </body>
 </html>