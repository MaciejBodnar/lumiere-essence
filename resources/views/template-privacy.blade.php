{{--
  Template Name: Privacy Policy
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <section id="privacy-policy" class="relative bg-white overflow-hidden">
        <div class="absolute bg-cover bg-center h-full w-full"
            style="background-image: url('{{ $privacy['bg_image'] }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            aria-hidden="true"></div>
        <div class="relative max-w-5xl mx-auto px-6 lg:px-0 py-16 lg:py-24">
            <div class="flex items-baseline gap-4 mb-10" data-animate="fade-down" data-animate-delay="200">
                <h2 class="heading-1 text-4xl md:text-5xl text-[#3b2a27]">
                    {{ $privacy['title'] }}
                </h2>
            </div>
            <span class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#7b6f69]">
                {!! $privacy['content'] !!}
            </span>
        </div>
    </section>
@endsection
