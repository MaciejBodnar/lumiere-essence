{{--
  Template Name: Treatments
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <section id="treatments" class="relative bg-white overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ $treatments['hero']['hero_bg_image'] }}'); background-size: cover; background-position: top center; background-repeat: no-repeat;"
            aria-hidden="true"></div>

        <div class="relative max-w-6xl mx-auto px-6 lg:px-0 py-16 lg:py-24">
            <div class="mb-12" data-animate="fade-up" data-animate-delay="300">
                <div class="flex items-baseline gap-6">
                    <h2 class="heading-1 text-4xl md:text-5xl text-[#3b2a27]">
                        {{ $treatments['hero']['title'] }}
                    </h2>
                    <span class="tracking-[0.35em] md:text-lg uppercase">
                        {{ $treatments['hero']['title_2'] }}
                    </span>
                </div>
            </div>

            <div class="grid gap-x-28 gap-y-16 md:grid-cols-2 text-[#3b2a27]">
                @foreach ($treatments['hero']['price'] as $price)
                    <div data-animate="fade-up" data-animate-delay="{{ ($loop->index + 1) * 300 }}">
                        <h3 class="tracking-[0.35em] text-lg uppercase mb-10">
                            {{ $price['title'] }}
                        </h3>
                        <ul class="space-y-3 text-[11px] md:text-sm text-[#7b6f69]">
                            @foreach ($price['services'] as $item)
                                <li class="flex justify-between gap-4">
                                    <span>{{ $item['text'] }}</span>
                                    <span class="whitespace-nowrap">{{ $item['price'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center opacity-20" aria-hidden="true"
            style="background-image: url('{{ $treatments['cta_section']['bg_image'] }}'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
        </div>
        <div class="absolute inset-0 z-40 bg-[#EED9D1] mix-blend-multiply" aria-hidden="true"></div>

        <div
            class="min-h-[512px] flex justify-center flex-col items-center z-50 relative max-w-4xl mx-auto px-6 py-16 md:py-24 text-center">
            <div data-animate="fade-up">
                <p class="tracking-[0.5em] text-3xl uppercase mb-3">
                    {{ $treatments['cta_section']['title'] }}
                </p>
                <p class="tracking-[0.5em] text-3xl uppercase mb-14">
                    {{ $treatments['cta_section']['title_2'] }}
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-10" data-animate="fade-up"
                data-animate-delay="150">
                <a href="{{ $treatments['cta_section']['button_left_url'] }}"
                    class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/10 transition-colors duration-300">
                    {{ $treatments['cta_section']['button_left_text'] }}
                </a>
                <a href="{{ $treatments['cta_section']['button_right_url'] }}"
                    class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/20 transition-colors duration-300">
                    {{ $treatments['cta_section']['button_right_text'] }}
                </a>
            </div>
        </div>
    </section>
@endsection
