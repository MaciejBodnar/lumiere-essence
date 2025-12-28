<footer class="bg-[#fdfaf7] border-t border-[#f1e6e1]">
    <div class="max-w-6xl mx-auto px-6 py-12 md:py-16">
        <div class="grid gap-12 md:grid-cols-[2fr_1fr_1fr] items-start">
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <div>
                    @if ($footer_logo)
                        <img src="{{ $footer_logo['url'] }}" alt="{{ $footer_logo['alt'] }}"
                            class="h-16 mx-auto md:mx-0" />
                    @else
                        <img src="@asset('images/footer.png')" alt="Lumiere Essence Logo" class="h-16 mx-auto md:mx-0" />
                    @endif
                </div>
                <div class="flex flex-col md:flex-row justify-center items-center mt-6 gap-10">
                    <div class="flex items-center gap-10 text-sm text-[#303030]">
                        @if ($social_links)
                            @foreach ($social_links as $social)
                                <a href="{{ $social['url'] }}" target="_blank"
                                    class="hover:text-black transition-colors duration-200">
                                    <i class="{{ $social['icon_class'] }}"></i>
                                </a>
                            @endforeach
                        @endif
                    </div>

                    <img src="@asset('images/footer-line.png')" alt="" />
                </div>
                <p class="mt-6 text-sm text-[#7b6f69]">
                    {!! $footer_copyright ?:
                        '2025 Lumiere Essence Skincare and Aesthetic – D&amp;C with <i class="fa-solid fa-heart" style="color: #C49090;"></i> SLT Media' !!}
                </p>
                <p class="mt-1 text-sm text-[#7b6f69]">
                    Privacy Policy | T&amp;C
                </p>
            </div>

            <div class="text-center">
                <p class="tracking-[0.35em] text-lg uppercase text-[#303030] mb-4">
                    Quick Links
                </p>
                <ul class="space-y-2 text-sm text-[#7b6f69]">
                    @if ($primary_navigation)
                        @foreach ($primary_navigation as $item)
                            <li><a href="{{ $item->url }}"
                                    class="hover:text-black transition-colors duration-200">{{ $item->title }}</a></li>
                        @endforeach
                    @else
                        <li><a href="#about" class="hover:text-black transition-colors duration-200">About</a></li>
                        <li><a href="#treatments" class="hover:text-black transition-colors duration-200">Treatments</a>
                        </li>
                        <li><a href="#devices" class="hover:text-black transition-colors duration-200">Our Devices</a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="text-center">
                <p class="tracking-[0.35em] text-lg uppercase text-[#303030] mb-4">
                    Contact
                </p>
                <div class="space-y-2 text-sm text-[#7b6f69]">
                    @if ($contact_phone_1)
                        <p><a href="tel:{{ $contact_phone_1 }}"
                                class="hover:text-black transition-colors duration-200">{{ $contact_phone_1 }}</a></p>
                    @endif
                    @if ($contact_phone_2)
                        <p><a href="tel:{{ $contact_phone_2 }}"
                                class="hover:text-black transition-colors duration-200">{{ $contact_phone_2 }}</a></p>
                    @endif
                    @if ($contact_email)
                        <p class="mt-2">
                            <a href="mailto:{{ $contact_email }}"
                                class="hover:text-black transition-colors duration-200">
                                {{ $contact_email }}
                            </a>
                        </p>
                    @endif

                    @if ($contact_address)
                        <p class="mt-6 leading-relaxed">
                            {!! nl2br($contact_address) !!}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
