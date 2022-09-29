<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1 ,maximum-scale=1.0">
    <meta name="title" content="SafelyPal - Smart Security at your hands">
    <meta name="description" content="Safelypal is a Crypto Wallet Platform where you can trade, earn or simply store your crypto assets with prestige privacy and security.">

    <meta name="keywords" content="safelypal, safelypal.com, safelypal crypto, safelypal wallet, safelypal crypto wallet, safelypal blog, safelypal.com blog, safelypal review, safelypal.com review, what is safelypal, web 3 wallet metamask, web3 wallet example, best crypto wallet, crypto defi wallet review, best web3 wallet, is coinbase a web3 wallet, web3 wallet extension, web3 wallet github, web 3.0 crypto wallet, web 3 0 crypto list, web 3 0 crypto projects, web 3 0 crypto price, best web 3 0 crypto, top 5 web 3 0 crypto, web 3 0 definition, when will web 3 0 be released, web 3 0 stocks, web3 0 crypto projects, web3 0 crypto coins list, web3 0 crypto list, web3. 0 crypto, web3 0 crypto coins, best web3 0 crypto, will crypto go to 0, best web to buy crypto, buy crypto 0 fees, can crypto go to 0, web3.0 examples, web3.0 features, what is web3.0, web3 get token symbol, buy crypto zero fees, how to buy crypto on webull browser, crypto wallet app, crypto wallet canada, crypto wallet australia, crypto wallet hardware, crypto wallet uk, crypto wallet address, crypto wallet robinhood, crypto wallet online, crypto wallet exodus, best crypto wallet, robinhood crypto wallet, best crypto wallet app, exodus crypto wallet, safest crypto wallet, best crypto wallet canada, best crypto wallet australia, best crypto wallet reddit, best crypto wallet uk, hardware crypto wallet, cryptocurrency wallet, crypto.com defi wallet, crypto hardware wallet, crypto cold wallet, crypto hard wallet, crypto.com wallet address, crypto.com to trust wallet, cryptocurrency best wallet, crypto wallet app, best crypto wallet, free crypto wallet, crypto wallet for nft, crypto wallet hardware, crypto wallet for mining, crypto wallet app, best crypto wallet, free crypto wallet, crypto wallet for nft, crypto wallet metamask, crypto wallet for mining, crypto wallets list, best crypto wallet 2022">

    <meta name="robots" content="index,follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="SAFELYPAL-DEV">
    <!-- <meta name="google-site-verification" content=""> -->

    <meta property="og:title" content="Spotifyclassie - Smart Security at your hands">
    <meta property="og:description" content="Safelypal is a Crypto Wallet Platform where you can trade, earn or simply store your crypto assets with prestige privacy and security.">
    <meta property="og:image" content="">
    <meta property="og:url" content="spotifyclassie.com">
    <title class="main-color">Spotifyclassie</title>

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
    background-color:#5E17EB;
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
          <li><a class="nav-link scrollto " href="main">Home</a></li>
          <li><a class="nav-link scrollto active" href="blogs">Blogs</a></li>
      </nav><!-- .navbar -->

    </div>
</header>

<div class="container-fluid">
        <main class="tm-main">

        
        <?php 
            for ($i=0; $i < 3; $i++) { 
            echo '<div class="row tm-row">';
            echo '    <article class="col-12 col-md-6 tm-post">';
            echo '        <hr class="tm-hr-primary">';
            echo '        <a href="blogs/'.$res[$i]->routeLink.'" class="effect-lily tm-post-link tm-pt-20">';
            echo '            <div class="tm-post-link-inner">';
            echo '                <img src="'.$res[$i]->blogImage.'" alt="" class="img-fluid">';
            echo '            </div>';
            echo '            <h2 class="tm-pt-30 tm-post-title"><a href="blogs/'.$res[$i]->routeLink.'">'.$res[$i]->title.'</a></h2>';
            echo '        </a>                    ';
            echo '        <p class="tm-pt-30">';
            echo         $res[$i]->desc;
            echo '        </p>';
            echo '        <div class="d-flex justify-content-between tm-pt-45">';
            echo '            <span class="">'.$res[$i]->author.'</span>';
            echo '            <span class="">'.$res[$i]->dateCreated.'</span>';
            echo '        </div>';
            echo '        <hr>';
            echo '    </article>';
            echo '</div>';
            }
            ?>
</main>
</div>

</body>
<div class="footer"></div>
</html>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/Others/js/jQuery.js"></script>
  
<script>
  displayFooter()
  	var blogsList = ajaxShortLink('getAll',{table:'blogs_tbl',sortBy:'id',sortOrder:'desc'})

    for (let index = 0; index < 7; index++) {
      $('#recentBlogs').append(
        '<div class="post-item mt-3">'+
        '  <img src="'+blogsList[index].blogImage+'" alt="" class="flex-shrink-0">'+
        '  <div>'+
        '    <h4><a href="blogs/'+blogsList[index].routeLink+'">'+blogsList[index].title+'</a></h4>'+
          blogsList[index].dateCreated+
        '  </div>'+
        '</div>'
      )
    }
</script>