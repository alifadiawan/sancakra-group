<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sancakra Group | Career</title>

    @vite(['resources/css/app.css'])
</head>

<body>

    <div class="min-h-screen bg-[#141009] font-sans pb-24">

        @include('Components.Navbar')

        <div
            class="relative pt-32 pb-24 overflow-hidden bg-linear-to-b from-saas-darkGray to-[#1c160c] border-b border-gray-800">
            <div
                class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-saas-gold/5 blur-[120px] rounded-full pointer-events-none">
            </div>

            <div class="relative px-4 mx-auto max-w-4xl text-center sm:px-6 lg:px-8">
                <span
                    class="inline-block py-1 px-3 mb-6 text-sm font-bold tracking-widest uppercase rounded-full bg-saas-gold/10 text-saas-gold-400 border border-saas-gold/20">
                    Join Our Ecosystem
                </span>
                <h1 class="mb-6 text-4xl font-black tracking-tight text-white md:text-5xl lg:text-6xl">
                    Shape the Future of <span
                        class="text-transparent bg-linear-to-r from-saas-gold-400 to-saas-gold-600 bg-clip-text">Meaningful
                        Experiences</span>
                </h1>
                <p class="text-xl leading-relaxed text-gray-400">
                    We're looking for passionate creators, designers, and visionaries to help us build a new era of true
                    value creation.
                </p>
            </div>
        </div>


        <div class="pt-20 px-4 mx-auto max-w-5xl sm:px-6 lg:px-8">

            <div class="flex flex-col md:flex-row md:items-center justify-between mb-10">
                <h2 class="text-3xl font-bold text-white mb-6 md:mb-0">Open Positions</h2>


            </div>

            <div class="space-y-4">

                @forelse ($jobs as $item)
                    <a href="#"
                        class="block p-6 transition-all duration-300 border rounded-2xl bg-saas-darkGray border-gray-800 hover:border-saas-gold/50 group">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="mb-6 md:mb-0">
                                <div class="flex items-center space-x-3 mb-2 text-sm">
                                    <span
                                        class="text-saas-gold-400 font-bold tracking-wider uppercase">{{ $item->team }}</span>
                                    <span class="text-gray-600">•</span>
                                    <span class="text-gray-400 flex items-center capitalize">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        {{ $item->city }} | {{ $item->workplace_type }}
                                    </span>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-2 transition-colors">
                                    {{ $item->title }}
                                </h3>
                                <p class="text-gray-400 max-w-2xl">{{ $item->summary }}</p>
                            </div>
                            <div class="shrink-0">
                                <span
                                    class="inline-flex items-center justify-center px-6 py-3 font-medium transition-colors border rounded-lg border-gray-700 text-white group-hover:bg-saas-gold-400 group-hover:text-[#141009] group-hover:border-saas-gold">
                                    View Role
                                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                @empty
                    <a href="#"
                        class="block p-6 transition-all duration-300 text-center rounded-2xl text-white">
                        There are no open positions available yet
                    </a>
                @endforelse

            </div>

        </div>
    </div>

    @include('Components.Footer')

</body>

</html>