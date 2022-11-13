<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Harmic - Organic Food HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/Pe-icon-7-stroke.css" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="main-wrapper">
        <!-- Begin Main Header Area -->
        <header class="main-header_area position-relative">
            <div class="header-middle py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap">
                                <a href="index.html" class="header-logo name_logo">
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
                                                <a href="javascript:void(0)">Trang chủ
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
                                                    <li>
                                                        <a href="faq.html">Nổi bật</a>
                                                    </li>
                                                    <li>
                                                        <a href="404.html">Hàng đầu</a>
                                                    </li>
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
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="harmic-offcanvas-body">
                    <div class="inner-body">
                        <div class="harmic-offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <div class="offcanvas-user-info text-center px-6 pb-5">
                            <ul class="dropdown-wrap justify-content-center text-silver">
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="pe-7s-users"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                        <li><a class="dropdown-item" href="my-account.html">Đăng nhập</a></li>
                                        <li><a class="dropdown-item" href="login-register.html">Đăng ký</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Trang chủ 
                                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.html">
                                            <span class="mm-text">Giới thiệu</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Loại tour 
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="faq.html">
                                                    <span class="mm-text">Hàng đầu</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="404.html">
                                                    <span class="mm-text">Nổi bật</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                   
                                    <li>
                                        <a href="contact.html">
                                            <span class="mm-text">Địa điểm</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="contact.html">
                                            <span class="mm-text">Liên hệ</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-search_wrapper" id="searchBar">
                <div class="harmic-offcanvas-body">
                    <div class="container h-100">
                        <div class="offcanvas-search">
                            <div class="harmic-offcanvas-top">
                                <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                            </div>
                            <span class="searchbox-info">Tìm kiếm tour du lịch</span>
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="Tìm kiếm">
                                <button class="search-btn" type="submit"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
        <!-- Main Header Area End Here -->

        <!-- Begin Slider Area -->
        <div class="slider-area">

            <!-- Main Slider -->
            <div class="swiper-container main-slider swiper-arrow with-bg_white">
                <div class="swiper-wrapper">
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="assets/images/slider/bg/1-1.jpg">
                            <div class="parallax-img-wrap">
                                <div class="chilly">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="assets/images/slider/inner-img/1-1-231x210.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="avocado">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.5">
                                            <img src="assets/images/slider/inner-img/1-2-224x204.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="parallax-with-content">
                                    <div class="slide-content">
                                        <span class="sub-title mb-3">Natural & Organic</span>
                                        <h2 class="title mb-9">-40% Offer All <br> Products.</h2>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size lg-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                        </div>
                                    </div>
                                    <div class="parallax-img-wrap">
                                        <div class="tomatoes">
                                            <div class="scene fill">
                                                <div class="expand-width" data-depth="0.5">
                                                    <img src="assets/images/slider/inner-img/1-3-601x534.png" alt="Inner Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="assets/images/slider/bg/1-1.jpg">
                            <div class="parallax-img-wrap">
                                <div class="chilly">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="assets/images/slider/inner-img/1-1-231x210.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="avocado">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.5">
                                            <img src="assets/images/slider/inner-img/1-2-224x204.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="parallax-with-content">
                                    <div class="slide-content">
                                        <span class="sub-title mb-3">Natural & Organic</span>
                                        <h2 class="title mb-9">-40% Offer All <br> Products.</h2>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size lg-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                        </div>
                                    </div>
                                    <div class="parallax-img-wrap">
                                        <div class="tomatoes">
                                            <div class="scene fill">
                                                <div class="expand-width" data-depth="0.5">
                                                    <img src="assets/images/slider/inner-img/2-1-601x426.png" alt="Inner Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination with-bg d-md-none"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
        <!-- Slider Area End Here -->

        <!-- Begin Shipping Area -->
        <div class="shipping-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/plane.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Đặt tour</h5>
                                <p class="short-desc mb-0">Đặt tour nhanh chống</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/earphones.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Hổ trợ trực tuyến</h5>
                                <p class="short-desc mb-0">Tư vấn 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/shield.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Thanh toán an toàn</h5>
                                <p class="short-desc mb-0">Hệ thống thanh toán hoàn toàn an toàn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Area End Here -->


        <!-- Begin Blog Area -->
        <div class="blog-area section-space-y-axis-100">
            <div class="container">
                <div class="section-title text-center pb-55">
                    <span class="sub-title text-primary">TOUR</span>
                    <h2 class="title mb-0">NỔI BẬT</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container blog-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="assets/images/blog/medium-size/1-1-370x315.jpg" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>Ngày 13/11/2022</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 bình luận</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">chia sẻ</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Tên tour du lịch 1</a>
                                            </h5>
                                            <p class="short-desc mb-5">Tuy hòa - Bãi Xép - Gành đá đĩa</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="assets/images/blog/medium-size/1-1-370x315.jpg" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>Ngày 13/11/2022</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 bình luận</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">chia sẻ</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Tên tour du lịch 2</a>
                                            </h5>
                                            <p class="short-desc mb-5">Tuy hòa - Bãi Xép - Gành đá đĩa</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="assets/images/blog/medium-size/1-1-370x315.jpg" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>Ngày 13/11/2022</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 bình luận</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">chia sẻ</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Tên tour du lịch 3</a>
                                            </h5>
                                            <p class="short-desc mb-5">Tuy hòa - Bãi Xép - Gành đá đĩa</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="swiper-slide">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="assets/images/blog/medium-size/1-1-370x315.jpg" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>Ngày 13/11/2022</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 bình luận</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">chia sẻ</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Tên tour du lịch 4</a>
                                            </h5>
                                            <p class="short-desc mb-5">Tuy hòa - Bãi Xép - Gành đá đĩa</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
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
        <!-- Blog Area End Here -->

        <!-- Begin Footer Area -->
        <div class="footer-area">
            <div class="footer-top section-space-y-axis-100 text-black" data-bg-color="#e5ddcc">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget-item">
                                <div class="footer-logo pb-4">
                                    <a href="index.html" class="name_logo" style="color: #bac34e;
                                        font-size: 200%;
                                        font-weight: 600;">
                                        QTK
                                    </a>
                                </div>
                                <p class="short-desc mb-2">Công ty NTK</p>
                                <div class="widget-contact-info pb-6">
                                    <ul>
                                        <li>
                                            <i class="pe-7s-map-marker"></i>
                                            2 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang, Khánh Hòa
                                        </li>
                                        <li>
                                            <i class="pe-7s-mail"></i>
                                            <a href="mailto://info@example.com">kiet.nt.61cntt@ntu.edu.vn</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-1 col-md-6 pt-10 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Thông tin</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <a href="javascript:void(0)">Nguyễn Tuấn Kiệt</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Trần Công Quyền</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Trương Ngọc Tuấn</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-1 col-md-6 pt-10 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Tài Khoản</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <a href="javascript:void(0)">Đăng Nhập</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Đăng Ký</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 pt-10 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Liên hệ</h3>
                                <p class="short-desc">Bạn muốn chúng tôi liên hệ</p>
                            </div>
                            <div class="widget-form-area">
                                <form class="widget-form" action="#">
                                    <input class="input-field" type="email" autocomplete="off" placeholder="Your Email">
                                    <div class="button-wrap pt-5">
                                        <button class="btn btn-custom-size btn-primary btn-secondary-hover rounded-0" id="mc-submit">Gửi mail</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-3" data-bg-color="#bac34e">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                                <span class="copyright-text text-white">© 2022 QTK with <i class="fa fa-heart text-danger"></i> by  <a href="https://www.ntu.edu.vn/" target="_blank">Nha Trang university</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery.waypoints.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <script src="assets/js/plugins/parallax.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>

</body>

</html>