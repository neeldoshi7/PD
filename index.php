<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Welcome to Park Deli</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/raq5pln.css">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="preload" as="font" href="/assets/css/MonotypeCorsiva.woff2" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" as="font" href="/assets/css/MonotypeCorsiva.woff" type="font/woff" crossorigin="anonymous">



  <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Monotype Corsiva:regular"]
      }
    });
</script> -->

  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <span class="text-light"><i class="icofont-phone"></i>+1 732-545-6585</span>
      <span class="text-light"> <i class="icofont-clock-time icofont-rotate-180"></i>Mon to Sun :- 6.00 am to 10.00 pm</span>
    </div>
  </section> -->

<!-- Full name -->
  <!-- <section id="header" class=" d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <h1 class="text-dark">Park Deli</h1>
        <h2 class="text-dark">Gourmet & Grill & Convenience Store</h2>
      </div>
    </div>
  </section> -->
<!-- end -->
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <a href="index.php"><img src="assets/img/logo/pdlogo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Welcome to Park Deli</h2>
                <p class="animate__animated animate__fadeInUp">We are glad to serve you the highest quality food combined with the best service in town.</p>
                <div>
                  <a href="menu.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <?php
                include ("./assets/php/getTS.php");
                if ($val) {
          ?>
                  <a href="/assets/php/getpdf.php" class="btn-book animate__animated animate__fadeInUp scrollto">Today's Special</a>
                  <?php
                }
          ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Best sandwiches in town</h2>
                <p class="animate__animated animate__fadeInUp">Located at three different easy to access locations</p>
                <div>
                  <a href="menu.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <?php
                include ("./assets/php/getTS.php");
                if ($val) {
          ?>
                  <a href="/assets/php/getpdf.php" class="btn-book animate__animated animate__fadeInUp scrollto">Today's Special</a>
                  <?php
                }
          ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Gourmet, Deli & Grill</h2>
                <p class="animate__animated animate__fadeInUp">With the access to Convenience Store items and products</p>
                <div>
                  <a href="menu.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <?php
                include ("./assets/php/getTS.php");
                if ($val) {
          ?>
                  <a href="/assets/php/getpdf.php" class="btn-book animate__animated animate__fadeInUp scrollto">Today's Special</a>
                  <?php
                }
          ?>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <?php
                include ("./assets/php/getTS.php");
                if ($val) {
          ?>
    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title d-flex flex-column justify-content-center">
          <div><h2>Check our <span>Specials</span></h2></div>
          <div class="index-special-button-div"><button class="btn index-special-button"><a href="/assets/php/getpdf.php" target="_blank" class="aboutus-a">Today's Specials</a></button></div>
        </div>



      </div>
    </section><!-- End Specials Section -->
    <?php
                }
          ?>
<hr>



    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Our restaurants provide a variety of breakfast sandwiches, wraps, salads and burgers among other items</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Best Sandwiches</h4>
              <p>We serve the best sandwiches in town !<br /></p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Three Locations</h4>
              <p>You can visit us at Highland Park, New Brunswick and Edison</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Convenience Store</h4>
              <p>You can shop for Convenience Store items at all our locations</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->


<!-- ======= about Section ======= -->
<section id="about" class="about">

    <div class="container">

      <div class="aboutus-background" style="background: url(assets/img/slide/AboutUs-bckg.jpeg); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="section-title d-flex flex-column aboutus-background">
          <br>
          <br>
          <br>
          <br>
          <div><h3>About <strong>Park Deli</strong></h3></div>
          <div>
          <p>
          Started in 1997, Park Deli is a family owned business that was founded by two brothers Neal and John with the idea that the freshest food and the highest quality of service makes for a happy customer. Neal and John started the business with The Original Park Deli in Highland Park, NJ and after 12 years of success they decided to expand the business into the Home of the Scarlet Knights and Rutgers University in New Brunswick, NJ. Park Deli is proud to support and be involved with the local community by providing gift certificates for street fairs, helping surrounding senior centers, and providing support to local high schools by donating sandwiches for outstanding students. Voted the Best Deli by workers of Conti Construction Co. and many local residents Park Deli strives to be the best no matter who they serve.
          </p>
          </div>
        </div>
      </div>


    </div>

</section>
<!-- ======= End of  Section ======= -->



    <!-- ======= Book A Table Section ======= -->
    <!-- <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section> End Book A Table Section -->





    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Name 1</h3>
            <h4>Ceo &amp; Founder</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Name 2</h3>
            <h4>Designer</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>name 3</h3>
            <h4>Store Owner</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>





        </div>

      </div>
    </section>End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>You can reach us out at the following locations or contact us via phone or email. You can also order from UberEats and GrubHub.</p>
        </div>
      </div>

    <div class="container">
      <div class=" d-flex flex-row row justify-content-around">

        <div class="col-lg-3 col-sm-10 d-flex flex-column justify-content-center map-item">
            <iframe class="map-div" style="border:0; -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12135.90010298958!2d-74.4328183!3d40.4979353!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x391fdfbf89760ed7!2sPark%20Deli!5e0!3m2!1sen!2sin!4v1604042169207!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
          <div class="mt-5">

            <div class="info-wrap">
              <div class="">
                <div class="info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>80 Raritan Ave, Highland Park, NJ 08904</p>
                </div>



                <div class="info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>parkdelione@yahoo.com</p>
                  <br>
                </div>

                <div class="info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 732-545-6585<br></p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- <div class="info mt-4 mt-lg-0">
                  <i class="icofont-clock-time icofont-rotate-90"></i>
                  <h4>Open Hours:</h4>
                  <p>Monday-Sunday:<br>6.00 am to 10.00 pm</p>
                </div> -->

        <div class="col-lg-3 col-sm-10 d-flex flex-column justify-content-center map-item" >
          <iframe class="map-div" style="border:0; -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3034.4143985509268!2d-74.44133258460192!3d40.488218579356825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c644ec8e2c5d%3A0x5e0a32d9781c50cc!2sPark%20Deli%20Too%20%26%20Pizza!5e0!3m2!1sen!2sin!4v1604042215337!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
          <div class="mt-5">

            <div class="info-wrap">
              <div class="">
                <div class="info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>51 Commercial Ave, New Brunswick, NJ 08901</p>
                </div>



                <div class="info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>parkdelitoo@yahoo.com</p>
                  <br>
                </div>

                <div class="info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 732-214-8800<br></p>
                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="col-lg-3 col-sm-10 d-flex flex-column justify-content-center map-item" >
          <iframe class="map-div" style="border:0; -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.4771545795247!2d-74.37316958460124!3d40.50894337935455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c94352a25109%3A0x3762556208776c0!2sPark%20Deli%20%26%20Grill.%20Convenience%20Store!5e0!3m2!1sen!2sin!4v1604042272790!5m2!1sen!2sin" frameborder="0" allowfullscreen=""></iframe>
          <div class="mt-5">

            <div class="info-wrap">
              <div class="">
                <div class="info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>2625 Woodbridge Ave, Edison, NJ 08817</p>
                </div>



                <div class="info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>parkdeliandgrill@yahoo.com</p>
                  <br>
                </div>

                <div class="info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 848-229-2949<br></p>
                </div>
              </div>
            </div>
          </div>

      </div>

  </div>
</div>
  </section><!-- End Contact Section -->

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
  <script src="assets/js/index.js"></script>

</body>

</html>
