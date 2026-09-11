<nav class="bg-brew-cream border-b border-brew-ink/10 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">

            <a href="/" class="flex items-center gap-2">
                <svg width="36" height="36" viewBox="0 0 220 200" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="150" cy="35" rx="15" ry="8" fill="#6E7F5C" transform="rotate(-28 150 35)"/>
                    <line x1="150" y1="41" x2="144" y2="60" stroke="#3A2417" stroke-width="4" stroke-linecap="round"/>
                    <rect x="95" y="58" width="90" height="16" rx="6" fill="#B8752E"/>
                    <path d="M100 74 L190 74 L178 170 Q177 178 168 178 L122 178 Q113 178 112 170 Z" fill="#F3E6D3" stroke="#3A2417" stroke-width="1.5"/>
                    <circle cx="134" cy="153" r="7" fill="#3A2417"/>
                    <circle cx="150" cy="158" r="7" fill="#3A2417"/>
                    <circle cx="166" cy="153" r="7" fill="#3A2417"/>
                </svg>
                <span class="font-serif text-xl font-bold text-brew-ink tracking-wide">BREWVERY</span>
            </a>

            <div class="hidden lg:flex items-center gap-8">
                <a href="#home" class="text-brew-ink hover:text-brew-amber transition-colors">Home</a>
                <a href="#features" class="text-brew-ink hover:text-brew-amber transition-colors">Features</a>
                <a href="#pricing" class="text-brew-ink hover:text-brew-amber transition-colors">Pricing</a>
                <a href="#testimonials" class="text-brew-ink hover:text-brew-amber transition-colors">Testimonials</a>
                <a href="#contact" class="text-brew-ink hover:text-brew-amber transition-colors">Contact</a>
            </div>

            <div class="hidden lg:flex items-center gap-3">
                <a href="#" class="px-4 py-2 text-brew-ink hover:text-brew-amber transition-colors">Sign in</a>
                <a href="#" class="px-5 py-2 rounded-lg bg-brew-amber text-brew-cream hover:bg-brew-ink transition-colors shadow-sm">Get started</a>
            </div>

            <button id="menu-toggle" class="lg:hidden text-brew-ink" aria-label="Toggle menu">
                <svg id="icon-open" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg id="icon-close" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" class="hidden"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden pb-6 flex flex-col gap-4">
            <a href="#home" class="text-brew-ink">Home</a>
            <a href="#features" class="text-brew-ink">Features</a>
            <a href="#pricing" class="text-brew-ink">Pricing</a>
            <a href="#testimonials" class="text-brew-ink">Testimonials</a>
            <a href="#contact" class="text-brew-ink">Contact</a>
            <a href="#" class="text-brew-ink">Sign in</a>
            <a href="#" class="px-5 py-2 rounded-lg bg-brew-amber text-brew-cream text-center">Get started</a>
        </div>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
    });
</script>