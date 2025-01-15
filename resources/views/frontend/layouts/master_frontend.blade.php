<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BorkaMart</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link href="{{ asset('frontend/') }}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/responsive.css">

</head>

<body>

    <!-- header start -->
    @include('frontend.layouts.header')
    <!-- header end -->

    <!-- main -->
    @yield('content')

    <!-- footer start -->
    @include('frontend.layouts.footer')
    <!-- footer end -->

    <!-- bottom footer fixed start -->
    <div class="bottom-footer-fixed d-flex align-content-center justify-content-around d-none">
        <a href="{{url('/')}}" class="single-footer-menu">
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
                            <img src="{{ asset('frontend/') }}/img/siam.jpg" alt="">
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
                            <img src="{{ asset('frontend/') }}/img/latest/1-back.jpg" alt="">
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
                            <img src="{{ asset('frontend/') }}/img/latest/2-back.jpg" alt="">
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
                                <a href="#" class="quantity__minus"><span><i
                                            class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1"
                                    disabled>
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
                            <img src="{{ asset('frontend/') }}/img/latest/4-front.jpg" alt="">
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
                                <a href="#" class="quantity__minus"><span><i
                                            class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1"
                                    disabled>
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
                            <img src="{{ asset('frontend/') }}/img/latest/3-front.jpg" alt="">
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
                                <a href="#" class="quantity__minus"><span><i
                                            class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1"
                                    disabled>
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
                            <img src="{{ asset('frontend/') }}/img/siam.jpg" alt="">
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
                                <a href="#" class="quantity__minus"><span><i
                                            class="fa fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1"
                                    disabled>
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

    <script src="{{ asset('frontend/') }}/js/jquery-3.7.0.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/main.js"></script>

</html>
