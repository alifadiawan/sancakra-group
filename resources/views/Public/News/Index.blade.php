<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sancakra News</title>

    @vite(['resources/css/app.css'])
</head>

<body>

    <div class="min-h-screen bg-[#141009] font-sans pb-24">

        @include('Components.Navbar')

        <div
            class="relative pt-18 pb-32 overflow-hidden bg-linear-to-b from-saas-darkGray to-[#1c160c] border-b border-gray-800">
            <div
                class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-saas-gold/5 blur-[120px] rounded-full pointer-events-none">
            </div>

            <div class="relative px-4 mx-auto max-w-4xl text-center sm:px-6 lg:px-8">
                <h1 class="mb-6 text-4xl font-black tracking-tight text-white md:text-5xl lg:text-6xl">
                    Sancakra <span
                        class="text-transparent bg-linear-to-r from-saas-gold-400 to-saas-gold-600 bg-clip-text">News</span>
                </h1>
                <p class="text-xl leading-relaxed text-gray-400">
                    Insights, announcements, and stories from across our ecosystem of events, travel, and creative
                    experiences.
                </p>
            </div>
        </div>

        <div class="relative z-10 px-4 mx-auto -mt-16 max-w-7xl sm:px-6 lg:px-8">
            @empty(!$latest_news)
                <div
                    class="flex flex-col h-full overflow-hidden transition-all duration-300 border shadow-2xl md:flex-row rounded-2xl bg-saas-darkGray border-saas-gold/30 hover:border-saas-gold/60 group">

                    <div class="relative w-full md:w-1/4 shrink-0 aspect-video md:aspect-auto">
                        @if ($latest_news->featured_image)
                            <img src="{{ Storage::url($latest_news->featured_image) }}" alt="{{ $latest_news->title }}"
                                class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105">
                        @else
                            <img src="{{ asset('logo.png') }}" alt="Placeholder News"
                                class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105">
                        @endif
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-3 py-1 text-xs font-bold tracking-widest text-[#141009] uppercase rounded-full bg-saas-gold-400">
                                Featured
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-col justify-center p-8 md:p-12">
                        <div class="flex items-center mb-4 space-x-2 text-sm">
                            <span class="font-bold tracking-wider uppercase text-saas-gold-400">Events</span>
                            <span class="text-gray-600">•</span>
                            <span class="text-gray-400">{{ \Carbon\Carbon::parse($latest_news->published_at)->format('d M Y - H:i') }}</span>
                        </div>

                        <h2
                            class="mb-4 text-3xl font-bold leading-snug text-white transition-colors cursor-pointer hover:text-saas-gold md:text-4xl">
                            {{ $latest_news->title }}
                        </h2>
                        <p class="mb-8 text-lg text-gray-400 leading-relaxed">
                            {{ $latest_news->excerpt }}
                        </p>

                        <a href="{{ route('news.show', $latest_news->slug) }}"
                            class="inline-flex items-center mt-auto font-bold transition-colors text-saas-gold hover:text-saas-gold-400">
                            Read Full Story
                            <svg class="w-5 h-5 ml-2 transition-transform transform group-hover:translate-x-2"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endempty

        </div>

        <div class="px-4 mx-auto mt-20 mb-12 max-w-7xl sm:px-6 lg:px-8">
            <div class="flex pb-4 space-x-8 overflow-x-auto border-b border-gray-800 scrollbar-hide">
                <button
                    class="pb-4 font-semibold tracking-wide transition-colors border-b-2 whitespace-nowrap text-saas-gold-400 border-saas-gold">
                    All News
                </button>
                <!-- <button
                    class="pb-4 font-semibold tracking-wide text-gray-500 transition-colors border-b-2 border-transparent whitespace-nowrap hover:text-white hover:border-gray-600">
                    Events
                </button>
                <button
                    class="pb-4 font-semibold tracking-wide text-gray-500 transition-colors border-b-2 border-transparent whitespace-nowrap hover:text-white hover:border-gray-600">
                    Travel
                </button>
                <button
                    class="pb-4 font-semibold tracking-wide text-gray-500 transition-colors border-b-2 border-transparent whitespace-nowrap hover:text-white hover:border-gray-600">
                    Creative
                </button>
                <button
                    class="pb-4 font-semibold tracking-wide text-gray-500 transition-colors border-b-2 border-transparent whitespace-nowrap hover:text-white hover:border-gray-600">
                    Wellness
                </button> -->
            </div>
        </div>

        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($news as $item)
                    <div
                        class="flex flex-col h-full overflow-hidden transition-all duration-300 border rounded-2xl bg-saas-darkGray border-gray-800 transform hover:-translate-y-1 hover:border-saas-gold/50 group">
                        <div class="relative aspect-video overflow-hidden bg-[#1c160c]">
                            <img src="{{ Storage::url($item->featured_image) }}" alt="Travel News"
                                class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105">
                        </div>

                        <div class="flex flex-col grow p-6 md:p-8">
                            <div class="flex items-center mb-4 space-x-2 text-xs">
                                <span class="font-bold tracking-wider uppercase text-saas-gold-400">Event</span>
                                <span class="text-gray-600">•</span>
                                <span class="text-gray-400">{{ $item->published_at }}</span>
                            </div>

                            <h3
                                class="mb-3 text-xl font-bold text-white leading-snug hover:text-saas-gold transition-colors cursor-pointer">
                                {{ $item->title }}
                            </h3>
                            <p class="mb-6 text-gray-400">{{ $item->excerpt }}</p>

                            <a href="{{ route('news.show', $item->slug) }}"
                                class="inline-flex items-center mt-auto font-semibold transition-colors text-saas-gold-400 hover:text-saas-gold-400">
                                Read Story
                                <svg class="w-4 h-4 ml-2 transition-transform transform group-hover:translate-x-1"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach



            </div>

            <!-- <div class="mt-16 text-center">
                <button
                    class="inline-flex items-center justify-center px-8 py-3 font-medium transition-all duration-300 border rounded-lg border-gray-700 bg-saas-darkGray text-white hover:border-saas-gold hover:text-saas-gold">
                    Load More Articles
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
            </div> -->

        </div>
    </div>

</body>

</html>