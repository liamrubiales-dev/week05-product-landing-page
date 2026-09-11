<section id="pricing" class="max-w-6xl mx-auto px-6 py-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-serif font-bold text-brew-ink mb-3">Pick your pass</h2>
        <p class="text-brew-ink/70 max-w-xl mx-auto">Whether you're sipping solo or sharing with friends, there's a pass for you.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

        @include('components.pricing-card', [
            'plan' => 'Solo Sipper',
            'price' => '349',
            'unit' => 'per week, 1 drink/day',
            'features' => ['7 medium drinks', 'Any flavor, any day', 'Free size upgrade once a week', 'Valid 7 days from purchase'],
            'highlighted' => false,
        ])

        @include('components.pricing-card', [
            'plan' => 'Duo Treat',
            'price' => '649',
            'unit' => 'per week, 2 drinks/day',
            'features' => ['14 medium drinks', 'Share with a friend or partner', 'Free size upgrade twice a week', 'Priority pickup line', 'Valid 7 days from purchase'],
            'highlighted' => true,
        ])

        @include('components.pricing-card', [
            'plan' => 'Barkada Pack',
            'price' => '1,199',
            'unit' => 'per week, up to 5 people',
            'features' => ['28 medium drinks', 'Mix and match any flavors', 'Free size upgrades all week', 'Priority pickup line', 'One free topping add-on daily'],
            'highlighted' => false,
        ])

    </div>
</section>