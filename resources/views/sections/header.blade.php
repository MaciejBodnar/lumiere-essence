<header class="relative">
    <div class="w-full h-full bg-[#f4c8c4]">
        <div class="bg-[#f4c8c4] max-w-7xl mx-auto flex justify-between items-center">
            <div class="px-8 md:px-6 py-4 flex space-x-6 text-lg">
                <a href="https://www.facebook.com" target="_blank"
                    class="hover:text-[#3b2a27] transition-colors duration-300">
                    <i class="fa-brands fa-facebook-f fa-sm"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank"
                    class="hover:text-[#3b2a27] transition-colors duration-300">
                    <i class="fa-brands fa-instagram fa-sm"></i>
                </a>
                <a href="https://www.tiktok.com" target="_blank"
                    class="hover:text-[#3b2a27] transition-colors duration-300">
                    <i class="fa-brands fa-tiktok fa-sm"></i>
                </a>
            </div>
            <a href="{{ $booking_url ?: '#booking' }}"
                class="min-h-[60px] md:min-w-[256px] min-w-40 bg-[#EFD9D1] hover:bg-[#EFD9D1]/40 flex items-center justify-center h-full uppercase tracking-[0.25em]">
                {{ $booking_text }}
            </a>
        </div>
    </div>
    <div class="flex flex-col items-center py-6 text-center">
        <div class="text-2xl font-bold text-[#3b2a27]">
            <a href="{{ home_url('/') }}" class="flex flex-col items-center space-x-2 mt-8">
                @if ($header_logo)
                    <img src="{{ $header_logo['url'] }}" alt="{{ $header_logo['alt'] }}"
                        class="px-10 md:px-0 h-14 md:h-24 w-auto" />
                @else
                    <span class="text-[#3b2a27] heading-1 text-9xl">{{ $siteName }}</span>
                @endif
            </a>
        </div>


        <nav class="hidden mt-8 md:flex space-x-8 text-[#7b6f69] text-sm uppercase tracking-[0.25em]">
            <nav class="hidden mt-8 md:flex space-x-8 text-[#7b6f69] text-sm uppercase tracking-[0.25em]">
                @if (!empty($primary_menu_html))
                    {!! $primary_menu_html !!}
                @else
                    <a href="{{ home_url('/') }}" class="hover:text-[#3b2a27] transition-colors duration-300">Home</a>
                    <a href="/about" class="hover:text-[#3b2a27] transition-colors duration-300">About</a>
                    <a href="/treatments" class="hover:text-[#3b2a27] transition-colors duration-300">Treatments</a>
                    <a href="/devices" class="hover:text-[#3b2a27] transition-colors duration-300">Our Devices</a>
                    <a href="/contact" class="hover:text-[#3b2a27] transition-colors duration-300">Contact</a>
                @endif
            </nav>

        </nav>
        <button id="mobile-menu-toggle"
            class="mt-10 lg:hidden flex flex-col justify-center items-center w-8 h-8 space-y-1">
            <span class="block w-6 h-0.5 bg-black transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-black transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-black transition-all duration-300"></span>
        </button>
    </div>

    <div id="mobile-menu"
        class="md:hidden fixed inset-0 z-50 bg-[#fdfaf7] text-[#3b2a27] overflow-auto transition-transform duration-300 ease-in-out translate-x-full">
        <div class="relative min-h-full">
            <div class="max-w-3xl mx-auto px-6 py-10">
                <div class="flex items-center justify-between mb-8">
                    <a href="{{ home_url('/') }}" class="flex items-center gap-3">
                        @if ($header_logo)
                            <img src="{{ $header_logo['url'] }}" alt="{{ $header_logo['alt'] }}"
                                class="w-10 h-12 object-contain" />
                        @else
                            <img src="@asset('images/favico.png')" alt="{{ $siteName }}" class="w-10 h-12 object-contain" />
                        @endif
                    </a>

                    <button id="mobile-menu-close" aria-label="Zamknij menu"
                        class="p-2 rounded border border-[#3b2a27]/20 text-[#3b2a27]">
                        <span class="sr-only">Zamknij</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mobile-nav-wrapper">
                    @include('partials.mobile-nav')
                </div>
            </div>
        </div>
    </div>
</header>
