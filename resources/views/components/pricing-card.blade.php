<div class="rounded-2xl p-8 {{ $highlighted ?? false ? 'bg-brew-ink text-brew-cream shadow-xl scale-105' : 'bg-white/70 text-brew-ink border border-brew-ink/10 shadow-sm' }} relative">
    @if ($highlighted ?? false)
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 text-[11px] font-semibold px-3 py-1 rounded-full bg-brew-amber text-brew-cream">
            Most popular
        </span>
    @endif

    <h3 class="font-serif font-bold text-xl mb-1">{{ $plan }}</h3>
    <p class="text-3xl font-serif font-bold mb-1">₱{{ $price }}</p>
    <p class="text-sm {{ $highlighted ?? false ? 'text-brew-cream/60' : 'text-brew-ink/50' }} mb-6">{{ $unit }}</p>

    <ul class="space-y-3 mb-8">
        @foreach ($features as $feature)
            <li class="flex items-start gap-2 text-sm">
                <svg width="16" height="16" fill="none" stroke="{{ $highlighted ?? false ? '#F3E6D3' : '#B8752E' }}" stroke-width="2" viewBox="0 0 24 24" class="mt-0.5 shrink-0"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <a href="#contact" class="block text-center py-3 rounded-lg font-semibold transition-colors {{ $highlighted ?? false ? 'bg-brew-amber text-brew-cream hover:bg-brew-cream hover:text-brew-ink' : 'bg-brew-ink/5 text-brew-ink hover:bg-brew-ink hover:text-brew-cream' }}">
        {{ $button ?? 'Subscribe' }}
    </a>
</div>