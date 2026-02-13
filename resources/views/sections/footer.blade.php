<footer class="bg-[#fdfaf7] border-t border-[#f1e6e1]">
    <div class="max-w-6xl mx-auto px-6 py-12 md:py-16">
        <div class="grid gap-12 md:grid-cols-[2fr_1fr_1fr] items-start">
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <div>
                    <img src="{{ $footer['footer_logo_image'] }}" alt="Company Logo" class="h-16 mx-auto md:mx-0" />
                </div>
                <div class="flex flex-col md:flex-row justify-center items-center mt-6 gap-10">
                    <div class="flex items-center gap-10 text-[#303030]">
                        @foreach ($footer['social_icons'] as $platform)
                            <a href="{{ $platform['url'] }}" target="_blank"
                                class="hover:text-black transition-colors duration-200">
                                {!! $platform['icon'] !!}
                            </a>
                        @endforeach
                    </div>

                    <img src="{{ $footer['footer_line_image'] }}" alt="" />
                </div>
                @if (function_exists('pll_current_language'))
                    @if (pll_current_language() === 'pl')
                        <p class="mt-6 text-sm text-[#7b6f69]">
                            {!! $footer['footer_copyright_pl'] !!}
                            <a href="https://sltmedia.com/" target="_blank"
                                class="hover:text-black transition-colors duration-200">SLT Media</a>
                        </p>
                        <a href="{{ $footer['footer_privacy_url_pl'] }}">
                            <p class="mt-1 text-[#7b6f69]">
                                {!! $footer['footer_privacy_pl'] !!}
                            </p>
                        </a>
                    @else
                        <p class="mt-6 text-sm text-[#7b6f69]">
                            {!! $footer['footer_copyright_en'] !!}
                            <a href="https://sltmedia.com/" target="_blank"
                                class="hover:text-black transition-colors duration-200">SLT Media</a>
                        </p>
                        <a href="{{ $footer['footer_privacy_url_en'] }}">
                            <p class="mt-1 text-[#7b6f69]">
                                {!! $footer['footer_privacy_en'] !!}
                            </p>
                        </a>
                    @endif
                @else
                    <p class="mt-6 text-sm text-[#7b6f69]">
                        {!! $footer['footer_copyright_en'] !!}
                        <a href="https://sltmedia.com/" target="_blank"
                            class="hover:text-black transition-colors duration-200">SLT Media</a>
                    </p>
                    <a href="{{ $footer['footer_privacy_url_en'] }}">
                        <p class="mt-1 text-[#7b6f69]">
                            {!! $footer['footer_privacy_en'] !!}
                        </p>
                    </a>
                @endif
            </div>

            <div class="text-center">
                <p class="tracking-[0.35em] text-lg uppercase text-[#303030] mb-4">
                    @if (function_exists('pll_current_language'))
                        @if (pll_current_language() === 'pl')
                            {{ $footer['quick_links_pl'] }}
                        @else
                            {{ $footer['quick_links_en'] }}
                        @endif
                    @else
                        {{ $footer['quick_links_en'] }}
                    @endif
                </p>
                <ul class="space-y-2 text-[#7b6f69]">
                    @if (function_exists('pll_current_language'))
                        @if (pll_current_language() === 'pl')
                            @foreach ($footer['pages_pl'] as $page)
                                <li>
                                    <a href="{{ $page['url'] }}"
                                        class="hover:text-black transition-colors duration-200">
                                        {{ $page['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        @else
                            @foreach ($footer['pages_en'] as $page)
                                <li>
                                    <a href="{{ $page['url'] }}"
                                        class="hover:text-black transition-colors duration-200">
                                        {{ $page['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    @else
                        @foreach ($footer['pages_en'] as $page)
                            <li>
                                <a href="{{ $page['url'] }}" class="hover:text-black transition-colors duration-200">
                                    {{ $page['title'] }}
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>

            <div class="text-center">
                <p class="tracking-[0.35em] text-lg uppercase text-[#303030] mb-4">
                    @if (function_exists('pll_current_language'))
                        @if (pll_current_language() === 'pl')
                            {{ $footer['contact_pl'] }}
                        @else
                            {{ $footer['contact_en'] }}
                        @endif
                    @else
                        {{ $footer['contact_en'] }}
                    @endif
                </p>
                <div class="space-y-2 text-[#7b6f69]">

                    <p>{{ $footer['contact_phone_1'] }}</p>
                    <p>{{ $footer['contact_phone_2'] }}</p>
                    <p class="mt-2">
                        {{ $footer['contact_email'] }}
                    </p>

                    <p class="mt-6 leading-relaxed">
                        @if (function_exists('pll_current_language'))
                            @if (pll_current_language() === 'pl')
                                {!! $footer['contact_address_pl'] !!}
                            @else
                                {!! $footer['contact_address_en'] !!}
                            @endif
                        @else
                            {!! $footer['contact_address_en'] !!}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
