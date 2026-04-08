<nav class="bg-saas-black bg-opacity-90 backdrop-blur-sm sticky top-0 z-50 border-b border-saas-darkGray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-18 items-center">

            <div class="shrink-0 flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('logo.png') }}" class="w-5" alt="logo-sancakra">
                </a>
            </div>

            <div class="hidden md:block">
                <div class="flex items-center space-x-4">
                    <a href="/"
                        class="px-3 py-2 text-sm font-medium transition-colors {{ request()->is('/') ? 'text-yellow-500' : 'text-white hover:text-yellow-500' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}"
                        class="px-3 py-2 text-sm font-medium transition-colors {{ request()->is('about') ? 'text-yellow-500' : 'text-white hover:text-yellow-500' }}">
                        About
                    </a>
                    <a href="{{ route('news') }}"
                        class="px-3 py-2 text-sm font-medium transition-colors {{ request()->is('news') ? 'text-yellow-500' : 'text-white hover:text-yellow-500' }}">
                        News
                    </a>
                    <a href="{{ route('career') }}"
                        class="px-3 py-2 text-sm font-medium transition-colors {{ request()->is('career') ? 'text-yellow-500' : 'text-white hover:text-yellow-500' }}">
                        Career
                    </a>
                </div>
            </div>

            <div class="shrink-0 flex items-center">
                
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white focus:outline-none">
                    <svg id="icon-menu" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="icon-close" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-saas-darkGray">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/"
                class="block px-3 py-2 text-base font-medium {{ request()->is('/') ? 'text-saas-orange' : 'text-white hover:text-saas-orange' }}">
                Home
            </a>
            <a href="/roadmap"
                class="block px-3 py-2 text-base font-medium {{ request()->is('roadmap') ? 'text-saas-orange' : 'text-white hover:text-saas-orange' }}">
                Roadmap
            </a>
            <a href="/pricing"
                class="block px-3 py-2 text-base font-medium {{ request()->is('pricing') ? 'text-saas-orange' : 'text-white hover:text-saas-orange' }}">
                Pricing
            </a>
            <a href="/contact"
                class="block px-3 py-2 text-base font-medium {{ request()->is('contact') ? 'text-saas-orange' : 'text-white hover:text-saas-orange' }}">
                Contact
            </a>
            <a href="/blog"
                class="block px-3 py-2 text-base font-medium {{ request()->is('blog*') ? 'text-saas-orange' : 'text-white hover:text-saas-orange' }}">
                Blog
            </a>
            <div class="mt-4 px-3 py-2">
                <a href="https://codescandy.com/" target="_blank" class="btn-primary w-full">
                    Get Template
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');

        menu.classList.toggle('hidden');

        iconMenu.classList.toggle('hidden');
        iconMenu.classList.toggle('block');

        iconClose.classList.toggle('hidden');
        iconClose.classList.toggle('block');
    });
</script>