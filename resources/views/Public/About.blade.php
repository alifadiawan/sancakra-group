<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sancakra Group | Holding Company</title>
    <meta name="description"
        content="Sancakra Group helps businesses grow through digital solutions, innovation, and strategic development. Explore our services, latest updates, and company profile.">
    <meta name="keywords" content="Sancakra Group, digital solutions, business innovation, company profile, Indonesia">
    <meta name="author" content="Sancakra Group">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Sancakra Group | Digital Solutions & Business Innovation">
    <meta property="og:description"
        content="Sancakra Group helps businesses grow through digital solutions, innovation, and strategic development.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Sancakra Group">
    <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}">

    @vite(['resources/css/app.css'])
</head>

<body>

    <div class="min-h-screen bg-[#141009] font-sans">

        @include('Components.Navbar')

        <div
            class="relative pt-12 pb-20 overflow-hidden bg-linear-to-b from-saas-darkGray to-[#1c160c] border-b border-gray-800">
            <div
                class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-saas-gold/5 blur-[120px] rounded-full pointer-events-none">
            </div>

            <div class="relative px-4 mx-auto max-w-4xl text-center sm:px-6 lg:px-8">
                <span
                    class="inline-block py-1 px-3 mb-6 text-sm font-bold tracking-widest uppercase rounded-full bg-saas-gold/10 text-saas-gold-400 border border-saas-gold/20">
                    Who We Are
                </span>
                <h1 class="mb-6 text-4xl font-black tracking-tight text-white md:text-5xl lg:text-6xl">
                    Where Imagination Meets <span
                        class="text-transparent bg-linear-to-r from-saas-gold-400 to-saas-gold-600 bg-clip-text">Execution.</span>
                </h1>
                <p class="text-xl leading-relaxed text-gray-400 md:text-2xl">
                    We are a human-centered collective creating meaningful and better human experiences at every touch
                    point. Every time.
                </p>
            </div>
        </div>

        <div class="py-20 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-16 lg:grid-cols-2 items-center">

                <div>
                    <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">Our Origin Story</h2>
                    <div class="space-y-6 text-lg text-gray-400 leading-relaxed">
                        <p>
                            Since the establishment of our company under the legal entity of PT. Santiga Cipta Kreativa,
                            we have been bringing together like-minded, active young people with a passion for cultural
                            exploration.
                        </p>
                        <p>
                            Our goal has always been to redefine the true meaning of travel and event experiences. We
                            have built our business and reputation by providing unsurpassed customer service, value, and
                            top-notch services to convention and meeting planners, incentive travel organizers, tour
                            operators, airlines, and private clients around the world.
                        </p>
                        <p>
                            Welcome to Sancakra Group—your one-stop destination for seamless event experiences,
                            unforgettable travel adventures, enriching workshops, and creative solutions that leave a
                            lasting impression.
                        </p>
                    </div>
                </div>

                <div
                    class="relative w-full aspect-square md:aspect-video lg:aspect-square rounded-2xl overflow-hidden bg-saas-darkGray border border-gray-800 group">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                        alt="The Sancakra Team"
                        class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105 opacity-80 mix-blend-luminosity">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-[#141009] via-transparent to-transparent opacity-80">
                    </div>
                    <div class="absolute bottom-8 left-8 right-8">
                        <p class="text-2xl font-bold text-white">Join us in crafting unique stories and making memories
                            that last a lifetime.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="py-24 bg-[#1c160c] border-y border-gray-800">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="max-w-3xl mx-auto mb-16 text-center">
                    <h2 class="mb-4 text-3xl font-bold text-white md:text-4xl">Beyond the Bottom Line</h2>
                    <p class="text-lg text-gray-400">
                        We believe that maximizing profit and minimizing costs is not the only way to maintain and grow
                        our company. Our brand is uniquely designed to enrich all lives.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

                    <div
                        class="p-8 transition-all duration-300 border rounded-2xl bg-saas-darkGray border-gray-800 hover:border-saas-gold/50 hover:-translate-y-1">
                        <div class="flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-saas-gold/10">
                            <svg class="w-7 h-7 text-saas-gold" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-4 text-2xl font-bold text-white">Creating Shared Value</h3>
                        <p class="text-gray-400 leading-relaxed">
                            True value is more than just maximizing profits for our shareholders. It's about creating
                            shared value that leads us to contribute positively to our community and the environment.
                        </p>
                    </div>

                    <div
                        class="p-8 transition-all duration-300 border rounded-2xl bg-saas-darkGray border-gray-800 hover:border-saas-gold/50 hover:-translate-y-1">
                        <div class="flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-saas-gold/10">
                            <svg class="w-7 h-7 text-saas-gold" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-4 text-2xl font-bold text-white">Empowering Our People</h3>
                        <p class="text-gray-400 leading-relaxed">
                            Our culture supports our employees in achieving their potential, life balance, and career
                            development. When they connect with what's important, they leap into a new era of true value
                            creation.
                        </p>
                    </div>

                    <div
                        class="p-8 transition-all duration-300 border rounded-2xl bg-saas-darkGray border-gray-800 hover:border-saas-gold/50 hover:-translate-y-1">
                        <div class="flex items-center justify-center w-14 h-14 mb-6 rounded-xl bg-saas-gold/10">
                            <svg class="w-7 h-7 text-saas-gold" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-4 text-2xl font-bold text-white">Client Transformation</h3>
                        <p class="text-gray-400 leading-relaxed">
                            We love seeing the incredible results our clients achieve when they deeply connect with
                            their goals, opening their organizations to new dreams and enriched visions of success.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="py-24 text-center">
            <div class="px-4 mx-auto max-w-4xl sm:px-6 lg:px-8">
                <h2 class="mb-6 text-3xl font-bold text-white md:text-5xl">Ready to discover a world of endless
                    possibilities?</h2>
                <p class="mb-10 text-xl text-gray-400">Let Sancakra Group bring your next big vision to life.</p>
                <div class="flex flex-col justify-center space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6">
                    <a href="https://www.instagram.com/sancakragroup/"
                        class="inline-flex justify-center items-center px-8 py-4 text-lg font-bold transition-all duration-300 rounded-xl bg-saas-gold-400 text-[#141009] hover:bg-saas-gold-600 hover:scale-105">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>