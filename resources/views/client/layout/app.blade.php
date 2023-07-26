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

@include('client.layout.header')
<!-- main-area -->
<main>

    <!-- breadcrumb-area-end -->
    @yield('content')
    <!-- shoes-banner-area -->
{{--    <section class="shoes-banner-area">--}}
{{--        <div class="container">--}}
{{--            <div class="shoes-banner-active">--}}
{{--                <div class="shoes-banner-bg" data-background="{{ asset('templates/client/img/bg/shoes-banner_bg.jpg') }}">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="shoes-banner-content">--}}
{{--                                <h6>Athletes Shoes</h6>--}}
{{--                                <h2>9 Best <span>Shoes for</span> Standing All Day Review 2020</h2>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="shoes-banner-bg" data-background="{{ asset('templates/client/img/bg/shoes-banner_bg.jpg') }}">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="shoes-banner-content">--}}
{{--                                <h6>Athletes Shoes</h6>--}}
{{--                                <h2>3 Best <span>Shoes for</span> Standing All Day Review 2021</h2>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
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
<script src="{{ asset('assets/js/client/cart.js') }}"></script>
<script src="{{ asset('assets/js/client/custom.js') }}"></script>
</body>


<!-- Mirrored from themepixer.com/demo/html/adara/adara/{{ route('client.home.index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 May 2023 14:15:38 GMT -->
</html>
