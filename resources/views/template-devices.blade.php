{{--
  Template Name: Devices
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <section id="devices" class="relative overflow-hidden">
        <div class="absolute bg-cover bg-center h-full w-full"
            style="background-image: url('{{ get_template_directory_uri() }}/resources/images/bg-devices.png'); background-size: cover; background-position: center; background-repeat: no-repeat;"
            aria-hidden="true"></div>
        <div class="max-w-6xl mx-auto px-6 lg:px-0 py-16 lg:py-24">
            <div class="mb-10" data-animate="fade-up">
                <h2 class="heading-1 text-4xl md:text-5xl text-[#3b2a27]">
                    Our Devices
                </h2>
            </div>
            <div class="relative flex flex-col gap-10">
                <div class="card grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="tracking-[0.35em] text-lg uppercase text-[#3b2a27] mb-6">
                            Dr Platon
                        </p>

                        <p class="text-sm leading-relaxed text-gray-500 max-w-xl">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem.
                        </p>
                    </div>

                    <div class="flex justify-center" data-animate="fade-right" data-animate-delay="120">
                        <img src="{{ get_template_directory_uri() }}/resources/images/device1.png" alt="Dr Platon device"
                            class="max-h-[260px] md:max-h-80 object-contain drop-shadow-xl" />
                    </div>
                </div>
                <div class="card grid md:grid-cols-2 gap-10 items-center">
                    <div class="flex justify-center" data-animate="fade-right" data-animate-delay="120">
                        <img src="{{ get_template_directory_uri() }}/resources/images/device2.png" alt="Dr Platon device"
                            class="max-h-[260px] md:max-h-80 object-contain drop-shadow-xl" />
                    </div>
                    <div class="bg-transparent" data-animate="fade-left">
                        <p class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#3b2a27] mb-6">
                            Lifting scissors
                        </p>

                        <p class="text-sm md:text-base leading-relaxed text-[#7b6f69] max-w-xl">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores
                            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        </p>
                    </div>
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
