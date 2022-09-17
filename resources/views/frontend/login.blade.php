@extends('frontend.layout.main')
@section('content')
    <!-- sign up area start -->
    <section class="signup__area p-relative z-index-1 pt-100 pb-145">
        <div class="sign__shape">
            <img class="man-1" src="{{ asset('frontend_assets/img/icon/sign/man-1.png') }}" alt="">
            <img class="man-2" src="{{ asset('frontend_assets/img/icon/sign/man-2.png') }}" alt="">
            <img class="circle" src="{{ asset('frontend_assets/img/icon/sign/circle.png') }}" alt="">
            <img class="zigzag" src="{{ asset('frontend_assets/img/icon/sign/zigzag.png') }}" alt="">
            <img class="dot" src="{{ asset('frontend_assets/img/icon/sign/dot.png') }}" alt="">
            <img class="bg" src="{{ asset('frontend_assets/img/icon/sign/sign-up.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                    <div class="section__title-wrapper text-center mb-55">
                        <h2 class="section__title">Masuk Pelaporan</h2>
                        <p>Apabila Anda Tidak Punya Akun <a href="{{ route('frontend.register') }}">Buat Disini !</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__form">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>E-Mail</h5>
                                    <div class="sign__input">
                                        <input type="text" name="email" required placeholder="e-mail address">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-10">
                                    <h5>Password</h5>
                                    <div class="sign__input">
                                        <input type="password" name="password" required placeholder="Password">
                                        <i class="fal fa-lock"></i>
                                    </div>
                                </div>
                                <div class="sign__action d-sm-flex justify-content-between mb-30">
                                    <div class="sign__agree d-flex align-items-center">
                                        <input class="m-check-input" type="checkbox" id="m-agree">
                                        <label class="m-check-label" for="m-agree">Tetap Masuk
                                        </label>
                                    </div>
                                    {{-- <div class="sign__forgot">
                                        <a href="#">Forgot your password?</a>
                                    </div> --}}
                                </div>
                                <button class="tp-btn  w-100" type="submit"> <span></span> Masuk</button>
                                <div class="sign__new text-center mt-20">
                                    <p>Belum Punya Akun ? <a href="{{ route('frontend.register') }}">Sign Up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up area end -->
@endsection
