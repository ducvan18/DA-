
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from template.hasthemes.com/shome/shome/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 15:05:17 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Shome - Shoes eCommerce Website Template" />
  <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce" />
  <meta name="author" content="codecarnival" />

  <title>SHOES Store</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="../public/img/favicon.ico" type="image/x-icon" />

  <!--== Google Fonts ==-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&amp;display=swap"
    rel="stylesheet">

  <!--== Bootstrap CSS ==-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--== Font Awesome Min Icon CSS ==-->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--== Pe7 Stroke Icon CSS ==-->
  <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
  <!--== Swiper CSS ==-->
  <link href="assets/css/swiper.min.css" rel="stylesheet" />
  <!--== Fancybox Min CSS ==-->
  <link href="assets/css/fancybox.min.css" rel="stylesheet" />
  <!--== Aos Min CSS ==-->
  <link href="assets/css/aos.min.css" rel="stylesheet" />

  <!--== Main Style CSS ==-->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!--wrapper start-->
  <div class="wrapper">

    <!--== Start Header Wrapper ==-->
    <header class="main-header-wrapper position-relative">
      <div class="header-top">
        <div class="container pt--0 pb--0">
          <div class="row">
            <div class="col-12">
              <div class="header-top-align">
                <div class="header-top-align-start">
                  <div class="desc">
                    <p>We have the perfect shoe for every foot</p>
                  </div>
                </div>
                <div class="header-top-align-end">
                  <div class="header-info-items">
                    <div class="info-items">
                      <ul>
                        <li class="number"><a href="tel://0123456789"><i class="fa fa-phone"></i> 096 412 829</a></li>
                        <li class="email"><a href="mailto://demo@example.com"><i class="fa fa-envelope"></i>
                            shoesvn@gmail.com</a></li>
                        <li class="account"><a href="index.php?url=account"><i class="fa fa-user"></i>

                            <?php


                            if (!isset($_SESSION['username'])) {
                              echo "Account";
                            
                            } else {
                              echo  $_SESSION['username'];
                            }

                            ?>

                          </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-middle">
        <div class="container pt--0 pb--0">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="header-middle-align">
                <div class="header-middle-align-start">
                  <div class="header-logo-area">
                    <a href="index.php">
                      <img class="logo-main" src="../public/img/shoes.webp" width="131" height="34" alt="Logo" />
                      <img class="logo-light" src="../public/img/logo-light.webp" width="131" height="34" alt="Logo" />
                    </a>
                  </div>
                </div>
                <div class="header-middle-align-center">
                  <div class="header-search-area">
                    <form action="index.php?url=search" class="header-searchbox">
                      <input type="search" name="keyword" class="form-control" placeholder="Search">
                      <button class="btn-submit" name="search" type="submit"><i class="pe-7s-search"></i></button>
                    </form>
                  </div>
                </div>
                <div class="header-middle-align-end">
                  <div class="header-action-area">
                    <div class="shopping-search">
                      <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i
                          class="pe-7s-search icon"></i></button>
                    </div>

                    <div class="shopping-cart">
                      <a href="index.php?url=shop-cart" class="shopping-cart-btn">
                        <i class="pe-7s-shopbag icon"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-area header-default">
        <div class="container">
          <div class="row no-gutter align-items-center position-relative">
            <div class="col-12">
              <div class="header-align">
                <div class="header-navigation-area position-relative">
                  <ul class="main-menu nav">
                    <li><a href="index.php"><span>Home</span></a></li>
                    <li><a href="index.php?url=about-us"><span>About</span></a></li>
                    <li><a href="index.php?url=shop"><span>Shop</span></a></li>
                    <li><a href="index.php?url=blog"><span>Blog</span></a> </li>
                    <li><a href="index.php?url=contact"><span>Contact</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--== End Header Wrapper ==-->