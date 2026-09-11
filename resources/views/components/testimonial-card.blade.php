<div class="bg-white/70 rounded-2xl p-6 border border-brew-ink/10 shadow-sm">
    <div class="flex text-brew-amber mb-4">
        @for ($i = 0; $i < 5; $i++)
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01z"/></svg>
        @endfor
    </div>

    <p class="text-brew-ink/80 text-sm leading-relaxed mb-6">"{{ $review }}"</p>

    <div class="flex items-center gap-3">
        <div class="w-11 h-11 rounded-full flex items-center justify-center font-semibold text-sm text-brew-cream" style="background-color: {{ $color ?? '#B8752E' }}">
            {{ $initials }}
        </div>
        <div>
            <p class="font-semibold text-sm text-brew-ink">{{ $name }}</p>
            <p class="text-xs text-brew-ink/50">{{ $position }}</p>
        </div>
    </div>
</div>