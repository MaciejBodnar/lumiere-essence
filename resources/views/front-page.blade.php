{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')
    <div>
        <section
            class="bg-[#EDD9D1] hidden overflow-hidden sticky top-0 -z-10 h-[400px] md:h-[638px] w-full md:flex flex-col justify-center items-center">
            {{-- <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover"
                poster="{{ $main['hero']['video_placeholder'] }}">
                <source src="{{ $main['hero']['video_url'] }}" type="video/mp4">
            </video> --}}
            <img src="{{ $main['hero']['video_placeholder'] }}" alt="Hero background image"
                class="absolute inset-0 w-full h-full object-cover" />
            <div class="relative z-10 w-full max-w-[1400px] px-6 flex items-center justify-between">
                <p class="uppercase tracking-[0.35em] text-sm md:text-2xl text-black/80">
                    {{ $main['hero']['image_first_text'] }}
                </p>
                <p class="uppercase tracking-[0.35em] text-sm md:text-2xl text-black/80">
                    {{ $main['hero']['image_second_text'] }}
                </p>
            </div>
        </section>
        <section
            class="bg-[#EDD9D1] md:hidden overflow-hidden sticky top-0 h-full w-full flex flex-col justify-center items-center text-center">
            <p class="px-4 uppercase tracking-[0.35em] text-3xl/8 text-black/80 pt-24">
                {{ $main['hero']['image_first_text'] }}
            </p>
            <p class="px-4 uppercase tracking-[0.35em] text-3xl/8 text-black/80">
                {{ $main['hero']['image_second_text'] }}
            </p>
            <img src="{{ $main['hero']['image_mobile'] }}" alt="Hero background image"
                class="w-full h-[600px] object-contain " />
        </section>

        <section class="relative bg-white z-10">
            <div class="absolute bg-cover bg-center h-full w-full"
                style="background-image: url('{{ $main['hero']['hero_bg_image'] }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                aria-hidden="true"></div>

            <div class="min-h-[618px] relative max-w-3xl mx-auto px-6 py-16 md:py-20 text-center flex flex-col justify-center"
                data-animate="fade-up">
                <p class="text-8xl mb-4 heading-1" data-animate="blur-in" data-animate-delay="200">
                    {{ $main['hero']['title'] }}
                </p>
                <h2 class="font-thin text-3xl text-[#3b2a27] mb-10 tracking-[0.25em] uppercase">
                    {{ $main['hero']['title_2'] }}
                </h2>
                <p class="font-thin text-lg text-[#7b6f69] leading-relaxed mb-8">
                    {!! $main['hero']['hero_description'] !!}
                </p>
                <div>
                    <a href="{{ $main['hero']['hero_button_url'] }}"
                        class="hover:cursor-pointer inline-flex items-center px-6 py-2 tracking-[0.25em] uppercase"
                        data-animate="fade-up" data-animate-delay="150">
                        <span>{{ $main['hero']['hero_button_text'] }}</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="relative bg-[#f6c6cf] overflow-hidden">
            <div class="hidden md:block absolute inset-y-0 right-0 w-1/2 bg-cover bg-center opacity-80" aria-hidden="true"
                data-animate="fade-left"
                style="background-image: url('{{ $main['device_banner']['bg_image'] }}'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
            </div>
            <div class="md:hidden block absolute inset-y-0 right-0 w-full bg-contain opacity-80" aria-hidden="true"
                style="background-image: url('{{ $main['device_banner']['bg_image_mobile'] }}'); background-size: contain; background-position: bottom; background-repeat: no-repeat;">
            </div>

            <div class="absolute inset-0 bg-linear-to-b from-[#f6c6cf] to-transparent pointer-events-none"
                aria-hidden="true"></div>

            <div class="relative max-w-6xl mx-auto px-4 lg:px-0 py-16 lg:py-24">
                <div class="grid md:grid-cols-3 items-center gap-24 md:gap-0">
                    <div class="flex justify-center md:justify-start" data-animate="zoom-in" data-animate-delay="100">
                        <div class="animate-float">
                            <div class="relative" data-tilt data-tilt-max="25" data-tilt-speed="400"
                                data-tilt-perspective="1000">
                                <img src="{{ $main['device_banner']['device_image'] }}" alt="Skin analysis device"
                                    class="w-[260px] md:w-[320px] object-contain drop-shadow-xl" />
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 md:space-y-6 md:col-span-2">
                        <div data-animate="fade-up" class="flex flex-col md:gap-6 mb-24 md:mb-0">
                            <p class=" max-md:text-center tracking-[0.5em] text-3xl/10 uppercase text-[#3b2a27]">
                                {{ $main['device_banner']['title'] }}
                            </p>
                            <p class="text-end tracking-[0.5em] text-3xl/10 uppercase text-[#3b2a27]">
                                {{ $main['device_banner']['title_2'] }}
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
                        <p class="text-8xl text-[#3b2a27] mb-6 heading-1" data-animate="blur-in" data-animate-delay="300">
                            {{ $main['reviews']['title'] }}
                        </p>
                        <p class="tracking-[0.35em] text-[10px] md:text-xs uppercase mb-10">
                            {{ $main['reviews']['title_2'] }}
                        </p>
                        <div class="relative px-12">
                            <div id="testimonials-carousel" class="relative overflow-hidden">
                                <div class="flex transition-transform duration-300 ease-in-out">
                                    @foreach ($main['reviews']['reviews_list'] as $testimonial)
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
                                    @foreach ($main['reviews']['reviews_list'] as $index => $testimonial)
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
                @foreach ($main['reviews']['statistics'] as $statistic)
                    <div data-animate="blur-in" data-animate-delay="{{ $loop->index * 100 }}">
                        <p class="text-9xl text-[#3b2a27] stats-1 mb-4">{{ $statistic['number'] }}</p>
                        <p class="tracking-[0.25em] text-[10px] md:text-lg uppercase text-[#7b6f69]">
                            {!! $statistic['label'] !!}
                        </p>
                    </div>
                @endforeach
                <div></div>
            </div>
            <div class="md:ml-20 relative md:absolute md:inset-0 md:right-0 pointer-events-none flex md:block">
                <div class="max-w-6xl mx-auto h-full relative">
                    <div
                        class="md:absolute md:top-10 md:right-0 md:w-1/3 md:flex translate-x-1/2 h-full md:translate-0 overflow-visible z-50">
                        <div class="animate-float w-full h-full">
                            <div class="relative w-full h-full">
                                <img src="{{ $main['reviews']['device_image'] }}" alt="Aesthetic treatment device"
                                    class="w-full h-full max-h-[636px] md:max-h-[750px] object-cover md:object-contain drop-shadow-xl overflow-visible" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-white">
            <div class="absolute inset-0 z-0 bg-cover bg-center opacity-20" aria-hidden="true"
                style="background-image: url('{{ $main['cta_section']['bg_image'] }}'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
            </div>
            <div class="absolute inset-0 z-40 bg-[#EED9D1] mix-blend-multiply" aria-hidden="true"></div>

            <div
                class="min-h-[512px] flex justify-center flex-col items-center z-50 relative max-w-4xl mx-auto px-6 py-16 md:py-24 text-center">
                <div data-animate="fade-up">
                    <p class="tracking-[0.5em] text-3xl uppercase mb-3">
                        {{ $main['cta_section']['title'] }}
                    </p>
                    <p class="tracking-[0.5em] text-3xl uppercase mb-14">
                        {{ $main['cta_section']['title_2'] }}
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-10" data-animate="fade-up"
                    data-animate-delay="150">
                    <a href="{{ $main['cta_section']['button_left_url'] }}"
                        class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/10 transition-colors duration-300">
                        {{ $main['cta_section']['button_left_text'] }}
                    </a>
                    <a href="{{ $main['cta_section']['button_right_url'] }}"
                        class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/20 transition-colors duration-300">
                        {{ $main['cta_section']['button_right_text'] }}
                    </a>
                </div>
            </div>
        </section>
    @endsection
