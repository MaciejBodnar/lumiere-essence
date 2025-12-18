{{--
  Template Name: Contact
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <!-- CONTACT -->
    <section id="contact" class="relative bg-white overflow-hidden">
        <!-- soft flower background -->
        <div class="pointer-events-none absolute inset-0 opacity-20 mix-blend-lighten bg-[url('/images/flower-soft-wide.jpg')] bg-cover bg-center"
            aria-hidden="true"></div>

        <div class="relative max-w-6xl mx-auto px-6 lg:px-0 py-16 lg:py-24">
            <div class="grid gap-12 lg:grid-cols-2 items-start">
                <!-- LEFT: INFO -->
                <div data-animate="fade-left">
                    <div class="flex items-baseline gap-4 mb-10">
                        <h2 class="font-serif italic text-4xl md:text-5xl text-[#3b2a27]">
                            Contact
                        </h2>
                        <span class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#7b6f69]">
                            Us
                        </span>
                    </div>

                    <p class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#3b2a27] mb-4">
                        Info
                    </p>

                    <div class="space-y-1 text-sm text-[#7b6f69]">
                        <p><a href="tel:+447428009465" class="hover:text-black transition-colors duration-200">
                                +44 742 8009 465
                            </a></p>
                        <p><a href="tel:+447846573233" class="hover:text-black transition-colors duration-200">
                                +44 784 6573 233
                            </a></p>
                        <p class="mt-2">
                            <a href="mailto:info@yourdomain.com" class="hover:text-black transition-colors duration-200">
                                info@yourdomain.com
                            </a>
                        </p>

                        <p class="mt-4 leading-relaxed">
                            123 Road Street<br />
                            City, POST CODE
                        </p>
                    </div>

                    <!-- socials -->
                    <div class="mt-8 flex items-center gap-6 text-sm text-[#303030]">
                        <a href="#" class="hover:text-black transition-colors duration-200">f</a>
                        <a href="#" class="hover:text-black transition-colors duration-200"></a>
                        <a href="#" class="hover:text-black transition-colors duration-200"></a>
                    </div>
                </div>

                <!-- RIGHT: FORM -->
                <div data-animate="fade-right" data-animate-delay="120">
                    <p class="tracking-[0.35em] text-[10px] md:text-xs uppercase text-[#3b2a27] mb-6">
                        Leave a message
                    </p>

                    <form class="space-y-6">
                        <!-- Name / Surname -->
                        <div class="grid gap-4 md:grid-cols-2">
                            <div>
                                <label class="block text-[11px] text-[#7b6f69] mb-1">Name</label>
                                <input type="text"
                                    class="w-full border border-[#e0d6d1] bg-white/70 px-4 py-2 text-sm outline-none focus:border-[#c9936d] transition-colors duration-200" />
                            </div>
                            <div>
                                <label class="block text-[11px] text-[#7b6f69] mb-1">Surname</label>
                                <input type="text"
                                    class="w-full border border-[#e0d6d1] bg-white/70 px-4 py-2 text-sm outline-none focus:border-[#c9936d] transition-colors duration-200" />
                            </div>
                        </div>

                        <!-- Contact / Email -->
                        <div class="grid gap-4 md:grid-cols-2">
                            <div>
                                <label class="block text-[11px] text-[#7b6f69] mb-1">Contact number</label>
                                <input type="text"
                                    class="w-full border border-[#e0d6d1] bg-white/70 px-4 py-2 text-sm outline-none focus:border-[#c9936d] transition-colors duration-200" />
                            </div>
                            <div>
                                <label class="block text-[11px] text-[#7b6f69] mb-1">Email</label>
                                <input type="email"
                                    class="w-full border border-[#e0d6d1] bg-white/70 px-4 py-2 text-sm outline-none focus:border-[#c9936d] transition-colors duration-200" />
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-[11px] text-[#7b6f69] mb-1">Message</label>
                            <textarea rows="5"
                                class="w-full border border-[#e0d6d1] bg-white/70 px-4 py-2 text-sm outline-none resize-none focus:border-[#c9936d] transition-colors duration-200"></textarea>
                        </div>

                        <!-- Consent checkbox -->
                        <label class="flex items-start gap-3 text-[11px] leading-relaxed text-[#7b6f69]">
                            <input type="checkbox" class="mt-[3px] h-4 w-4 border border-[#d0c4bd] bg-white/70" />
                            <span>
                                I hereby agree that this data will be stored and processed for the purpose of establishing
                                contact. I am aware that I can revoke my consent at any time.*
                            </span>
                        </label>

                        <!-- Send button -->
                        <div class="pt-2">
                            <button type="submit"
                                class="inline-flex items-center justify-center px-10 py-2 border border-[#3b2a27] text-[11px] tracking-[0.35em] uppercase text-[#3b2a27] bg-transparent hover:bg-[#3b2a27] hover:text-white transition-colors duration-300">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
