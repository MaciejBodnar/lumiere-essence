{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')
    @php
        $testimonials = [
            [
                'text' =>
                    'Lorem ipsum dolor sit amet, consectetur sadipscing elit, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
                'name' => 'Alice Johnson',
            ],
            [
                'text' =>
                    'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem.',
                'name' => 'Michael Brown',
            ],
            [
                'text' =>
                    'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros.',
                'name' => 'Emily Davis',
            ],
            [
                'text' =>
                    'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.',
                'name' => 'David Wilson',
            ],
        ];
    @endphp
    <div>
        <section
            class="bg-[#EDD9D1] overflow-hidden sticky top-0 -z-10 h-[400px] md:h-screen w-full flex flex-col justify-center items-center">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ get_template_directory_uri() }}/resources/videos/movie-main.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-black/10"></div>
        </section>

        <section class="relative bg-white z-10">
            <div class="absolute bg-cover bg-center h-full w-full"
                style="background-image: url('{{ get_template_directory_uri() }}/resources/images/flower-bg-main.png'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                aria-hidden="true"></div>

            <div class="min-h-[618px] relative max-w-3xl mx-auto px-6 py-16 md:py-20 text-center flex flex-col justify-center"
                data-animate="fade-up">
                <p class="text-8xl mb-4 heading-1" data-animate="blur-in" data-animate-delay="200">
                    About
                </p>
                <h2 class="font-thin text-3xl text-[#3b2a27] mb-10 tracking-[0.25em] uppercase">
                    US
                </h2>
                <p class="font-thin text-lg text-[#7b6f69] leading-relaxed mb-8">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. At vero eos et accusamus et iusto
                    odio dignissimos ducimus qui blanditiis praesentium.
                </p>
                <div>
                    <a class="hover:cursor-pointer inline-flex items-center px-6 py-2 tracking-[0.25em] uppercase"
                        data-animate="fade-up" data-animate-delay="150">
                        Read more
                    </a>
                </div>
            </div>
        </section>

        <section class="relative bg-[#f6c6cf] overflow-hidden">
            <div class="hidden md:block absolute inset-y-0 right-0 w-1/2 bg-cover bg-center opacity-80" aria-hidden="true"
                data-animate="fade-left"
                style="background-image: url('{{ get_template_directory_uri() }}/resources/images/flower-face.png'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
            </div>
            <div class="md:hidden block absolute inset-y-0 right-0 w-full bg-contain opacity-80" aria-hidden="true"
                style="background-image: url('{{ get_template_directory_uri() }}/resources/images/flower-face-mobile.png'); background-size: contain; background-position: bottom; background-repeat: no-repeat;">
            </div>

            <div class="absolute inset-0 bg-linear-to-b from-[#f6c6cf] to-transparent pointer-events-none"
                aria-hidden="true"></div>

            <div class="relative max-w-6xl mx-auto px-4 lg:px-0 py-16 lg:py-24">
                <div class="grid md:grid-cols-2 items-center gap-24 md:gap-0">
                    <div class="flex justify-center md:justify-start" data-animate="zoom-in" data-animate-delay="100">
                        <div class="animate-float">
                            <div class="relative" data-tilt data-tilt-max="25" data-tilt-speed="400"
                                data-tilt-perspective="1000">
                                <img src="{{ get_template_directory_uri() }}/resources/images/machine-phone.png"
                                    alt="Skin analysis device"
                                    class="w-[260px] md:w-[320px] object-contain drop-shadow-xl" />
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 md:space-y-6">
                        <div data-animate="fade-up" class="flex flex-col md:gap-6 mb-24 md:mb-0">
                            <p class=" max-md:text-center tracking-[0.5em] text-3xl/10 uppercase text-[#3b2a27]">
                                Because your skin
                            </p>
                            <p class="text-center tracking-[0.5em] text-3xl/10 uppercase text-[#3b2a27]">
                                deserves the best
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative overflow-hidden bg-white grid grid-cols-3 md:grid-cols-1">

            <div class="relative col-span-3 md:col-span-1">
                <div class="absolute h-full w-full" aria-hidden="true"
                    style="background-image: url('{{ get_template_directory_uri() }}/resources/images/flowers.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                </div>
                <div
                    class="max-w-6xl mx-auto px-6 lg:px-0 py-16 lg:py-32 grid md:grid-cols-3 gap-12 items-center justify-center">
                    <div data-animate="fade-up" class="col-span-2 text-center">
                        <p class="text-8xl text-[#3b2a27] mb-2 heading-1" data-animate="blur-in" data-animate-delay="300">
                            Reviews
                        </p>
                        <p class="tracking-[0.35em] text-[10px] md:text-xs uppercase mb-6">
                            Lumiere
                        </p>
                        <div class="relative px-12">
                            <div id="testimonials-carousel" class="relative overflow-hidden">
                                <div class="flex transition-transform duration-300 ease-in-out">
                                    @foreach ($testimonials as $testimonial)
                                        <div class="w-full shrink-0 space-y-6 text-sm  leading-relaxed">
                                            <div>
                                                <p class="text-sm md:text-base text-[#7b6f69] leading-relaxed mb-6">
                                                    {{ $testimonial['text'] }}</p>
                                                <div
                                                    class="text-xs md:text-sm tracking-[0.25em] uppercase text-[#3b2a27] mb-6">
                                                    {{ $testimonial['name'] }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex justify-center items-center mt-4 gap-6">
                                <button id="testimonials-carousel-prev"
                                    class="text-[#3b2a27] hover:text-[#C49090] transition-colors">
                                    <i class="fa-solid fa-chevron-left fa-xs"></i>
                                </button>

                                <div class="flex space-x-2">
                                    @foreach ($testimonials as $index => $testimonial)
                                        <button
                                            class="testimonials-carousel-dot w-2 h-2 rounded-full border border-[#C49090]"
                                            data-slide="{{ $index }}"></button>
                                    @endforeach
                                </div>

                                <button id="testimonials-carousel-next"
                                    class="text-[#3b2a27] hover:text-[#C49090] transition-colors">
                                    <i class="fa-solid fa-chevron-right fa-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="relative max-w-6xl mx-auto w-full px-0 py-12 col-span-2 md:col-span-1 md:py-24 grid grid-cols-1 sm:grid-cols-4 gap-10 text-center">
                <div data-animate="blur-in">
                    <p class="text-9xl text-[#3b2a27] stats-1 mb-4">123</p>
                    <p class="tracking-[0.25em] text-[10px] md:text-lg uppercase text-[#7b6f69]">
                        Professional<br />products
                    </p>
                </div>

                <div data-animate="blur-in" data-animate-delay="120">
                    <p class="text-9xl text-[#3b2a27] stats-1 mb-4">45</p>
                    <p class="tracking-[0.25em] text-[10px] md:text-lg uppercase text-[#7b6f69]">
                        Aesthetic<br />treatments
                    </p>
                </div>

                <div data-animate="blur-in" data-animate-delay="220">
                    <p class="text-9xl text-[#3b2a27] stats-1 mb-4">6</p>
                    <p class="tracking-[0.25em] text-[10px] md:text-lg uppercase text-[#7b6f69]">
                        Years of<br />experience
                    </p>
                </div>
                <div></div>
            </div>
            <div class="md:ml-20 relative md:absolute md:inset-0 pointer-events-none flex justify-center md:block">
                <div class="max-w-6xl mx-auto h-full relative">
                    <div class="md:absolute md:top-10 md:right-0 md:w-1/3 md:flex md:justify-center translate-x-1/2 h-full md:translate-0"
                        data-animate="zoom-in" data-animate-delay="120">
                        <div class="animate-float w-full h-full flex justify-center">
                            <div class="relative w-full h-full flex justify-center" data-tilt data-tilt-max="25"
                                data-tilt-speed="400" data-tilt-perspective="1000">
                                <img src="{{ get_template_directory_uri() }}/resources/images/machine.png"
                                    alt="Aesthetic treatment device"
                                    class="w-full h-full max-h-[750px] object-contain drop-shadow-xl" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-white">
            <div class="absolute inset-0 z-0 bg-cover bg-center opacity-20" aria-hidden="true"
                style="background-image: url('{{ get_template_directory_uri() }}/resources//images/mirror.png'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
            </div>
            <div class="absolute inset-0 z-40 bg-[#EED9D1] mix-blend-multiply" aria-hidden="true"></div>

            <div
                class="min-h-[512px] flex justify-center flex-col items-center z-50 relative max-w-4xl mx-auto px-6 py-16 md:py-24 text-center">
                <div data-animate="fade-up">
                    <p class="tracking-[0.5em] text-3xl uppercase mb-3">
                        Ready to glow?
                    </p>
                    <p class="tracking-[0.5em] text-3xl uppercase mb-14">
                        Take the first step
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-10" data-animate="fade-up"
                    data-animate-delay="150">
                    <a href="#contact"
                        class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/10 transition-colors duration-300">
                        Contact us
                    </a>
                    <a href="#booking"
                        class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/20 transition-colors duration-300">
                        Book now
                    </a>
                </div>
            </div>
        </section>
    @endsection
