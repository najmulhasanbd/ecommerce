<header>
    <div class="h_header">
        <div class="header-top d-flex">
            <div class="h_header-left d-flex align-items-center position-relative">
                <div class="h_logo">
                    <a href="{{url('/')}}">
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
                    <a href="{{url('/')}}">
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