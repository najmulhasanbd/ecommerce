@extends('frontend.layouts.master_frontend')

@section('content')
    <main class="main">

        <!-- discount header start -->
        {{-- <div class="discount-header text-center">
            <a href="shop.html">
                <h1 class="text-white">100% OFF everything! <span>use code : BorkaMart30</span></h1>
                <p>conditions applied</p>
            </a>
        </div> --}}
        <!-- discount header end -->

        <!-- banner start -->
        <div class="banner-area">
            <div class="banner owl-carousel">
                @foreach ($banners as $banner)
                    <a href="javascript:void(0)">
                        <img src="{{ asset('storage/banner/' . $banner->banner) }}" alt="banner" class="w-90">
                        <span>shop now</span>
                    </a>
                @endforeach
            </div>
        </div>
        <!-- banner end -->

        <!-- newly start -->
        <div class="category-area section-padding">
            <div class="container-fluid">
                <div class="row align-items-stretch">
                    @foreach ($categories as $category)
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="single-category">
                                <a href="category-product.html" class="category-image text-center d-block">
                                    <img src="{{ asset('storage/categories/' . $category->image) }}" alt="">
                                </a>
                                <div class="category-title">
                                    <a href="category-product.html">{{ ucwords($category->name) }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <h2>Featured Products</h2>
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
                    @foreach ($featured_products as $product)
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
                                                            <img src="{{ asset('frontend/') }}/img/latest/1-back.jpg"
                                                                alt="">
                                                            <img src="{{ asset('frontend/') }}/img/latest/1-back.jpg"
                                                                alt="">
                                                            <img src="{{ asset('frontend/') }}/img/latest/1-back.jpg"
                                                                alt="">
                                                            <img src="{{ asset('frontend/') }}/img/latest/1-back.jpg"
                                                                alt="">
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

                                                                    <input type="radio" class="btn-check "
                                                                        name="btnradio" id="l_size"
                                                                        autocomplete="off">
                                                                    <label class="btn product__size_btn disabled"
                                                                        title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                    <input type="radio" class="btn-check"
                                                                        name="btnradio" id="xl_size"
                                                                        autocomplete="off">
                                                                    <label class="btn product__size_btn"
                                                                        title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                    <input type="radio" class="btn-check"
                                                                        name="btnradio" id="xxl_size"
                                                                        autocomplete="off">
                                                                    <label class="btn product__size_btn"
                                                                        title="&nbsp; XXL &nbsp;"
                                                                        for="xxl_size">XXL</label>
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
                                                                            class="quantity__input" value="1"
                                                                            disabled>
                                                                        <a href="#" class="quantity__plus"><span><i
                                                                                    class="fa fa-plus"></i></span></a>
                                                                    </div>
                                                                    <button type="button" class="addToCart">Add to
                                                                        cart</button>
                                                                    <div class="product_quick_heart">
                                                                        <span data-toggle="tooltip"
                                                                            data-bs-placement="top" title="Wishlist">
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
                                            <img src="{{ asset('storage/thumbnail/' . $product->thumbnail) }}"
                                                class="w-100" alt="">
                                        </div>
                                        <div class="back-image">
                                            <img src="{{ asset('frontend') }}/img/vintage/vintage1.jpg" class="w-100"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="product-info-bottom">
                                        <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    </div>
                                </div>

                                <div class="latest-product-content">
                                    <h5 class="d-flex align-items-center justify-content-between">
                                        <a href="product-details.html">{{ ucwords($product->name) }}</a>
                                        <a href="#">
                                            <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                                <i class="fa fa-heart"></i>
                                            </span>
                                        </a>
                                    </h5>
                                    <h5 class="price">
                                        ৳{{ $product->selling_price }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- latest product end -->

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
                    @foreach ($products as $product)
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
                                                            <img src="{{ asset('frontend/') }}/img/latest/1-back.jpg"
                                                                alt="">
                                                            <img src="{{ asset('frontend/') }}/img/latest/1-back.jpg"
                                                                alt="">
                                                            <img src="{{ asset('frontend/') }}/img/latest/1-back.jpg"
                                                                alt="">
                                                            <img src="{{ asset('frontend/') }}/img/latest/1-back.jpg"
                                                                alt="">
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

                                                                    <input type="radio" class="btn-check "
                                                                        name="btnradio" id="l_size"
                                                                        autocomplete="off">
                                                                    <label class="btn product__size_btn disabled"
                                                                        title="&nbsp; L &nbsp;" for="l_size">L</label>

                                                                    <input type="radio" class="btn-check"
                                                                        name="btnradio" id="xl_size"
                                                                        autocomplete="off">
                                                                    <label class="btn product__size_btn"
                                                                        title="&nbsp; XL &nbsp;" for="xl_size">XL</label>

                                                                    <input type="radio" class="btn-check"
                                                                        name="btnradio" id="xxl_size"
                                                                        autocomplete="off">
                                                                    <label class="btn product__size_btn"
                                                                        title="&nbsp; XXL &nbsp;"
                                                                        for="xxl_size">XXL</label>
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
                                                                            class="quantity__input" value="1"
                                                                            disabled>
                                                                        <a href="#" class="quantity__plus"><span><i
                                                                                    class="fa fa-plus"></i></span></a>
                                                                    </div>
                                                                    <button type="button" class="addToCart">Add to
                                                                        cart</button>
                                                                    <div class="product_quick_heart">
                                                                        <span data-toggle="tooltip"
                                                                            data-bs-placement="top" title="Wishlist">
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
                                            <img src="{{ asset('storage/thumbnail/' . $product->thumbnail) }}"
                                                class="w-100" alt="">
                                        </div>
                                        <div class="back-image">
                                            <img src="{{ asset('frontend') }}/img/vintage/vintage1.jpg" class="w-100"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="product-info-bottom">
                                        <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    </div>
                                </div>

                                <div class="latest-product-content">
                                    <h5 class="d-flex align-items-center justify-content-between">
                                        <a href="product-details.html">{{ ucwords($product->name) }}</a>
                                        <a href="#">
                                            <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                                <i class="fa fa-heart"></i>
                                            </span>
                                        </a>
                                    </h5>
                                    <h5 class="price">
                                        ৳{{ $product->selling_price }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <h2>Hot Deals</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-5 col-sm-5 col-12 text-end">
                        <div class="section-header">
                            <span>Shared by customers, just like you!</span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch gy-4">
                    @foreach ($hot_deals_products as $hot_deals)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-trending">
                                <div class="trending-image">
                                    <img src="{{ asset('storage/thumbnail/' . $hot_deals->thumbnail) }}" class="w-100"
                                        alt="">
                                </div>
                                <div class="trending-content">
                                    <a href="product-details.html" class="content-item">
                                        <div class="trending-subcontent d-flex align-items-center">
                                            <div class="trending-subconent-image">
                                                <img src="{{ asset('frontend/') }}/img/category/2.webp" alt="">
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
                    @endforeach
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
                                        <img src="{{ asset('frontend/') }}/img/category/3.webp" alt="">
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
                                        <img src="{{ asset('frontend/') }}/img/category/1.jpg" alt="">
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
                                        <img src="{{ asset('frontend/') }}/img/category/2.webp" alt="">
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
                                        <img src="{{ asset('frontend/') }}/img/category/3.webp" alt="">
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
                                        <img src="{{ asset('frontend/') }}/img/category/4.webp" alt="">
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
                                        <img src="{{ asset('frontend/') }}/img/category/2.webp" alt="">
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
@endsection
