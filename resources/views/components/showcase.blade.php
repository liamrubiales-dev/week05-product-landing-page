<section id="showcase" class="max-w-6xl mx-auto px-6 py-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-serif font-bold text-brew-ink mb-3">See BREWVERY in action</h2>
        <p class="text-brew-ink/70 max-w-xl mx-auto">A closer look at our menu experience, in the shop and on your phone.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

        <div class="lg:col-span-2 bg-white/70 rounded-2xl border border-brew-ink/10 shadow-sm p-8">
            <div class="flex items-center justify-between mb-5">
                <p class="text-xs uppercase tracking-wide text-brew-ink/50">Our flavors</p>
                <p class="text-xs text-brew-ink/40">Starting at ₱85</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ([
                    ['name' => 'Okinawa', 'color' => '#A66628', 'price' => '89', 'badge' => 'Bestseller'],
                    ['name' => 'Thai milk tea', 'color' => '#D9722C', 'price' => '99', 'badge' => 'New'],
                    ['name' => 'Taro', 'color' => '#9B7EBD', 'price' => '89', 'badge' => null],
                    ['name' => 'Cookies and cream', 'color' => '#B9AFA0', 'price' => '99', 'badge' => null],
                    ['name' => 'Matcha', 'color' => '#6E8B47', 'price' => '95', 'badge' => 'Bestseller'],
                    ['name' => 'Red velvet', 'color' => '#A33B3B', 'price' => '95', 'badge' => null],
                    ['name' => 'Cheesecake', 'color' => '#E3D19C', 'price' => '99', 'badge' => null],
                    ['name' => 'Chocolate', 'color' => '#5C3A21', 'price' => '85', 'badge' => null],
                ] as $flavor)
                    <div class="group relative bg-brew-cream rounded-xl overflow-hidden border border-brew-ink/5 hover:border-brew-amber/40 hover:shadow-md transition-all">
                        <div class="h-1.5 w-full" style="background-color: {{ $flavor['color'] }}"></div>

                        @if ($flavor['badge'])
                            <span class="absolute top-3 right-3 text-[9px] font-semibold px-2 py-0.5 rounded-full
                                {{ $flavor['badge'] === 'New' ? 'bg-brew-sage/20 text-brew-sage' : 'bg-brew-amber/20 text-brew-amber' }}">
                                {{ $flavor['badge'] }}
                            </span>
                        @endif

                        <div class="p-4 text-center">
                            <svg width="44" height="48" viewBox="0 0 220 240" class="mx-auto mb-2 group-hover:-translate-y-0.5 transition-transform">
                                <rect x="80" y="72" width="60" height="14" rx="6" fill="#B8752E"/>
                                <path d="M88 86 L142 86 L134 200 Q133 210 124 210 L106 210 Q97 210 96 200 Z" fill="{{ $flavor['color'] }}" stroke="#3A2417" stroke-width="2"/>
                                <circle cx="105" cy="185" r="6" fill="#2A1B10"/>
                                <circle cx="115" cy="192" r="6" fill="#2A1B10"/>
                                <circle cx="125" cy="185" r="6" fill="#2A1B10"/>
                            </svg>
                            <p class="text-xs font-medium text-brew-ink mb-1">{{ $flavor['name'] }}</p>
                            <p class="text-[11px] text-brew-ink/50">₱{{ $flavor['price'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="bg-white/70 rounded-2xl border border-brew-ink/10 shadow-sm p-6">
            <p class="text-xs uppercase tracking-wide text-brew-ink/50 mb-4">Mobile ordering</p>

            <div class="mx-auto w-48 rounded-[2rem] border-4 border-brew-ink bg-brew-ink overflow-hidden shadow-lg">
                <div class="flex justify-between items-center px-4 py-1.5 bg-brew-ink">
                    <span class="text-[9px] text-brew-cream font-medium">12:00</span>
                    <div class="flex gap-1 items-center">
                        <div class="w-3 h-2 border border-brew-cream rounded-sm"></div>
                    </div>
                </div>

                <div class="bg-brew-cream rounded-t-2xl px-4 pt-4 pb-5">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-serif font-bold text-brew-ink">BREWVERY</span>
                        <svg width="16" height="16" fill="none" stroke="#3A2417" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h15l-1.5 9h-12z"/><circle cx="9" cy="20" r="1"/><circle cx="18" cy="20" r="1"/></svg>
                    </div>

                    <div class="bg-white rounded-xl p-4 mb-3">
                        <svg width="56" height="60" viewBox="0 0 220 240" class="mx-auto mb-2">
                            <rect x="80" y="72" width="60" height="14" rx="6" fill="#B8752E"/>
                            <path d="M88 86 L142 86 L134 200 Q133 210 124 210 L106 210 Q97 210 96 200 Z" fill="#D9722C" stroke="#3A2417" stroke-width="2"/>
                            <circle cx="105" cy="185" r="6" fill="#2A1B10"/>
                            <circle cx="115" cy="192" r="6" fill="#2A1B10"/>
                            <circle cx="125" cy="185" r="6" fill="#2A1B10"/>
                        </svg>
                        <p class="text-xs font-semibold text-brew-ink text-center">Thai milk tea</p>
                        <div class="flex items-center justify-center gap-1 mt-1">
                            <span class="text-[10px] text-brew-amber">★★★★★</span>
                            <span class="text-[9px] text-brew-ink/50">4.9</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mb-3 px-1">
                        <span class="text-[11px] text-brew-ink/60">Size</span>
                        <div class="flex gap-1.5">
                            <span class="text-[9px] px-2 py-0.5 rounded-full bg-brew-ink text-brew-cream">M</span>
                            <span class="text-[9px] px-2 py-0.5 rounded-full border border-brew-ink/30 text-brew-ink">L</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between bg-brew-amber rounded-lg py-2.5 px-3">
                        <span class="text-[10px] text-brew-cream font-semibold">Add to cart</span>
                        <span class="text-[10px] text-brew-cream font-bold">₱99</span>
                    </div>
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-3">
                <div>
                    <p class="text-2xl font-serif font-bold text-brew-ink">15k+</p>
                    <p class="text-xs text-brew-ink/60">Cups served monthly</p>
                </div>
                <div>
                    <p class="text-2xl font-serif font-bold text-brew-ink">8</p>
                    <p class="text-xs text-brew-ink/60">Signature flavors</p>
                </div>
                <div>
                    <p class="text-2xl font-serif font-bold text-brew-ink">4.8★</p>
                    <p class="text-xs text-brew-ink/60">Average customer rating</p>
                </div>
            </div>
        </div>

    </div>
</section>