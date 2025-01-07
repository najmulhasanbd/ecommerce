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
                <a data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category"
                    class="side-nav-link">
                    <span class="menu-icon"><i data-lucide="file-text"></i></span>
                    <span class="menu-text"> Category</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="category">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{route('category.index')}}" class="side-nav-link">
                                <span class="menu-text">Category List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('category.create')}}" class="side-nav-link">
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
                            <a href="{{route('subcategory.index')}}" class="side-nav-link">
                                <span class="menu-text">SubCategory List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('subcategory.create')}}" class="side-nav-link">
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
                            <a href="{{route('brand.index')}}" class="side-nav-link">
                                <span class="menu-text">Brand List</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('brand.create')}}" class="side-nav-link">
                                <span class="menu-text">Brand Add</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>

        <div class="clearfix"></div>
    </div>
</div>
