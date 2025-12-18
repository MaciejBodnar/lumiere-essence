{{--
  Template Name: Devices
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <!-- OUR DEVICES -->
    <section id="devices" class="relative max-w-6xl mx-auto px-6 lg:px-0 py-16 lg:py-24 bg-white overflow-hidden">

        <div class="mb-10" data-animate="fade-up">
            <h2 class="font-serif italic text-4xl md:text-5xl text-[#3b2a27]">
                Our Devices
            </h2>
        </div>
        <div class="relative">
            <!-- Heading -->
            <!-- soft radial highlight behind the device -->
            <div class="pointer-events-none absolute inset-y-0 right-0 w-1/2 bg-[radial-gradient(circle_at_center,#f9f4f3,#ffffff)] opacity-70"
                aria-hidden="true"></div>

            <div class="grid md:grid-cols-2 gap-10 items-center">
                <!-- Text block -->
                <div data-animate="fade-left">
                    <p class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#3b2a27] mb-6">
                        Dr Platon
                    </p>

                    <p class="text-sm md:text-base leading-relaxed text-[#7b6f69] max-w-xl">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                        gubergren, no sea takimata sanctus est Lorem.
                    </p>
                </div>

                <!-- Device image -->
                <div class="flex justify-center" data-animate="fade-right" data-animate-delay="120">
                    <img src="{{ get_template_directory_uri() }}/resources/images/device1.png" alt="Dr Platon device"
                        class="max-h-[260px] md:max-h-80 object-contain drop-shadow-xl" />
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <!-- Device image -->
                <div class="flex justify-center" data-animate="fade-right" data-animate-delay="120">
                    <img src="{{ get_template_directory_uri() }}/resources/images/device2.png" alt="Dr Platon device"
                        class="max-h-[260px] md:max-h-80 object-contain drop-shadow-xl" />
                </div>
                <!-- Text block -->
                <div data-animate="fade-left">
                    <p class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#3b2a27] mb-6">
                        Lifting scissors
                    </p>

                    <p class="text-sm md:text-base leading-relaxed text-[#7b6f69] max-w-xl">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
