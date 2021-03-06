<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/adminstyle.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <a href="index.php"><img src="assets/img/logo/pdlogo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <?php
                include ("./assets/php/getTS.php");
                if ($val) {
          ?>
          <li><a href="/assets/php/getpdf.php">Today's Specials</a></li>
          <?php
                }
          ?>
          <li><a href="photogallery.php">Photo Gallery</a></li>
          <li><a href="#about">About us</a></li>
          <li><a href="#contact">Contact us</a></li>


          <!-- <li class="book-a-table text-center"><a href="#book-a-table">Order Online</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <br>
  <br>

  <main id="main">

    <div class="admin-login-div container">

      <div class="admin-login-form-div">
        <form class="admin-login-form" action="/assets/php/getAuth.php" method="post">
          <label for="id">Username : </label>
          <input type="text" name="username" value=""><br>
          <br>
          <label for="password">Password : </label>
          <input type="password" name="password" value=""><br>
          <br>
          <button type="submit" name="submit" value="" class="btn btn-primary">Submit</button>
        </form>
      </div>

    </div>

  </main>
      
  <br>
  <!-- End #main -->

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
  <script src="assets/js/admin.js"></script>

</body>

</html>
