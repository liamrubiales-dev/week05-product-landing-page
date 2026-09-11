<section id="features" class="max-w-6xl mx-auto px-6 py-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-serif font-bold text-brew-ink mb-3">Why people love BREWVERY</h2>
        <p class="text-brew-ink/70 max-w-xl mx-auto">Every cup is made with care, from fresh ingredients to fast, friendly service.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @include('components.feature-card', [
            'icon' => '<svg width="24" height="24" fill="none" stroke="#B8752E" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 21h8m-4-4v4M4 4h16v6a8 8 0 01-16 0V4z"/></svg>',
            'title' => 'Fresh-brewed daily',
            'description' => 'Tea brewed fresh every morning, never left sitting overnight.',
        ])

        @include('components.feature-card', [
            'icon' => '<svg width="24" height="24" fill="none" stroke="#B8752E" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 100 20 10 10 0 000-20zM12 6v6l4 2"/></svg>',
            'title' => 'Real ingredients',
            'description' => 'No powdered mixes — real milk and natural fruit in every drink.',
        ])

        @include('components.feature-card', [
            'icon' => '<svg width="24" height="24" fill="none" stroke="#B8752E" stroke-width="2" viewBox="0 0 24 24"><circle cx="6" cy="12" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="18" cy="12" r="2"/></svg>',
            'title' => 'Chewy handmade boba',
            'description' => 'Tapioca pearls cooked fresh in-house every single day.',
        ])

        @include('components.feature-card', [
            'icon' => '<svg width="24" height="24" fill="none" stroke="#B8752E" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 21v-7a8 8 0 0116 0v7M4 14a8 8 0 0116 0"/></svg>',
            'title' => 'Customizable sweetness',
            'description' => 'Choose your sugar level and ice from 0 to 100 percent.',
        ])

        @include('components.feature-card', [
            'icon' => '<svg width="24" height="24" fill="none" stroke="#B8752E" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/></svg>',
            'title' => 'Fast, friendly service',
            'description' => 'Most orders are ready to go in under five minutes.',
        ])

        @include('components.feature-card', [
            'icon' => '<svg width="24" height="24" fill="none" stroke="#B8752E" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.5-3-6-3-6 1 0 3 3 5 6 8 3-3 6-5 6-8 0-4-4.5-4-6-1z"/></svg>',
            'title' => 'Loyalty rewards',
            'description' => 'Earn a free drink every 10 purchases with our rewards card.',
        ])

    </div>
</section>