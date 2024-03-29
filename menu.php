<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Menu</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="assets/js/menu.js"></script>

  <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container text-right">
      <i class="icofont-phone"></i> +1 732-545-6585
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon to Sun :- 6.00 am to 10.00 pm
    </div>
  </section> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <a href="index.php"><img src="assets/img/logo/pdlogo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="menu.php">Menu</a></li>
          <?php
                include ("./assets/php/getTS.php");
                if ($val) {
          ?>
          <li><a href="/assets/php/getpdf.php">Today's Specials</a></li>
          <?php
                }
          ?>
          <li><a href="photogallery.php">Photo Gallery</a></li>
          <li><a href="index.php#about">About us</a></li>
          <li><a href="index.php#contact">Contact us</a></li>


          <!-- <li class="book-a-table text-center"><a href="#book-a-table">Order Online</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <!-- <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Menu</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Menu</li>
          </ol>
        </div>

      </div>
    </section>-->

    <!-- <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <div id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">

              <!-- <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li> -->
            </ul>
          </div>
        </div>

        <hr color="#000000">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters-sub">

              <!-- <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li> -->
            </ul>
          </div>
        </div>

        <div id="pizza-msg"></div>

        <div class="row menu-container" id="menu-list">

        </div>

        <div id="toppings-section" class="d-flex flex-row justify-content-center"><h2></h2></div>

        <div class="row menu-container" id="toppings">

        </div>

        <div class="row menu-container" id="toppings-list"></div>

      </div>
    </div>

    <!-- <script src="https://spreadsheets.google.com/feeds/cells/1TOS22E6iK6MfoVHkvK4pvNUJXcZZEw8rC_wL-GwouKI/2/public/values?alt=json-in-script&callback=getPages"></script>
    <script src="https://spreadsheets.google.com/feeds/cells/1TOS22E6iK6MfoVHkvK4pvNUJXcZZEw8rC_wL-GwouKI/1/public/values?alt=json-in-script&callback=getData"></script> -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Park Deli</h3>
      <p>Thank you for visiting us! Feel free to reach out.</p>
      <div class="d-flex flex-row justify-content-center">
        <!-- <a href="#" class="facebook" style="background-color: blue;"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram" style="background-color: purple;"><i class="bx bxl-instagram"></i></a> -->
        <a href="https://www.facebook.com/Park-Deli-Highland-Park-544562909059829" class=""><img src="assets/img/icons/facebook.svg" class="icon-img"/></a>
        <a href="https://www.instagram.com/parkdelione/?hl=en" class=""><img src="assets/img/icons/instagram.svg" class="icon-img"/></a>
        <a href="https://www.ubereats.com/new-jersey/food-delivery/park-deli-grill-and-pizza/9X8dYfcARp-3ARaETqPJjQ" class=""><img src="assets/img/icons/ubereats.svg" class="icon-img"/></a>
        <a href="https://www.grubhub.com/restaurant/park-deli-80-raritan-avenue-highland-park/1327171" class=""><img src="assets/img/icons/grubhub-1.svg" class="icon-img"/></a>
        <a href="https://eatstreet.com/new-brunswick-nj/restaurants/park-deli-too" class=""><img src="assets/img/icons/EatStreet_logo.svg" class="icon-img"/></a>
      </div>
      <!-- <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
