{{--
  Template Name: Contact
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <section id="contact" class="relative bg-white overflow-hidden">
        <div class="absolute bg-cover bg-center h-full w-full"
            style="background-image: url('{{ $contact['hero']['hero_bg_image'] }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            aria-hidden="true"></div>

        <div class="relative max-w-5xl mx-auto px-6 lg:px-0 py-16 lg:py-24">
            <div class="flex items-baseline gap-4 mb-10" data-animate="fade-down" data-animate-delay="200">
                <h2 class="heading-1 text-4xl md:text-5xl text-[#3b2a27]">
                    {{ $contact['hero']['title'] }}
                </h2>
                <span class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#7b6f69]">
                    {{ $contact['hero']['title_2'] }}
                </span>
            </div>
            <div class="grid gap-12 lg:grid-cols-3 items-start">
                <div data-animate="fade-left" data-animate-delay="300">

                    <p class="tracking-[0.35em] text-xl uppercase text-[#3b2a27] mb-4">
                        {{ $contact['hero']['info_section'] }}
                    </p>

                    <div class="space-y-1 text-[#7b6f69]">
                        <p>{{ $contact['hero']['contact_no'] }}</p>
                        <p>{{ $contact['hero']['contact_no_2'] }}</p>
                        <p class="mt-2">{{ $contact['hero']['email'] }}
                        </p>

                        <p class="mt-4 leading-relaxed">
                            {!! $contact['hero']['address'] !!}
                        </p>
                    </div>

                    <div class="mt-8 flex items-center gap-6 text-[#303030]">
                        <a href="{{ $contact['hero']['facebook_url'] }}"
                            class="hover:text-black transition-colors duration-200">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="{{ $contact['hero']['instagram_url'] }}"
                            class="hover:text-black transition-colors duration-200">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="{{ $contact['hero']['tiktok_url'] }}"
                            class="hover:text-black transition-colors duration-200">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <div data-animate="fade-right" data-animate-delay="450" class="col-span-2">
                    <p class="tracking-[0.35em] text-xl uppercase text-[#3b2a27] mb-6">
                        {{ $contact['hero']['form_title'] }}
                    </p>
                    {!! do_shortcode('[contact-form-7 id="f1e5a3a" title="Lumiere Final"]') !!}
                </div>
            </div>
        </div>
    </section>
@endsection
