<div class="footer__area">
    <div class="footer__top grey-bg-4 pt-95 pb-45">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__widget footer-col-1 mb-50">
                        <div class="footer__logo">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('uploads/' . $about->icon) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="footer__widget-content">
                            <div class="footer__widget-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit. Nunc maximus, nulla
                                    utlaoki comm odo sagittis.</p>
                                <div class="footer__social">
                                    <h4>Sosial Media</h4>

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
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget mb-50">
                        <h3 class="footer__widget-title">Explore</h3>
                        <div class="footer__widget-content">
                            <ul>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Success story</a>
                                </li>
                                <li>
                                    <a href="#">Courses</a>
                                </li>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Instructor</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget mb-50">
                        <h3 class="footer__widget-title">Links</h3>
                        <div class="footer__widget-content">
                            <ul>
                                <li>
                                    <a href="#">News & Blogs</a>
                                </li>
                                <li>
                                    <a href="#">Library</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Terms of service</a>
                                </li>
                                <li>
                                    <a href="#">Membership</a>
                                </li>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Partners</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__widget footer-col-4 mb-50">
                        <h3 class="footer__widget-title">Sign up for our newsletter</h3>

                        <div class="footer__subscribe">
                            <p>Receive weekly newsletter with educational materials, popular books and much
                                more!</p>
                            <form action="#">
                                <div class="footer__subscribe-input">
                                    <input type="text" placeholder="Email">
                                    <button type="submit" class="tp-btn-subscribe">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom grey-bg-4">
        <div class="container">
            <div class="footer__bottom-inner">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="footer__copyright text-center">
                            <p>© 2022 Pemerintah Kota Semarang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
