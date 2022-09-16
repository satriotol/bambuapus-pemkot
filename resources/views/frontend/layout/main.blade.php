<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BAMBU APUS | PEMERINTAH KOTA SEMARANG</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('bambuapus.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
</head>

<body>
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <svg id="loader">
                    <path id="corners" d="m 0 12.5 l 0 -12.5 l 50 0 l 0 50 l -50 0 l 0 -37.5" />
                </svg>
                <img src="{{ asset('bambuapus.png') }}" height="100px" alt="">
            </div>
        </div>
    </div>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header>
        @include('frontend.layout.header')
    </header>
    <!-- header area end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__content">
                            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                                <div class="offcanvas__logo logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('bambuapus.png') }}" alt="logo">
                                    </a>
                                </div>
                                <div class="offcanvas__close">
                                    <button class="offcanvas__close-btn" data-bs-toggle="modal"
                                        data-bs-target="#offcanvasmodal">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mobile-menu fix"></div>
                            <div class="offcanvas__text d-none d-lg-block">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and will give you a complete account of the system and
                                    expound the actual teachings of the great explore</p>
                            </div>
                            <div class="offcanvas__map d-none d-lg-block mb-15">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
                            </div>
                            <div class="offcanvas__contact mt-30 mb-20">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a target="_blank"
                                                href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                                Mirnada City Tower, NYC</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a href="mailto:support@gmail.com">088889797697</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a href="tel:+012-345-6789">support@mail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="offcanvas__social">
                                <ul>
                                    @foreach ($socialMedias as $socialMedia)
                                        <li>
                                            <a href="{{ $socialMedia->url }}" target="_blank"><i
                                                    class="{{ $socialMedia->icon }}"></i></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>
        @yield('content')
    </main>

    <!-- footer area start -->
    <footer>
        @include('frontend.layout.footer')
    </footer>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{ asset('frontend_assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/parallax.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/backtotop.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/counterup.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
</body>

</html>
