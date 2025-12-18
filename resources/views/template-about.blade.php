{{--
  Template Name: About
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <!-- ABOUT SECTION -->
    <section id="about" class="relative bg-white overflow-hidden">
        <!-- soft flower background -->
        <div class="absolute bg-cover bg-center"
            style="background-image: url('{{ get_template_directory_uri() }}/resources/images/flowers-bg.png'); background-size: cover; background-position: top center; background-repeat: no-repeat;"
            aria-hidden="true"></div>

        <div class="relative max-w-6xl mx-auto px-6 lg:px-0 grid md:grid-cols-[1.3fr_1fr] gap-12 items-center">
            <!-- Text -->
            <div data-animate="fade-up">
                <div class="flex items-baseline gap-4 mb-6">
                    <h2 class="font-serif italic text-4xl md:text-5xl text-[#3b2a27]">
                        About
                    </h2>
                    <span class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#7b6f69]">
                        Us
                    </span>
                </div>

                <p class="text-sm md:text-base leading-relaxed text-[#7b6f69] space-y-4">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                    dolor sit amet, consetetur sadipscing elitr.
                </p>
            </div>

            <!-- Image -->
            <div class="flex justify-center md:justify-end" data-animate="zoom-in" data-animate-delay="120">
                <img src="{{ get_template_directory_uri() }}/resources//images/woman-leaf.png" alt="Woman with leaf"
                    class="max-h-[460px] md:max-h-[520px] object-contain" />
            </div>
        </div>
    </section>

    <!-- PINK STATS STRIP (under About) -->
    <section class="bg-[#e7b3bc] py-12 md:py-16">
        <div class="max-w-4xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-3 gap-10 text-center text-[#2e2725]">
            <div data-animate="fade-up">
                <p class="font-serif italic text-4xl md:text-5xl mb-1">123</p>
                <p class="tracking-[0.25em] text-[10px] md:text-xs uppercase">
                    Professional<br />products
                </p>
            </div>

            <div data-animate="fade-up" data-animate-delay="120">
                <p class="font-serif italic text-4xl md:text-5xl mb-1">45</p>
                <p class="tracking-[0.25em] text-[10px] md:text-xs uppercase">
                    Aesthetic<br />treatments
                </p>
            </div>

            <div data-animate="fade-up" data-animate-delay="220">
                <p class="font-serif italic text-4xl md:text-5xl mb-1">6</p>
                <p class="tracking-[0.25em] text-[10px] md:text-xs uppercase">
                    Years of<br />experience
                </p>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16">
        <div class="max-w-4xl mx-auto px-6 ">
            <h2>Lumiere Essence</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 text-[#2e2725] mt-10">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                    et
                    dolore magna aliquyam erat, sed diam voluptua.</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                    et
                    dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
        </div>
    </section>
    <!-- CTA / READY TO GLOW SECTION -->
    <section class="relative overflow-hidden">
        <!-- background image -->
        <div class="absolute inset-0 z-0 bg-cover bg-center" aria-hidden="true"
            style="background-image: url('{{ get_template_directory_uri() }}/resources//images/mirror.png'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
        </div>

        <!-- color overlay -->
        <div class="absolute inset-0 z-40 bg-[#e5b7a6]/80 mix-blend-multiply" aria-hidden="true"></div>

        <div
            class="min-h-[512px] flex justify-center flex-col items-center z-50 relative max-w-4xl mx-auto px-6 py-16 md:py-24 text-center text-white">
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
