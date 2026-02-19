<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pexil Positions</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-[#0B1120] font-sans antialiased text-slate-300">

    <!-- modern, dark glass-nav with custom SVG logo -->
    <nav class="sticky top-0 z-30 flex flex-wrap items-center justify-between gap-y-2 bg-[#0F172A]/80 backdrop-blur-md px-5 md:px-8 py-5 shadow-lg border-b border-slate-800/60">

        <!-- logo block: left - custom SVG logo -->
        <div class="flex items-center">
            <a href="/" class="block transition hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded-lg">
                <!-- Custom Pexil Positions SVG Logo -->
                <svg width="180" height="40" viewBox="0 0 180 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-10 w-auto">
                    <!-- background dot/element for visual interest -->
                    <circle cx="24" cy="20" r="8" fill="url(#gradient)" fill-opacity="0.2"/>

                    <!-- P letter icon/stylized -->
                    <path d="M20 12L20 28M20 12H26C28.2091 12 30 13.7909 30 16C30 18.2091 28.2091 20 26 20H20" stroke="url(#gradient)" stroke-width="2.5" stroke-linecap="round"/>

                    <!-- main text: pexil -->
                    <text x="42" y="24" font-family="Inter, system-ui, sans-serif" font-weight="700" font-size="18" letter-spacing="-0.02em" fill="white">pexil</text>

                    <!-- slash accent -->
                    <text x="92" y="24" font-family="Inter, system-ui, sans-serif" font-weight="700" font-size="18" fill="#818CF8">/</text>

                    <!-- positions text with gradient -->
                    <text x="102" y="24" font-family="Inter, system-ui, sans-serif" font-weight="500" font-size="18" letter-spacing="-0.02em" fill="url(#gradient-text)">positions</text>

                    <!-- subtle dot decoration -->
                    <circle cx="166" cy="20" r="3" fill="#4F46E5" fill-opacity="0.5"/>

                    <!-- gradients definition -->
                    <defs>
                        <linearGradient id="gradient" x1="12" y1="12" x2="32" y2="32" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#818CF8"/>
                            <stop offset="1" stop-color="#C7D2FE"/>
                        </linearGradient>
                        <linearGradient id="gradient-text" x1="102" y1="12" x2="152" y2="36" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#A5B4FC"/>
                            <stop offset="1" stop-color="#E0E7FF"/>
                        </linearGradient>
                    </defs>
                </svg>
            </a>
        </div>

        <!-- center links: subtle hover effect for dark mode -->
        <div class="flex flex-wrap items-center justify-center gap-1 sm:gap-3 lg:gap-6 text-sm font-medium">
            <a href="" class="px-3 py-2 rounded-full text-slate-300 hover:text-white hover:bg-indigo-500/20 transition-colors duration-200">Jobs</a>
            <a href="" class="px-3 py-2 rounded-full text-slate-300 hover:text-white hover:bg-indigo-500/20 transition-colors duration-200">Careers</a>
            <a href="" class="px-3 py-2 rounded-full text-slate-300 hover:text-white hover:bg-indigo-500/20 transition-colors duration-200">Salaries</a>
            <a href="" class="px-3 py-2 rounded-full text-slate-300 hover:text-white hover:bg-indigo-500/20 transition-colors duration-200">Companies</a>
        </div>

        <!-- CTA: right with brighter dark-mode-appropriate indigo -->
        <div>
            <a href="" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold rounded-full bg-indigo-600 text-white shadow-lg hover:bg-indigo-500 hover:shadow-indigo-500/20 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:ring-offset-[#0B1120]">
                Post a job
            </a>
        </div>
    </nav>

    <!-- main content area with max-width & comfortable padding, on dark background -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
        {{ $slot }}
    </main>

    <!-- Grid pattern overlay for entire site (optional) -->
    <div class="fixed inset-0 -z-10 h-full w-full bg-[#0B1120] bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)] opacity-20"></div>
</body>
</html>
