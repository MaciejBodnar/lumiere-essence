<nav class="flex flex-col">
    <div class="w-full max-w-lg px-6">
        <ul class="flex flex-col gap-4 justify-center items-center italic">
            @if ($primary_navigation)
                @foreach ($primary_navigation as $item)
                    <li>
                        <a href="{{ $item->url }}"
                            class="block w-full px-4 py-3 bg-transparent text-2xl uppercase text-[#3b2a27] hover:text-[#C49090] transition rounded-lg {{ $item->active ? 'text-[#C49090]' : '' }}">
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach
            @else
                <li><a href="/"
                        class="block w-full px-4 py-3 bg-transparent text-2xl uppercase text-[#3b2a27] hover:text-[#C49090] transition rounded-lg">Home</a>
                </li>
                <li><a href="#about"
                        class="block w-full px-4 py-3 bg-transparent text-2xl uppercase text-[#3b2a27] hover:text-[#C49090] transition rounded-lg">About</a>
                </li>
                <li><a href="#treatments"
                        class="block w-full px-4 py-3 bg-transparent text-2xl uppercase text-[#3b2a27] hover:text-[#C49090] transition rounded-lg">Treatments</a>
                </li>
                <li><a href="#devices"
                        class="block w-full px-4 py-3 bg-transparent text-2xl uppercase text-[#3b2a27] hover:text-[#C49090] transition rounded-lg">Our
                        Devices</a></li>
                <li><a href="#contact"
                        class="block w-full px-4 py-3 bg-transparent text-2xl uppercase text-[#3b2a27] hover:text-[#C49090] transition rounded-lg">Contact</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
