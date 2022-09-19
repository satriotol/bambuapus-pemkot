@extends('frontend.layout.main')
@push('style')
    <style>
        @media (max-width: 1399px) {

            .about__thumb-1 img,
            .about__thumb-2 img {
                width: 100% !important;
                object-fit: cover !important;
            }
        }

        #about {
            padding-top: 10rem;
        }

        #statistic {
            padding-top: 5rem;
        }
    </style>
@endpush
@section('content')
    <section class="slider__area">
        <div class="slider__active swiper-container">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="slider__item swiper-slide p-relative slider__height d-flex align-items-center z-index-1">
                        <div class="slider__bg slider__overlay include-bg"
                            data-background="{{ asset('uploads/' . $slider->image) }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-sm-10">
                                    <div class="slider__content p-relative z-index-1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Bamboo Apus</span>
                                        <h2 class="slider__title" data-animation="fadeInUp" data-delay=".6s">
                                            {{ $slider->name }}</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">{{ $slider->description }}
                                        </p>
                                        <div class="slider__btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="{{ route('frontend.login') }}" class="tp-btn">Buat Laporan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="main-slider-paginations">
                <button class="slider-button-next"><i class="fa-regular fa-arrow-right"></i></button>
                <button class="slider-button-prev"><i class="fa-regular fa-arrow-left"></i></button>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- features area start -->
    <section class="features__area">
        <div class="container">
            <div class="features__inner p-relative z-index-1 white-bg">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="features__item features__border-right d-sm-flex align-items-start white-bg mb-30">
                            <div class="features__icon mr-25">
                                <svg width="42" height="44" viewBox="0 0 42 44" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.6013 2.11585L3.95694 10.3704C-0.0968136 13.0169 -0.0968136 18.94 3.95694 21.5865L16.6013 29.841C18.8697 31.3323 22.6084 31.3323 24.8769 29.841L37.4582 21.5865C41.491 18.94 41.491 13.0379 37.4582 10.3914L24.8769 2.13685C22.6084 0.624568 18.8697 0.624569 16.6013 2.11585Z"
                                        stroke="#031220" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M7.3176 24.275L7.2966 34.1259C7.2966 36.7934 9.35499 39.6499 11.8755 40.4901L18.5757 42.7165C19.7309 43.0945 21.6423 43.0945 22.8185 42.7165L29.5188 40.4901C32.0392 39.6499 34.0976 36.7934 34.0976 34.1259V24.38"
                                        stroke="#258e46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M40.4408 28.3077V15.7054" stroke="#258e46" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title">
                                    <a href="{{ route('frontend.login') }}">Buat Laporan</a>
                                </h3>
                                <p>Buat Laporan Anda Tentang Anak Putus Sekolah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="features__item features__border-right d-sm-flex align-items-start white-bg mb-30">
                            <div class="features__icon mr-25">
                                <svg width="44" height="40" viewBox="0 0 44 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.7168 31.4941V18.0775" stroke="#258e46" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.3835 31.4941V18.0775" stroke="#258e46" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22.0501 31.4941V18.0775" stroke="#258e46" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M29.7168 31.4941V18.0775" stroke="#258e46" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M37.3835 31.4941V18.0775" stroke="#258e46" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M41.2168 39.1608H2.88347V33.4108C2.88347 32.3566 3.74597 31.4941 4.80014 31.4941H39.3001C40.3543 31.4941 41.2168 32.3566 41.2168 33.4108V39.1608Z"
                                        stroke="#031220" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M22.7593 1.115L40.0093 8.01495C40.6801 8.28329 41.2168 9.08827 41.2168 9.79744V16.1608C41.2168 17.215 40.3543 18.0775 39.3001 18.0775H4.80014C3.74597 18.0775 2.88347 17.215 2.88347 16.1608V9.79744C2.88347 9.08827 3.42014 8.28329 4.09098 8.01495L21.341 1.115C21.7243 0.961667 22.376 0.961667 22.7593 1.115Z"
                                        stroke="#031220" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M0.966797 39.1608H43.1335" stroke="#031220" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M22.0501 13.2858C23.6379 13.2858 24.9251 11.9986 24.9251 10.4108C24.9251 8.82295 23.6379 7.53577 22.0501 7.53577C20.4623 7.53577 19.1751 8.82295 19.1751 10.4108C19.1751 11.9986 20.4623 13.2858 22.0501 13.2858Z"
                                        stroke="#031220" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title">
                                    <a href="">Proses</a>
                                </h3>
                                <p>Laporan Anda Sedang Di Proses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="features__item d-sm-flex align-items-start white-bg mb-30">
                            <div class="features__icon mr-25">
                                <svg width="41" height="38" viewBox="0 0 41 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M39.3333 27.9821V4.84788C39.3333 2.54788 37.455 0.84205 35.1742 1.03372H35.0592C31.0342 1.37872 24.92 3.42955 21.5083 5.57622L21.1825 5.78705C20.6267 6.13205 19.7067 6.13205 19.1508 5.78705L18.6717 5.49955C15.26 3.37205 9.165 1.34038 5.14 1.01455C2.85917 0.822883 1 2.54788 1 4.82872V27.9821C1 29.8221 2.495 31.547 4.335 31.777L4.89083 31.8537C9.05 32.4096 15.4708 34.5179 19.1508 36.5304L19.2275 36.5687C19.745 36.8562 20.5692 36.8562 21.0675 36.5687C24.7475 34.537 31.1875 32.4096 35.3658 31.8537L35.9983 31.777C37.8383 31.547 39.3333 29.8221 39.3333 27.9821Z"
                                        stroke="#031220" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M20.1666 6.41956V35.1696" stroke="#258e46" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.0209 12.1696H7.70837" stroke="#258e46" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.4584 17.9196H7.70837" stroke="#258e46" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title">
                                    <a href="">Laporan Anda Selesai</a>
                                </h3>
                                <p>Laporan Anda Selesai Kami Tangani</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features area end -->

    <!-- about area start -->
    <section class="about__area p-relative" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about__thumb-wrapper d-sm-flex mr-20 p-relative">
                        <div class="about__shape">
                            <img class="about__shape-1 d-none d-sm-block"
                                src="frontend_assets/img/about/about-shape-1.png" alt="">
                            <img class="about__shape-2 d-none d-sm-block"
                                src="frontend_assets/img/about/about-shape-2.png" alt="">
                            <img class="about__shape-3" src="frontend_assets/img/about/about-shape-3.png" alt="">
                        </div>
                        <div class="about__thumb-left mr-10">
                            <div class="about__thumb-1 mb-10">
                                @if ($about->image_3)
                                    <img src="{{ asset('uploads/' . $about->image_3) }}"
                                        style="object-fit:contain; height: 150px; width: 171px" alt="">
                                @endif
                            </div>
                            <div class="about__thumb-1 mb-10 text-end">
                                @if ($about->image_2)
                                    <img src="{{ asset('uploads/' . $about->image_2) }}"
                                        style="object-fit:contain; height: 280px; width: 241px" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="about__thumb-2 mb-10">
                            @if ($about->image_1)
                                <img src="{{ asset('uploads/' . $about->image_1) }}"
                                    style="object-fit:contain; height: 570px; width: 401px" alt="">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about__content pl-70 pr-25">
                        <div class="section__title-wrapper mb-15">
                            <span class="section__title-pre">Tentang BAMBU APUS</span>
                            <h2 class="section__title">{{ $about->title }}</h2>
                        </div>
                        <p>{{ $about->description }}
                        </p>

                        <div class="about__btn">
                            <a href="{{ route('frontend.login') }}" class="tp-btn tp-btn-2">Buat Laporan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- counter area start -->
    <section class="counter__area pb-120" id="statistic">
        <div class="container">
            <div class="section__title-wrapper mb-15">
                <h2 class="section__title">Statistik Pelaporan</h2>
            </div>
            <div class="counter__inner grey-bg-2">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="counter__item d-flex align-items-start counter__item-border">
                            <div class="counter__icon mr-15">
                                <svg width="38" height="39" viewBox="0 0 38 39" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M37 19.1667C37 9.23075 28.936 1.16675 19 1.16675C9.064 1.16675 1 9.23075 1 19.1667C1 29.1027 9.064 37.1667 19 37.1667"
                                        stroke="#031220" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M11.8 2.9668H13.6C10.09 13.4788 10.09 24.8548 13.6 35.3668H11.8"
                                        stroke="#031220" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M24.4 2.9668C26.146 8.2228 27.028 13.6948 27.028 19.1668" stroke="#031220"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.80005 26.3667V24.5667C8.05605 26.3127 13.528 27.1947 19 27.1947"
                                        stroke="#031220" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M2.80005 13.7665C13.312 10.2565 24.688 10.2565 35.2001 13.7665"
                                        stroke="#031220" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path class="search"
                                        d="M30.16 36.0867C33.3412 36.0867 35.92 33.5078 35.92 30.3267C35.92 27.1455 33.3412 24.5667 30.16 24.5667C26.9789 24.5667 24.4 27.1455 24.4 30.3267C24.4 33.5078 26.9789 36.0867 30.16 36.0867Z"
                                        stroke="#258e46" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path class="search" d="M37.0001 37.1667L35.2001 35.3667" stroke="#258e46"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="counter__content">
                                <h4>{{ $user_reports_count }}</h4>
                                <p>Total Laporan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="counter__item d-flex align-items-start counter__item-border">
                            <div class="counter__icon mr-15">
                                <svg width="50" height="38" viewBox="0 0 50 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6984 27.5676V25.3757H16.1609V27.5676H14.6984Z" fill="#031220"
                                        stroke="#F5F6F8" stroke-width="0.1" />
                                    <path d="M18.9289 27.5676V25.3757H20.3914V27.5676H18.9289Z" fill="#031220"
                                        stroke="#F5F6F8" stroke-width="0.1" />
                                    <path
                                        d="M17.5234 25.9512C14.1936 25.9512 11.7765 23.4538 11.7765 20.0065V19.0436H13.239V20.0065C13.239 21.2677 13.6787 22.3416 14.436 23.1004C15.1932 23.8591 16.2649 24.2997 17.5234 24.2997C18.7821 24.2997 19.8538 23.8591 20.611 23.1004C21.3682 22.3416 21.8078 21.2677 21.8078 20.0065V14.6279H23.2703V20.006C23.2707 23.4538 20.8532 25.9512 17.5234 25.9512Z"
                                        fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                    <path
                                        d="M15.2448 8.89414L25.4444 8.89327V12.1213C25.4444 14.2014 23.9423 15.8832 22.1085 15.8832H13.9511C13.5654 15.8832 13.262 16.2371 13.262 16.6588V23.2591L9.42375 18.0384V13.3221C9.42375 11.6064 10.6626 10.221 12.1734 10.221H12.6784H12.7032L12.7182 10.2013C13.3495 9.37396 14.2661 8.89414 15.2448 8.89414ZM10.8859 17.4764H10.911L11.7096 18.5626L11.7999 18.6854V18.533V16.6588C11.7999 15.3145 12.7704 14.2316 13.9515 14.2316H22.1085C23.1468 14.2316 23.9816 13.2789 23.9816 12.1213V10.5948V10.5448H23.9316L15.2445 10.5448L15.2444 10.5448C14.6109 10.5457 14.0256 10.9051 13.6774 11.5015C13.6774 11.5015 13.6774 11.5015 13.6774 11.5015L13.4607 11.8725H12.173C11.4577 11.8725 10.8859 12.5288 10.8859 13.3221V17.4264V17.4764Z"
                                        fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                    <path d="M42.9272 32.716V21.0804H44.3897V32.716H42.9272Z" fill="#031220"
                                        stroke="#F5F6F8" stroke-width="0.1" />
                                    <path
                                        d="M7.07152 32.7159H5.60862V6.08232C5.60862 4.82863 6.51389 3.81892 7.61448 3.81892H26.0965V5.4705H7.61487C7.3095 5.4705 7.07152 5.75095 7.07152 6.08232V32.7159Z"
                                        fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                    <path
                                        d="M10.2844 32.0648H8.82229V30.104C8.82229 28.2623 10.2812 26.7664 12.0711 26.7664H23.1184C24.9083 26.7664 26.3668 28.2627 26.3668 30.104V31.5266H24.9043V30.104C24.9043 29.1711 24.1002 28.418 23.1184 28.418H12.0707C11.0885 28.418 10.2844 29.1715 10.2844 30.104V32.0648Z"
                                        fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                    <path
                                        d="M0.34435 35.8766L0.344278 35.8765L0.05 35.6292V31.807H49.95V35.6292L49.6558 35.8773C49.5603 35.9573 49.0814 36.3514 48.4465 36.7253C47.81 37.1002 47.0245 37.4499 46.3141 37.4499H3.68516C2.9745 37.4499 2.18909 37.1002 1.55278 36.7252C0.918101 36.3512 0.439536 35.9568 0.34435 35.8766ZM1.5125 34.7592V34.7844L1.5328 34.7994C1.84194 35.0277 2.22749 35.2768 2.61064 35.469C2.99207 35.6603 3.3778 35.7988 3.68516 35.7988H46.3145C46.6216 35.7988 47.0073 35.6603 47.3888 35.469C47.772 35.2768 48.1578 35.0277 48.4676 34.7994L48.4879 34.7844V34.7592V33.509V33.459H48.4379H1.5625H1.5125V33.509V34.7592Z"
                                        fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                    <path class="video"
                                        d="M31.8141 23.2115V19.0489V18.9989H31.7641H30.2215C29.1088 18.9989 28.1863 17.876 28.1863 16.4732V2.57745C28.1863 1.17324 29.1089 0.05 30.2215 0.05H45.3773C46.4916 0.05 47.4164 1.17335 47.4164 2.57745V16.4732C47.4164 17.8759 46.492 18.9989 45.3773 18.9989H36.2426H36.2225L36.208 19.0127L31.8141 23.2115ZM30.1715 1.70158V1.70539C30.0271 1.72498 29.9017 1.82807 29.8117 1.97022C29.7108 2.12959 29.6488 2.34555 29.6488 2.57789V16.4732C29.6488 16.7051 29.7108 16.9206 29.8117 17.0797C29.912 17.2377 30.0562 17.3473 30.2215 17.3473H33.2766V19.5336V19.6506L33.3611 19.5698L35.6865 17.3473H45.3769C45.543 17.3473 45.6882 17.2379 45.7893 17.0798C45.891 16.9208 45.9535 16.7052 45.9535 16.4732V2.57745C45.9535 2.34526 45.8911 2.12925 45.7895 1.96982C45.6885 1.81136 45.5433 1.70158 45.3769 1.70158H30.2215H30.1715Z"
                                        fill="#258e46" stroke="#F5F6F8" stroke-width="0.1" />
                                    <path class="video"
                                        d="M36.2705 6.36712L36.1933 6.3168V6.40902V11.6887V11.7809L36.2705 11.7306L40.3256 9.09143L40.39 9.04954L40.3256 9.00763L36.2705 6.36712ZM43.318 9.04952L34.7308 14.6386V3.45831L43.318 9.04952Z"
                                        fill="#258e46" stroke="#F5F6F8" stroke-width="0.1" />
                                </svg>
                            </div>
                            <div class="counter__content">
                                <h4>{{ $statuses[1]->user_reports->count() }}</h4>
                                <p>Total Laporan Diproses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="counter__item d-flex align-items-start counter__item-border">
                            <div class="counter__icon mr-15">
                                <svg width="44" height="41" viewBox="0 0 44 41" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.3422 18.3518C23.5378 18.3322 23.7725 18.3322 23.9877 18.3518C28.6435 18.1953 32.3408 14.3806 32.3408 9.68568C32.3408 4.89291 28.4675 1 23.6551 1C18.8624 1 14.9695 4.89291 14.9695 9.68568C14.989 14.3806 18.6863 18.1953 23.3422 18.3518Z"
                                        stroke="#031220" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10.8983 4.91248C7.10324 4.91248 4.05152 7.98376 4.05152 11.7593C4.05152 15.4566 6.98587 18.4692 10.644 18.6061C10.8005 18.5866 10.9766 18.5866 11.1526 18.6061"
                                        stroke="#031220" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M33.1235 25.5703C37.8576 28.7394 37.8576 33.9039 33.1235 37.0534C27.7438 40.6529 18.9212 40.6529 13.5416 37.0534C8.80748 33.8843 8.80748 28.7198 13.5416 25.5703C18.9016 21.9904 27.7243 21.9904 33.1235 25.5703Z"
                                        stroke="#031220" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M7.12298 36.2123C5.71449 35.9188 4.38426 35.3515 3.28876 34.5103C0.237038 32.2215 0.237038 28.446 3.28876 26.1572C4.36469 25.3356 5.67537 24.7879 7.06429 24.4749"
                                        stroke="#031220" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path class="star"
                                        d="M35.8077 22.6875L37.3377 25.7729C37.5464 26.2024 38.1027 26.6143 38.5722 26.6932L41.3454 27.1578C43.1188 27.4558 43.5361 28.7531 42.2582 30.0328L40.1022 32.2066C39.7371 32.5747 39.5372 33.2847 39.6502 33.7931L40.2674 36.484C40.7542 38.614 39.6328 39.4379 37.7637 38.3247L35.1644 36.7733C34.6949 36.4928 33.9212 36.4928 33.4431 36.7733L30.8437 38.3247C28.9834 39.4379 27.8532 38.6052 28.34 36.484L28.9573 33.7931C29.0703 33.2847 28.8703 32.5747 28.5052 32.2066L26.3492 30.0328C25.08 28.7531 25.4886 27.4558 27.2621 27.1578L30.0353 26.6932C30.496 26.6143 31.0524 26.2024 31.261 25.7729L32.7911 22.6875C33.6256 21.0133 34.9818 21.0133 35.8077 22.6875Z"
                                        fill="#F5F6F8" stroke="#258e46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="counter__content">
                                <h4>{{ $statuses[2]->user_reports->count() }}</h4>
                                <p>Total Laporan Selesai</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="counter__item d-flex align-items-start">
                            <div class="counter__icon mr-15">
                                <svg x="0px" y="0px" viewBox="0 0 67.4 70.6" xml:space="preserve">
                                    <path class="st0"
                                        d="M59.7,25.4c0,0.1,0.4,2.8,6.4,12.2c0.6,0.8,0.8,1.8,0.6,2.8c-0.1,0.5-0.4,1-0.7,1.4c-0.3,0.4-0.8,0.8-1.2,1
                        c-1.7,0.9-3.4,1.8-5.2,2.5c0.4,3.7,0.4,7.4,0,11.1c-0.7,3.7-7.1,4.3-10.8,4.3c-0.3,0-0.7,0-1,0.1c-0.3,0.1-0.6,0.3-0.8,0.5
                        c-0.2,0.2-0.4,0.5-0.5,0.8c-0.1,0.3-0.2,0.6-0.1,1v5c0,0.1,0,0.3-0.1,0.4c0,0.1-0.1,0.2-0.2,0.4c-0.1,0.1-0.2,0.2-0.3,0.2
                        c-0.1,0.1-0.3,0.1-0.4,0.1s-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.4c0-0.1-0.1-0.3-0.1-0.4v-5
                        c0-0.6,0.1-1.2,0.3-1.8c0.2-0.6,0.6-1.1,1-1.5c0.4-0.4,1-0.7,1.5-0.9c0.6-0.2,1.2-0.3,1.8-0.2c4.9,0,8.4-1,8.7-2.6
                        c0.7-3.6-0.1-10.8-0.1-11.3c0,0,0,0,0,0c0-0.2,0-0.5,0.1-0.7c0.1-0.2,0.3-0.3,0.5-0.4c1.9-0.8,3.8-1.7,5.6-2.7
                        c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.2,0.3-0.4,0.4-0.6c0.1-0.4,0-0.9-0.3-1.2c-6.4-10.1-6.8-12.9-6.8-13.2C55.1,4.4,38,2.7,32.8,2.7
                        c-0.5,0-0.9,0-1.2,0l0,0c-0.2,0-0.4,0-0.5,0c-3.2,0-15.6,0.7-21.9,10.1h11c0.8,0,1.6,0.2,2.3,0.6c0.7,0.4,1.3,0.9,1.8,1.5
                        c0.5-0.6,1.1-1.2,1.8-1.5c0.7-0.4,1.5-0.6,2.3-0.6h18c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.5,0.3,0.7V52c0,0.1,0,0.3-0.1,0.4
                        c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0.1-0.3,0.1-0.4,0.1h-18c-0.8,0-1.6,0.3-2.2,0.9s-0.9,1.4-0.9,2.2
                        c0,0.3-0.1,0.5-0.3,0.7c-0.2,0.2-0.5,0.3-0.7,0.3c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.4-0.3-0.7c0-0.8-0.3-1.6-0.9-2.2
                        c-0.6-0.6-1.4-0.9-2.2-0.9h-4.5c0,0,0,0,0,0.1c0,0,0.1,0.1,0.1,0.1c2.2,4.8,2.3,14.5,2.3,14.9c0,0.3-0.1,0.5-0.3,0.7
                        c-0.2,0.2-0.5,0.3-0.7,0.3h0c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7l0,0c0-0.2-0.1-9.7-2.1-14c-0.2-0.4-0.4-0.7-0.6-1.1
                        H2.2c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7V13.9c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3h4.5
                        C13.5,1.2,28.8,0.7,31,0.7l0.5,0c0.3,0,0.8,0,1.3,0C38.4,0.7,57,2.5,59.7,25.4z M26.2,15.8c-0.6,0.6-0.9,1.4-0.9,2.2v34
                        c0.9-0.7,2-1,3.1-1h17V14.9h-17C27.6,14.9,26.8,15.2,26.2,15.8z M22.4,15.8c-0.6-0.6-1.4-0.9-2.2-0.9h-17V51h17c1.1,0,2.2,0.4,3.1,1
                        V18C23.3,17.2,22.9,16.4,22.4,15.8z M7.7,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7
                        c-0.2-0.2-0.5-0.3-0.7-0.3H7.7c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C7.2,22.1,7.4,22.2,7.7,22.2z
                        M7.7,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7C19.3,28.1,19,28,18.8,28H7.7
                        c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,30,7.4,30.1,7.7,30.1z M18.8,37.9H7.7c-0.1,0-0.3,0-0.4-0.1
                        c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3
                        c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.3-0.1,0.4-0.1h11.1c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.2,0.2,0.3
                        c0.1,0.1,0.1,0.3,0.1,0.4c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2C19,37.9,18.9,37.9,18.8,37.9z
                        M7.7,45.8h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H7.7
                        c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,45.7,7.4,45.8,7.7,45.8z M40.9,22.2H29.8
                        c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3h11.1c0.3,0,0.5,0.1,0.7,0.3
                        s0.3,0.5,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7C41.5,22.1,41.2,22.2,40.9,22.2z M29.8,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3
                        c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H29.8c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7
                        s0.1,0.5,0.3,0.7C29.3,30,29.6,30.1,29.8,30.1z M40.9,37.9H29.8c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2
                        c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.2-0.2,0.3-0.2
                        c0.1-0.1,0.3-0.1,0.4-0.1h11.1c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.2,0.2,0.3c0.1,0.1,0.1,0.3,0.1,0.4
                        c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2C41.2,37.9,41,37.9,40.9,37.9z M29.8,45.8h5.5
                        c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3h-5.5c-0.3,0-0.5,0.1-0.7,0.3
                        c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,45.7,29.6,45.8,29.8,45.8z" />
                                    <path class="st1"
                                        d="M7.7,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3
                        H7.7c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C7.2,22.1,7.4,22.2,7.7,22.2z" />
                                    <path class="st1"
                                        d="M7.7,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7C19.3,28.1,19,28,18.8,28H7.7
                        c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,30,7.4,30.1,7.7,30.1z" />
                                    <path class="st1"
                                        d="M7.7,37.9h11.1c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.1-0.4
                        c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.1H7.7c-0.1,0-0.3,0-0.4,0.1
                        C7.2,36,7.1,36.1,7,36.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3
                        c0.1,0.1,0.2,0.2,0.3,0.2C7.4,37.9,7.6,37.9,7.7,37.9L7.7,37.9z" />
                                    <path class="st1"
                                        d="M7.7,45.8h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H7.7
                        c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,45.7,7.4,45.8,7.7,45.8L7.7,45.8z" />
                                    <path class="st1"
                                        d="M29.8,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7s-0.5-0.3-0.7-0.3H29.8
                        c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C29.3,22.1,29.6,22.2,29.8,22.2L29.8,22.2z" />
                                    <path class="st1"
                                        d="M29.8,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3
                        H29.8c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,30,29.6,30.1,29.8,30.1z" />
                                    <path class="st1"
                                        d="M29.8,37.9h11.1c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.1-0.4
                        c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.1H29.8c-0.1,0-0.3,0-0.4,0.1
                        c-0.1,0.1-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3
                        c0.1,0.1,0.2,0.2,0.3,0.2C29.6,37.9,29.7,37.9,29.8,37.9L29.8,37.9z" />
                                    <path class="st1"
                                        d="M29.8,45.8h5.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3h-5.5
                        c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,45.7,29.6,45.8,29.8,45.8L29.8,45.8z" />
                                </svg>
                            </div>
                            <div class="counter__content">
                                <h4>{{ $statuses[3]->user_reports->count() }}</h4>
                                <p>Total Laporan DiTolak</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->
@endsection
