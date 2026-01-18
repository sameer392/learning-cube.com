<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $brand['name'] }} | {{ $brand['tagline'] }}</title>
    <meta name="description" content="{{ $brand['descriptor'] }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#002f6c',
                        accent: '#eb8c29',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'ui-sans-serif', 'system-ui'],
                    },
                    boxShadow: {
                        card: '0 15px 40px rgba(0, 47, 108, 0.08)',
                    }
                }
            }
        }
    </script>
    <style>
        .hero-gradient {
            background: radial-gradient(circle at top right, rgba(235, 140, 41, 0.35), rgba(0, 47, 108, 0.95));
        }

        .hero-orange-gradient {
            background: 
                radial-gradient(ellipse at top left, #FFFCF8 0%, rgba(255, 252, 248, 0.3) 40%, transparent 70%),
                radial-gradient(ellipse at top right, #FAA82B 0%, rgba(250, 168, 43, 0.3) 40%, transparent 70%),
                radial-gradient(ellipse at bottom left, #FDCF89 0%, rgba(253, 207, 137, 0.3) 40%, transparent 70%),
                radial-gradient(ellipse at bottom right, #FA9C0D 0%, rgba(250, 156, 13, 0.3) 40%, transparent 70%);
            background-size: 100% 100%;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 64px;
            height: 4px;
            border-radius: 999px;
            margin-top: 0.75rem;
            background: linear-gradient(90deg, #eb8c29, #f5b25e);
        }
    </style>
    @stack('styles')
</head>

<body class="font-sans text-slate-900 bg-white">
    <header class="bg-white shadow-sm sticky top-0 z-40">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/logo.svg') }}" alt="Learning-Cube Coaching Classes" class="w-40 lg:w-48">
            </a>
            <nav class="hidden lg:flex items-center gap-6 text-sm font-medium">
                @foreach ($navigation as $item)
                    <a href="{{ isset($item['route']) ? route($item['route']) : ($item['href'] ?? '#') }}"
                        class="text-slate-600 hover:text-accent transition-colors {{ request()->routeIs($item['route'] ?? '') ? 'text-accent' : '' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 bg-accent text-white px-4 py-2 rounded-full shadow hover:opacity-90 transition">
                    Book a Demo <i class="ri-arrow-right-up-line text-lg"></i>
                </a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-navy text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid md:grid-cols-[1.4fr_auto_auto_1fr] gap-10 lg:gap-14 items-start">
                <!-- Left: Branding, description, illustration + curved separator -->
                <div class="relative">
                    <h3 class="text-accent font-bold text-lg md:text-xl">{{ $footerLinks['title'] ?? $brand['name'] }}</h3>
                    <p class="text-white/90 text-sm mt-2 max-w-md">{{ $footerLinks['description'] ?? $brand['descriptor'] }}</p>
                    <div class="relative mt-6 flex justify-start">
                        <!-- Dark purple/indigo curve at bottom left, rising to the right -->
                        <svg class="absolute bottom-0 left-0 w-full max-w-md h-28 md:h-36 pointer-events-none z-0" viewBox="0 0 400 100" preserveAspectRatio="none" aria-hidden="true">
                            <path d="M 0 100 C 120 100 280 10 400 35 L 400 100 L 0 100 Z" fill="#4c1d95"/>
                        </svg>
                        @if(!empty($footerLinks['image_webp']))
                            <picture>
                                <source srcset="{{ asset($footerLinks['image_webp']) }}" type="image/webp">
                                <img src="{{ asset($footerLinks['image'] ?? 'images/logo.svg') }}" alt="" class="relative z-10 w-full max-w-xs md:max-w-sm h-auto object-contain" width="800" height="602">
                            </picture>
                        @else
                            <img src="{{ asset($footerLinks['image'] ?? 'images/logo.svg') }}" alt="" class="relative z-10 w-full max-w-xs md:max-w-sm h-auto object-contain">
                        @endif
                    </div>
                </div>
                <!-- Company -->
                <div>
                    <p class="font-semibold text-accent mb-4">Company</p>
                    <ul class="space-y-2 text-sm text-white">
                        @foreach ($footerLinks['company'] as $link)
                            <li>
                                <a href="{{ isset($link['route']) ? route($link['route']) : ($link['href'] ?? '#') }}" class="hover:text-accent transition">
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Student or Parents + Follow us (no social icons) -->
                <div>
                    <p class="font-semibold text-accent mb-4">Student or Parents</p>
                    <ul class="space-y-2 text-sm text-white">
                        @foreach ($footerLinks['student_parent'] as $link)
                            <li>
                                <a href="{{ $link['route'] ?? $link['href'] ?? '#' }}" class="hover:text-accent transition">
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    @if(!empty($footerLinks['follow_us_label']))
                        <p class="text-white text-sm mt-5">{{ $footerLinks['follow_us_label'] }}</p>
                    @endif
                </div>
                <!-- Contact -->
                <div>
                    <p class="font-semibold text-accent mb-4">Contact</p>
                    <ul class="text-sm text-white space-y-3">
                        <li>
                            <span class="text-white/80">Phone:</span>
                            <div class="flex flex-col mt-0.5">
                                @foreach ($contactInfo['phone'] as $phone)
                                    <a href="tel:{{ preg_replace('/\s+/', '', $phone) }}" class="hover:text-accent transition">{{ $phone }}</a>
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <span class="text-white/80">Email:</span>
                            <a href="mailto:{{ $contactInfo['email'] }}" class="block hover:text-accent transition mt-0.5">{{ $contactInfo['email'] }}</a>
                        </li>
                        <li>
                            <span class="text-white/80">Location:</span>
                            <div class="mt-0.5">
                                @if(!empty($footerLinks['address_lines']))
                                    @foreach ($footerLinks['address_lines'] as $line)
                                        {{ $line }}<br>
                                    @endforeach
                                @else
                                    {{ $contactInfo['address'] }}
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Bottom bar: copyright | legal links with pipes -->
        <div class="border-t border-white/10">
            <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col md:flex-row md:items-center md:justify-between gap-3 text-sm text-slate-300">
                <p>{{ $footerLinks['copyright'] }}</p>
                <div class="flex flex-wrap items-center gap-x-2">
                    @foreach ($footerLinks['policies'] as $link)
                        <a href="{{ $link['href'] }}" class="hover:text-accent transition">{{ $link['label'] }}</a>
                        @if(!$loop->last)<span class="text-white/40">|</span>@endif
                    @endforeach
                </div>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>

</html>

