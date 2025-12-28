<footer class="bg-[#fdfaf7] border-t border-[#f1e6e1]">
    <div class="max-w-6xl mx-auto px-6 py-12 md:py-16">
        <div class="grid gap-12 md:grid-cols-[2fr_1fr_1fr] items-start">
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <div>
                    <img src="{{ $footer['footer_logo_image'] }}" alt="Company Logo" class="h-16 mx-auto md:mx-0" />
                </div>
                <div class="flex flex-col md:flex-row justify-center items-center mt-6 gap-10">
                    <div class="flex items-center gap-10 text-sm text-[#303030]">
                        @foreach ($footer['social_icons'] as $platform)
                            <a href="{{ $platform['url'] }}" target="_blank"
                                class="hover:text-black transition-colors duration-200">
                                {!! $platform['icon'] !!}
                            </a>
                        @endforeach
                    </div>

                    <img src="{{ $footer['footer_line_image'] }}" alt="" />
                </div>
                <p class="mt-6 text-sm text-[#7b6f69]">
                    {!! $footer['footer_copyright'] !!}
                </p>
                <p class="mt-1 text-sm text-[#7b6f69]">
                    {!! $footer['footer_privacy'] !!}
                </p>
            </div>

            <div class="text-center">
                <p class="tracking-[0.35em] text-lg uppercase text-[#303030] mb-4">
                    Quick Links
                </p>
                <ul class="space-y-2 text-sm text-[#7b6f69]">
                    @foreach ($footer['pages'] as $page)
                        <li>
                            <a href="{{ $page['url'] }}" class="hover:text-black transition-colors duration-200">
                                {{ $page['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="text-center">
                <p class="tracking-[0.35em] text-lg uppercase text-[#303030] mb-4">
                    Contact
                </p>
                <div class="space-y-2 text-sm text-[#7b6f69]">

                    <p>{{ $footer['contact_phone_1'] }}</p>
                    <p>{{ $footer['contact_phone_2'] }}</p>
                    <p class="mt-2">
                        {{ $footer['contact_email'] }}
                    </p>

                    <p class="mt-6 leading-relaxed">
                        {!! $footer['contact_address'] !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
