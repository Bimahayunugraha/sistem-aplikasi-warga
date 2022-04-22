@extends('layouts.main')

@section('content')
    {{-- Hero start --}}
    <section id="hero-area" class="bg-blue-100 pt-48 pb-10">
        <div class="container">
            <div class="flex justify-between">
                <div class="w-full text-center">
                    <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">Selamat Datang di
                        <br class="hidden lg:block text-indigo-600"> Sistem Aplikasi Warga
                    </h2>
                    <p class="text-base mb-8 text-body-color wow fadeInUp" data-wow-delay="1s">
                      Sampaikan keluhan Anda disini <br> dan kami akan segera menanggapi keluhan yang Anda kirim.
                    </p>
                    <div class="text-center mb-10 wow fadeInUp" data-wow-delay="1.2s">
                        <a href="/register" rel="nofollow" class="btn bg-primary hover:text-slate-200 hover:bg-opacity-90 rounded-lg py-4
                        px-6
                        sm:px-10
                        lg:px-8
                        xl:px-10 text-white text-base">Daftar & Sampaikan Keluhan</a>
                    </div>
                    <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
                        <img class="img-fluid mx-auto" src="img/hero.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero --}}

    <!-- Services Section Start -->
    <section class="py-24">
        <div class="container">
            <div class="text-center">
                <h4 class="font-semibold text-lg text-primary mb-2 wow fadeInDown" data-wow-delay="0.3s">
                    Fitur
                </h4>
                <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Fitur Utama Kami</h2>
            </div>
            <div class="flex flex-wrap">
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="icon text-5xl">
                            <i class="far fa-bullhorn"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Keluhan</h3>
                            <p class="text-gray-600">Anda sebagai warga RT dapat menyampaikan keluhan yang Anda alami disini dengan memberikan detail dan kategori keluhan.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon text-5xl">
                            <i class="far fa-value-absolute"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Penilaian</h3>
                            <p class="text-gray-600">Anda dapat memberikan penilaian tentang lingkungan RT atau lainnya dengan memberikan bintang dan komentar.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
                        <div class="icon text-5xl">
                            <i class="far fa-comments-alt"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Diskusi</h3>
                            <p class="text-gray-600">Anda dapat berdiskusi dengan warga lainnya disini dengan memberikan komentar di forum diskusi.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
                        <div class="icon text-5xl">
                            <i class="far fa-vote-yea"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Voting</h3>
                            <p class="text-gray-600">Anda dapat memberikan suara untuk melakukan voting.</p>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Feature Section Start -->
    <div id="feature" class="bg-blue-100 py-24">
        <div class="container">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2">
                    <div class="mb-5 lg:mb-0">
                        <h4 class="font-semibold text-lg text-primary mb-2 wow fadeInDown" data-wow-delay="0.3s">
                            Pelayanan
                        </h4>
                        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Kami Selalu Ada untuk Anda</h2>
                        <div class="flex flex-wrap">
                            <div class="w-full sm:w-1/2 lg:w-1/2">
                                <div class="my-3">
                                    <div class="icon text-4xl">
                                        <i class="lni lni-layers"></i>
                                    </div>
                                    <div class="features-content">
                                        <h4 class="feature-title">Penanggapan</h4>
                                        <p> Keluhan yang Anda sampaikan akan segera kami tanggapi dengan secepatnya.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/2">
                                <div class="my-3">
                                    <div class="icon text-4xl">
                                        <i class="lni lni-gift"></i>
                                    </div>
                                    <div class="features-content">
                                        <h4 class="feature-title">Pemroresan</h4>
                                        <p> Keluhan Anda akan kami proses dengan cepat dan maksimal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/2">
                                <div class="my-3">
                                    <div class="icon text-4xl">
                                        <i class="lni lni-laptop-phone"></i>
                                    </div>
                                    <div class="features-content">
                                        <h4 class="feature-title">Kepuasan</h4>
                                        <p> Kami akan selalu bekerja dengan maksimal demi kepuasan anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/2">
                                <div class="my-3">
                                    <div class="icon text-4xl">
                                        <i class="lni lni-leaf"></i>
                                    </div>
                                    <div class="features-content">
                                        <h4 class="feature-title">Solusi</h4>
                                        <p> Kami juga akan memberikan solusi kepada Anda agar keluhan yang dihadapi dapat selesai dengan baik.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
                        <img src="img/feature/img-1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- carousel-area Section Start -->
    <section class="carousel-area py-32">
        <div class="container">
            <div class="text-center">
                <h4 class="font-semibold text-lg text-primary mb-2 wow fadeInDown" data-wow-delay="0.3s"> 
                    Informasi
                </h4>
                <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Proses Pengajuan Keluhan</h2>
            </div>
            <div class="flex">
                <div class="w-full relative">
                    <div class="portfolio-carousel">
                        <div class="transform hover:scale-105 transition duration-500 cursor-pointer ease-in-out">
                            <img class="w-full" src="img/slide/img1.jpg" alt="">
                            <div class="py-6 px-6">
                                <h3 class="mb-3 font-semibold text-xl text-dark truncate">Tulis Keluhan</h3>
                                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, excepturi?</p>
                            </div>
                        </div>
                        <div class="transform hover:scale-105 transition duration-500 cursor-pointer ease-in-out">
                            <img class="w-full" src="img/slide/img2.jpg" alt="">
                            <div class="py-6 px-6">
                                <h3 class="mb-3 font-semibold text-xl text-dark truncate">Diproses</h3>
                                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, excepturi?</p>
                            </div>
                        </div>
                        <div class="transform hover:scale-105 transition duration-500 cursor-pointer ease-in-out">
                            <img class="w-full" src="img/slide/img3.jpg" alt="">
                                <div class="py-6 px-6">
                                <h3 class="mb-3 font-semibold text-xl text-dark truncate">Menunggu Tanggapan</h3>
                                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, excepturi?</p>
                            </div>
                        </div>
                        <div class="transform hover:scale-105 transition duration-500 cursor-pointer ease-in-out">
                            <img class="w-full" src="img/slide/img4.jpg" alt="">
                            <div class="py-6 px-6">
                                <h3 class="mb-3 font-semibold text-xl text-dark truncate">Ditanggapi dan Selesai</h3>
                                <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, excepturi?</p>
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- carousel-area Section End -->

    {{-- Footer start --}}
    @include('partials.footer')
    {{-- Footer end --}}

    <!-- Preloader -->
    <!--     <div id="preloader">
          <div class="loader" id="loader-1"></div>
        </div> -->
    <!-- End Preloader -->


    {{-- Script Javascript start --}}
    <script >
        (function () {
            "use strict";

            //===== Preloader

            // window.onload = function () {
            //   window.setTimeout(fadeout, 500);
            // }

            // function fadeout() {
            //   document.querySelector('#preloader').style.opacity = '0';
            //   document.querySelector('#preloader').style.display = 'none';
            // }

            //======== tiny slider for portfolio
            var TNS = new tns({
                container: ".portfolio-carousel",
                items: 3,
                slideBy: "page",
                autoplay: false,
                mouseDrag: true,
                gutter: 30,
                nav: true,
                navPosition: "bottom",
                controls: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    765: {
                        items: 2,
                    },
                    1024: {
                        items: 3,
                    },
                },
            });
        })();
    </script>
    {{-- Script Javascript end --}}
@endsection
