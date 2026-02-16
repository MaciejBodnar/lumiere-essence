{{--
  Template Name: About
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <section id="about" class="relative">
        <div class="absolute inset-0 z-0 bg-cover bg-center"
            style="background-image: url('{{ $about['hero']['hero_bg_image'] }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            aria-hidden="true"></div>

        <div class="relative max-w-6xl mx-auto px-6 lg:px-0 pt-10 md:pt-0 grid md:grid-cols-[1.3fr_1fr] gap-12 items-center">
            <div data-animate="fade-up" data-animate-delay="300">
                <div class="flex items-baseline gap-4 mb-6">
                    <h2 class="heading-1 text-4xl md:text-5xl text-[#3b2a27] mt-20">
                        {{ $about['hero']['title'] }}
                    </h2>
                    <span class="tracking-[0.35em] md:text-xl uppercase text-[#7b6f69]">
                        {{ $about['hero']['title_2'] }}
                    </span>
                </div>

                <p class="font-thin text-gray-700 space-y-4">
                    {!! $about['hero']['hero_description'] !!}
                </p>
            </div>

            <div class="flex justify-center md:justify-end" data-animate="zoom-in" data-animate-delay="400">
                <img src="{{ $about['hero']['hero_image'] }}" alt="Woman with leaf"
                    class="max-h-[460px] md:max-h-[520px] object-contain" />
            </div>
        </div>
    </section>

    <section class="bg-[#F2C7C7] py-12 md:py-16">
        <div class="max-w-4xl mx-auto px-6 gap-20 text-center text-[#2e2725]">
            <div data-animate="fade-up" data-animate-delay="100">
                <p class="tracking-[0.25em] text-2xl uppercase mt-5">
                    {!! $about['statistics']['content'] !!}
                </p>
            </div>
        </div>
    </section>
    <section id="about" class="relative">
        <div class="absolute inset-0 z-0 bg-cover bg-center"
            style="background-image: url('{{ $about['hero']['hero_bg_image'] }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            aria-hidden="true"></div>

        <div
            class="relative max-w-6xl mx-auto px-6 lg:px-0 pt-10 md:pt-0 grid md:grid-cols-[1.3fr_1fr] gap-12 items-center">
            <div data-animate="fade-up" data-animate-delay="300">
                <div class="flex items-baseline gap-4 mb-6">
                    <h2 class="heading-1 text-4xl md:text-5xl text-[#3b2a27] mt-20">
                        {{ $about['hero_2']['title'] }}
                    </h2>
                    <span class="tracking-[0.35em] md:text-xl uppercase text-[#7b6f69]">
                        {{ $about['hero_2']['title_2'] }}
                    </span>
                </div>

                <p class="font-thin text-gray-700 space-y-4">
                    {!! $about['hero_2']['hero_description'] !!}
                </p>
            </div>

            <div class="flex justify-center md:justify-end" data-animate="zoom-in" data-animate-delay="400">
                <img src="{{ $about['hero_2']['hero_image'] }}" alt="Woman with leaf"
                    class="max-h-[460px] md:max-h-[520px] object-contain" />
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center opacity-20" aria-hidden="true"
            style="background-image: url('{{ $about['cta_section']['bg_image'] }}'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
        </div>
        <div class="absolute inset-0 z-40 bg-[#EED9D1] mix-blend-multiply" aria-hidden="true"></div>

        <div
            class="min-h-[512px] flex justify-center flex-col items-center z-50 relative max-w-4xl mx-auto px-6 py-16 md:py-24 text-center">
            <div data-animate="fade-up">
                <p class="tracking-[0.5em] text-3xl uppercase mb-3">
                    {{ $about['cta_section']['title'] }}
                </p>
                <p class="tracking-[0.5em] text-3xl uppercase mb-14">
                    {{ $about['cta_section']['title_2'] }}
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-10" data-animate="fade-up"
                data-animate-delay="150">
                <a href="{{ $about['cta_section']['button_left_url'] }}"
                    class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/10 transition-colors duration-300">
                    {{ $about['cta_section']['button_left_text'] }}
                </a>
                <a href="{{ $about['cta_section']['button_right_url'] }}"
                    class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/20 transition-colors duration-300">
                    {{ $about['cta_section']['button_right_text'] }}
                </a>
            </div>
        </div>
    </section>
@endsection
