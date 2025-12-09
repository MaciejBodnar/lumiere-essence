{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')
    <section class="relative bg-[#EDD9D1] overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">
            <div class="flex items-center gap-10">
                <div class="md:text-left text-center md:order-1 order-2" data-animate="fade-up">
                    <p class="tracking-[0.35em] text-xs md:text-sm uppercase text-[#3b2a27]">
                        Confidence begins
                    </p>
                </div>

                <div class="flex justify-center md:order-2 order-1" data-animate="fade-up">
                    <img src="{{ get_template_directory_uri() }}/resources/images/cropped.png" alt="Woman with clear skin"
                        class="max-h-[638px] h-full min-w-full object-cover" />
                </div>

                <div class="md:text-right text-center md:order-3 order-3" data-animate="fade-up">
                    <p class="tracking-[0.35em] text-xs md:text-sm uppercase text-[#3b2a27]">
                        With skin you love
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="relative bg-white">
        <!-- soft flower background -->
        <div class="pointer-events-none absolute inset-0 opacity-20 mix-blend-lighten bg-[url('/images/flower-soft.jpg')] bg-cover bg-center"
            aria-hidden="true"></div>

        <div class="relative max-w-3xl mx-auto px-6 py-16 md:py-20 text-center" data-animate="fade-up">
            <p class="text-sm tracking-[0.35em] uppercase text-[#b1a8a3] mb-4">
                About
            </p>
            <h2 class="font-serif italic text-4xl md:text-5xl text-[#3b2a27] mb-4">
                Us
            </h2>
            <p class="text-sm md:text-base text-[#7b6f69] leading-relaxed mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. At vero eos et accusamus et iusto
                odio dignissimos ducimus qui blanditiis praesentium.
            </p>
            <button
                class="inline-flex items-center px-6 py-2 border border-[#c9b6aa] text-xs tracking-[0.25em] uppercase text-[#7b6f69] hover:bg-[#f6ede8] transition-colors duration-300"
                data-animate="fade-up" data-animate-delay="150">
                Read more
            </button>
        </div>
    </section>

    <!-- DEVICE / SKIN SECTION -->
    <section class="relative bg-[#f6c6cf] overflow-hidden">
        <!-- Right large face image -->
        <div class="hidden md:block absolute inset-y-0 right-0 w-1/2 bg-[url('/images/hero-model-2.jpg')] bg-cover bg-center opacity-80"
            aria-hidden="true" data-animate="fade-left"
            style="background-image: url('{{ get_template_directory_uri() }}/resources/images/flower-face.png'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
        </div>

        <div class="relative max-w-6xl mx-auto px-4 lg:px-0 py-16 lg:py-24">
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <!-- Device + small face image – zoom in -->
                <div class="flex justify-center md:justify-start" data-animate="zoom-in" data-animate-delay="100">
                    <div class="relative" data-tilt data-tilt-max="15" data-tilt-speed="400" data-tilt-perspective="1000">
                        <img src="{{ get_template_directory_uri() }}/resources/images/machine-phone.png"
                            alt="Skin analysis device" class="w-[260px] md:w-[320px] object-contain drop-shadow-xl" />
                    </div>
                </div>

                <!-- Text – fade up / then button comes from right -->
                <div class="text-center md:text-right space-y-4 md:space-y-6">
                    <div data-animate="fade-up">
                        <p class="tracking-[0.35em] text-xs md:text-sm uppercase text-[#3b2a27]">
                            Because your skin
                        </p>
                        <p class="tracking-[0.35em] text-xs md:text-sm uppercase text-[#3b2a27]">
                            deserves the best
                        </p>
                    </div>

                    <p class="text-sm md:text-base text-[#7b6f69] leading-relaxed max-w-md md:ml-auto"
                        data-animate="fade-up" data-animate-delay="120">
                        Discover advanced diagnostics and tailored skincare programs designed to bring
                        out your natural radiance and confidence every day.
                    </p>

                    <div class="flex md:justify-end justify-center" data-animate="fade-right" data-animate-delay="220">
                        <button
                            class="inline-flex items-center px-6 py-2 bg-[#3b2a27] text-white text-xs tracking-[0.25em] uppercase hover:bg-black/80 transition-colors duration-300">
                            Explore treatments
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- REVIEWS SECTION -->
    <section class="relative bg-white">
        <!-- soft flower bg -->
        <div class="pointer-events-none absolute h-full w-full" aria-hidden="true"
            style="background-image: url('{{ get_template_directory_uri() }}/resources/images/flowers.png'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
        </div>

        <div class="relative max-w-6xl mx-auto px-6 lg:px-0 py-16 lg:py-24 grid md:grid-cols-2 gap-12 items-center">
            <!-- Review text -->
            <div data-animate="fade-up">
                <p class="font-serif italic text-4xl md:text-5xl text-[#3b2a27] mb-2">
                    Reviews
                </p>
                <p class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#b1a8a3] mb-6">
                    Lumiere
                </p>

                <p class="text-sm md:text-base text-[#7b6f69] leading-relaxed mb-6">
                    Lorem ipsum dolor sit amet, consectetur sadipscing elit, sed diam nonumy
                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                    voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                </p>

                <p class="text-xs md:text-sm tracking-[0.25em] uppercase text-[#3b2a27] mb-6">
                    Jane Smith
                </p>

                <!-- slider dots (static for now) -->
                <div class="flex items-center gap-2">
                    <button class="w-2 h-2 rounded-full bg-[#3b2a27]"></button>
                    <button class="w-2 h-2 rounded-full border border-[#c9b6aa]"></button>
                    <button class="w-2 h-2 rounded-full border border-[#c9b6aa]"></button>
                    <button class="w-2 h-2 rounded-full border border-[#c9b6aa]"></button>
                </div>
                <div class="max-w-4xl mx-auto px-6 py-12 md:py-16 grid grid-cols-1 sm:grid-cols-3 gap-10 text-center">
                    <div data-animate="fade-up">
                        <p class="font-serif italic text-4xl md:text-5xl text-[#3b2a27] mb-1">123</p>
                        <p class="tracking-[0.25em] text-[10px] md:text-xs uppercase text-[#7b6f69]">
                            Professional<br />products
                        </p>
                    </div>

                    <div data-animate="fade-up" data-animate-delay="120">
                        <p class="font-serif italic text-4xl md:text-5xl text-[#3b2a27] mb-1">45</p>
                        <p class="tracking-[0.25em] text-[10px] md:text-xs uppercase text-[#7b6f69]">
                            Aesthetic<br />treatments
                        </p>
                    </div>

                    <div data-animate="fade-up" data-animate-delay="220">
                        <p class="font-serif italic text-4xl md:text-5xl text-[#3b2a27] mb-1">6</p>
                        <p class="tracking-[0.25em] text-[10px] md:text-xs uppercase text-[#7b6f69]">
                            Years of<br />experience
                        </p>
                    </div>
                </div>
            </div>

            <!-- Machine image -->
            <div class="flex justify-center md:justify-end" data-animate="zoom-in" data-animate-delay="120">
                <img data-tilt data-tilt-max="15" data-tilt-speed="400" data-tilt-perspective="1000"
                    src="{{ get_template_directory_uri() }}/resources/images/machine.png" alt="Aesthetic treatment device"
                    class="max-h-[420px] md:max-h-[520px] object-contain drop-shadow-xl" />
            </div>
        </div>
    </section>

    <!-- CTA / READY TO GLOW SECTION -->
    <section class="relative overflow-hidden">
        <!-- background image -->
        <div class="absolute inset-0 bg-[url('/images/cta-bg.jpg')] bg-cover bg-center" aria-hidden="true"></div>
        <!-- color overlay -->
        <div class="absolute inset-0 bg-[#e5b7a6]/80 mix-blend-multiply" aria-hidden="true"></div>

        <div class="relative max-w-4xl mx-auto px-6 py-16 md:py-24 text-center text-white">
            <div data-animate="fade-up">
                <p class="tracking-[0.35em] text-xs md:text-sm uppercase mb-3">
                    Ready to glow?
                </p>
                <p class="tracking-[0.35em] text-xs md:text-sm uppercase mb-8">
                    Take the first step
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4" data-animate="fade-up"
                data-animate-delay="150">
                <a href="#contact"
                    class="inline-flex items-center justify-center px-8 py-2 border border-white text-[11px] tracking-[0.25em] uppercase hover:bg-white/10 transition-colors duration-300">
                    Contact us
                </a>
                <a href="#booking"
                    class="inline-flex items-center justify-center px-8 py-2 border border-white text-[11px] tracking-[0.25em] uppercase bg-white/10 hover:bg-white/20 transition-colors duration-300">
                    Book now
                </a>
            </div>
        </div>
    </section>
@endsection
