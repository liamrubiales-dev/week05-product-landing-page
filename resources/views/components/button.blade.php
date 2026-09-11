@props([
    'variant' => 'primary',
    'href' => '#',
])

@php
    $base = 'inline-block text-center px-6 py-3 rounded-lg font-semibold transition-colors';

    $styles = [
        'primary' => 'bg-brew-amber text-brew-cream hover:bg-brew-ink',
        'secondary' => 'border border-brew-ink/20 text-brew-ink hover:bg-brew-ink/5',
        'secondary-dark' => 'border border-brew-cream/30 text-brew-cream hover:bg-brew-cream/10',
        'dark-outline' => 'bg-brew-ink/5 text-brew-ink hover:bg-brew-ink hover:text-brew-cream',
    ];

    $style = $styles[$variant] ?? $styles['primary'];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "$base $style"]) }}>
    {{ $slot }}
</a>