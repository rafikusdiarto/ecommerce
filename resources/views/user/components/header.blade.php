<header>
    <!-- Header top area start -->
    <!-- Header top area end -->
    <!-- Header action area start -->
    <div class="header-bottom  d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{asset('users/assets/images/logo/logo.png')}}" alt="Site Logo" /></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="search-element">
                        <form action="#">
                            <input type="text" placeholder="Search" />
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col">
                    <div class="header-actions">
                        <!-- Single Wedge Start -->
                        <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                            <i class="pe-7s-like"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="pe-7s-shopbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <div class="avatar avatar-online">
                                <img src="{{asset('dashboard/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li>
                                <a class="dropdown-item" href="#">
                                  <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                      <div class="avatar avatar-online">
                                        <img src="{{asset('dashboard/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                      </div>
                                    </div>
                                    <div class="flex-grow-1">
                                      <span class="fw-semibold d-block">John Doe</span>
                                      <small class="text-muted">Admin</small>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <div class="dropdown-divider"></div>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">
                                  <i class="bx bx-user me-2"></i>
                                  <span class="align-middle">My Profile</span>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">
                                  <i class="bx bx-cog me-2"></i>
                                  <span class="align-middle">Settings</span>
                                </a>
                              </li>
                              <li>
                                <div class="dropdown-divider"></div>
                              </li>
                              <li>
                              <form method="POST" action="{{route('logout')}}">
                                  @csrf
                                  <button type="submit" class="dropdown-item" href="auth-login-basic.html">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                  </button>
                              </form>
                              </li>
                            </ul>
                        </li>
                        <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="pe-7s-menu"></i>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header action area end -->
    <!-- Header action area start -->
    <!-- Header action area end -->
    <!-- header navigation area start -->
    <div class="header-nav-area d-none d-lg-block sticky-nav">
        <div class="container">
            <div class="header-nav">
                @include('user.components.navbar')
            </div>
        </div>
    </div>
    <!-- header navigation area end -->
    <div class="mobile-search-box d-lg-none">
        <div class="container">
            <!-- mobile search start -->
            <div class="search-element max-width-100">
                <form action="#">
                    <input type="text" placeholder="Search" />
                    <button><i class="pe-7s-search"></i></button>
                </form>
            </div>
            <!-- mobile search start -->
        </div>
    </div>
</header>
