<?php
include('./requiredfiles/connectiondb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>UCCash Foundation - Gallery</title>
  <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,500|Dosis:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <img id="logoImage" height="100px" alt="logo" style="border-radius: 50%;" src='./images/logouc.png'>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="index.php" class="nav-link"><b>Home</b></a></li>
          <li class="nav-item"><a href="donate.php" class="nav-link"><b>Donate</b></a></li>
          <li class="nav-item active"><a href="gallery.php" class="nav-link"><b>Gallery</b></a></li>
          <li class="nav-item"><a href="about.php" class="nav-link"><b>About</b></a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link"><b>Contact</b></a></li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url(./images/log.jpg);background-size: cover;"
        data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div style="background-color: black;" class="site-section border-top">
    <div class="container">
      <div class="row">
        <?php
        $sql = "SELECT * FROM gallery_images ORDER BY image_id DESC";
        $res = $con->query($sql);
        if ($res) {
          foreach ($res as $row) {
            echo "<div class='col-lg-4 col-md-6 portfolio-item filter-app'>
                  <div class='portfolio-wrap'>
                    <img src='./admin/images/{$row["image_name"]}' class='img-fluid' alt=''>
                    <div class='portfolio-info'>
                      <div class='portfolio-links'>
                        <a href='./admin/images/{$row["image_name"]}' data-gallery'portfolioGallery' class='portfolio-lightbox' ><i class='bx bx-zoom-in'></i></a>
                        </div>
                    </div>
                  </div>
                </div>";
          }
        }
        ?>
      </div>
    </div>
  </div>

  <!-- End #main -->
  <!-- ======= Footer ======= -->

  <link rel="stylesheet" href="css/footer.css">

  <footer class="footer-distributed">

    <div class="footer-left">

      <img id="logoImage" height="100px" alt="logo" style="border-radius: 50%;" src='./images/logouc.png'>

      <p class="footer-links">
        <a href="index.php" class="link-1">Home</a>

        <a href="donate.php">Donate</a>

        <a href="gallery.php">Gallery</a>

        <a href="about.php">About</a>

        <a href="contact.php">Contact</a>
      </p>


    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>No:2-1-133J, Kumaran nagar, Morambukadu,</span> Omalur main road, Konganapuram, Edappadi TK,<span>Salem
            DT, Pin - 637102, Tamilnadu, India.</span></p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p><a href="tel:+91 9842434284" target=_blank>+91 9842434284</a></p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:uccashfoundation@gmail.com">uccashfoundation@gmail.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>About UCCASH Foundation</span>
        This foundation is an organization created to alleviate the hunger of the poor, provide medical assistance and
        protect nature and environment.
      </p>
    </div>

  </footer>
  <p style="text-align: center;color: white;" class="footer-company-name"><b>Copyright ©2023 UCCASH Foundation| All
      rights reserved</b></p>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "WebSite",
      "name" : "UCCash Foundation - Gallery",
      "url" : "https://www.uccashfoundation.com/gallery"
    }
  </script>
<script>
  function changeImageOnScroll() {
    var imgElement = document.querySelector('#logoImage'); // Select the image by its id
    var scrollThreshold = 200; // Adjust this value to trigger the change at the desired scroll position

    if (window.scrollY > scrollThreshold) {
      imgElement.src = './images/logouc.png'; // Change the image source to the dark version
    } else {
      imgElement.src = './images/logouc.png'; // Change the image source back to the light version
    }
  }

  // Add an event listener to the window to listen for scroll events
  window.addEventListener('scroll', changeImageOnScroll);

</script>

</html>