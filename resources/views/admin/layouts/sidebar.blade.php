<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="{{ asset('backend') }}/assets/images/logo.png" alt="logo"></span>
            <span class="logo-sm"><img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="{{ asset('backend') }}/assets/images/logo-dark.png" alt="dark logo"></span>
            <span class="logo-sm"><img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ri-close-line align-middle"></i>
    </button>

    <div data-simplebar>

        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item">
                <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="airplay"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#banner" aria-expanded="false" aria-controls="banner"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Banner</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="banner">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('banner.index') }}" class="side-nav-link">
                                <span class="menu-text">Banner List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('banner.create') }}" class="side-nav-link">
                                <span class="menu-text">Banner Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Category</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="category">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('category.index') }}" class="side-nav-link">
                                <span class="menu-text">Category List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('category.create') }}" class="side-nav-link">
                                <span class="menu-text">Category Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#subcategory" aria-expanded="false" aria-controls="subcategory"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> SubCategory</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="subcategory">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('subcategory.index') }}" class="side-nav-link">
                                <span class="menu-text">SubCategory List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('subcategory.create') }}" class="side-nav-link">
                                <span class="menu-text">SubCategory Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#brand" aria-expanded="false" aria-controls="brand"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Brand</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="brand">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('brand.index') }}" class="side-nav-link">
                                <span class="menu-text">Brand List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('brand.create') }}" class="side-nav-link">
                                <span class="menu-text">Brand Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#supplier" aria-expanded="false" aria-controls="supplier"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Supplier</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="supplier">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('supplier.index') }}" class="side-nav-link">
                                <span class="menu-text">Supplier List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('supplier.create') }}" class="side-nav-link">
                                <span class="menu-text">Supplier Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#unit" aria-expanded="false" aria-controls="unit"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Unit</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="unit">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('unit.index') }}" class="side-nav-link">
                                <span class="menu-text">Unit List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('unit.create') }}" class="side-nav-link">
                                <span class="menu-text">Unit Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#attribute" aria-expanded="false" aria-controls="attribute"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Attribute</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="attribute">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('attribute.index') }}" class="side-nav-link">
                                <span class="menu-text">Attribute List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('attribute.create') }}" class="side-nav-link">
                                <span class="menu-text">Attribute Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#coupon" aria-expanded="false" aria-controls="coupon"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Coupon</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="coupon">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('coupon.index') }}" class="side-nav-link">
                                <span class="menu-text">Coupon List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('coupon.create') }}" class="side-nav-link">
                                <span class="menu-text">Coupon Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Product</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="product">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('product.index') }}" class="side-nav-link">
                                <span class="menu-text">Product List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('product.create') }}" class="side-nav-link">
                                <span class="menu-text">Product Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#subscriber" aria-expanded="false" aria-controls="subscriber"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Subscriber</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="subscriber">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('subscriber.index') }}" class="side-nav-link">
                                <span class="menu-text">Subscriber List</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Setting</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="setting">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('setting.website') }}" class="side-nav-link">
                                <span class="menu-text">Website Setting</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('setting.seo') }}" class="side-nav-link">
                                <span class="menu-text">SEO Setting</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('setting.smtp') }}" class="side-nav-link">
                                <span class="menu-text">SMTP Setting</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('setting.page') }}" class="side-nav-link">
                                <span class="menu-text">Page Setting</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('setting.shipping') }}" class="side-nav-link">
                                <span class="menu-text">Shipping Setting</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <div class="clearfix"></div>
    </div>
</div>
