  <header class="main-header_area position-relative">
            <div class="header-middle py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap">
                                <a href="/" class="header-logo name_logo">
                                    QTK
                                    {{-- <img src="assets/images/logo/dark.png" alt="Header Logo"> --}}
                                </a>
                                <div class="header-search-area d-none d-lg-block">
                                    <form action="#" class="header-searchbox">
                                        <input class="input-field" type="text" placeholder="Tìm kiếm">
                                        <button class="btn btn-outline-whisper btn-primary-hover" type="submit"><i class="pe-7s-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-right">
                                    <ul>
                                        <li class="dropdown d-none d-md-block">
                                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="pe-7s-users"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButton">
                                                <li><a class="dropdown-item" href="my-account.html">Đăng Nhập</a></li>
                                                <li><a class="dropdown-item" href="login-register.html">Đăng Ký</a></li>
                                            </ul>
                                        </li>
                                        <li class="d-none d-md-block">
                                            <a href="wishlist.html">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li class="d-block d-lg-none">
                                            <a href="#searchBar" class="search-btn toolbar-btn">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap me-3 me-lg-0">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <i class="pe-7s-shopbag"></i>
                                                <span class="quantity">3</span>
                                            </a>
                                        </li>
                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header header-sticky" data-bg-color="#bac34e">
                <div class="container">
                    <div class="main-header_nav position-relative">
                        <div class="row align-items-center">
                            <div class="col-lg-12 d-none d-lg-block">
                                <div class="main-menu">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="/">Trang chủ
                                                </a>
                                            </li>
                                            <li>
                                                <a href="about.html">Giới thiệu</a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="javascript:void(0)">Loại tour
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                                <ul class="drop-menu">
                                                    @foreach (getAllLoaiTour() as $item)
                                                        <li>
                                                            <a href="{{ route('loaitour') }}">{{ $item->ten_loai_tour }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="javascript:void(0)">Địa điểm
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Liên hệ</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @include('layouts.header_mobile')
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="harmic-offcanvas-body">
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4 class="mb-0">Shopping Cart</h4>
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i
                                    class="pe-7s-close"></i></a>
                                <a href="shop.html" class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/1-1-112x124.jpg" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Black Pepper Grains</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i
                                    class="pe-7s-close"></i></a>
                                <a href="shop.html" class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/1-2-112x124.jpg" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Peanut Big Bean</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#">
                                    <i class="pe-7s-close"></i>
                                </a>
                                <a href="shop.html" class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/1-3-112x124.jpg" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Dried Lemon Green</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$240.00</span>
                    </div>
                    <div class="group-btn_wrap d-grid gap-2">
                        <a href="cart.html" class="btn btn-secondary btn-primary-hover">View Cart</a>
                        <a href="checkout.html" class="btn btn-secondary btn-primary-hover">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>