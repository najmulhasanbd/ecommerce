<header class="header-area header-style-1 header-height-2">
    <div class="mobile-promotion">
        <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
    </div>
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>

                            <li><a href="page-account.html">My Cart</a></li>
                            <li><a href="shop-wishlist.html">Checkout</a></li>
                            <li><a href="shop-order.html">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>100% Secure delivery without contacting the courier</li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>

                            <li>
                                <a class="language-dropdown-active" href="#">English <i
                                        class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="#"><img
                                                src="{{ asset('frontend') }}/assets/imgs/theme/flag-fr.png"
                                                alt="" />Français</a>
                                    </li>
                                    <li>
                                        <a href="#"><img
                                                src="{{ asset('frontend') }}/assets/imgs/theme/flag-dt.png"
                                                alt="" />Deutsch</a>
                                    </li>
                                    <li>
                                        <a href="#"><img
                                                src="{{ asset('frontend') }}/assets/imgs/theme/flag-ru.png"
                                                alt="" />Pусский</a>
                                    </li>
                                </ul>
                            </li>

                            <li>Need help? Call Us: <strong class="text-brand"> + 1800 900</strong></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="{{url('/')}}"><img src="{{ asset('frontend') }}/assets/imgs/theme/logo.svg"
                            alt="logo" /></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="#">
                            <select class="select-active">
                                <option>All Categories</option>
                                <option>Milks and Dairies</option>
                                <option>Wines & Alcohol</option>
                                <option>Clothing & Beauty</option>
                                <option>Pet Foods & Toy</option>
                                <option>Fast food</option>
                                <option>Baking material</option>
                                <option>Vegetables</option>
                                <option>Fresh Seafood</option>
                                <option>Noodles & Rice</option>
                                <option>Ice cream</option>
                            </select>
                            <input type="text" placeholder="Search for items..." />
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="search-location">
                                <form action="#">
                                    <select class="select-active">
                                        <option>Your Location</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Arizona</option>
                                        <option>Delaware</option>
                                        <option>Florida</option>
                                        <option>Georgia</option>
                                        <option>Hawaii</option>
                                        <option>Indiana</option>
                                        <option>Maryland</option>
                                        <option>Nevada</option>
                                        <option>New Jersey</option>
                                        <option>New Mexico</option>
                                        <option>New York</option>
                                    </select>
                                </form>
                            </div>

                            <div class="header-action-icon-2">
                                <a href="{{ route('wishlist') }}">
                                    <img class="svgInject" alt="Nest" src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-heart.svg" />
                                    <span class="pro-count blue" id="wishQty"></span>
                                </a>
                                <a href="{{ route('wishlist') }}"><span class="lable">Wishlist</span></a>
                            </div>
                            
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{route('mycart')}}">
                                    <img alt="Nest"
                                        src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-cart.svg" />
                                    <span class="pro-count blue" id="cartQuantity"></span>
                                </a>
                                <a href="{{route('mycart')}}"><span class="lable">Cart</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                   <div id="miniCart">
                                   </div>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span id="cartSubtotal">$ </span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{route('mycart')}}" class="outline">View cart</a>
                                            <a href="{{route('checkout')}}">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2">
                                @auth
                                    <a href="page-account.html">
                                        <img class="svgInject" alt="Nest"
                                            src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-user.svg" />
                                    </a>
                                    <a href="page-account.html"><span class="lable ml-0">Account</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li>
                                                <a href="page-account.html"><i class="fi fi-rs-user mr-10"></i>My
                                                    Account</a>
                                            </li>
                                            <li>
                                                <a href="page-account.html"><i
                                                        class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                            </li>
                                            <li>
                                                <a href="page-account.html"><i class="fi fi-rs-label mr-10"></i>My
                                                    Voucher</a>
                                            </li>
                                            <li>
                                                <a href="shop-wishlist.html"><i class="fi fi-rs-heart mr-10"></i>My
                                                    Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="page-account.html"><i
                                                        class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}"><i
                                                        class="fi fi-rs-sign-out mr-10"></i>Sign
                                                    out</a>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}"><span class="lable ml-0">Login/</span></a>
                                    <a href="{{ route('register') }}"><span class="lable ml-0">Register</span></a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="{{ asset('frontend') }}/assets/imgs/theme/logo.svg"
                            alt="logo" /></a>
                </div>

                @php
                    $categories = App\Models\Category::orderby('name', 'asc')->get();
                @endphp

                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categories-button-active" href="#">
                            <span class="fi-rs-apps"></span> All Categories
                            <i class="fi-rs-angle-down"></i>
                        </a>
                        <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                            <div class="d-flex categori-dropdown-inner">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="shop-grid-right.html"> <img
                                                    src="{{ asset("storage/categories/{$category->image}") }}"
                                                    alt="" />{{ ucfirst($category->name) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="more_slide_open" style="display: none">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="shop-grid-right.html"> <img
                                                        src="{{ asset("storage/categories/{$category->image}") }}"
                                                        alt="" />{{ ucfirst($category->name) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show
                                    more...</span></div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">

                        @php
                            $categories = App\Models\Category::orderby('name', 'desc')->get();
                        @endphp

                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home </a>
                                </li>
                                @foreach ($categories as $category)
                                    <li>
                                        @php
                                            $subcategories = App\Models\SubCategory::where('category_id', $category->id)
                                                ->orderby('id', 'desc')
                                                ->get();
                                        @endphp

                                        <a href="{{ route('category.product', $category->id) }}">{{ ucfirst($category->name) }}
                                            @if ($subcategories->count() > 0)
                                                <i class="fi-rs-angle-down"></i>
                                            @endif
                                        </a>

                                        @if ($subcategories->count() > 0)
                                            <ul class="sub-menu">
                                                @foreach ($subcategories as $subcategory)
                                                    <li><a
                                                            href="{{ route('subcategory.product', $subcategory->id) }}">{{ ucwords($subcategory->name) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="hotline d-none d-lg-flex">
                    <img src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-headphone.svg" alt="hotline" />
                    <p>1900 - 888<span>24/7 Support Center</span></p>
                </div>
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img alt="Nest"
                                    src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-heart.svg" />
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="#">
                                <img alt="Nest"
                                    src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-cart.svg" />
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Nest"
                                                    src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-3.jpg" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Nest"
                                                    src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-4.jpg" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="shop-cart.html">View cart</a>
                                        <a href="shop-checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
