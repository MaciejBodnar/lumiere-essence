{{--
  Template Name: Treatments
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <section id="treatments" class="relative bg-white overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ get_template_directory_uri() }}/resources//images/flowers-bg.png'); background-size: cover; background-position: top center; background-repeat: no-repeat;"
            aria-hidden="true"></div>

        <div class="relative max-w-6xl mx-auto px-6 lg:px-0 py-16 lg:py-24">
            <div class="mb-12" data-animate="fade-up" data-animate-delay="300">
                <div class="flex items-baseline gap-6">
                    <h2 class="heading-1 text-4xl md:text-5xl text-[#3b2a27]">
                        Treatments
                    </h2>
                    <span class="tracking-[0.35em] md:text-lg uppercase">
                        Prices
                    </span>
                </div>
            </div>

            <div class="grid gap-x-28 gap-y-16 md:grid-cols-2 text-[#3b2a27]">
                <div data-animate="fade-up" data-animate-delay="300">
                    <h3 class="tracking-[0.35em] text-lg uppercase mb-10">
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

                <div data-animate="fade-up" data-animate-delay="320">
                    <h3 class="tracking-[0.35em] text-lg uppercase mb-10">
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

                <div data-animate="fade-up" data-animate-delay="420">
                    <h3 class="tracking-[0.35em] text-lg uppercase mb-10">
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

                <div data-animate="fade-up" data-animate-delay="450">
                    <h3 class="tracking-[0.35em] text-lg uppercase mb-10">
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
    <section class="relative overflow-hidden">
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
