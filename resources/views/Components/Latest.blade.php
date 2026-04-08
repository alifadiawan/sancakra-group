<div class="py-16 md:py-24  bg-[#1c160c]">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div class="max-w-2xl">
                <h2 class="mb-4 text-3xl font-bold md:text-4xl text-white">
                    Latest <span
                        class="text-transparent bg-linear-to-r from-saas-gold-400 to-saas-gold-600 bg-clip-text">Updates</span>
                </h2>
                <p class="text-gray-400">
                    Stay informed with the latest news, events, and milestones from across the Sancakra Group ecosystem.
                </p>
            </div>
            <div class="mt-6 md:mt-0">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 font-medium transition-all duration-300 border rounded-lg border-gray-700 bg-saas-darkGray text-white hover:border-saas-gold hover:text-saas-gold">
                    View All News
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-8">

            @if (!empty($latest_news))
                <div
                    class="flex flex-col md:flex-row h-full overflow-hidden transition-all duration-300 border rounded-2xl bg-saas-darkGray border-gray-800 transform hover:-translate-y-1 hover:border-saas-gold/50 group">

                    <div class="relative w-full md:w-6/20 max-h-96 shrink-0 aspect-video md:aspect-auto">
                        @if ($latest_news->featured_image)
                            <img src="{{ Storage::url($latest_news->featured_image) }}" alt="{{ $latest_news->featured_image }}"
                                class="object-cover w-full h-full">
                        @else
                            <img src="{{ asset('sancakragroup.jpg') }}" alt="{{ $latest_news->featured_image }}"
                                class="object-cover w-full h-full">
                        @endif
                    </div>

                    <div class="flex flex-col flex-grow p-6 md:p-8">
                        <div class="flex items-center mb-4 space-x-2 text-xs">
                            <span class="text-gray-400">April 5, 2026</span>
                        </div>

                        <h3
                            class="mb-3 text-xl font-bold text-white leading-snug hover:text-saas-gold transition-colors cursor-pointer">
                            {{ $latest_news->title }}
                        </h3>
                        <p class="mb-6 text-gray-400">
                            {{ \Illuminate\Support\Str::limit(strip_tags($latest_news->content), 200) }}
                        </p>

                        <a href="{{ route('news') }}"
                            class="inline-flex items-center mt-auto font-semibold transition-colors text-saas-gold-300 hover:text-saas-gold-400">
                            Read Full Story
                            <svg class="w-4 h-4 ml-2 transition-transform transform group-hover:translate-x-1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>