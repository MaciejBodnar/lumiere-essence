{{--
  Template Name: Devices
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <section id="devices" class="relative overflow-hidden">
        <div class="absolute bg-cover bg-center h-full w-full"
            style="background-image: url('{{ $devices['hero']['hero_bg_image'] }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            aria-hidden="true"></div>
        <div class="max-w-6xl mx-auto px-6 lg:px-0 py-16 lg:py-24">
            <div class="mb-10" data-animate="fade-up">
                <h2 class="heading-1 text-4xl md:text-5xl text-[#3b2a27]">
                    {{ $devices['hero']['title'] }}
                </h2>
            </div>
            <div class="relative flex flex-col gap-20 md:gap-10">
                @foreach ($devices['hero']['device'] as $device)
                    @if ($loop->index % 2 == 0)
                        <div class="card grid md:grid-cols-2 gap-10 items-center">
                            <div>
                                <p class="tracking-[0.35em] text-lg uppercase text-[#3b2a27] mb-6">
                                    {{ $device['title'] }}
                                </p>

                                <p class="leading-relaxed text-gray-500 max-w-xl">
                                    {{ $device['description'] }}
                                </p>
                            </div>

                            <div class="flex justify-center" data-animate="fade-right" data-animate-delay="120">
                                <img src="{{ $device['image'] }}" data-tilt data-tilt-max="25" data-tilt-speed="400"
                                    data-tilt-perspective="1000" alt="Dr Platon device"
                                    class="max-h-[260px] md:max-h-80 object-contain drop-shadow-xl" />
                            </div>
                        </div>
                    @else
                        <div class="card grid md:grid-cols-2 gap-10 items-center">
                            <div class="flex justify-center" data-animate="fade-right" data-animate-delay="120">
                                <img src="{{ $device['image'] }}" data-tilt data-tilt-max="25" data-tilt-speed="400"
                                    data-tilt-perspective="1000" alt="Dr Platon device"
                                    class="max-h-[260px] md:max-h-80 object-contain drop-shadow-xl" />
                            </div>
                            <div class="bg-transparent" data-animate="fade-left">
                                <p class="tracking-[0.35em] text-lg uppercase text-[#3b2a27] mb-6">
                                    {{ $device['title'] }}
                                </p>

                                <p class="leading-relaxed text-[#7b6f69] max-w-xl">
                                    {{ $device['description'] }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center opacity-20" aria-hidden="true"
            style="background-image: url('{{ $devices['cta_section']['bg_image'] }}'); background-size: cover; background-position: top center; background-repeat: no-repeat;">
        </div>
        <div class="absolute inset-0 z-40 bg-[#EED9D1] mix-blend-multiply" aria-hidden="true"></div>

        <div
            class="min-h-[512px] flex justify-center flex-col items-center z-50 relative max-w-4xl mx-auto px-6 py-16 md:py-24 text-center">
            <div data-animate="fade-up">
                <p class="tracking-[0.5em] text-3xl uppercase mb-3">
                    {{ $devices['cta_section']['title'] }}
                </p>
                <p class="tracking-[0.5em] text-3xl uppercase mb-14">
                    {{ $devices['cta_section']['title_2'] }}
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-10" data-animate="fade-up"
                data-animate-delay="150">
                <a href="{{ $devices['cta_section']['button_left_url'] }}"
                    class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/10 transition-colors duration-300">
                    {{ $devices['cta_section']['button_left_text'] }}
                </a>
                <a href="{{ $devices['cta_section']['button_right_url'] }}"
                    class="inline-flex items-center justify-center px-10 py-4 border text-lg tracking-[0.25em] uppercase hover:bg-white/20 transition-colors duration-300">
                    {{ $devices['cta_section']['button_right_text'] }}
                </a>
            </div>
        </div>
    </section>
@endsection
