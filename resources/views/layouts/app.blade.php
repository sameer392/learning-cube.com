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

    <footer class="bg-navy text-white mt-16">
        <div class="max-w-6xl mx-auto px-4 py-12 grid md:grid-cols-4 gap-10">
            <div>
                <p class="font-semibold text-xl">{{ $brand['name'] }}</p>
                <p class="text-sm text-slate-200 mt-2 max-w-xs">{{ $brand['descriptor'] }}</p>
                <div class="flex gap-3 mt-6">
                    @foreach ($contactInfo['social'] as $social)
                        <a href="{{ $social['href'] }}" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white text-xl hover:bg-accent transition"
                            aria-label="{{ $social['label'] }}">
                            <i class="{{ $social['icon'] }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="font-semibold mb-4">Company</p>
                <ul class="space-y-2 text-sm text-slate-200">
                    @foreach ($footerLinks['company'] as $link)
                        <li>
                            <a href="{{ $link['route'] ?? $link['href'] ?? '#' }}" class="hover:text-accent transition">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <p class="font-semibold mb-4">Student & Parent</p>
                <ul class="space-y-2 text-sm text-slate-200">
                    @foreach ($footerLinks['student_parent'] as $link)
                        <li>
                            <a href="{{ $link['route'] ?? $link['href'] ?? '#' }}" class="hover:text-accent transition">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <p class="font-semibold mb-4">Contact</p>
                <ul class="text-sm text-slate-200 space-y-2">
                    <li><span class="text-slate-400">Phone:</span>
                        <div class="flex flex-col">
                            @foreach ($contactInfo['phone'] as $phone)
                                <a href="tel:{{ preg_replace('/\s+/', '', $phone) }}" class="hover:text-accent transition">{{ $phone }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li><span class="text-slate-400">Email:</span>
                        <a href="mailto:{{ $contactInfo['email'] }}" class="block hover:text-accent transition">
                            {{ $contactInfo['email'] }}
                        </a>
                    </li>
                    <li><span class="text-slate-400">Location:</span>
                        <p>{{ $contactInfo['address'] }}</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-white/10">
            <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col md:flex-row md:items-center md:justify-between gap-3 text-sm text-slate-300">
                <p>{{ $footerLinks['copyright'] }}</p>
                <div class="flex flex-wrap gap-4">
                    @foreach ($footerLinks['policies'] as $link)
                        <a href="{{ $link['href'] }}" class="hover:text-accent transition">{{ $link['label'] }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>

</html>

