<style>
    a.btn.btn-danger {
        color: white !important;
        padding: 5px 10px !important;
    }
</style>
<div class="header__area">
    <div class="header__top header__border d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-8">
                    <div class="header__info">
                        <ul>
                            <li>
                                <a href="https://goo.gl/maps/D4BPJPMEujQsDTvZA" target="_blank">
                                    <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.9235 4.66671C5.23068 4.66671 4.66709 5.2303 4.66709 5.92383C4.66709 6.61666 5.23068 7.17953 5.9235 7.17953C6.61632 7.17953 7.17991 6.61666 7.17991 5.92383C7.17991 5.2303 6.61632 4.66671 5.9235 4.66671ZM5.92354 8.25642C4.63698 8.25642 3.59021 7.21037 3.59021 5.9238C3.59021 4.63652 4.63698 3.58975 5.92354 3.58975C7.21011 3.58975 8.25688 4.63652 8.25688 5.9238C8.25688 7.21037 7.21011 8.25642 5.92354 8.25642Z"
                                            fill="#4B535A" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.92278 1.07695C3.25058 1.07695 1.07663 3.27172 1.07663 5.96834C1.07663 9.39942 5.11437 12.7422 5.92278 12.9202C6.73119 12.7415 10.7689 9.3987 10.7689 5.96834C10.7689 3.27172 8.59499 1.07695 5.92278 1.07695ZM5.92259 14C4.63459 14 -0.000488281 10.0139 -0.000488281 5.96831C-0.000488281 2.67723 2.65664 0 5.92259 0C9.18854 0 11.8457 2.67723 11.8457 5.96831C11.8457 10.0139 7.21059 14 5.92259 14Z"
                                            fill="#4B535A" />
                                    </svg>
                                    Pemerintah Kota Semarang</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom" id="header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('uploads/' . $about->icon) }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a class="{{ active_class(['home']) }}" href="{{ route('home') }}#">Beranda</a>
                                </li>
                                <li>
                                    <a class="{{ active_class(['home']) }}#about"
                                        href="{{ route('home') }}#about">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('home') }}#statistic">Statistik</a>
                                </li>
                                @guest
                                    <li>
                                        <a class="{{ active_class(['frontend.login']) }}"
                                            href="{{ route('frontend.login') }}">Masuk</a>
                                    </li>
                                    <li>
                                        <a class="{{ active_class(['frontend.register']) }}"
                                            href="{{ route('frontend.register') }}">Daftar</a>
                                    </li>
                                @endguest
                                @auth
                                    <li>
                                        <a href="{{ route('dashboard') }}">Lapor</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a style="cursor: pointer;" class="btn btn-danger" :href="route('logout')"
                                                onclick="
                                                event.preventDefault();
                                                this.closest('form').submit();">
                                                Keluar
                                            </a>
                                        </form>
                                    </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-6">
                    <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                        <div class="header__hamburger ml-50 d-xl-none">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal"
                                class="hamurger-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
