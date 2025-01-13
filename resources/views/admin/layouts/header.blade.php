<header class="app-topbar">
    <div class="page-container topbar-menu">
        <div class="d-flex align-items-center gap-2">

            <!-- Brand Logo -->
            <a href="{{route('admin.dashboard')}}" class="logo">
                <span class="logo-light">
                    <span class="logo-lg"><img src="{{ asset('backend') }}/assets/images/logo.png"
                            alt="logo"></span>
                    <span class="logo-sm"><img src="{{ asset('backend') }}/assets/images/logo-sm.png"
                            alt="small logo"></span>
                </span>

                <span class="logo-dark">
                    <span class="logo-lg"><img src="{{ asset('backend') }}/assets/images/logo-dark.png"
                            alt="dark logo"></span>
                    <span class="logo-sm"><img src="{{ asset('backend') }}/assets/images/logo-sm.png"
                            alt="small logo"></span>
                </span>
            </a>

            <!-- Sidebar Menu Toggle Button -->
            <button class="sidenav-toggle-button px-2">
                <i class="ri-menu-2-line fs-24"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="topnav-toggle-button px-2" data-bs-toggle="collapse"
                data-bs-target="#topnav-menu-content">
                <i class="ri-menu-2-line fs-24"></i>
            </button>

            <!-- Search for small devices -->
            <div class="topbar-item d-flex d-xl-none">
                <button class="topbar-link" data-bs-toggle="modal" data-bs-target="#searchModal"
                    type="button">
                    <i class="ri-search-line fs-22"></i>
                </button>
            </div>

            <!-- Button Trigger Search Modal -->
            <div class="topbar-search d-none d-xl-flex gap-2 me-2 align-items-center" data-bs-toggle="modal"
                data-bs-target="#searchModal" type="button">
                <i class="ri-search-line fs-18"></i>
                <span class="me-2">Search something..</span>
            </div>
        </div>

        <div class="d-flex align-items-center gap-2">



            <!-- Language Dropdown -->
            <div class="topbar-item">
                <div class="dropdown">
                    <button class="topbar-link" data-bs-toggle="dropdown" data-bs-offset="0,32"
                        type="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('backend') }}/assets/images/flags/us.svg" alt="user-image"
                            class="w-100 rounded" height="18" id="selected-language-image">
                    </button>

                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="en">
                            <img src="{{ asset('backend') }}/assets/images/flags/us.svg" alt="user-image"
                                class="me-1 rounded" height="18" data-translator-image> <span
                                class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="hi">
                            <img src="{{ asset('backend') }}/assets/images/flags/in.svg" alt="user-image"
                                class="me-1 rounded" height="18" data-translator-image> <span
                                class="align-middle">Hindi</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('backend') }}/assets/images/flags/de.svg" alt="user-image"
                                class="me-1 rounded" height="18">
                            <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('backend') }}/assets/images/flags/it.svg" alt="user-image"
                                class="me-1 rounded" height="18">
                            <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('backend') }}/assets/images/flags/es.svg" alt="user-image"
                                class="me-1 rounded" height="18">
                            <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('backend') }}/assets/images/flags/ru.svg" alt="user-image"
                                class="me-1 rounded" height="18">
                            <span class="align-middle">Russian</span>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Notification Dropdown -->
            <div class="topbar-item">
                <div class="dropdown">
                    <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown"
                        data-bs-offset="0,25" type="button" data-bs-auto-close="outside"
                        aria-haspopup="false" aria-expanded="false">
                        <i data-lucide="bell" class="animate-ring fs-22"></i>
                        <span class="noti-icon-badge"></span>
                    </button>

                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg"
                        style="min-height: 300px;">
                        <div class="p-2 border-bottom position-relative border-dashed">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none link-dark"
                                            data-bs-toggle="dropdown" data-bs-offset="0,15"
                                            aria-expanded="false">
                                            <i class="ri-settings-2-line fs-22 align-middle"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                Read</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Delete All</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Do not
                                                Disturb</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Other
                                                Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-relative rounded-0" style="max-height: 300px;" data-simplebar>
                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap active"
                                id="notification-1">
                                <span class="d-flex align-items-center">
                                    <span class="me-3 position-relative flex-shrink-0">
                                        <img src="{{ asset('backend') }}/assets/images/users/avatar-2.jpg"
                                            class="avatar-lg rounded-circle" alt="" />
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Glady Haid</span> commented on <span
                                            class="fw-medium text-body">Abstack admin status</span>
                                        <br />
                                        <span class="fs-12">25m ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button"
                                            class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                            data-dismissible="#notification-1">
                                            <i class="ri-close-line fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>

                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                                <span class="d-flex align-items-center">
                                    <span class="me-3 position-relative flex-shrink-0">
                                        <img src="{{ asset('backend') }}/assets/images/users/avatar-4.jpg"
                                            class="avatar-lg rounded-circle" alt="" />
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Tommy Berry</span> donated <span
                                            class="text-success">$100.00</span> for <span
                                            class="fw-medium text-body">Carbon removal program</span>
                                        <br />
                                        <span class="fs-12">58m ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button"
                                            class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                            data-dismissible="#notification-2">
                                            <i class="ri-close-line fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>

                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                                <span class="d-flex align-items-center">
                                    <div class="avatar-lg flex-shrink-0 me-3">
                                        <span
                                            class="avatar-title bg-success-subtle text-success rounded-circle fs-22">
                                            <iconify-icon
                                                icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <span class="flex-grow-1 text-muted">
                                        You withdraw a <span class="fw-medium text-body">$500</span> by <span
                                            class="fw-medium text-body">New York ATM</span>
                                        <br />
                                        <span class="fs-12">2h ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button"
                                            class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                            data-dismissible="#notification-3">
                                            <i class="ri-close-line fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>

                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                                <span class="d-flex align-items-center">
                                    <span class="me-3 position-relative flex-shrink-0">
                                        <img src="{{ asset('backend') }}/assets/images/users/avatar-7.jpg"
                                            class="avatar-lg rounded-circle" alt="" />
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Richard Allen</span> followed you in
                                        <span class="fw-medium text-body">Facebook</span>
                                        <br />
                                        <span class="fs-12">3h ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button"
                                            class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                            data-dismissible="#notification-4">
                                            <i class="ri-close-line fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>

                            <!-- item-->
                            <div class="dropdown-item notification-item py-2 text-wrap" id="notification-5">
                                <span class="d-flex align-items-center">
                                    <span class="me-3 position-relative flex-shrink-0">
                                        <img src="{{ asset('backend') }}/assets/images/users/avatar-10.jpg"
                                            class="avatar-lg rounded-circle" alt="" />
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="fw-medium text-body">Victor Collier</span> liked you
                                        recent photo
                                        in <span class="fw-medium text-body">Instagram</span>
                                        <br />
                                        <span class="fs-12">10h ago</span>
                                    </span>
                                    <span class="notification-item-close">
                                        <button type="button"
                                            class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                            data-dismissible="#notification-5">
                                            <i class="ri-close-line fs-16"></i>
                                        </button>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);"
                            class="dropdown-item position-absolute bottom-0 notification-item text-center text-reset text-decoration-underline fw-bold notify-item border-top border-light py-2">
                            View All
                        </a>
                    </div>
                </div>
            </div>

            <!-- Button Trigger Customizer Offcanvas -->
            <div class="topbar-item d-none d-sm-flex">
                <button class="topbar-link" data-bs-toggle="offcanvas"
                    data-bs-target="#theme-settings-offcanvas" type="button">
                    <i data-lucide="settings" class="fs-22"></i>
                </button>
            </div>

            <!-- Light/Dark Mode Button -->
            <div class="topbar-item d-none d-sm-flex">
                <button class="topbar-link" id="light-dark-mode" type="button">
                    <i data-lucide="moon" class="light-mode-icon fs-22"></i>
                    <i data-lucide="sun" class="dark-mode-icon fs-22"></i>
                </button>
            </div>

            <!-- User Dropdown -->
            <div class="topbar-item nav-user">
                <div class="dropdown">
                    <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown"
                        data-bs-offset="0,25" type="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('backend') }}/assets/images/users/avatar-3.jpg" width="32"
                            class="rounded-circle me-lg-2 d-flex" alt="user-image">
                        <span class="d-lg-flex flex-column gap-1 d-none">
                            <span class="fw-semibold">{{ucwords(Auth()->user()->name)}}</span>
                        </span>
                        <i class="ri-arrow-down-s-line d-none d-lg-block align-middle ms-2"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h4 class="text-overflow m-0">Welcome !</h4>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ri-account-circle-line me-1 fs-16 align-middle"></i>
                            <span class="align-middle">My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ri-wallet-3-line me-1 fs-16 align-middle"></i>
                            <span class="align-middle">Wallet : <span
                                    class="fw-semibold">$89.25k</span></span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ri-question-line me-1 fs-16 align-middle"></i>
                            <span class="align-middle">Support</span>
                        </a>

                        <div class="dropdown-divider"></div>


                        <!-- item-->
                        <form method="POST" action="{{ route('admin.logout') }}" id="logout-form">
                            @csrf
                        </form>

                        <a href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="dropdown-item fw-semibold text-danger">
                            <i class="ri-logout-box-line me-1 fs-16 align-middle"></i>
                            <span class="align-middle">{{ __('Log Out') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>