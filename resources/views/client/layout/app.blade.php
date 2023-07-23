<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from themepixer.com/demo/html/adara/adara/{{ route('client.home.index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 May 2023 14:14:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('templates/client/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('templates/client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/client/css/responsive.css') }}">

</head>
<body>


<!-- preloader  -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->


<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header class="header-style-two">
    <div id="sticky-header" class="main-header transparent-header menu-area">
        <div class="container custom-container-two">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="{{ route('client.home.index') }}" class="main-logo"><img src="{{ asset('templates/client/img/logo/fw_logo.png') }}" alt="Logo"></a>
                                <a href="{{ route('client.home.index') }}" class="sticky-logo"><img src="{{ asset('templates/client/img/logo/logo.png') }}" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children has--mega--menu"><a href="{{ route('client.home.index') }}">Home</a></li>
                                    <li class="menu-item-has-children"><a href="#">Shop</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="#">blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                    <li class="header-shop-cart"><a href="#"><i class="flaticon-shopping-bag"></i><span>0</span></a>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="{{ asset('templates/client/img/product/cart_p01.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Exclusive Winter Jackets</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="{{ asset('templates/client/img/product/cart_p02.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Winter Jackets For Women</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$239.9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="#">Shopping Cart</a>
                                                    <a class="black-color" href="#">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <ul style="display: flex">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class=" ">
                                                    <a class="text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="">
                                                    <a class="text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li >
                                                <a  class="nav-link  text-white " href="#" >
                                                    {{ Auth::user()->name }}
                                                </a>
                                            </li>
                                        @endguest
                                    </ul>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                        <nav class="menu-box">
                            <div class="nav-logo"><a href="{{ route('client.home.index') }}"><img src="{{ asset('templates/client/img/logo/logo.png') }}" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a href="{{ route('client.home.index') }}">Home</a></li>
                                    <li class="menu-item-has-children"><a href="#">Shop</a>
                                        <ul class="submenu">
                                            <li><a href="shop.html">Shop Page</a></li>
                                            <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="cart.html">Checkout Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="#">blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Search -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <input type="text" placeholder="Search here...">
                    <button><i class="flaticon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Search-end -->

    <!-- off-canvas-start -->
    <div class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><img src="{{ asset('templates/client/img/icon/sidebar_toggle_icon.png') }}" alt=""></a></div>
    <div class="sidebar-off-canvas info-group">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-widget scroll">
            <div class="sidebar-widget-container">
                <div class="off-canvas-heading">
                    <a href="#" class="close-side-widget">
                        <span class="flaticon-targeting-cross"></span>
                    </a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo mb-30">
                                <a href="{{ route('client.home.index') }}"><img src="{{ asset('templates/client/img/logo/logo.png') }}" alt=""></a>
                            </div>
                            <div class="content-box">
                                <p>WooCommerce and WordPress are both free, open source software reasons many ...</p>
                            </div>
                            <div class="contact-info">
                                <h4 class="title">CONTACT US</h4>
                                <ul>
                                    <li><span class="flaticon-phone-call"></span><a href="tel:123456789">+9 325 444 0000</a></li>
                                    <li><span class="flaticon-email"></span><a href="mailto:adara@info.com">adara@info.com</a></li>
                                    <li><span class="flaticon-place"></span>71 Park Lan Street 2355 NY</li>
                                </ul>
                            </div>
                            <div class="oc-newsletter">
                                <h4 class="title">NEWSLETTER</h4>
                                <p>Fill your email below to subscribe to my newsletter</p>
                                <form action="#">
                                    <input type="email" placeholder="Email...">
                                    <button class="btn">Subscribe</button>
                                </form>
                            </div>
                            <div class="oc-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                            <div class="oc-bottom">
                                <div class="currency">
                                    <form action="#">
                                        <label>Currency</label>
                                        <select name="select">
                                            <option value="">USD</option>
                                            <option value="">AUE</option>
                                            <option value="">SAR</option>
                                            <option value="">INR</option>
                                            <option value="">BDT</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="language">
                                    <form action="#">
                                        <label>Language</label>
                                        <select name="select">
                                            <option value="">English</option>
                                            <option value="">Spanish</option>
                                            <option value="">Turkish</option>
                                            <option value="">Russian</option>
                                            <option value="">Chinese</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- off-canvas-end -->

</header>
<!-- header-area-end -->

<!-- main-area -->
<main>

    @yield('content')
    <!-- shoes-banner-area -->
    <section class="shoes-banner-area">
        <div class="container">
            <div class="shoes-banner-active">
                <div class="shoes-banner-bg" data-background="{{ asset('templates/client/img/bg/shoes-banner_bg.jpg') }}">
                    <div class="row">
                        <div class="col-12">
                            <div class="shoes-banner-content">
                                <h6>Athletes Shoes</h6>
                                <h2>9 Best <span>Shoes for</span> Standing All Day Review 2020</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shoes-banner-bg" data-background="{{ asset('templates/client/img/bg/shoes-banner_bg.jpg') }}">
                    <div class="row">
                        <div class="col-12">
                            <div class="shoes-banner-content">
                                <h6>Athletes Shoes</h6>
                                <h2>3 Best <span>Shoes for</span> Standing All Day Review 2021</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shoes-banner-bg" data-background="{{ asset('templates/client') }}">
                    <div class="row">
                        <div class="col-12">
                            <div class="shoes-banner-content">
                                <h6>Athletes Shoes</h6>
                                <h2>8 Best <span>Shoes for</span> Standing All Day Review 2021</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shoes-banner-area-end -->

    <!-- promo-services -->
    <section class="promo-services pt-70 pb-25">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="promo-services-item mb-40">
                        <div class="icon"><img src="{{ asset('templates/client/img/icon/promo_icon01.png') }}" alt=""></div>
                        <div class="content">
                            <h6>payment & delivery</h6>
                            <p>Delivered, when you receive arrives</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="promo-services-item mb-40">
                        <div class="icon"><img src="{{ asset('templates/client/img/icon/promo_icon02.png') }}" alt=""></div>
                        <div class="content">
                            <h6>Return Product</h6>
                            <p>Retail, a Product Return Process</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="promo-services-item mb-40">
                        <div class="icon"><img src="{{ asset('templates/client/img/icon/promo_icon03.png') }}" alt=""></div>
                        <div class="content">
                            <h6>money back guarantee</h6>
                            <p>Options Including 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="promo-services-item mb-40">
                        <div class="icon"><img src="{{ asset('templates/client/img/icon/promo_icon04.png') }}" alt=""></div>
                        <div class="content">
                            <h6>Quality support</h6>
                            <p>Support Options Including 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo-services-end -->

    <!-- instagram-post-area -->
    <div class="instagram-post-area">
        <div class="container-fluid p-0 fix">
            <div class="row no-gutters insta-active">
                <div class="col">
                    <div class="insta-post-item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <img src="{{ asset('templates/client/img/instagram/s_insta_post01.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="insta-post-item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <img src="{{ asset('templates/client/img/instagram/s_insta_post02.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="insta-post-item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <img src="{{ asset('templates/client/img/instagram/s_insta_post03.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="insta-post-item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <img src="{{ asset('templates/client/img/instagram/s_insta_post04.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="insta-post-item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <img src="{{ asset('templates/client/img/instagram/s_insta_post05.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="insta-post-item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <img src="{{ asset('templates/client/img/instagram/s_insta_post03.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="insta-post-item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <img src="{{ asset('templates/client/img/instagram/s_insta_post04.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram-post-area-end -->
</main>
<!-- main-area-end -->


<!-- footer-area -->
<footer class="dark-bg pt-55 pb-80">
    <div class="container">
        <div class="footer-top-wrap">
            <div class="row">
                <div class="col-12">
                    <div class="footer-logo">
                        <a href="{{ route('client.home.index') }}"><img src="{{ asset('templates/client/img/logo/w_logo.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle-wrap">
            <div class="row">
                <div class="col-12">
                    <div class="footer-link-wrap">
                        <nav class="menu-links">
                            <ul>
                                <li><a href="about-us.html">About us</a></li>
                                <li><a href="shop-sidebar.html">Store</a></li>
                                <li><a href="contact.html">Locations</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact.html">Support</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Faqs</a></li>
                            </ul>
                        </nav>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <p>&copy; {{ date('Y') }} <a href="{{ route('client.home.index') }}">Adara</a>. Phạm Ngọc Khánh - Luyện Huy Hướng</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pay-method-img">
                        <img src="{{ asset('templates/client/img/images/payment_method_img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->





<!-- JS here -->
<script src="{{ asset('templates/client/js/vendor/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('templates/client/js/popper.min.js') }}"></script>
<script src="{{ asset('templates/client/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('templates/client/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('templates/client/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('templates/client/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('templates/client/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('templates/client/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('templates/client/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('templates/client/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('templates/client/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('templates/client/js/jarallax.min.js') }}"></script>
<script src="{{ asset('templates/client/js/slick.min.js') }}"></script>
<script src="{{ asset('templates/client/js/wow.min.js') }}"></script>
<script src="{{ asset('templates/client/js/nav-tool.js') }}"></script>
<script src="{{ asset('templates/client/js/plugins.js') }}"></script>
<script src="{{ asset('templates/client/js/main.js') }}"></script>
</body>


<!-- Mirrored from themepixer.com/demo/html/adara/adara/{{ route('client.home.index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 May 2023 14:15:38 GMT -->
</html>
