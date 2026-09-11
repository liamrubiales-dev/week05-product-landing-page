<div class="group bg-white/60 rounded-xl p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all border border-brew-ink/10 relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-full h-1 scale-x-0 group-hover:scale-x-100 transition-transform origin-left" style="background-color: {{ $color ?? '#B8752E' }}"></div>

    <div class="w-14 h-14 rounded-full flex items-center justify-center mb-5" style="background-color: {{ $color ?? '#B8752E' }}1f">
        {!! $icon !!}
    </div>
    <h3 class="font-serif font-bold text-lg text-brew-ink mb-2">{{ $title }}</h3>
    <p class="text-brew-ink/70 text-sm leading-relaxed">{{ $description }}</p>
</div>