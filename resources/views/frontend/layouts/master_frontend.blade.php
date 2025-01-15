<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BorkaMart</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link href="{{asset('frontend/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('frontend/')}}/css/responsive.css">

</head>

<body>

    <!-- header start -->
    <header>
        <div class="h_header">
            <div class="header-top d-flex">
                <div class="h_header-left d-flex align-items-center position-relative">
                    <div class="h_logo">
                        <a href="index.html">
                            <img src="{{asset('frontend/')}}/img/BorkaMart.png" alt="">
                        </a>
                    </div>
                    <div id="main_navigation">
                        <a href="">
                            MENS
                        </a>
                    </div>
                </div>
                <div class="h_header-middle position-relative">
                    <form action="" method="get">
                        <div class="form-group d-flex align-items-center" id="search__header">
                            <input type="search" name="search" class="w-100" placeholder="What are you lookin for?">
                            <i class="fa fa-magnifying-glass"></i>

                        </div>
                        <div id="myDIV">
                            <div class="search-bottom">
                                <ul class="single-search">
                                    <h6>recent</h6>
                                    <li><a href="#">dresses</a></li>
                                </ul>
                                <span></span>
                                <ul class="single-search">
                                    <h6>TRENDING</h6>
                                    <li><a href="#">DRESSES</a></li>
                                    <li><a href="#">COATS & JACKETS</a></li>
                                    <li><a href="#">JUMPSUITS</a></li>
                                    <li><a href="#">JEANS</a></li>
                                    <li><a href="#">SPRING</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- <ul class="advance-search position-absolute">
                            <h6>categories</h6>
                            <li><a href="#">disco pants in <span>trousers<i class="fa fa-angle-right"></i></span></a></li>
                            <li><a href="#">disco pants in <span>trousers<i class="fa fa-angle-right"></i></span></a></li>
                            <li><a href="#">disco pants in <span>trousers<i class="fa fa-angle-right"></i></span></a></li>
                        </ul> -->

                    </form>
                </div>
                <div class="h_header-right d-flex align-items-center justify-content-end">
                    <a href="auth.html" class="h_header-action-item h_account">
                        <i class="fa fa-user"></i>
                    </a>
                    <a href="wishlist.html" class="h_header-action-item h_wishlist d-flex align-items-center">
                        <i class="fa fa-heart"></i>
                        <span>10</span>
                    </a>
                    <div class="h_header-action-item h_minicart d-flex align-items-center" data-bs-toggle="offcanvas"
                        href="#cardModal" role="button" aria-controls="offcanvasExample">
                        <i class="fa fa-cart-shopping"></i>
                        <span>10</span>
                    </div>
                </div>

                <div class="h_header-right d-flex align-items-center justify-content-end">
                    <div class="language">
                        <select name="" id="">
                            <option value="">Bangla</option>
                            <option value="">Bangla</option>
                            <option value="">Bangla</option>
                            <option value="">Bangla</option>
                            <option value="">Bangla</option>
                        </select>
                    </div>
                </div>

                <!-- search box for mobile -->
                <!-- <ul class="advance-search advance-mobile-search d-none">
                    <h6>categories</h6>
                    <li><a href="#">disco pants in <span>trousers<i class="fa fa-angle-right"></i></span></a></li>
                    <li><a href="#">disco pants in <span>trousers<i class="fa fa-angle-right"></i></span></a></li>
                    <li><a href="#">disco pants in <span>trousers<i class="fa fa-angle-right"></i></span></a></li>
                </ul> -->

            </div>
        </div>

        <!-- mobile menu -->
        <header class="header mobile-header d-none header-sticky">
            <div class="container">
                <div class="header-main">
                    <div class="open-nav-menu">
                        <span></span>
                    </div>
                    <div class="menu-overlay">
                    </div>
                    <!-- navigation menu start -->
                    <nav class="nav-menu">
                        <div class="close-nav-menu">
                            <img src="{{asset('frontend/')}}/img/close.svg" alt="close">
                        </div>

                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="category-tab" data-bs-toggle="pill"
                                    data-bs-target="#category-pane" type="button" role="tab"
                                    aria-controls="category-pane" aria-selected="true">CATEGORIES</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="menu-tab" data-bs-toggle="pill" data-bs-target="#menu-pane"
                                    type="button" role="tab" aria-controls="menu-pane"
                                    aria-selected="false">MENU</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="category-pane" role="tabpanel"
                                aria-labelledby="category-tab" tabindex="0">
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">men <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Home 1</a></li>
                                            <li class="menu-item"><a href="#">t-shirts</a></li>
                                            <li class="menu-item"><a href="#">cuban shirt</a></li>
                                            <li class="menu-item"><a href="#">polos</a></li>
                                            <li class="menu-item"><a href="#">men</a></li>
                                            <li class="menu-item"><a href="#">t-shirts</a></li>
                                            <li class="menu-item"><a href="#">cuban shirt</a></li>
                                            <li class="menu-item"><a href="#">polos</a></li>
                                            <li class="menu-item"><a href="#">men</a></li>
                                            <li class="menu-item"><a href="#">t-shirts</a></li>
                                            <li class="menu-item"><a href="#">cuban shirt</a></li>
                                            <li class="menu-item"><a href="#">polos</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">men <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Home 1</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">t-shirts <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Home 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">cuban shirt <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Home 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">polos <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Home 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">men <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Home 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">men <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Home 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">men <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Home 1</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">Offers <i class="plus"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">30% Off Menswear!*</a></li>
                                            <li class="menu-item"><a href="#">Next Day Delivery!** Use Code: YESYE</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="menu-pane" role="tabpanel" aria-labelledby="menu-tab"
                                tabindex="0">

                                <ul class="sidebar-mobile-menu">
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="club.html">BorkaMart Club</a></li>
                                    <li><a href="wishlist.html"> <i class="fa fa-heart"></i> wishlist</a></li>
                                    <li><a href="auth.html"> <i class="fa fa-user"></i> login/register</a></li>
                                </ul>
                                <ul class="sidebar-mobile-menu">
                                    <div class="language">
                                        <select name="" id="">
                                            <option value="">Bangla</option>
                                            <option value="">Bangla</option>
                                            <option value="">Bangla</option>
                                            <option value="">Bangla</option>
                                            <option value="">Bangla</option>
                                        </select>
                                    </div>
                                </ul>
                                <ul class="sidebar-mobile-menu">
                                    <span>need help?</span>
                                    <li class="border-0"><a href="tel:+8801999999999"><i class="fa fa-phone"></i>
                                            01999999999</a></li>
                                    <li><a href="mailto:najmulcse247@gmail.com"><i class="fa fa-envelope"></i>
                                            najmulcse247@gmail.com</a></li>
                                </ul>

                            </div>
                        </div>


                    </nav>
                    <!-- navigation menu end -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('frontend/')}}/img/BorkaMart.png" alt="">
                        </a>
                    </div>
                    <div class="mobile-header-search" data-bs-toggle="offcanvas" href="#mobile_header_search"
                        role="button" aria-controls="offcanvasExample">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- mobile header search -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="mobile_header_search" aria-labelledby="search-bar">
            <div class="offcanvas-header">
                <h6 class="offcanvas-title" id="search-bar">SEARCH OUR SITE</h6>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mobile-search">
                <form action="">
                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group site-product-search">
                        <input type="search" class="form-control" placeholder="search for products">
                        <i class="fa fa-search"></i>
                    </div>
                    <span>Search Results</span>
                </form>
                <div class="product-search-result">
                    <div class="single-cart-product d-flex">
                        <div class="sigle-cart-product-photo">
                            <a href="#">
                                <img src="{{asset('frontend/')}}/img/siam.jpg" alt="">
                            </a>
                        </div>
                        <div class="sigle-cart-product-content">
                            <div class="cart-product-name ">
                                <div>
                                    <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                </div>
                                <span>1000.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-cart-product d-flex">
                        <div class="sigle-cart-product-photo">
                            <a href="#">
                                <img src="{{asset('frontend/')}}/img/siam.jpg" alt="">
                            </a>
                        </div>
                        <div class="sigle-cart-product-content">
                            <div class="cart-product-name ">
                                <div>
                                    <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                </div>
                                <span>1000.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-cart-product d-flex">
                        <div class="sigle-cart-product-photo">
                            <a href="#">
                                <img src="{{asset('frontend/')}}/img/siam.jpg" alt="">
                            </a>
                        </div>
                        <div class="sigle-cart-product-content">
                            <div class="cart-product-name ">
                                <div>
                                    <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                </div>
                                <span>1000.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-cart-product d-flex">
                        <div class="sigle-cart-product-photo">
                            <a href="#">
                                <img src="{{asset('frontend/')}}/img/siam.jpg" alt="">
                            </a>
                        </div>
                        <div class="sigle-cart-product-content">
                            <div class="cart-product-name ">
                                <div>
                                    <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                </div>
                                <span>1000.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-cart-product d-flex">
                        <div class="sigle-cart-product-photo">
                            <a href="#">
                                <img src="{{asset('frontend/')}}/img/siam.jpg" alt="">
                            </a>
                        </div>
                        <div class="sigle-cart-product-content">
                            <div class="cart-product-name ">
                                <div>
                                    <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                </div>
                                <span>1000.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-footer mobile-search-footer">
                <a href="shop.html">View All(100) <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>

        <div class="header-bottom header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul
                            class="header-bottom-menu d-flex pl-100 pr-100 justify-content-center position-relative mb-0">
                            <li><a href="#">men</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL shirt</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">t-shirts</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">cuban shirt</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL pants</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">polos</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">men</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">t-shirts</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">cuban shirt</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">polos</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">men</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">t-shirts</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">cuban shirt</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                            <li><a href="#">polos</a>
                                <div class="submenu position-absolute w-100">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-2 col-lg-2">
                                            <ul class="submenu-item p-3">
                                                <h6>ALL CLOTHING</h6>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                                <li><a href="#">men</a></li>
                                                <li><a href="#">t-shirts</a></li>
                                                <li><a href="#">cuban shirt</a></li>
                                                <li><a href="#">polos</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xxl-2 col-xl-2 col-lg-2 bg-white">
                                            <ul class="submenu-item submenu-offer-item p-2">
                                                <h6>OFFERS</h6>
                                                <li><a href="#">30% Off Menswear!*</a></li>
                                                <li><a href="#">Next Day Delivery!** Use Code:
                                                        YESYE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span><a href="shop.html" class="text-white bg-black lh-1">NEW LINES ADDED
                                            DAILY!</a></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- main -->
    <main class="main">

        <!-- discount header start -->
        <div class="discount-header text-center">
            <a href="shop.html">
                <h1 class="text-white">100% OFF everything! <span>use code : BorkaMart30</span></h1>
                <p>conditions applied</p>
            </a>
        </div>
        <!-- discount header end -->

        <!-- banner start -->
        <div class="banner-area">
            <div class="banner owl-carousel">
                <a href="category-product.html">
                    <img src="{{asset('frontend/')}}/img/slider/slider2.jpg" alt="banner" class="w-100">
                    <span>shop now</span>
                </a>
            </div>
        </div>
        <!-- banner end -->


        <!-- <div class="shape_wrapper">
            <div class="shape_item"></div>
            <div class="shape_item"></div>
            <div class="shape_item"></div>
            <div class="shape_item"></div>
            <div class="shape_item"></div>
            <div class="shape_item"></div>
            <div class="shape_item"></div>
            <div class="shape_item"></div>
            <div class="shape_item"></div>
        </div> -->

        <!-- newly start -->
        <div class="category-area section-padding">
            <div class="container-fluid">
                <div class="row align-items-stretch">
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="single-category">
                            <a href="category-product.html" class="category-image text-center d-block">
                                <img src="{{asset('frontend/')}}/img/category/1.jpg" alt="">
                            </a>
                            <div class="category-title">
                                <a href="category-product.html">cuban shirt</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="single-category">
                            <a href="category-product.html" class="category-image text-center d-block">
                                <img src="{{asset('frontend/')}}/img/category/2.webp" alt="">
                            </a>
                            <div class="category-title">
                                <a href="category-product.html">cuban shirt</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="single-category">
                            <a href="category-product.html" class="category-image text-center d-block">
                                <img src="{{asset('frontend/')}}/img/category/3.webp" alt="">
                            </a>
                            <div class="category-title">
                                <a href="category-product.html">cuban shirt</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="single-category">
                            <a href="category-product.html" class="category-image text-center d-block">
                                <img src="{{asset('frontend/')}}/img/category/4.webp" alt="">
                            </a>
                            <div class="category-title">
                                <a href="category-product.html">cuban shirt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newly end -->

        <!-- latest product start -->
        <div class="latest-product-area section-padding" style="background-color: #F4F4F4;">
            <div class="container-fluid">
                <div class="row align-items-center mb-5">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-7">
                        <div class="section-header">
                            <h2>Latest Products</h2>
                            <span>Get the best for you!</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-5 text-end">
                        <div class="section-header">
                            <a href="shop.html">all products</a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-sm-stretch">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="single-latest-product">
                            <div class="single-product-head d-flex align-items-start justify-content-between">
                                <h6 style="background-color: #2c2c2c;">Hot</h6>
                                <div class="product-info">
                                    <a href="product-details.html">
                                        <i class="fa fa-bag-shopping"></i>
                                        <!-- <img src="img/shopping-bag.png" alt=""> -->
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Quick View">
                                            <i class="fa fa-magnifying-glass-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- productquick view Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="quick_image owl-carousel">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="product_quick_view-content">
                                                        <h4>TD0005</h4>
                                                        <h6>৳950.00</h6>
                                                        <div class="content">
                                                            <p><strong>Collection : </strong>Drop-It-Right</p>
                                                            <p><strong>Style : </strong>Drop Shoulder T</p>
                                                            <p><strong>Sleeve : </strong>Drop T sleeve</p>
                                                            <p><strong>Fabric Type : </strong>100% Cotton</p>
                                                            <p><strong>Acid Washed : </strong>GSM: 210
                                                                Our model wears an L size and is /5’10” tall</p>
                                                            <p><strong>Effortless Style and Comfort :
                                                                </strong>Discover Drop Shoulder T-Shirts for a
                                                                Relaxed Look!</p>
                                                            <p><strong>Sizes : </strong>S to XXL</p>
                                                        </div>
                                                        <strong>Mens’s Half-Sleeve Drop Shoulder T-Shirt
                                                            Measurements (inch”):</strong>
                                                        <div class="content">
                                                            <p><strong>Size S : </strong>Chest- 20, Length – 27,
                                                                Shoulder – 20, Sleeve Length- 10, Sleeve
                                                                Opening- 7.5</p>
                                                            <p><strong>Size M : </strong>Chest- 21, Length – 28,
                                                                Shoulder – 21.5, Sleeve Length- 10, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size L : </strong>Chest- 22, Length – 29,
                                                                Shoulder – 22.5, Sleeve Length- 10.5, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size XL : </strong>Chest- 23, Length –
                                                                30, Shoulder – 23, Sleeve Length- 11, Sleeve
                                                                Opening- 8.5</p>
                                                            <p><strong>Size XXL : </strong>Chest- 24, Length –
                                                                31, Shoulder – 24, Sleeve Length- 11.5, Sleeve
                                                                Opening- 9 </p>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <strong>Size : </strong>
                                                            <p class="size m-0" id="product__size"></p>
                                                        </div>
                                                        <div class="quick-image-size">
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="a_aize" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; S &nbsp;" for="a_aize">S</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="m_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; M &nbsp;" for="m_size">M</label>

                                                                <input type="radio" class="btn-check " name="btnradio"
                                                                    id="l_size" autocomplete="off">
                                                                <label class="btn product__size_btn disabled"
                                                                    title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xxl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XXL &nbsp;" for="xxl_size">XXL</label>
                                                            </div>
                                                        </div>
                                                        <!-- product quantity -->
                                                        <div class="product__quantity" id="product__quantity">
                                                            <p class="quantity_item"><strong>S</strong> Stock in
                                                                <strong>10</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>M</strong> Stock in
                                                                <strong>5</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>L</strong> Stock in
                                                                <strong>9</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XL</strong> Stock in
                                                                <strong>15</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XXL</strong> Stock in
                                                                <strong>12</strong>
                                                            </p>
                                                        </div>

                                                        <div class="quick-view_cart-product">
                                                            <div
                                                                class="cart-product-quantity d-flex align-items-center">
                                                                <div class="product_quantity">
                                                                    <a href="#" class="quantity__minus"><span><i
                                                                                class="fa fa-minus"></i></span></a>
                                                                    <input name="quantity" type="text"
                                                                        class="quantity__input" value="1" disabled>
                                                                    <a href="#" class="quantity__plus"><span><i
                                                                                class="fa fa-plus"></i></span></a>
                                                                </div>
                                                                <button type="button" class="addToCart">Add to
                                                                    cart</button>
                                                                <div class="product_quick_heart">
                                                                    <span data-toggle="tooltip" data-bs-placement="top"
                                                                        title="Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product image  -->
                            <div class="latest-product-image" title="TD0006">
                                <a href="product-details.html">
                                    <div class="front-image">
                                        <img src="{{asset('frontend/')}}/img/category/1.jpg" class="w-100" alt="">
                                    </div>
                                    <div class="back-image">
                                        <!-- <img src="img/vintage/vintage1.jpg" class="w-100" alt=""> -->
                                    </div>
                                </a>
                                <div class="product-info-bottom">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                </div>
                            </div>

                            <div class="latest-product-content">
                                <h5 class="d-flex align-items-center justify-content-between">
                                    <a href="product-details.html">TD0006</a>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                    </a>
                                </h5>
                                <h5 class="price">
                                    ৳966.32
                                </h5>
                                <!-- <div class="reward-point">
                                    <span>Earn up to </span>
                                    <span> BorkaMart CLUB POINTS.</span>
                                    <span data-toggle="tooltip" data-placement="top"
                                        title="Join our club! For every ৳100 you get 100 BorkaMart CLUB POINTS.">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="single-latest-product">
                            <div class="single-product-head d-flex align-items-start justify-content-between">
                                <h6>Sold Out</h6>
                                <div class="product-info">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Quick View">
                                            <i class="fa fa-magnifying-glass-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- productquick view Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="quick_image owl-carousel">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="product_quick_view-content">
                                                        <h4>TD0005</h4>
                                                        <h6>৳950.00</h6>
                                                        <div class="content">
                                                            <p><strong>Collection : </strong>Drop-It-Right</p>
                                                            <p><strong>Style : </strong>Drop Shoulder T</p>
                                                            <p><strong>Sleeve : </strong>Drop T sleeve</p>
                                                            <p><strong>Fabric Type : </strong>100% Cotton</p>
                                                            <p><strong>Acid Washed : </strong>GSM: 210
                                                                Our model wears an L size and is /5’10” tall</p>
                                                            <p><strong>Effortless Style and Comfort :
                                                                </strong>Discover Drop Shoulder T-Shirts for a
                                                                Relaxed Look!</p>
                                                            <p><strong>Sizes : </strong>S to XXL</p>
                                                        </div>
                                                        <strong>Mens’s Half-Sleeve Drop Shoulder T-Shirt
                                                            Measurements (inch”):</strong>
                                                        <div class="content">
                                                            <p><strong>Size S : </strong>Chest- 20, Length – 27,
                                                                Shoulder – 20, Sleeve Length- 10, Sleeve
                                                                Opening- 7.5</p>
                                                            <p><strong>Size M : </strong>Chest- 21, Length – 28,
                                                                Shoulder – 21.5, Sleeve Length- 10, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size L : </strong>Chest- 22, Length – 29,
                                                                Shoulder – 22.5, Sleeve Length- 10.5, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size XL : </strong>Chest- 23, Length –
                                                                30, Shoulder – 23, Sleeve Length- 11, Sleeve
                                                                Opening- 8.5</p>
                                                            <p><strong>Size XXL : </strong>Chest- 24, Length –
                                                                31, Shoulder – 24, Sleeve Length- 11.5, Sleeve
                                                                Opening- 9 </p>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <strong>Size : </strong>
                                                            <p class="size m-0" id="product__size"></p>
                                                        </div>
                                                        <div class="quick-image-size">
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="a_aize" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; S &nbsp;" for="a_aize">S</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="m_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; M &nbsp;" for="m_size">M</label>

                                                                <input type="radio" class="btn-check " name="btnradio"
                                                                    id="l_size" autocomplete="off">
                                                                <label class="btn product__size_btn disabled"
                                                                    title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xxl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XXL &nbsp;" for="xxl_size">XXL</label>
                                                            </div>
                                                        </div>
                                                        <!-- product quantity -->
                                                        <div class="product__quantity" id="product__quantity">
                                                            <p class="quantity_item"><strong>S</strong> Stock in
                                                                <strong>10</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>M</strong> Stock in
                                                                <strong>5</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>L</strong> Stock in
                                                                <strong>9</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XL</strong> Stock in
                                                                <strong>15</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XXL</strong> Stock in
                                                                <strong>12</strong>
                                                            </p>
                                                        </div>

                                                        <div class="quick-view_cart-product">
                                                            <div
                                                                class="cart-product-quantity d-flex align-items-center">
                                                                <div class="product_quantity">
                                                                    <a href="#" class="quantity__minus"><span><i
                                                                                class="fa fa-minus"></i></span></a>
                                                                    <input name="quantity" type="text"
                                                                        class="quantity__input" value="1" disabled>
                                                                    <a href="#" class="quantity__plus"><span><i
                                                                                class="fa fa-plus"></i></span></a>
                                                                </div>
                                                                <button type="button" class="addToCart">Add to
                                                                    cart</button>
                                                                <div class="product_quick_heart">
                                                                    <span data-toggle="tooltip" data-bs-placement="top"
                                                                        title="Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product image  -->
                            <div class="latest-product-image" title="TD0006">
                                <a href="product-details.html">
                                    <div class="front-image">
                                        <img src="{{asset('frontend/')}}/img/category/2.webp" class="w-100" alt="">
                                    </div>
                                    <div class="back-image">
                                        <img src="{{asset('frontend/')}}/img/latest/3.webp" class="w-100" alt="">
                                    </div>
                                </a>
                                <div class="product-info-bottom">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                </div>
                            </div>
                            <div class="latest-product-content">
                                <h5 class="d-flex align-items-center justify-content-between">
                                    <a href="product-details.html">TD0006</a>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                    </a>
                                </h5>
                                <h5 class="price">
                                    ৳966.32
                                </h5>
                                <!-- <div class="reward-point">
                                    <span>Earn up to </span>
                                    <span> BorkaMart CLUB POINTS.</span>
                                    <span data-toggle="tooltip" data-placement="top"
                                        title="Join our club! For every ৳100 you get 100 BorkaMart CLUB POINTS.">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="single-latest-product">
                            <div class="single-product-head d-flex align-items-start justify-content-between">
                                <h6>Sold Out</h6>
                                <div class="product-info">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Quick View">
                                            <i class="fa fa-magnifying-glass-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- productquick view Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="quick_image owl-carousel">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="product_quick_view-content">
                                                        <h4>TD0005</h4>
                                                        <h6>৳950.00</h6>
                                                        <div class="content">
                                                            <p><strong>Collection : </strong>Drop-It-Right</p>
                                                            <p><strong>Style : </strong>Drop Shoulder T</p>
                                                            <p><strong>Sleeve : </strong>Drop T sleeve</p>
                                                            <p><strong>Fabric Type : </strong>100% Cotton</p>
                                                            <p><strong>Acid Washed : </strong>GSM: 210
                                                                Our model wears an L size and is /5’10” tall</p>
                                                            <p><strong>Effortless Style and Comfort :
                                                                </strong>Discover Drop Shoulder T-Shirts for a
                                                                Relaxed Look!</p>
                                                            <p><strong>Sizes : </strong>S to XXL</p>
                                                        </div>
                                                        <strong>Mens’s Half-Sleeve Drop Shoulder T-Shirt
                                                            Measurements (inch”):</strong>
                                                        <div class="content">
                                                            <p><strong>Size S : </strong>Chest- 20, Length – 27,
                                                                Shoulder – 20, Sleeve Length- 10, Sleeve
                                                                Opening- 7.5</p>
                                                            <p><strong>Size M : </strong>Chest- 21, Length – 28,
                                                                Shoulder – 21.5, Sleeve Length- 10, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size L : </strong>Chest- 22, Length – 29,
                                                                Shoulder – 22.5, Sleeve Length- 10.5, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size XL : </strong>Chest- 23, Length –
                                                                30, Shoulder – 23, Sleeve Length- 11, Sleeve
                                                                Opening- 8.5</p>
                                                            <p><strong>Size XXL : </strong>Chest- 24, Length –
                                                                31, Shoulder – 24, Sleeve Length- 11.5, Sleeve
                                                                Opening- 9 </p>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <strong>Size : </strong>
                                                            <p class="size m-0" id="product__size"></p>
                                                        </div>
                                                        <div class="quick-image-size">
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="a_aize" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; S &nbsp;" for="a_aize">S</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="m_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; M &nbsp;" for="m_size">M</label>

                                                                <input type="radio" class="btn-check " name="btnradio"
                                                                    id="l_size" autocomplete="off">
                                                                <label class="btn product__size_btn disabled"
                                                                    title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xxl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XXL &nbsp;" for="xxl_size">XXL</label>
                                                            </div>
                                                        </div>
                                                        <!-- product quantity -->
                                                        <div class="product__quantity" id="product__quantity">
                                                            <p class="quantity_item"><strong>S</strong> Stock in
                                                                <strong>10</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>M</strong> Stock in
                                                                <strong>5</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>L</strong> Stock in
                                                                <strong>9</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XL</strong> Stock in
                                                                <strong>15</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XXL</strong> Stock in
                                                                <strong>12</strong>
                                                            </p>
                                                        </div>

                                                        <div class="quick-view_cart-product">
                                                            <div
                                                                class="cart-product-quantity d-flex align-items-center">
                                                                <div class="product_quantity">
                                                                    <a href="#" class="quantity__minus"><span><i
                                                                                class="fa fa-minus"></i></span></a>
                                                                    <input name="quantity" type="text"
                                                                        class="quantity__input" value="1" disabled>
                                                                    <a href="#" class="quantity__plus"><span><i
                                                                                class="fa fa-plus"></i></span></a>
                                                                </div>
                                                                <button type="button" class="addToCart">Add to
                                                                    cart</button>
                                                                <div class="product_quick_heart">
                                                                    <span data-toggle="tooltip" data-bs-placement="top"
                                                                        title="Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product image  -->
                            <div class="latest-product-image" title="TD0006">
                                <a href="product-details.html">
                                    <div class="front-image">
                                        <img src="{{asset('frontend/')}}/img/category/3.webp" class="w-100" alt="">
                                    </div>
                                    <div class="back-image">
                                        <img src="{{asset('frontend/')}}/img/latest/3-back.jpg" class="w-100" alt="">
                                    </div>
                                </a>
                                <div class="product-info-bottom">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                </div>
                            </div>
                            <div class="latest-product-content">
                                <h5 class="d-flex align-items-center justify-content-between">
                                    <a href="product-details.html">TD0006</a>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                    </a>
                                </h5>
                                <h5 class="price">
                                    ৳966.32
                                </h5>
                                <!-- <div class="reward-point">
                                    <span>Earn up to </span>
                                    <span> BorkaMart CLUB POINTS.</span>
                                    <span data-toggle="tooltip" data-placement="top"
                                        title="Join our club! For every ৳100 you get 100 BorkaMart CLUB POINTS.">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="single-latest-product">
                            <div class="single-product-head d-flex align-items-start justify-content-between">
                                <h6>Sold Out</h6>
                                <div class="product-info">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Quick View">
                                            <i class="fa fa-magnifying-glass-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- productquick view Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="quick_image owl-carousel">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="product_quick_view-content">
                                                        <h4>TD0005</h4>
                                                        <h6>৳950.00</h6>
                                                        <div class="content">
                                                            <p><strong>Collection : </strong>Drop-It-Right</p>
                                                            <p><strong>Style : </strong>Drop Shoulder T</p>
                                                            <p><strong>Sleeve : </strong>Drop T sleeve</p>
                                                            <p><strong>Fabric Type : </strong>100% Cotton</p>
                                                            <p><strong>Acid Washed : </strong>GSM: 210
                                                                Our model wears an L size and is /5’10” tall</p>
                                                            <p><strong>Effortless Style and Comfort :
                                                                </strong>Discover Drop Shoulder T-Shirts for a
                                                                Relaxed Look!</p>
                                                            <p><strong>Sizes : </strong>S to XXL</p>
                                                        </div>
                                                        <strong>Mens’s Half-Sleeve Drop Shoulder T-Shirt
                                                            Measurements (inch”):</strong>
                                                        <div class="content">
                                                            <p><strong>Size S : </strong>Chest- 20, Length – 27,
                                                                Shoulder – 20, Sleeve Length- 10, Sleeve
                                                                Opening- 7.5</p>
                                                            <p><strong>Size M : </strong>Chest- 21, Length – 28,
                                                                Shoulder – 21.5, Sleeve Length- 10, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size L : </strong>Chest- 22, Length – 29,
                                                                Shoulder – 22.5, Sleeve Length- 10.5, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size XL : </strong>Chest- 23, Length –
                                                                30, Shoulder – 23, Sleeve Length- 11, Sleeve
                                                                Opening- 8.5</p>
                                                            <p><strong>Size XXL : </strong>Chest- 24, Length –
                                                                31, Shoulder – 24, Sleeve Length- 11.5, Sleeve
                                                                Opening- 9 </p>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <strong>Size : </strong>
                                                            <p class="size m-0" id="product__size"></p>
                                                        </div>
                                                        <div class="quick-image-size">
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="a_aize" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; S &nbsp;" for="a_aize">S</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="m_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; M &nbsp;" for="m_size">M</label>

                                                                <input type="radio" class="btn-check " name="btnradio"
                                                                    id="l_size" autocomplete="off">
                                                                <label class="btn product__size_btn disabled"
                                                                    title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xxl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XXL &nbsp;" for="xxl_size">XXL</label>
                                                            </div>
                                                        </div>
                                                        <!-- product quantity -->
                                                        <div class="product__quantity" id="product__quantity">
                                                            <p class="quantity_item"><strong>S</strong> Stock in
                                                                <strong>10</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>M</strong> Stock in
                                                                <strong>5</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>L</strong> Stock in
                                                                <strong>9</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XL</strong> Stock in
                                                                <strong>15</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XXL</strong> Stock in
                                                                <strong>12</strong>
                                                            </p>
                                                        </div>

                                                        <div class="quick-view_cart-product">
                                                            <div
                                                                class="cart-product-quantity d-flex align-items-center">
                                                                <div class="product_quantity">
                                                                    <a href="#" class="quantity__minus"><span><i
                                                                                class="fa fa-minus"></i></span></a>
                                                                    <input name="quantity" type="text"
                                                                        class="quantity__input" value="1" disabled>
                                                                    <a href="#" class="quantity__plus"><span><i
                                                                                class="fa fa-plus"></i></span></a>
                                                                </div>
                                                                <button type="button" class="addToCart">Add to
                                                                    cart</button>
                                                                <div class="product_quick_heart">
                                                                    <span data-toggle="tooltip" data-bs-placement="top"
                                                                        title="Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- productquick view Modal  -->
                            <div class="latest-product-image" title="TD0006">
                                <a href="product-details.html">
                                    <div class="front-image">
                                        <img src="{{asset('frontend/')}}/img/category/4.webp" class="w-100" alt="">
                                    </div>
                                    <div class="back-image">
                                        <img src="{{asset('frontend/')}}/img/latest/4-back.jpg" class="w-100" alt="">
                                    </div>
                                </a>
                                <div class="product-info-bottom">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                </div>
                            </div>
                            <div class="latest-product-content">
                                <h5 class="d-flex align-items-center justify-content-between">
                                    <a href="product-details.html">TD0006</a>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                    </a>
                                </h5>
                                <h5 class="price">
                                    ৳966.32
                                </h5>
                                <!-- <div class="reward-point">
                                    <span>Earn up to </span>
                                    <span> BorkaMart CLUB POINTS.</span>
                                    <span data-toggle="tooltip" data-placement="top"
                                        title="Join our club! For every ৳100 you get 100 BorkaMart CLUB POINTS.">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="single-latest-product">
                            <div class="single-product-head d-flex align-items-start justify-content-between">
                                <h6>Sold Out</h6>
                                <div class="product-info">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Quick View">
                                            <i class="fa fa-magnifying-glass-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- productquick view Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="quick_image owl-carousel">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="product_quick_view-content">
                                                        <h4>TD0005</h4>
                                                        <h6>৳950.00</h6>
                                                        <div class="content">
                                                            <p><strong>Collection : </strong>Drop-It-Right</p>
                                                            <p><strong>Style : </strong>Drop Shoulder T</p>
                                                            <p><strong>Sleeve : </strong>Drop T sleeve</p>
                                                            <p><strong>Fabric Type : </strong>100% Cotton</p>
                                                            <p><strong>Acid Washed : </strong>GSM: 210
                                                                Our model wears an L size and is /5’10” tall</p>
                                                            <p><strong>Effortless Style and Comfort :
                                                                </strong>Discover Drop Shoulder T-Shirts for a
                                                                Relaxed Look!</p>
                                                            <p><strong>Sizes : </strong>S to XXL</p>
                                                        </div>
                                                        <strong>Mens’s Half-Sleeve Drop Shoulder T-Shirt
                                                            Measurements (inch”):</strong>
                                                        <div class="content">
                                                            <p><strong>Size S : </strong>Chest- 20, Length – 27,
                                                                Shoulder – 20, Sleeve Length- 10, Sleeve
                                                                Opening- 7.5</p>
                                                            <p><strong>Size M : </strong>Chest- 21, Length – 28,
                                                                Shoulder – 21.5, Sleeve Length- 10, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size L : </strong>Chest- 22, Length – 29,
                                                                Shoulder – 22.5, Sleeve Length- 10.5, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size XL : </strong>Chest- 23, Length –
                                                                30, Shoulder – 23, Sleeve Length- 11, Sleeve
                                                                Opening- 8.5</p>
                                                            <p><strong>Size XXL : </strong>Chest- 24, Length –
                                                                31, Shoulder – 24, Sleeve Length- 11.5, Sleeve
                                                                Opening- 9 </p>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <strong>Size : </strong>
                                                            <p class="size m-0" id="product__size"></p>
                                                        </div>
                                                        <div class="quick-image-size">
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="a_aize" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; S &nbsp;" for="a_aize">S</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="m_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; M &nbsp;" for="m_size">M</label>

                                                                <input type="radio" class="btn-check " name="btnradio"
                                                                    id="l_size" autocomplete="off">
                                                                <label class="btn product__size_btn disabled"
                                                                    title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xxl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XXL &nbsp;" for="xxl_size">XXL</label>
                                                            </div>
                                                        </div>
                                                        <!-- product quantity -->
                                                        <div class="product__quantity" id="product__quantity">
                                                            <p class="quantity_item"><strong>S</strong> Stock in
                                                                <strong>10</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>M</strong> Stock in
                                                                <strong>5</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>L</strong> Stock in
                                                                <strong>9</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XL</strong> Stock in
                                                                <strong>15</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XXL</strong> Stock in
                                                                <strong>12</strong>
                                                            </p>
                                                        </div>

                                                        <div class="quick-view_cart-product">
                                                            <div
                                                                class="cart-product-quantity d-flex align-items-center">
                                                                <div class="product_quantity">
                                                                    <a href="#" class="quantity__minus"><span><i
                                                                                class="fa fa-minus"></i></span></a>
                                                                    <input name="quantity" type="text"
                                                                        class="quantity__input" value="1" disabled>
                                                                    <a href="#" class="quantity__plus"><span><i
                                                                                class="fa fa-plus"></i></span></a>
                                                                </div>
                                                                <button type="button" class="addToCart">Add to
                                                                    cart</button>
                                                                <div class="product_quick_heart">
                                                                    <span data-toggle="tooltip" data-bs-placement="top"
                                                                        title="Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product image  -->
                            <div class="latest-product-image" title="TD0006">
                                <a href="product-details.html">
                                    <div class="front-image">
                                        <img src="{{asset('frontend/')}}/img/category/3.webp" class="w-100" alt="">
                                    </div>
                                    <div class="back-image">
                                        <img src="{{asset('frontend/')}}/img/category/5.webp" class="w-100" alt="">
                                    </div>
                                </a>
                                <div class="product-info-bottom">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                </div>
                            </div>
                            <div class="latest-product-content">
                                <h5 class="d-flex align-items-center justify-content-between">
                                    <a href="product-details.html">TD0006</a>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                    </a>
                                </h5>
                                <h5 class="price">
                                    ৳966.32
                                </h5>
                                <!-- <div class="reward-point">
                                    <span>Earn up to </span>
                                    <span> BorkaMart CLUB POINTS.</span>
                                    <span data-toggle="tooltip" data-placement="top"
                                        title="Join our club! For every ৳100 you get 100 BorkaMart CLUB POINTS.">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="single-latest-product">
                            <div class="single-product-head d-flex align-items-start justify-content-between">
                                <h6>Sold Out</h6>
                                <div class="product-info">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Quick View">
                                            <i class="fa fa-magnifying-glass-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- productquick view Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="quick_image owl-carousel">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="product_quick_view-content">
                                                        <h4>TD0005</h4>
                                                        <h6>৳950.00</h6>
                                                        <div class="content">
                                                            <p><strong>Collection : </strong>Drop-It-Right</p>
                                                            <p><strong>Style : </strong>Drop Shoulder T</p>
                                                            <p><strong>Sleeve : </strong>Drop T sleeve</p>
                                                            <p><strong>Fabric Type : </strong>100% Cotton</p>
                                                            <p><strong>Acid Washed : </strong>GSM: 210
                                                                Our model wears an L size and is /5’10” tall</p>
                                                            <p><strong>Effortless Style and Comfort :
                                                                </strong>Discover Drop Shoulder T-Shirts for a
                                                                Relaxed Look!</p>
                                                            <p><strong>Sizes : </strong>S to XXL</p>
                                                        </div>
                                                        <strong>Mens’s Half-Sleeve Drop Shoulder T-Shirt
                                                            Measurements (inch”):</strong>
                                                        <div class="content">
                                                            <p><strong>Size S : </strong>Chest- 20, Length – 27,
                                                                Shoulder – 20, Sleeve Length- 10, Sleeve
                                                                Opening- 7.5</p>
                                                            <p><strong>Size M : </strong>Chest- 21, Length – 28,
                                                                Shoulder – 21.5, Sleeve Length- 10, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size L : </strong>Chest- 22, Length – 29,
                                                                Shoulder – 22.5, Sleeve Length- 10.5, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size XL : </strong>Chest- 23, Length –
                                                                30, Shoulder – 23, Sleeve Length- 11, Sleeve
                                                                Opening- 8.5</p>
                                                            <p><strong>Size XXL : </strong>Chest- 24, Length –
                                                                31, Shoulder – 24, Sleeve Length- 11.5, Sleeve
                                                                Opening- 9 </p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <strong>Size : </strong>
                                                            <p class="size m-0" id="product__size"></p>
                                                        </div>
                                                        <div class="quick-image-size">
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="a_aize" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; S &nbsp;" for="a_aize">S</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="m_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; M &nbsp;" for="m_size">M</label>

                                                                <input type="radio" class="btn-check " name="btnradio"
                                                                    id="l_size" autocomplete="off">
                                                                <label class="btn product__size_btn disabled"
                                                                    title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xxl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XXL &nbsp;" for="xxl_size">XXL</label>
                                                            </div>
                                                        </div>
                                                        <!-- product quantity -->
                                                        <div class="product__quantity" id="product__quantity">
                                                            <p class="quantity_item"><strong>S</strong> Stock in
                                                                <strong>10</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>M</strong> Stock in
                                                                <strong>5</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>L</strong> Stock in
                                                                <strong>9</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XL</strong> Stock in
                                                                <strong>15</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XXL</strong> Stock in
                                                                <strong>12</strong>
                                                            </p>
                                                        </div>

                                                        <div class="quick-view_cart-product">
                                                            <div
                                                                class="cart-product-quantity d-flex align-items-center">
                                                                <div class="product_quantity">
                                                                    <a href="#" class="quantity__minus"><span><i
                                                                                class="fa fa-minus"></i></span></a>
                                                                    <input name="quantity" type="text"
                                                                        class="quantity__input" value="1" disabled>
                                                                    <a href="#" class="quantity__plus"><span><i
                                                                                class="fa fa-plus"></i></span></a>
                                                                </div>
                                                                <button type="button" class="addToCart">Add to
                                                                    cart</button>
                                                                <div class="product_quick_heart">
                                                                    <span data-toggle="tooltip" data-bs-placement="top"
                                                                        title="Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product image  -->
                            <div class="latest-product-image" title="TD0006">
                                <a href="product-details.html">
                                    <div class="front-image">
                                        <img src="{{asset('frontend/')}}/img/category/6.webp" class="w-100" alt="">
                                    </div>
                                    <div class="back-image">
                                        <img src="{{asset('frontend/')}}/img/latest/6-back.webp" class="w-100" alt="">
                                    </div>
                                </a>
                                <div class="product-info-bottom">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                </div>
                            </div>
                            <div class="latest-product-content">
                                <h5 class="d-flex align-items-center justify-content-between">
                                    <a href="product-details.html">TD0006</a>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                    </a>
                                </h5>
                                <h5 class="price">
                                    ৳966.32
                                </h5>
                                <!-- <div class="reward-point">
                                    <span>Earn up to </span>
                                    <span> BorkaMart CLUB POINTS.</span>
                                    <span data-toggle="tooltip" data-placement="top"
                                        title="Join our club! For every ৳100 you get 100 BorkaMart CLUB POINTS.">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="single-latest-product">
                            <div class="single-product-head d-flex align-items-start justify-content-between">
                                <h6>Sold Out</h6>
                                <div class="product-info">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Quick View">
                                            <i class="fa fa-magnifying-glass-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- productquick view Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="quick_image owl-carousel">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="product_quick_view-content">
                                                        <h4>TD0005</h4>
                                                        <h6>৳950.00</h6>
                                                        <div class="content">
                                                            <p><strong>Collection : </strong>Drop-It-Right</p>
                                                            <p><strong>Style : </strong>Drop Shoulder T</p>
                                                            <p><strong>Sleeve : </strong>Drop T sleeve</p>
                                                            <p><strong>Fabric Type : </strong>100% Cotton</p>
                                                            <p><strong>Acid Washed : </strong>GSM: 210
                                                                Our model wears an L size and is /5’10” tall</p>
                                                            <p><strong>Effortless Style and Comfort :
                                                                </strong>Discover Drop Shoulder T-Shirts for a
                                                                Relaxed Look!</p>
                                                            <p><strong>Sizes : </strong>S to XXL</p>
                                                        </div>
                                                        <strong>Mens’s Half-Sleeve Drop Shoulder T-Shirt
                                                            Measurements (inch”):</strong>
                                                        <div class="content">
                                                            <p><strong>Size S : </strong>Chest- 20, Length – 27,
                                                                Shoulder – 20, Sleeve Length- 10, Sleeve
                                                                Opening- 7.5</p>
                                                            <p><strong>Size M : </strong>Chest- 21, Length – 28,
                                                                Shoulder – 21.5, Sleeve Length- 10, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size L : </strong>Chest- 22, Length – 29,
                                                                Shoulder – 22.5, Sleeve Length- 10.5, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size XL : </strong>Chest- 23, Length –
                                                                30, Shoulder – 23, Sleeve Length- 11, Sleeve
                                                                Opening- 8.5</p>
                                                            <p><strong>Size XXL : </strong>Chest- 24, Length –
                                                                31, Shoulder – 24, Sleeve Length- 11.5, Sleeve
                                                                Opening- 9 </p>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <strong>Size : </strong>
                                                            <p class="size m-0" id="product__size"></p>
                                                        </div>
                                                        <div class="quick-image-size">
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="a_aize" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; S &nbsp;" for="a_aize">S</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="m_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; M &nbsp;" for="m_size">M</label>

                                                                <input type="radio" class="btn-check " name="btnradio"
                                                                    id="l_size" autocomplete="off">
                                                                <label class="btn product__size_btn disabled"
                                                                    title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xxl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XXL &nbsp;" for="xxl_size">XXL</label>
                                                            </div>
                                                        </div>
                                                        <!-- product quantity -->
                                                        <div class="product__quantity" id="product__quantity">
                                                            <p class="quantity_item"><strong>S</strong> Stock in
                                                                <strong>10</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>M</strong> Stock in
                                                                <strong>5</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>L</strong> Stock in
                                                                <strong>9</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XL</strong> Stock in
                                                                <strong>15</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XXL</strong> Stock in
                                                                <strong>12</strong>
                                                            </p>
                                                        </div>

                                                        <div class="quick-view_cart-product">
                                                            <div
                                                                class="cart-product-quantity d-flex align-items-center">
                                                                <div class="product_quantity">
                                                                    <a href="#" class="quantity__minus"><span><i
                                                                                class="fa fa-minus"></i></span></a>
                                                                    <input name="quantity" type="text"
                                                                        class="quantity__input" value="1" disabled>
                                                                    <a href="#" class="quantity__plus"><span><i
                                                                                class="fa fa-plus"></i></span></a>
                                                                </div>
                                                                <button type="button" class="addToCart">Add to
                                                                    cart</button>
                                                                <div class="product_quick_heart">
                                                                    <span data-toggle="tooltip" data-bs-placement="top"
                                                                        title="Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product image  -->
                            <div class="latest-product-image" title="TD0006">
                                <a href="product-details.html">
                                    <div class="front-image">
                                        <img src="{{asset('frontend/')}}/img/category/2.webp" class="w-100" alt="">
                                    </div>
                                    <div class="back-image">
                                        <img src="{{asset('frontend/')}}/img/latest/7-back.webp" class="w-100" alt="">
                                    </div>
                                </a>
                                <div class="product-info-bottom">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                </div>
                            </div>
                            <div class="latest-product-content">
                                <h5 class="d-flex align-items-center justify-content-between">
                                    <a href="product-details.html">TD0006</a>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                    </a>
                                </h5>
                                <h5 class="price">
                                    ৳966.32
                                </h5>
                                <!-- <div class="reward-point">
                                    <span>Earn up to </span>
                                    <span> BorkaMart CLUB POINTS.</span>
                                    <span data-toggle="tooltip" data-placement="top"
                                        title="Join our club! For every ৳100 you get 100 BorkaMart CLUB POINTS.">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="single-latest-product">
                            <div class="single-product-head d-flex align-items-start justify-content-between">
                                <h6>Sold Out</h6>
                                <div class="product-info">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Quick View">
                                            <i class="fa fa-magnifying-glass-plus"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- productquick view Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="quick_image owl-carousel">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                        <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="product_quick_view-content">
                                                        <h4>TD0005</h4>
                                                        <h6>৳950.00</h6>
                                                        <div class="content">
                                                            <p><strong>Collection : </strong>Drop-It-Right</p>
                                                            <p><strong>Style : </strong>Drop Shoulder T</p>
                                                            <p><strong>Sleeve : </strong>Drop T sleeve</p>
                                                            <p><strong>Fabric Type : </strong>100% Cotton</p>
                                                            <p><strong>Acid Washed : </strong>GSM: 210
                                                                Our model wears an L size and is /5’10” tall</p>
                                                            <p><strong>Effortless Style and Comfort :
                                                                </strong>Discover Drop Shoulder T-Shirts for a
                                                                Relaxed Look!</p>
                                                            <p><strong>Sizes : </strong>S to XXL</p>
                                                        </div>
                                                        <strong>Mens’s Half-Sleeve Drop Shoulder T-Shirt
                                                            Measurements (inch”):</strong>
                                                        <div class="content">
                                                            <p><strong>Size S : </strong>Chest- 20, Length – 27,
                                                                Shoulder – 20, Sleeve Length- 10, Sleeve
                                                                Opening- 7.5</p>
                                                            <p><strong>Size M : </strong>Chest- 21, Length – 28,
                                                                Shoulder – 21.5, Sleeve Length- 10, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size L : </strong>Chest- 22, Length – 29,
                                                                Shoulder – 22.5, Sleeve Length- 10.5, Sleeve
                                                                Opening- 8</p>
                                                            <p><strong>Size XL : </strong>Chest- 23, Length –
                                                                30, Shoulder – 23, Sleeve Length- 11, Sleeve
                                                                Opening- 8.5</p>
                                                            <p><strong>Size XXL : </strong>Chest- 24, Length –
                                                                31, Shoulder – 24, Sleeve Length- 11.5, Sleeve
                                                                Opening- 9 </p>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <strong>Size : </strong>
                                                            <p class="size m-0" id="product__size"></p>
                                                        </div>
                                                        <div class="quick-image-size">
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic radio toggle button group">
                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="a_aize" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; S &nbsp;" for="a_aize">S</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="m_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; M &nbsp;" for="m_size">M</label>

                                                                <input type="radio" class="btn-check " name="btnradio"
                                                                    id="l_size" autocomplete="off">
                                                                <label class="btn product__size_btn disabled"
                                                                    title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                <input type="radio" class="btn-check" name="btnradio"
                                                                    id="xxl_size" autocomplete="off">
                                                                <label class="btn product__size_btn"
                                                                    title="&nbsp; XXL &nbsp;" for="xxl_size">XXL</label>
                                                            </div>
                                                        </div>
                                                        <!-- product quantity -->
                                                        <div class="product__quantity" id="product__quantity">
                                                            <p class="quantity_item"><strong>S</strong> Stock in
                                                                <strong>10</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>M</strong> Stock in
                                                                <strong>5</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>L</strong> Stock in
                                                                <strong>9</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XL</strong> Stock in
                                                                <strong>15</strong>
                                                            </p>
                                                            <p class="quantity_item"><strong>XXL</strong> Stock in
                                                                <strong>12</strong>
                                                            </p>
                                                        </div>

                                                        <div class="quick-view_cart-product">
                                                            <div
                                                                class="cart-product-quantity d-flex align-items-center">
                                                                <div class="product_quantity">
                                                                    <a href="#" class="quantity__minus"><span><i
                                                                                class="fa fa-minus"></i></span></a>
                                                                    <input name="quantity" type="text"
                                                                        class="quantity__input" value="1" disabled>
                                                                    <a href="#" class="quantity__plus"><span><i
                                                                                class="fa fa-plus"></i></span></a>
                                                                </div>
                                                                <button type="button" class="addToCart">Add to
                                                                    cart</button>
                                                                <div class="product_quick_heart">
                                                                    <span data-toggle="tooltip" data-bs-placement="top"
                                                                        title="Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product image  -->
                            <div class="latest-product-image" title="TD0006">
                                <a href="product-details.html">
                                    <div class="front-image">
                                        <img src="{{asset('frontend/')}}/img/category/1.jpg" class="w-100" alt="">
                                    </div>
                                    <div class="back-image">
                                        <img src="{{asset('frontend/')}}/img/latest/8-back.webp" class="w-100" alt="">
                                    </div>
                                </a>
                                <div class="product-info-bottom">
                                    <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                </div>
                            </div>
                            <div class="latest-product-content">
                                <h5 class="d-flex align-items-center justify-content-between">
                                    <a href="product-details.html">TD0006</a>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                    </a>
                                </h5>
                                <h5 class="price">
                                    ৳966.32
                                </h5>
                                <!-- <div class="reward-point">
                                    <span>Earn up to </span>
                                    <span> BorkaMart CLUB POINTS.</span>
                                    <span data-toggle="tooltip" data-placement="top"
                                        title="Join our club! For every ৳100 you get 100 BorkaMart CLUB POINTS.">
                                        <i class="fa fa-info-circle"></i>
                                    </span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- latest product end -->

        <!-- BorkaMart logo -->
        <div class="BorkaMart-feature-image">
            <img src="img/BorkaMart-pc-flash-logo-2.gif" alt="" class="w-100">
        </div>
        <!-- BorkaMart logo -->

        <!-- refresh start -->
        <div class="refresh-area section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="refresh-content">
                            <h2>men</h2>
                            <div class="refresh-title">your <br>wardrobe <br>refresh</div>
                            <div class="section-header mt-4">
                                <a href="shop.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- refresh end -->

        <!-- trending product start -->
        <div class="trending-product-area section-padding" style="background-color: #F4F4F4;">
            <div class="container-fluid">
                <div class="row align-items-center mb-5">
                    <div class="col-xl-6 col-lg-6 col-md-7 col-sm-7 col-12">
                        <div class="section-header">
                            <h2>Trending Outfits</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-5 col-sm-5 col-12 text-end">
                        <div class="section-header">
                            <span>Shared by customers, just like you!</span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch gy-4">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-trending">
                            <div class="trending-image">
                                <img src="{{asset('frontend/')}}/img/category/1.jpg" class="w-100" alt="">
                            </div>
                            <div class="trending-content">
                                <a href="product-details.html" class="content-item">
                                    <div class="trending-subcontent d-flex align-items-center">
                                        <div class="trending-subconent-image">
                                            <img src="{{asset('frontend/')}}/img/category/2.webp" alt="">
                                        </div>
                                        <div class="trending-subconent-content">
                                            <h3 class="title">White Pearl Panjabi with Green Cuff</h3>
                                            <span class="price">৳3,250.00</span>
                                            <span class="trending-select">Select options <i
                                                    class="fa-brands fa-youtube"></i> </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="trending-icon-top"><i class="fa-solid fa-tag"></i></div>
                                <div class="trending-icon-bottom">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-trending">
                            <div class="trending-image">
                                <img src="{{asset('frontend/')}}/img/category/2.webp" alt="">
                            </div>
                            <div class="trending-content">
                                <a href="product-details.html" class="content-item">
                                    <div class="trending-subcontent d-flex align-items-center">
                                        <div class="trending-subconent-image">
                                            <img src="{{asset('frontend/')}}/img/category/4.webp" alt="">
                                        </div>
                                        <div class="trending-subconent-content">
                                            <h3 class="title">White Pearl Panjabi with Green Cuff</h3>
                                            <span class="price">৳3,250.00</span>
                                            <span class="trending-select">Select options <i
                                                    class="fa-brands fa-youtube"></i> </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="trending-icon-top"><i class="fa-solid fa-tag"></i></div>
                                <div class="trending-icon-bottom">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-trending">
                            <div class="trending-image">
                                <img src="{{asset('frontend/')}}/img/category/3.webp" alt="">
                            </div>
                            <div class="trending-content">
                                <a href="product-details.html" class="content-item">
                                    <div class="trending-subcontent d-flex align-items-center">
                                        <div class="trending-subconent-image">
                                            <img src="{{asset('frontend/')}}/img/category/2.webp" alt="">
                                        </div>
                                        <div class="trending-subconent-content">
                                            <h3 class="title">White Pearl Panjabi with Green Cuff</h3>
                                            <span class="price">৳3,250.00</span>
                                            <span class="trending-select">Select options <i
                                                    class="fa-brands fa-youtube"></i> </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="trending-icon-top"><i class="fa-solid fa-tag"></i></div>
                                <div class="trending-icon-bottom">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trending product end -->

        <!-- vintage start -->
        <div class="vintage-area section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="single-instagram">
                                    <div class="instagram-photo">
                                        <img src="{{asset('frontend/')}}/img/category/3.webp" alt="">
                                    </div>
                                    <a href="#" target="_blank" class="instagram-logo">
                                        <i class="fa-brands fa-instagram"></i> <br>
                                        <span>follow us on instagram</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="single-instagram">
                                    <div class="instagram-photo">
                                        <img src="{{asset('frontend/')}}/img/category/1.jpg" alt="">
                                    </div>
                                    <a href="#" target="_blank" class="instagram-logo">
                                        <i class="fa-brands fa-instagram"></i> <br>
                                        <span>follow us on instagram</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="single-instagram">
                                    <div class="instagram-photo">
                                        <img src="{{asset('frontend/')}}/img/category/2.webp" alt="">
                                    </div>
                                    <a href="#" target="_blank" class="instagram-logo">
                                        <i class="fa-brands fa-instagram"></i> <br>
                                        <span>follow us on instagram</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="single-instagram">
                                    <div class="instagram-photo">
                                        <img src="{{asset('frontend/')}}/img/category/3.webp" alt="">
                                    </div>
                                    <a href="#" target="_blank" class="instagram-logo">
                                        <i class="fa-brands fa-instagram"></i> <br>
                                        <span>follow us on instagram</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="single-instagram">
                                    <div class="instagram-photo">
                                        <img src="{{asset('frontend/')}}/img/category/4.webp" alt="">
                                    </div>
                                    <a href="#" target="_blank" class="instagram-logo">
                                        <i class="fa-brands fa-instagram"></i> <br>
                                        <span>follow us on instagram</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="single-instagram">
                                    <div class="instagram-photo">
                                        <img src="{{asset('frontend/')}}/img/category/2.webp" alt="">
                                    </div>
                                    <a href="#" target="_blank" class="instagram-logo">
                                        <i class="fa-brands fa-instagram"></i> <br>
                                        <span>follow us on instagram</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="vintage-content">
                            <div class="vintage-table">
                                <div class="vintage-title">Vintage Style</div>
                                <p>Discover the power of timeless style with our men's fashion brand. We blend classic
                                    elegance with modern sensibility to create clothes that make you feel confident and
                                    unforgettable, no matter the moment. </p>
                                <h3><a href="#">#BorkaMart</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- vintage end -->
    </main>

    <!-- footer start -->
    <footer>
        <div class="footer-area pt-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <a href="index.html">
                                <img src="{{asset('frontend/')}}/img/BorkaMart.png" alt="">
                            </a>
                            <ul class="footer-address">
                                <li class="d-flex align-items-center">
                                    <div class="footer-left-item">
                                        <div class="footer-item">
                                            Trade License
                                        </div>
                                    </div>
                                    <p> : 4445415</p>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="footer-left-item">
                                        <div class="footer-item">
                                            Email </div>
                                    </div>
                                    <a href="mailto:najmulcse247@gmail.com"> : najmulcse247@gmail.com</a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="footer-left-item">
                                        <div class="footer-item">
                                            Registered Office </div>
                                    </div>
                                    <p> : Uttara-Dhaka, Bangladesh</p>
                                </li>
                                <li class="d-flex align-items-center mt-2">
                                    <div class="footer-left-item">
                                        <div class="footer-item">
                                            Social </div>
                                    </div>
                                    <p>
                                    <div class="footer-social">
                                        <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                                    </div>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-widget d-flex justify-content-around">
                            <ul class="footer-menu">
                                <h5>Customer Service</h5>
                                <li><a href="need-help.html">Need Help?</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="request-callback.html">Request Callback</a></li>
                                <li><a href="https://www.messenger.com/e2ee/t/8064540923664643/" target="_blank">Live
                                        Chat</a></li>
                            </ul>
                            <ul class="footer-menu">
                                <h5>Information</h5>
                                <li><a href="about.html">About BorkaMart</a></li>
                                <li><a href="location.html">Store Locator</a></li>
                                <li><a href="club.html">BorkaMart Club</a></li>
                                <li><a href="refund.html">Refund and Returns</a></li>
                                <li><a href="tou.html">Terms of Use</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <div class="footer-menu">
                                <h5>Join Our Newsletter</h5>
                                <p>Subscribe to our newsletter and get regular fashion updates.</p>
                                <form action="" method="post">
                                    <div class="form-group d-flex align-items-center position-relative">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Type your email">
                                        <button type="submit"><i class="fa fa-arrow-right-long"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area bg-black pt-2 pb-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <span class="text-white">Copyright &copy; 2023 BorkaMart. All rights reserved. Developed by <a
                                target="_blank" class="text-white text-decoration-underline" href="#">Md Najmul
                                Hasan</a></span>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <span>
                            <img class="w-100" src="{{asset('frontend/')}}/img/ssl-commerz.webp" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- bottom footer fixed start -->
    <div class="bottom-footer-fixed d-flex align-content-center justify-content-around d-none">
        <a href="index.html" class="single-footer-menu">
            <i class="fa fa-home"></i>
        </a>
        <a href="auth.html" class="single-footer-menu">
            <i class="fa fa-user"></i>
        </a>
        <a href="#" class="single-footer-menu">
            <div data-bs-toggle="offcanvas" href="#cardModal" role="button" aria-controls="offcanvasExample">
                <i class="fa fa-shopping-cart"></i>
                <span>10</span>
            </div>
        </a>
        <a href="wishlist.html" class="single-footer-menu">
            <i class="fa fa-heart"></i>
            <span>10</span>
        </a>
    </div>
    <!-- bottom footer fixed end -->

    <!-- cart offcanvas menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cardModal" aria-labelledby="cart-bar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="cart-bar">YOUR CART</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="single-cart-item">
                <div class="single-cart-product d-flex">
                    <div class="sigle-cart-product-photo">
                        <a href="#">
                            <img src="{{asset('frontend/')}}/img/siam.jpg" alt="">
                        </a>
                    </div>
                    <div class="sigle-cart-product-content">
                        <div class="cart-product-name d-flex justify-content-between">
                            <div>
                                <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                <h6>BorkaMart CLUB POINTS: 1334</h6>
                                <h6>BorkaMart CLUB POINTS: <br> 1334 ( 1334 * 1 )</h6>
                            </div>
                            <span><i class="fa fa-xmark" title="remove item"></i></span>
                        </div>
                        <div class="cart-product-quantity d-flex justify-content-between align-items-center">
                            <div class="product_quantity">
                                <a href="#" class="quantity__minus"><span><i class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1" disabled>
                                <a href="#" class="quantity__plus"><span><i class="fa fa-plus"></i></span></a>
                            </div>
                            <div>৳10000.00</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="single-cart-item">
                <div class="single-cart-product d-flex">
                    <div class="sigle-cart-product-photo">
                        <a href="#">
                            <img src="{{asset('frontend/')}}/img/latest/1-back.jpg" alt="">
                        </a>
                    </div>
                    <div class="sigle-cart-product-content">
                        <div class="cart-product-name d-flex justify-content-between">
                            <div>
                                <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                <h6>BorkaMart CLUB POINTS: 1334</h6>
                                <h6>BorkaMart CLUB POINTS: <br> 1334 ( 1334 * 1 )</h6>
                            </div>
                            <span><i class="fa fa-xmark" title="remove item"></i></span>
                        </div>
                        <div class="cart-product-quantity d-flex justify-content-between align-items-center">
                            <div class="product_quantity">
                                <a href="#" class="quantity__minus"><span><i class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1" disabled>
                                <a href="#" class="quantity__plus"><span><i class="fa fa-plus"></i></span></a>
                            </div>
                            <div>৳10000.00</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="single-cart-item">
                <div class="single-cart-product d-flex">
                    <div class="sigle-cart-product-photo">
                        <a href="#">
                            <img src="{{asset('frontend/')}}/img/latest/2-back.jpg" alt="">
                        </a>
                    </div>
                    <div class="sigle-cart-product-content">
                        <div class="cart-product-name d-flex justify-content-between">
                            <div>
                                <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                <h6>BorkaMart CLUB POINTS: 1334</h6>
                                <h6>BorkaMart CLUB POINTS: <br> 1334 ( 1334 * 1 )</h6>
                            </div>
                            <span><i class="fa fa-xmark" title="remove item"></i></span>
                        </div>
                        <div class="cart-product-quantity d-flex justify-content-between align-items-center">
                            <div class="product_quantity">
                                <a href="#" class="quantity__minus"><span><i class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1" disabled>
                                <a href="#" class="quantity__plus"><span><i class="fa fa-plus"></i></span></a>
                            </div>
                            <div>৳10000.00</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="single-cart-item">
                <div class="single-cart-product d-flex">
                    <div class="sigle-cart-product-photo">
                        <a href="#">
                            <img src="{{asset('frontend/')}}/img/latest/4-front.jpg" alt="">
                        </a>
                    </div>
                    <div class="sigle-cart-product-content">
                        <div class="cart-product-name d-flex justify-content-between">
                            <div>
                                <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                <h6>BorkaMart CLUB POINTS: 1334</h6>
                                <h6>BorkaMart CLUB POINTS: <br> 1334 ( 1334 * 1 )</h6>
                            </div>
                            <span><i class="fa fa-xmark" title="remove item"></i></span>
                        </div>
                        <div class="cart-product-quantity d-flex justify-content-between align-items-center">
                            <div class="product_quantity">
                                <a href="#" class="quantity__minus"><span><i class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1" disabled>
                                <a href="#" class="quantity__plus"><span><i class="fa fa-plus"></i></span></a>
                            </div>
                            <div>৳10000.00</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="single-cart-item">
                <div class="single-cart-product d-flex">
                    <div class="sigle-cart-product-photo">
                        <a href="#">
                            <img src="{{asset('frontend/')}}/img/latest/3-front.jpg" alt="">
                        </a>
                    </div>
                    <div class="sigle-cart-product-content">
                        <div class="cart-product-name d-flex justify-content-between">
                            <div>
                                <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                <h6>BorkaMart CLUB POINTS: 1334</h6>
                                <h6>BorkaMart CLUB POINTS: <br> 1334 ( 1334 * 1 )</h6>
                            </div>
                            <span><i class="fa fa-xmark" title="remove item"></i></span>
                        </div>
                        <div class="cart-product-quantity d-flex justify-content-between align-items-center">
                            <div class="product_quantity">
                                <a href="#" class="quantity__minus"><span><i class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1" disabled>
                                <a href="#" class="quantity__plus"><span><i class="fa fa-plus"></i></span></a>
                            </div>
                            <div>৳10000.00</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="single-cart-item">
                <div class="single-cart-product d-flex">
                    <div class="sigle-cart-product-photo">
                        <a href="#">
                            <img src="{{asset('frontend/')}}/img/siam.jpg" alt="">
                        </a>
                    </div>
                    <div class="sigle-cart-product-content">
                        <div class="cart-product-name d-flex justify-content-between">
                            <div>
                                <a href="#">BorkaMart Discreet Delight Polo - S</a>
                                <h6>BorkaMart CLUB POINTS: 1334</h6>
                                <h6>BorkaMart CLUB POINTS: <br> 1334 ( 1334 * 1 )</h6>
                            </div>
                            <span><i class="fa fa-xmark" title="remove item"></i></span>
                        </div>
                        <div class="cart-product-quantity d-flex justify-content-between align-items-center">
                            <div class="product_quantity">
                                <a href="#" class="quantity__minus"><span><i class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1" disabled>
                                <a href="#" class="quantity__plus"><span><i class="fa fa-plus"></i></span></a>
                            </div>
                            <div>৳10000.00</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer p-3 cartModalFooter">
            <div class="footer-item d-flex align-items-center justify-content-between">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"><strong>Subtotal : </strong></h5>
                <span>৳6,395.00
                </span>
            </div>
            <div class="footer-item pt-3">
                <a href="cart.html" class="cartBtn cartBtn-top mb-2">VIEW CART</a>
                <a href="checkout.html" class="cartBtn cartBtn-bottom">CHECKOUT</a>
            </div>
        </div>
    </div>

    <script src="{{asset('frontend/')}}/js/jquery-3.7.0.min.js"></script>
    <script src="{{asset('frontend/')}}/js/popper.min.js"></script>
    <script src="{{asset('frontend/')}}/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
    <script src="{{asset('frontend/')}}/js/main.js"></script>

</html>