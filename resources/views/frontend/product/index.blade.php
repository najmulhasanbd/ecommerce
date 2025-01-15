@extends('frontend.layouts.master_frontend')

@section('content')
    <style>
        .list-view-button,
        .grid-view-button {
            cursor: pointer;
        }

        .grid-view-filter .single-latest-product {
            display: flex;
        }

        .list-view-button {
            margin-right: 10px;
        }

        .list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .list.list-view-filter {
            box-sizing: border-box;
            display: flex;
            gap: 15px;
            flex-flow: wrap;
        }

        .list.list-view-filter .single-latest-product {
            width: calc(32.7%);
            box-sizing: border-box;
        }

        .list.grid-view-filter {
            flex-flow: row wrap;
        }

        .list.grid-view-filter .single-latest-product {
            width: calc(50% - 0px);
            /* padding: 100px; */
            /* margin-right: 10px; */
            /* text-align: center; */
        }
    </style>
    <div class="latest-product-area section-padding pb-0">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between filter-border g-0 position-relative">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="product-filter">
                        <select name="" id="">
                            <option value="">Default sorting</option>
                            <option value="">Average Rating</option>
                            <option value="">Latest Products</option>
                            <option value="">Price: Low to High</option>
                            <option value="">Price: High to Low</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-3">
                    <div class="filter-buttons d-flex">
                        <div class="list-view-button active"><i class="fa fa-th-large" aria-hidden="true"></i></div>
                        <div class="grid-view-button"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </div>
                </div>

                <div class="d-lg-none col-md-4 col-sm-4 col-3">
                    <h6 class="product-size-filter" data-bs-toggle="offcanvas" href="#mobile_varient" role="button"
                        aria-controls="mobile_varient">filter</h6>
                </div>
                <!-- mobile varient -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="mobile_varient"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Product Varient</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body product-varient-system">
                        <div class="dropdown">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            color
                                        </div>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body product-varient-area">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="single-varient">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="red">
                                                            <label for="red">red</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="green">
                                                            <label for="green">green</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="yellow">
                                                            <label for="yellow">yellow</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            size
                                        </div>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body product-varient-area">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="single-varient">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="7">
                                                            <label for="7">7</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="8">
                                                            <label for="8">8</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="9">
                                                            <label for="9">9</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="10">
                                                            <label for="10">10</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="11">
                                                            <label for="11">11</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="12">
                                                            <label for="12">12</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            price
                                        </div>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body product-varient-area">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="single-varient">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="700">
                                                            <label for="700">700</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="800">
                                                            <label for="800">800</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="900">
                                                            <label for="900">900</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="1000">
                                                            <label for="1000">1000</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="1100">
                                                            <label for="1100">1100</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="1200">
                                                            <label for="1200">1200</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">
                                            category
                                        </div>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body product-varient-area">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="single-varient">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="cloth">
                                                            <label for="cloth">BorkaMart Plus & Curve Cloth</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="tall">
                                                            <label for="tall">BorkaMart Tall</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="collection">
                                                            <label for="collection">Main Collection</label>
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
                </div>

                <div class="col-xl-8 col-lg-8 d-lg-block d-none ">
                    <div class="product-sort-varient d-flex justify-content-end">
                        <ul id="varientMenu">
                            <li class="has-children">
                                <h6 class="header__filter">Size <span></span>
                                </h6>
                                <div class="varient-section">
                                    <div class="varient-remove">
                                        <i class="fa fa-xmark"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="single-varient">
                                                <div class="form-group">
                                                    <input type="checkbox" id="1">
                                                    <label for="1">1</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="2">
                                                    <label for="2">2</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="3">
                                                    <label for="3">3</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="4">
                                                    <label for="4">4</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="5">
                                                    <label for="5">5</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="6">
                                                    <label for="6">6</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="has-children">
                                <h6 class="header__filter">colour <span class="text-black">(5)</span>
                                </h6>
                                <div class="varient-section">
                                    <div class="varient-remove">
                                        <i class="fa fa-xmark"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="single-varient">
                                                <div class="form-group">
                                                    <input type="checkbox" id="red1">
                                                    <label for="red1">red</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="green1">
                                                    <label for="green1">green</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="yellow1">
                                                    <label for="yellow1">yellow</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="black1">
                                                    <label for="black1">black</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="blue1">
                                                    <label for="blue1">blue</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="has-children">
                                <h6 class="header__filter">category
                                </h6>
                                <div class="varient-section">
                                    <div class="varient-remove">
                                        <i class="fa fa-xmark"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="single-varient">
                                                <div class="form-group">
                                                    <input type="checkbox" id="cat1">
                                                    <label for="cat1">BorkaMart plus & curve cloth</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="cat2">
                                                    <label for="cat2">BorkaMart tall</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="cat3">
                                                    <label for="cat3">main collection</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="has-children">
                                <h6 class="header__filter">price
                                </h6>
                                <div class="varient-section">
                                    <div class="varient-remove">
                                        <i class="fa fa-xmark"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="single-varient">
                                                <div class="form-group">
                                                    <input type="checkbox" id="price1">
                                                    <label for="price1">100</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="price2">
                                                    <label for="price2">200</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="price3">
                                                    <label for="price3">300</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="price4">
                                                    <label for="price4">400</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- product -->
            <div class="row align-items-stretch gx-2">
                <div class="col-12">
                    <ul class="list list-view-filter product-wrap mt-5">
                        @foreach ($products as $product)
                            <div class="single-latest-product single-category-product">
                                <div class="single-product-head d-flex align-items-start justify-content-between">
                                    <h6 style="background-color: #2c2c2c;">Hot</h6>
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
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <img src="{{ asset('frontend') }}/img/latest/1-back.jpg"
                                                                alt="">
                                                            <img src="{{ asset('frontend') }}/img/latest/1-back.jpg"
                                                                alt="">
                                                            <img src="{{ asset('frontend') }}/img/latest/1-back.jpg"
                                                                alt="">
                                                            <img src="{{ asset('frontend') }}/img/latest/1-back.jpg"
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
                                                                    <input type="radio" class="btn-check"
                                                                        name="btnradio" id="a_aize"
                                                                        autocomplete="off">
                                                                    <label class="btn product__size_btn"
                                                                        title="&nbsp; S &nbsp;" for="a_aize">S</label>

                                                                    <input type="radio" class="btn-check"
                                                                        name="btnradio" id="m_size"
                                                                        autocomplete="off">
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
                                            <img src="{{asset('storage/thumbnail/'.$product->thumbnail)}}" class="w-100"
                                                alt="">
                                        </div>
                                        <div class="back-image">
                                            <img src="{{asset('storage/back_thumbnail/'.$product->back_thumbnail)}}" class="w-100" alt="">
                                        </div>
                                    </a>
                                    <div class="product-info-bottom">
                                        <a href="product-details.html"><i class="fa fa-bag-shopping"></i></a>
                                    </div>
                                </div>

                                <div class="latest-product-content">
                                    <h5 class="d-flex align-items-center justify-content-between">
                                        <a href="product-details.html">{{ucwords($product->name)}}</a>
                                        <a href="#">
                                            <span data-toggle="tooltip" data-bs-placement="left" title="Wishlist">
                                                <i class="fa fa-heart"></i>
                                            </span>
                                        </a>
                                    </h5>
                                    <h5 class="price">
                                        ৳{{$product->selling_price}}
                                    </h5>

                                    <div class="grid-none">
                                        <div class="content">
                                            <p><strong>Collection : </strong>D rop-It-Right</p>
                                            <p><strong>Style : </strong>Drop Shoulder T</p>
                                            <p><strong>Sleeve : </strong>Drop T sleeve</p>
                                            <p><strong>Fabric Type : </strong>100% Cotton</p>
                                            <p><strong>Acid Washed : </strong>GSM: 210
                                                Our model wears an L size and is /5’10” tall</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
