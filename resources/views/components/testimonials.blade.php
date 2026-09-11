<section id="testimonials" class="max-w-6xl mx-auto px-6 py-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-serif font-bold text-brew-ink mb-3">What our customers say</h2>
        <p class="text-brew-ink/70 max-w-xl mx-auto">Real reviews from people who stop by BREWVERY every week.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        @include('components.testimonial-card', [
            'name' => 'Liam Rubiales',
            'position' => 'College student',
            'review' => 'The Okinawa milk tea is unmatched. I stop by BREWVERY between classes almost every day and the staff already know my order.',
            'initials' => 'LR',
            'color' => '#B8752E',
        ])

        @include('components.testimonial-card', [
            'name' => 'Einjel Gonzaga',
            'position' => 'Regular customer',
            'review' => 'Finally a milk tea place that does not skimp on the boba. The Duo Treat pass saves me so much money since I always order with my girlfriend.',
            'initials' => 'EG',
            'color' => '#6E7F5C',
        ])

        @include('components.testimonial-card', [
            'name' => 'Vernise Argonza',
            'position' => 'Regular customer',
            'review' => 'I have tried every milk tea shop in the area for my page, and BREWVERY genuinely brews fresh tea instead of using powder. You can taste the difference.',
            'initials' => 'VA',
            'color' => '#3A2417',
        ])

    </div>
</section>