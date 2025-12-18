{{--
  Template Name: Treatments
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <!-- TREATMENTS -->
    <section id="treatments" class="relative bg-white overflow-hidden">
        <!-- soft flower background -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ get_template_directory_uri() }}/resources//images/flowers-bg.png'); background-size: cover; background-position: top center; background-repeat: no-repeat;"
            aria-hidden="true"></div>

        <div class="relative max-w-6xl mx-auto px-6 lg:px-0 py-16 lg:py-24">
            <!-- Heading -->
            <div class="text-center mb-12" data-animate="fade-up">
                <div class="flex items-baseline justify-center gap-6">
                    <h2 class="font-serif italic text-4xl md:text-5xl text-[#3b2a27]">
                        Treatments
                    </h2>
                    <span class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#7b6f69]">
                        Prices
                    </span>
                </div>
            </div>

            <!-- Treatments grid -->
            <div class="grid gap-x-24 gap-y-12 md:grid-cols-2 text-[#3b2a27]">
                <!-- Face & Neck -->
                <div data-animate="fade-up">
                    <h3 class="tracking-[0.35em] text-xs uppercase mb-6">
                        Face &amp; Neck
                    </h3>
                    <ul class="space-y-3 text-[11px] md:text-sm text-[#7b6f69]">
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                    </ul>
                </div>

                <!-- Body -->
                <div data-animate="fade-up" data-animate-delay="120">
                    <h3 class="tracking-[0.35em] text-xs uppercase mb-6">
                        Body
                    </h3>
                    <ul class="space-y-3 text-[11px] md:text-sm text-[#7b6f69]">
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                    </ul>
                </div>

                <!-- Waxing -->
                <div data-animate="fade-up" data-animate-delay="220">
                    <h3 class="tracking-[0.35em] text-xs uppercase mb-6">
                        Waxing
                    </h3>
                    <ul class="space-y-3 text-[11px] md:text-sm text-[#7b6f69]">
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                    </ul>
                </div>

                <!-- Botox -->
                <div data-animate="fade-up" data-animate-delay="320">
                    <h3 class="tracking-[0.35em] text-xs uppercase mb-6">
                        Botox
                    </h3>
                    <ul class="space-y-3 text-[11px] md:text-sm text-[#7b6f69]">
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                        <li class="flex justify-between gap-4">
                            <span>Lorem ipsum dolor sit amet, consetetur</span>
                            <span class="whitespace-nowrap">£100</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA / READY TO GLOW SECTION -->
    <section class="relative overflow-hidden">
        <!-- background image -->
        <div class="absolute inset-0 z-0 bg-cover bg-center opacity-30" aria-hidden="true"
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
