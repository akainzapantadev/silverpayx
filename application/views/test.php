<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="robots" content="index,follow">
        <meta name="language" content="English">
        <meta name="author" content="SAFELYPAL-DEV">
        <meta name="google-site-verification" content="" />

        <!-- <meta name="title" content="<?php echo $dataContainer['title']?>"> -->
        <meta name="description" content="<?php echo $dataContainer['description']?>">
        <meta name="keywords" content="<?php echo $dataContainer['keywords']?>">

        <meta property="og:title" content="<?php echo $dataContainer['title']?>"/>
        <meta property="og:description" content="<?php echo $dataContainer['description']?>"/>
        <meta property="og:image" content="https://spotifyclassie.com/<?php echo $blogImage; ?>"/>
        <meta property="og:url" content="<?php echo $dataContainer['url']?>"/>

        <title class="main-color"> Spotifyclassie - <?php echo $dataContainer['title']?></title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/Others/fontawesome6/css/all.css">
  <link href="assets/Others/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/Others/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/templatemo-xtra-blog.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.9.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  .header{
    background-color:rgba(94, 23, 235);
  }
  .logo a{
    color:white!important;
  }
</style>
<body>

  <!-- ======= Header ======= -->
  <header>
    <div class="container-fluid px-5 py-3 d-flex align-items-center justify-content-between header">
      <h1 class="logo"><a href="main">Spotifyclassie</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="main">Home</a></li>
          <li><a class="nav-link scrollto" href="blogs">Blogs</a></li>
      </nav><!-- .navbar -->

    </div>
</header>

<div class="container-fluid">
<section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <h2 class="title">
                <?php
                  echo $title;
                ?>
              </h2>

              <div class="content">
                    <?php
                      echo $contents;
                    ?>
                <img id="blogImage" src="<?php echo $blogImage; ?>" class="img-fluid py-5 w-100 h-50" alt="Responsive image">

              </div><!-- End post content -->

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> 
                  <a href="blog-details.html">
                    Silverxpay   
                  </a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> 
                  <a href="blog-details.html">
                    <?php
                      echo $dateCreated;
                    ?>
                  </a></li>
                </ul>
              </div><!-- End meta top -->
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->
</div>

</body>
<div class="footer"></div>
</html>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/Others/js/jQuery.js"></script>
  <script>
    displayFooter()
  </script>