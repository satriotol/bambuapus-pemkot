@extends('frontend.layout.main')
@section('content')
    <!-- sign up area start -->
    <section class="signup__area p-relative z-index-1 pt-100 pb-145">
        <div class="sign__shape">
            <img class="man-1" src="{{ asset('frontend_assets/img/icon/sign/man-3.png') }}" alt="">
            <img class="man-2 man-22" src="{{ asset('frontend_assets/img/icon/sign/man-2.png') }}" alt="">
            <img class="circle" src="{{ asset('frontend_assets/img/icon/sign/circle.png') }}" alt="">
            <img class="zigzag" src="{{ asset('frontend_assets/img/icon/sign/zigzag.png') }}" alt="">
            <img class="dot" src="{{ asset('frontend_assets/img/icon/sign/dot.png') }}" alt="">
            <img class="bg" src="{{ asset('frontend_assets/img/icon/sign/sign-up.png') }}" alt="">
            <img class="flower" src="{{ asset('frontend_assets/img/icon/sign/flower.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                    <div class="section__title-wrapper text-center mb-55">
                        <h2 class="section__title">Buat Akun Pelaporanmu</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-7 offset-xxl-2 col-xl-7 offset-xl-2 col-lg-9 offset-lg-1">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__form">
                            @include('partials.errors')
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Nama Lengkap</h5>
                                    <div class="sign__input">
                                        <input type="text" placeholder="Nama Lengkap" required
                                            value="{{ @old('name') }}" name="name">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Alamat Email</h5>
                                    <div class="sign__input">
                                        <input type="email" name="email" value="{{ @old('email') }}"
                                            placeholder="Alamat Email">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sign__input-wrapper mb-25">
                                            <h5>Nomor Induk Kependudukan</h5>
                                            <div class="sign__input">
                                                <input type="number" name="nik" value="{{ @old('nik') }}"
                                                    placeholder="Nomor Induk Kependudukan">
                                                <i class="fal fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sign__input-wrapper mb-25">
                                            <h5>Nomor Handphone</h5>
                                            <div class="sign__input">
                                                <input type="number" name="phone" value="{{ @old('phone') }}"
                                                    placeholder="Nomor Handphone">
                                                <i class="fal fa-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Alamat Rumah</h5>
                                    <div class="sign__input">
                                        <input type="text" name="address" value="{{ @old('address') }}"
                                            placeholder="Alamat Rumah">
                                        <i class="fal fa-house"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Password</h5>
                                    <div class="sign__input">
                                        <input type="password" placeholder="Password" required name="password">
                                        <i class="fal fa-lock"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-10">
                                    <h5>Konfirmasi Password</h5>
                                    <div class="sign__input">
                                        <input type="password" placeholder="Re-Password" required name="password_confirmation">
                                        <i class="fal fa-lock"></i>
                                    </div>
                                </div>
                                <button class="tp-btn w-100"> <span></span> Daftar</button>
                                <div class="sign__new text-center mt-20">
                                    <p>Sudah Punya Akun <a href="{{ route('frontend.login') }}"> Masuk</a></p>
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
