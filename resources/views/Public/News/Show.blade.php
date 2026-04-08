<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sancakra News | {{ $news->title }}</title>

    @vite(['resources/css/app.css'])
</head>

<body>

    <div class="min-h-screen bg-[#141009] font-sans pb-24">

        @include('Components.Navbar')

        <div class="pt-12 pb-6 px-4 mx-auto max-w-5xl sm:px-6 lg:px-8">
            <a href="/news"
                class="inline-flex items-center font-medium text-gray-400 transition-colors hover:text-saas-gold">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Back to Journal
            </a>
        </div>

        <header class="px-4 mx-auto mb-12 max-w-5xl text-center sm:px-6 lg:px-8">
            <div class="flex items-center justify-center mb-6 space-x-3 text-sm">
                <span class="text-gray-400">{{ \Carbon\Carbon::parse($news->published_at)->format('d M Y - H:i') }}</span>
            </div>

            <h1 class="mb-8 text-4xl font-black tracking-tight text-white leading-tight md:text-5xl lg:text-6xl">
                {{ $news->title }}
            </h1>

            <p class="max-w-3xl mx-auto text-xl text-gray-400 leading-relaxed">
                {{ $news->excerpt }}
            </p>
        </header>

        <div class="px-4 mx-auto mb-16 max-w-6xl sm:px-6 lg:px-8">
            <div
                class="relative w-full aspect-video rounded-3xl overflow-hidden bg-saas-darkGray border border-gray-800 shadow-2xl">
                <img src="{{ asset(Storage::url($news->featured_image)) }}" alt="Futurepreneur Summit Stage"
                    class="object-cover w-full h-full opacity-90">
                <div class="absolute inset-0 bg-linear-to-t from-[#141009]/50 to-transparent"></div>
            </div>
        </div>

        <article class="px-4 mx-auto max-w-3xl sm:px-6 lg:px-8">

            <div class="space-y-8 text-lg text-gray-300 leading-relaxed md:text-xl md:leading-loose">
                {!! $news->content !!}
            </div>

        </article>

    </div>

</body>

</html>