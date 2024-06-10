@extends('layouts.app')

@section('title', 'Intan & Taufik')

@section('content')
    <!-- PAGE LOADER -->
    <section class="overlay"
             id="loading">
        <div class="overlay-door"></div>
        <div class="overlay-content">
            <div class="loader">
                <div class="inner"></div>
            </div>
        </div>
    </section>

    <!-- MUSIC -->
    <div id="music" x-show="! cover">
        <div class="play" id="play-pause"></div>
        <audio id="track">
            <source src="{{ asset('assets/audio/music.mp3') }}" type="audio/mpeg" />
        </audio>
    </div>

    <section class="h-dvh z-50 overflow-hidden" id="cover" x-show="cover"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">
        <div class="relative h-1/2">
            <div class="relative h-full w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-full overflow-hidden brightness-75">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            src="{{ asset('assets/img/picture-1.jpeg') }}" alt="picture-1">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            src="{{ asset('assets/img/picture-2.jpeg') }}" alt="picture-2">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            src="{{ asset('assets/img/picture-3.jpeg') }}" alt="picture-3">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            src="{{ asset('assets/img/picture-4.jpeg') }}" alt="picture-4">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                            src="{{ asset('assets/img/picture-5.jpeg') }}" alt="picture-5">
                    </div>
                </div>
                <img class="absolute -bottom-2 z-30 fill-slate-600 shadow-2xl" src="{{ asset('assets/img/cover.svg') }}"
                    alt="cover">
            </div>
        </div>
        <div class="relative z-40 flex h-1/2 items-center justify-center bg-white">
            <img class="absolute -top-28 w-40" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="800"
                data-aos-anchor="cover" src="{{ asset('assets/img/flower-2.svg') }}" alt="flower">
            <div class="text-center">
                <p class="text-sm uppercase text-primary-600" data-aos="fade-down" data-aos-duration="2000"
                    data-aos-delay="1000" data-aos-anchor="cover">you are invited to the wedding of</p>
                <h4 class="my-4 text-start text-6xl text-secondary-600" data-aos="fade-up" data-aos-duration="2000"
                    data-aos-delay="1600" data-aos-anchor="cover">Intan & Taufik</h4>
                @if ($guest)
                    <div class="mt-4">
                        <div class="inline-flex w-full items-center justify-center" data-aos="fade-left"
                            data-aos-duration="2000" data-aos-delay="1200" data-aos-anchor="cover">
                            <hr class="mx-auto my-4 h-0.5 w-48 rounded-full border-0 bg-primary-800">
                            <span
                                class="absolute left-1/2 -translate-x-1/2 bg-white px-3 text-xs text-primary-900">TO</span>
                        </div>
                        <p class="text-md font-medium uppercase text-primary-600" data-aos="zoom-in"
                            data-aos-duration="2000" data-aos-delay="1900" data-aos-anchor="cover">
                            {{ $guest }}</p>
                        <hr class="mx-auto my-4 h-0.5 w-48 rounded-full border-0 bg-primary-800" data-aos="fade-right"
                            data-aos-duration="2000" data-aos-delay="1200" data-aos-anchor="cover">
                    </div>
                @endif

                <button
                    class="my-4 rounded-full bg-primary-700 px-6 py-4 text-center text-sm font-semibold uppercase text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300"
                    data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="2000" data-aos-easing="ease-in-out-back"
                    data-aos-anchor="cover" type="button"
                    x-on:click="cover = ! cover; playPause(); onElementHeightChange(document.body, function(){
                        AOS.refresh();
                      });">
                    <span class="pt-1">
                        Open Invitation
                    </span>
                </button>
            </div>
        </div>
    </section>

    <main class="z-10 overflow-x-hidden bg-primary-50 bg-contain bg-repeat-y bg-blend-multiply" id="main"
        style="background-image: url('data:image/jpeg;base64,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')">

        <section class="h-dvh flex items-center justify-center">
            <div class="text-center">
                <div class="relative">
                    <div class="relative mx-auto h-14 w-14">
                        <div class="absolute left-5 top-5 -translate-x-1/2 -translate-y-1/2">
                            <h6 class="text-4xl text-secondary-600" data-aos="fade-down-right" data-aos-duration="2000"
                                data-aos-delay="600" data-aos-easing="ease-in-out-back" data-aos-anchor="#hero">
                                I</h6>
                        </div>
                        <div class="absolute bottom-5 right-5 translate-x-1/2 translate-y-1/2">
                            <h6 class="text-4xl text-secondary-600" data-aos="fade-up-left" data-aos-duration="2000"
                                data-aos-delay="600" data-aos-easing="ease-in-out-back" data-aos-anchor="#hero">
                                T</h6>
                        </div>
                    </div>
                    <p class="my-8 mt-4 text-primary-600" data-aos="fade-down" data-aos-duration="2000"
                        data-aos-delay="1000" data-aos-anchor="#hero">
                        WEDDING INVITATION
                    </p>
                </div>
                <div class="relative">
                    <div class="absolute -top-8 left-1/2 z-30 -translate-x-1/2">
                        <img class="w-20" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="500"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-3.svg') }}"
                            alt="decoration-flower">
                    </div>

                    <div class="absolute left-4 top-12 z-30 w-10 -translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="100"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-5.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-2 top-20 z-30 -translate-x-1/2">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-7.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-2 top-24 z-30 -translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-9.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-2 top-32 z-30 -translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="400"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-8.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-2 top-40 z-30 -translate-x-1/2">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="500"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-16.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-2 top-44 z-30 -translate-x-1/2">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="600"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-6.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-2 top-48 z-30 -translate-x-1/2">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="700"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-10.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-2 top-56 z-30 -translate-x-1/2">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="800"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-11.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-2 top-64 z-30 -translate-x-1/2">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="900"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-12.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-4 top-64 z-30 -translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-13.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute left-6 top-72 z-30 -translate-x-1/2">
                        <img class="w-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1100"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-15.svg') }}"
                            alt="decoration-flower">
                    </div>

                    <div class="absolute right-4 top-12 z-30 translate-x-1/2">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-5.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-2 top-20 z-30 translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-7.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-2 top-24 z-30 translate-x-1/2">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-9.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-2 top-32 z-30 translate-x-1/2">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-8.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-2 top-40 z-30 translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-16.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-2 top-44 z-30 translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-6.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-2 top-48 z-30 translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-10.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-2 top-56 z-30 translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-11.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-2 top-64 z-30 translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="900"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-12.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-4 top-64 z-30 translate-x-1/2">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-13.svg') }}"
                            alt="decoration-flower">
                    </div>
                    <div class="absolute right-6 top-72 z-30 translate-x-1/2 -scale-x-100 transform">
                        <img class="w-10" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1100"
                            data-aos-anchor="#hero" src="{{ asset('assets/img/flower-15.svg') }}"
                            alt="decoration-flower">
                    </div>

                    <img class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-90 mix-blend-multiply"
                        src="{{ asset('assets/img/watercolor-2.png') }}">
                    <img class="absolute bottom-1/2 right-0 translate-x-1/2 translate-y-1/2 -rotate-90 -scale-x-100 transform mix-blend-multiply"
                        src="{{ asset('assets/img/watercolor-2.png') }}">

                    <img id="hero" class="mx-auto h-96 rounded-full border-8 border-double border-primary-500" data-aos="zoom-in"
                        data-aos-duration="2000" data-aos-delay="100" data-aos-anchor="#hero"
                        src="{{ asset('assets/img/cover.JPG') }}" alt="hero-image">


                    <h5 class="my-8 text-start text-5xl text-secondary-600" data-aos="zoom-in-down"
                        data-aos-duration="2000" data-aos-delay="1200" data-aos-anchor="#hero">Intan & Taufik
                    </h5>
                </div>
                <div class="mx-auto flex items-center justify-center">
                    <svg class="bi bi-arrow-down-circle h-10 w-10 animate-bounce text-primary-500"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                    </svg>
                </div>
            </div>
        </section>

        <section class="h-fit bg-white py-8 text-center">
            <h5 class="my-8 text-5xl text-secondary-600" data-aos="fade-down" data-aos-duration="2000"
                data-aos-delay="100" data-aos-anchor="#bride">The Wedding Of</h5>
            <p class="font-base m-8 text-sm text-primary-600" data-aos="fade-down" data-aos-duration="2000"
                data-aos-delay="300" data-aos-anchor="#bride">
                Assalamualaikum Warahmatullahi Wabarakatuh with the blessing and mercy from Allah SWT, We cordially invite
                you to the wedding of :
            </p>

            <div class="grid gap-4 px-6">
                <div class="rounded-xl border border-primary-600" data-aos="fade-right" data-aos-duration="2000"
                    data-aos-delay="500" data-aos-anchor="#bride">
                    <div class="border-b border-primary-700 text-2xl font-semibold text-secondary-600">
                        <h6 class="py-4" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="1000"
                            data-aos-anchor="#bride">
                            Intan Nurul Dwi Utari, S.Kep., Ns.
                        </h6>
                    </div>
                    <div class="mx-auto mt-6 max-w-[300px] px-6 text-center">
                        <img id="bride" class="rounded-b-[50px] rounded-t-[125px]" data-aos-duration="2000" data-aos-delay="800"
                            data-aos-anchor="#bride" data-aos="zoom-in-right" data-aos-easing="ease-in-out-back"
                            src="{{ asset('assets/img/bride.jpg') }}" alt="">
                    </div>
                    <p class="my-4 text-primary-900" data-aos="fade-right" data-aos-duration="2000"
                        data-aos-delay="1200" data-aos-anchor="#bride">Putri ke-2 Bapak Warsino & Ibu Sumarmi</p>
                    <hr class="mx-auto mb-6 h-0.5 w-24 rounded border-0 bg-primary-600">
                </div>
            </div>
            <div class="grid gap-4 px-4 py-6">
                <h4 class="text-center text-6xl text-secondary-600" data-aos="flip-down" data-aos-duration="2000"
                    data-aos-delay="500">
                    &
                </h4>
            </div>
            <div class="grid gap-4 px-6">
                <div class="rounded-xl border border-primary-600" data-aos="fade-left" data-aos-duration="2000"
                    data-aos-delay="500" data-aos-anchor="#groom">
                    <div class="border-b border-primary-700 text-2xl font-semibold text-secondary-600">
                        <h6 class="py-4" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="1000"
                            data-aos-anchor="#groom">
                            Taufik Hidayat, S.Tr.T.
                        </h6>
                    </div>
                    <div class="mx-auto mt-6 max-w-[300px] px-6 text-center">
                        <img id="groom" class="rounded-b-[50px] rounded-t-[125px]" data-aos-duration="2000" data-aos-delay="800"
                            data-aos-anchor="#groom" data-aos="zoom-in-left" data-aos-easing="ease-in-out-back"
                            src="{{ asset('assets/img/groom.jpg') }}" alt="">
                    </div>
                    <p class="my-4 text-primary-900" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="1200"
                        data-aos-anchor="#groom">Putra ke-2 Bapak H. Yakub & Ibu Rosnani</p>
                    <hr class="mx-auto mb-6 h-0.5 w-24 rounded border-0 bg-primary-600">
                </div>
            </div>
        </section>

        <section class="relative h-fit bg-primary-600 py-8 pt-16 text-white">
            <div class="divider">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path class="shape-fill"
                        d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z"></path>
                </svg>
            </div>
            <div class="mx-4 h-full rounded-[50px] bg-primary-800 py-8 text-center">
                <div class="mb-8 px-8 text-left">
                    <p data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200"
                        data-aos-anchor="#countdown">Countdown to</p>
                    <h6 class="text-4xl text-white" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="600"
                        data-aos-anchor="#countdown">Our Happy Day</h6>
                </div>
                <div class="pt-4">
                    <p id="countdown" class="text-xl font-light" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="50"
                        data-aos-anchor="#countdown">
                        Minggu, 23 Juni 2024
                    </p>
                </div>
                <div class="mx-8 flex justify-between">
                    <div class="flex h-20 w-20 items-center justify-center p-2 text-sm" data-aos="fade-up"
                        data-aos-duration="2000" data-aos-delay="100" data-aos-anchor="#countdown">
                        <div class="text-white">
                            <span class="block text-3xl font-medium" id="days">
                            </span>
                            Days
                        </div>
                    </div>
                    <div class="flex h-20 w-20 items-center justify-center p-2 text-sm" data-aos="fade-up"
                        data-aos-duration="2000" data-aos-delay="300" data-aos-anchor="#countdown">
                        <div class="text-white">
                            <span class="block text-3xl font-medium" id="hours">
                            </span>
                            Hours
                        </div>
                    </div>
                    <div class="flex h-20 w-20 items-center justify-center p-2 text-sm" data-aos="fade-up"
                        data-aos-duration="2000" data-aos-delay="500" data-aos-anchor="#countdown">
                        <div class="text-white">
                            <span class="block text-3xl font-medium" id="minutes">
                            </span>
                            Minutes
                        </div>
                    </div>
                    <div class="flex h-20 w-20 items-center justify-center p-2 text-sm" data-aos="fade-up"
                        data-aos-duration="2000" data-aos-delay="700" data-aos-anchor="#countdown">
                        <div class="text-white">
                            <span class="block text-3xl font-medium" id="seconds">
                            </span>
                            Seconds
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative h-fit py-8 text-white">
            <div class="absolute -left-14 top-24 z-50 translate-x-1/2 -scale-x-100 transform">
                <img class="w-20" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-9.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute -top-10 right-28 z-0 translate-x-1/2">
                <img class="w-40" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-18.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute right-0 top-0 z-0 translate-x-1/2">
                <img class="w-40" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-10.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute -right-3 top-16">
                <img class="w-20" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-19.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute right-24 top-0 -scale-x-100 transform">
                <img class="w-20" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-19.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute right-16 top-4 z-0 translate-x-1/2 rotate-45 -scale-x-100 transform">
                <img class="w-16" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-14.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute right-16 top-4 z-0 translate-x-1/2 rotate-45 -scale-x-100 transform">
                <img class="w-16" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-11.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute right-28 top-6 z-20 translate-x-1/2">
                <img class="w-20" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="1200"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-13.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute right-8 top-28 z-20 translate-x-1/2 rotate-45">
                <img class="w-12" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="1000"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-6.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute right-20 top-20 z-20 translate-x-1/2">
                <img class="w-20" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="1000"
                    data-aos-anchor="#event" src="{{ asset('assets/img/flower-7.svg') }}"
                    alt="decoration-flower">
            </div>
            <div
                class="relative z-10 mx-4 h-full space-y-8 rounded-b-[32px] rounded-t-[300px] bg-primary-800 pb-4 pt-24 text-center">
                <div class="space-y-8">
                    <div class="space-y-4 px-4">
                        <h6 class="text-4xl text-white" data-aos="fade-down" data-aos-duration="2000"
                            data-aos-delay="600" data-aos-anchor="#event">
                            Akad Nikah
                        </h6>
                        <div class="space-y-2">
                            <p class="text-xl font-light" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#event">
                                Minggu, 23 Juni 2024
                            </p>
                            <p class="text-lg" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="800"
                                data-aos-anchor="#event">08:00 - 10:00
                            </p>
                        </div>
                    </div>
                    <div class="space-y-4 px-4">
                        <h6 class="text-4xl text-white" data-aos="fade-down" data-aos-duration="2000"
                            data-aos-delay="1000" data-aos-anchor="#event">
                            Resepsi
                        </h6>
                        <div class="space-y-2">
                            <p class="text-xl font-light" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="50" data-aos-anchor="#event">
                                Minggu, 23 Juni 2024
                            </p>
                            <p class="text-lg" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1200"
                                data-aos-anchor="#event">11:00 - Selesai
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4 px-4">
                    {{-- <div>
                        <p class="text-xl">Hotel Indonesia Kempinski Jakarta</p>
                    </div> --}}
                    <p class="text-sm font-light" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1600"
                        data-aos-anchor="#event">
                        Jl. Pramuka 2 No. 39 RT 02 RW 02, Kel. Mampang, Kec. Pancoran Mas, Depok, Jawa Barat, 16433
                    </p>
                    <div class="p-4 pt-0" id="event" data-aos="zoom-in-up" data-aos-duration="2000"
                        data-aos-delay="2000" data-aos-anchor="#event" data-aos-easing="ease-in-out-back">
                        <iframe class="w-full rounded-xl"
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1178.7953656459072!2d106.79422336676869!3d-6.396683183326227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMjMnNDcuOSJTIDEwNsKwNDcnNDIuNiJF!5e0!3m2!1sen!2sid!4v1715260615505!5m2!1sen!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="h-fit px-4 py-8" id="gallery" x-data="gallery()">
            <h5 class="my-8 text-center text-5xl text-secondary-600" data-aos="fade-down" data-aos-duration="2000"
                data-aos-delay="200">Our Gallery</h5>
            <div class="grid grid-cols-2 gap-4">
                <div class="grid gap-4">
                    <a data-aos="fade-down" data-aos-duration="2000" data-aos-delay="400"
                    href="{{ asset('assets/img/gallery-1.jpg') }}"
                        x-on:click.prevent="open">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/img/gallery-1.jpg') }}"
                            alt="">
                    </a>
                    <a data-aos="fade-down" data-aos-duration="2000" data-aos-delay="800"
                    href="{{ asset('assets/img/gallery-3.jpg') }}"
                        x-on:click.prevent="open">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/img/gallery-3.jpg') }}"
                            alt="">
                    </a>
                    <a data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1200"
                    href="{{ asset('assets/img/gallery-2.jpg') }}"
                        x-on:click.prevent="open">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/img/gallery-2.jpg') }}"
                            alt="">
                    </a>
                </div>
                <div class="grid gap-4">
                    <a data-aos="fade-down" data-aos-duration="2000" data-aos-delay="600"
                    href="{{ asset('assets/img/gallery-5.jpg') }}"
                        x-on:click.prevent="open">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/img/gallery-5.jpg') }}"
                            alt="">
                    </a>
                    <a data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1000"
                    href="{{ asset('assets/img/gallery-6.jpg') }}"
                        x-on:click.prevent="open">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/img/gallery-6.jpg') }}"
                            alt="">
                    </a>
                    <a data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1400"
                    href="{{ asset('assets/img/gallery-7.jpg') }}"
                        x-on:click.prevent="open">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/img/gallery-7.jpg') }}"
                            alt="">
                    </a>
                </div>
            </div>

            <div class="fixed inset-0 z-[999] flex items-center justify-center bg-black bg-opacity-90"
                style="display: none" x-show="isOpen()" x-transition:enter="transition ease-in-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:leave="transition ease-in-in duration-300"
                x-transition:leave-end="opacity-0" x-on:click="close" x-on:keydown.window.escape="close">
                <img class="h-4/5 w-4/5 object-contain object-center" alt="" x-show="isOpen()"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-50"
                    x-transition:leave="transition ease-in-in duration-300"
                    x-transition:leave-end="opacity-0 transform scale-50" x-bind:src="activeImageUrl">
            </div>
        </section>

        <section
            class="relative my-16 block h-fit before:absolute before:left-[50%] before:top-[50%] before:h-full before:w-[160%] before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-[1000px] before:bg-primary-600 before:content-['']"
            x-data="{ bank: 'BNI' }">
            <!-- Top -->
            <div class="absolute -top-8 left-1/2 z-30 -translate-x-1/2">
                <img class="w-[36rem]" data-aos="zoom-in" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="500" src="{{ asset('assets/img/flower-1.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute top-6 left-8 z-10 rotate-45 -translate-x-1/2">
                <img class="w-16" data-aos="fade-right" data-aos-duration="1200" data-aos-anchor="#gift" data-aos-delay="100" src="{{ asset('assets/img/flower-10.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute top-6 right-8 z-10 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-16" data-aos="fade-right" data-aos-duration="1200" data-aos-anchor="#gift" data-aos-delay="100" src="{{ asset('assets/img/flower-10.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute top-6 left-8 z-30 rotate-45 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-6.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute top-6 right-8 z-30 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-6.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute top-2 left-16 z-30 rotate-45 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-5.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute top-2 right-16 z-30 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-5.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute top-2 left-16 z-20 rotate-45 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-19.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute top-2 right-16 z-20 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-19.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute top-0 left-24 z-20 rotate-45 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-7.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute top-0 right-24 z-20 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-7.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute top-0 left-24 z-10 -rotate-90 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="600" src="{{ asset('assets/img/flower-18.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute top-0 right-24 z-10 rotate-90 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="600" src="{{ asset('assets/img/flower-18.svg') }}"
                    alt="decoration-flower">
            </div>

            <!-- Bottom -->
            <div class="absolute -bottom-8 left-1/2 z-30 -translate-x-1/2 -scale-y-100 transform">
                <img class="w-[36rem]" data-aos="zoom-in" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="500" src="{{ asset('assets/img/flower-1.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute bottom-6 left-8 z-10 rotate-45 -translate-x-1/2">
                <img class="w-16" data-aos="fade-right" data-aos-duration="1200" data-aos-anchor="#gift" data-aos-delay="100" src="{{ asset('assets/img/flower-10.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute bottom-6 right-8 z-10 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-16" data-aos="fade-right" data-aos-duration="1200" data-aos-anchor="#gift" data-aos-delay="100" src="{{ asset('assets/img/flower-10.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute bottom-6 left-8 z-30 rotate-45 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-6.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute bottom-6 right-8 z-30 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-6.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute bottom-2 left-16 z-30 rotate-45 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-5.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute bottom-2 right-16 z-30 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-5.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute bottom-2 left-16 z-20 rotate-45 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-19.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute bottom-2 right-16 z-20 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-19.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute bottom-0 left-24 z-20 rotate-45 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-7.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute bottom-0 right-24 z-20 -rotate-45 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="300" src="{{ asset('assets/img/flower-7.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="absolute bottom-0 left-24 z-10 -rotate-90 -translate-x-1/2">
                <img class="w-10" data-aos="zoom-in" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="600" src="{{ asset('assets/img/flower-18.svg') }}"
                    alt="decoration-flower">
            </div>
            <div class="absolute bottom-0 right-24 z-10 rotate-90 translate-x-1/2 -scale-x-100 transform">
                <img class="w-10" data-aos="zoom-in" data-aos-duration="2000" data-aos-anchor="#gift" data-aos-delay="600" src="{{ asset('assets/img/flower-18.svg') }}"
                    alt="decoration-flower">
            </div>

            <div class="relative px-4 py-20 text-center">
                <h5 class="my-8 text-5xl text-white" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200"
                    data-aos-anchor="#gift">Wedding Gift</h5>
                <p class="font-base mx-4 my-8 text-sm text-white" data-aos="fade-down" data-aos-duration="2000"
                    data-aos-delay="400" data-aos-anchor="#gift">
                    Your blessing and coming to our wedding are enough for us. However, if you want to give a gift we
                    provide a Bank Account to make it easier for you.
                </p>
                <select id="gift"
                    class="*:text-primary-800 *:font-bold block w-full rounded-full border border-gray-300 bg-gray-50 px-3 py-3 text-base font-bold uppercase text-secondary-600 focus:border-secondary-600 focus:ring-secondary-600"
                    data-aos="fade-down" data-aos-duration="2000" data-aos-delay="600" data-aos-anchor="#gift"
                    x-model="bank">
                    <option value="BNI">Bank Negara Indonesia (BNI)</option>
                    <option value="BSI">Bank Syariah Indonesia (BSI)</option>
                    <option value="Mandiri">Bank Mandiri</option>
                    <option value="BCA">Bank Central Asia (BCA)</option>
                </select>

                <div class="mx-4 my-8 space-y-8" x-show="bank == 'BNI'">
                    <h6 class="text-lg font-semibold uppercase text-white" data-aos="fade-down" data-aos-duration="2000"
                        data-aos-delay="800" data-aos-anchor="#gift">
                        Bank Negara Indonesia (BNI)
                    </h6>
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <p class="font-base text-sm text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Account Number
                            </p>
                            <div class="flex justify-center" x-data="{ input: '1399345400', showMsg: false }">
                                <div class="w-fit">
                                    <a class="group inline-flex w-full cursor-copy items-center space-x-2 truncate text-white"
                                        data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300"
                                        data-aos-anchor="#gift" type="button"
                                        x-on:click="navigator.clipboard.writeText(input), showMsg = true, setTimeout(() => showMsg = false, 1000)">
                                        <p class="text-2xl font-semibold text-white">
                                            1399345400
                                        </p>
                                        <svg class="h-7 w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M18 3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V9a4 4 0 0 0-4-4h-3a1.99 1.99 0 0 0-1 .267V5a2 2 0 0 1 2-2h7Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M8 7.054V11H4.2a2 2 0 0 1 .281-.432l2.46-2.87A2 2 0 0 1 8 7.054ZM10 7v4a2 2 0 0 1-2 2H4v6a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="fixed right-3 top-3 z-20 flex max-w-full items-center overflow-hidden rounded-lg border border-green-300 bg-green-50 p-4 text-sm text-green-800"
                                    role="alert" style="display: none;" x-show="showMsg"
                                    x-on:click.away="showMsg = false">
                                    <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        Copied account number
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="font-base text-sm text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Account Name
                            </p>
                            <p class="text-2xl font-semibold text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Intan Nurul Dwi Utari
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mx-4 my-8 space-y-8" x-show="bank == 'BSI'">
                    <h6 class="text-lg font-semibold uppercase text-white" data-aos="fade-down" data-aos-duration="2000"
                        data-aos-delay="300" data-aos-anchor="#gift">
                        Bank Syariah Indonesia (BSI)
                    </h6>
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <p class="font-base text-sm text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Account Number
                            </p>
                            <div class="flex justify-center" x-data="{ input: '7261839134', showMsg: false }">
                                <div class="w-fit">
                                    <a class="group inline-flex w-full cursor-copy items-center space-x-2 truncate text-white"
                                        data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300"
                                        data-aos-anchor="#gift" type="button"
                                        x-on:click="navigator.clipboard.writeText(input), showMsg = true, setTimeout(() => showMsg = false, 1000)">
                                        <p class="text-2xl font-semibold text-white">
                                            7261839134
                                        </p>
                                        <svg class="h-7 w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M18 3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V9a4 4 0 0 0-4-4h-3a1.99 1.99 0 0 0-1 .267V5a2 2 0 0 1 2-2h7Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M8 7.054V11H4.2a2 2 0 0 1 .281-.432l2.46-2.87A2 2 0 0 1 8 7.054ZM10 7v4a2 2 0 0 1-2 2H4v6a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="fixed right-3 top-3 z-20 flex max-w-full items-center overflow-hidden rounded-lg border border-green-300 bg-green-50 p-4 text-sm text-green-800"
                                    role="alert" style="display: none;" x-show="showMsg"
                                    x-on:click.away="showMsg = false">
                                    <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        Copied account number
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="font-base text-sm text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Account Name
                            </p>
                            <p class="text-2xl font-semibold text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Intan Nurul Dwi Utari
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mx-4 my-8 space-y-8" x-show="bank == 'Mandiri'">
                    <h6 class="text-lg font-semibold uppercase text-white" data-aos="fade-down" data-aos-duration="2000"
                        data-aos-delay="300" data-aos-anchor="#gift">
                        Bank Mandiri
                    </h6>
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <p class="font-base text-sm text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Account Number
                            </p>
                            <div class="flex justify-center" x-data="{ input: '1300018971559', showMsg: false }">
                                <div class="w-fit">
                                    <a class="group inline-flex w-full cursor-copy items-center space-x-2 truncate text-white"
                                        data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300"
                                        data-aos-anchor="#gift" type="button"
                                        x-on:click="navigator.clipboard.writeText(input), showMsg = true, setTimeout(() => showMsg = false, 1000)">
                                        <p class="text-2xl font-semibold text-white">
                                            1300018971559
                                        </p>
                                        <svg class="h-7 w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M18 3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V9a4 4 0 0 0-4-4h-3a1.99 1.99 0 0 0-1 .267V5a2 2 0 0 1 2-2h7Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M8 7.054V11H4.2a2 2 0 0 1 .281-.432l2.46-2.87A2 2 0 0 1 8 7.054ZM10 7v4a2 2 0 0 1-2 2H4v6a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="fixed right-3 top-3 z-20 flex max-w-full items-center overflow-hidden rounded-lg border border-green-300 bg-green-50 p-4 text-sm text-green-800"
                                    role="alert" style="display: none;" x-show="showMsg"
                                    x-on:click.away="showMsg = false">
                                    <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        Copied account number
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="font-base text-sm text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Account Name
                            </p>
                            <p class="text-2xl font-semibold text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Taufik Hidayat
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mx-4 my-8 space-y-8" x-show="bank == 'BCA'">
                    <h6 class="text-lg font-semibold uppercase text-white" data-aos="fade-down" data-aos-duration="2000"
                        data-aos-delay="300" data-aos-anchor="#gift">
                        Bank Central Asia (BCA)
                    </h6>
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <p class="font-base text-sm text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Account Number
                            </p>
                            <div class="flex justify-center" x-data="{ input: '5765646461', showMsg: false }">
                                <div class="w-fit">
                                    <a class="group inline-flex w-full cursor-copy items-center space-x-2 truncate text-white"
                                        data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300"
                                        data-aos-anchor="#gift" type="button"
                                        x-on:click="navigator.clipboard.writeText(input), showMsg = true, setTimeout(() => showMsg = false, 1000)">
                                        <p class="text-2xl font-semibold text-white">
                                            5765646461
                                        </p>
                                        <svg class="h-7 w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M18 3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V9a4 4 0 0 0-4-4h-3a1.99 1.99 0 0 0-1 .267V5a2 2 0 0 1 2-2h7Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M8 7.054V11H4.2a2 2 0 0 1 .281-.432l2.46-2.87A2 2 0 0 1 8 7.054ZM10 7v4a2 2 0 0 1-2 2H4v6a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="fixed right-3 top-3 z-20 flex max-w-full items-center overflow-hidden rounded-lg border border-green-300 bg-green-50 p-4 text-sm text-green-800"
                                    role="alert" style="display: none;" x-show="showMsg"
                                    x-on:click.away="showMsg = false">
                                    <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        Copied account number
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="font-base text-sm text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Account Name
                            </p>
                            <p class="text-2xl font-semibold text-white" data-aos="fade-down" data-aos-duration="2000"
                                data-aos-delay="300" data-aos-anchor="#gift">
                                Taufik Hidayat
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="relative px-4 py-8">
            <h5 class="my-8 text-center text-5xl text-secondary-600" data-aos="fade-down" data-aos-duration="2000"
                data-aos-delay="200" data-aos-anchor="#wishes">Wishes</h5>
            <form x-data="formData()">
                <div class="space-y-8 px-4">
                    <div class="bg-primary-400/35 mb-4 rounded-lg p-4 text-sm text-primary-800" role="alert"
                        x-show="success">
                        <span class="font-medium">Thank you for your wish!
                    </div>
                    <div x-show="! success">
                        <div class="relative z-0" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400"
                            data-aos-anchor="#wishes">
                            <input
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-primary-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-primary-500"
                                id="name" type="text" x-model="name" placeholder=" " autocomplete="off" />
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-primary-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-primary-500"
                                for="name">Your name</label>
                        </div>
                    </div>
                    <div x-show="! success">
                        <div class="relative z-0 grid text-sm after:invisible after:whitespace-pre-wrap after:border after:px-3.5 after:py-2.5 after:text-inherit after:content-[attr(data-cloned-val)_'_'] after:[grid-area:1/1/2/2] [&>textarea]:resize-none [&>textarea]:overflow-hidden [&>textarea]:text-inherit [&>textarea]:[grid-area:1/1/2/2]"
                            data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600"
                            data-aos-anchor="#wishes">
                            <textarea
                                class="peer block w-full resize-none appearance-none border-0 border-b-2 border-gray-300 bg-transparent px-0 py-2.5 text-sm text-gray-900 focus:border-primary-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-primary-500"
                                id="wish" x-model="wish" rows="1" placeholder=" "
                                oninput="this.parentNode.dataset.clonedVal = this.value"></textarea>
                            <label
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-primary-600 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-primary-500"
                                for="wish">Give your wish</label>
                        </div>
                    </div>
                </div>
                <div class="text-center" x-show="! success">
                    <button id="wishes"
                        class="mt-6 inline-flex items-center justify-center rounded-full bg-primary-700 px-6 py-4 text-center align-middle text-sm font-semibold uppercase text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300"
                        data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="800"
                        data-aos-easing="ease-in-out-back" data-aos-anchor="#wishes" type="button"
                        x-show="! loading" x-on:click.prevent="submitForm">
                        <span class="pt-1">
                            Send
                        </span>
                    </button>
                    <button
                        class="cursor-loading mt-6 inline-flex items-center justify-center gap-2 rounded-full bg-primary-700 px-6 py-4 text-center align-middle text-sm font-semibold uppercase text-white"
                        data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="800"
                        data-aos-easing="ease-in-out-back" data-aos-anchor="#wishes" x-show="loading" disabled>
                        <span role="status">
                            <svg class="h-4 w-4 animate-spin fill-blue-600 text-gray-200 dark:text-gray-600"
                                aria-hidden="true" viewBox="0 0 100 101" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </span>
                        <span class="pt-1">
                            Sending...
                        </span>
                    </button>
                </div>
            </form>

            <div class="my-8 max-h-80 space-y-4 overflow-y-auto" data-aos="zoom-in" data-aos-duration="2000"
                data-aos-delay="1000" data-aos-anchor="#wishes" x-data="wishesData()" x-init="getWishes()">
                <div class="flex items-start gap-2.5">
                    <img class="h-8 w-8 rounded-full" src="{{ asset('assets/img/logo.png') }}" alt="">
                    <div
                        class="leading-1.5 flex w-full flex-col rounded-e-xl rounded-es-xl border-gray-200 bg-gray-100 p-4">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="text-sm font-semibold text-primary-800">diginvee</span>
                            <span class="text-sm font-normal text-primary-600">
                                <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <p class="py-2.5 text-sm font-normal text-primary-800">
                            Dear Intan and Taufik, May your union be a beacon of inspiration for us all. Congratulations on
                            your wedding day, and may your love story continue to flourish in the years to come!
                        </p>
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">09-05-2024 11:46</span>
                    </div>
                </div>
                <template x-for="wish in wishes" x-on:wishes-updated.window="getWishes()">
                    <div class="flex items-start gap-2.5" x-data="{ src: 'https://ui-avatars.com/api/?background=406789&color=fff&name=' + wish.name }">
                        <img class="h-8 w-8 rounded-full" alt="" x-bind:src="src">
                        <div
                            class="leading-1.5 flex w-full flex-col rounded-e-xl rounded-es-xl border-gray-200 bg-gray-100 p-4">
                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                <span class="text-sm font-semibold text-primary-800" x-text="wish.name"></span>
                            </div>
                            <p class="py-2.5 text-sm font-normal text-primary-800" x-text="wish.wish"></p>
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"
                                x-text="wish.created_at"></span>
                        </div>
                    </div>
                </template>
            </div>

        </section>
    </main>
@endsection

@section('script')
    <script type="text/javascript">
        function onElementHeightChange(elm, callback) {
            var lastHeight = elm.clientHeight
            var newHeight;

            (function run() {
                newHeight = elm.clientHeight;
                if (lastHeight !== newHeight) callback();
                lastHeight = newHeight;

                if (elm.onElementHeightChangeTimer) {
                    clearTimeout(elm.onElementHeightChangeTimer);
                }

                elm.onElementHeightChangeTimer = setTimeout(run, 0);
            })();
        }

        // Countdown Timer

        // Set the date we're counting down to
        var countDownDate = new Date("06/23/2024 11:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("days").innerHTML = 0;
                document.getElementById("hours").innerHTML = 0;
                document.getElementById("minutes").innerHTML = 0;
                document.getElementById("seconds").innerHTML = 0;
            }
        }, 1000);

        function gallery() {
            return {
                show: false,
                activeImageUrl: null,

                isOpen() {
                    return this.show
                },

                open($event) {
                    this.activeImageUrl = $event.target.parentNode.href
                    this.show = true
                },

                close() {
                    this.show = false
                    // Clear the active image URL after the image closed
                    setTimeout(() => this.activeImageUrl = null, 300)
                }
            }
        }

        function wishesData() {
            return {
                wishes: [],
                getWishes: function() {
                    fetch('{!! route('wish.index') !!}')
                        .then(response => response.json())
                        .then(data => this.wishes = data);
                },
            }
        }

        function formData() {
            return {
                loading: false,
                success: false,
                name: '{!! $guest ?? '' !!}',
                wish: '',
                submitForm() {
                    this.loading = true;
                    axios.post('{!! route('wish.store') !!}', {
                            name: this.name,
                            wish: this.wish
                        })
                        .then(response => {
                            // Handle response if needed
                            this.name = '';
                            this.wish = '';
                            this.$nextTick(() => {
                                this.$dispatch('wishes-updated');
                            });
                            this.loading = false;
                            this.success = true;
                        })
                        .catch(error => {
                            // Handle errors if any
                            console.error(error);
                            this.loading = false;
                        });
                }
            };
        }
    </script>
@endsection
