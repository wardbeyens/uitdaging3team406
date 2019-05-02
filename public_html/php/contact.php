<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="De Kompassers">
    <meta name="author" content="Ward Beyens, Thibaut Bollen, Gert Verhoeven">

    <title>pagina | De Kompassers</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- einde favicon -->


</head>

<body class="bg-lichterblauw">

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top bg-donkerblauw">
    <div class="container">
        <a class="navbar-brand daysone" href="index.html"><img src="images/kompassers.svg" alt="kompasserslogo"
                                                               height="50"> De kompassers</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="GertVerhoevenPagina1.html">GertVerhoevenPagina1.html</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="GertVerhoevenPagina2.html">GertVerhoevenPagina2.html</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ThibautBollenPagina1.html">ThibautBollenPagina1.html</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ThibautBollenPagina2.html">ThibautBollenPagina2.html</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="WardBeyensPagina1.html">WardBeyensPagina1.html</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="WardBeyensPagina2.html">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Portfolio
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->

<!-- Header -->
<header class="py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-white mt-5 mb-2 text-center">Contact</h1>
                <p class="lead mb-0 text-white-50 text-center">We zullen u zo spoedig mogenlijk terug contacteren.</p>
            </div>
        </div>
    </div>
</header>


<div class="container">
    <div class="row">
        <div class="col">
            <?php
            echo "<p> Uw naam: " . $_POST["voornaam"] . " " . $_POST["achternaam"] . " </p>";
            echo "<p> Uw E-mail: " . $_POST["email"] . " </p>";
            echo "<p> Uw telefoon: " . $_POST["telefoon"] . " </p>";
            echo "<p> Uw notitie: " . $_POST["notitie"] . " </p>";

            ?>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="py-5 bg-donkerblauw">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; De Kompassers 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
