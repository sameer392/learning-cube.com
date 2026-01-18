@extends('layouts.app')

@section('content')
    <section class="hero-orange-gradient relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 pt-3 md:pt-4 pb-0 grid md:grid-cols-2 gap-8 md:gap-12 items-center">
            <!-- Left Side: Student Image with Thought Bubbles -->
            <div class="relative pb-0 flex flex-col h-full">
                <div class="relative z-10 pb-0 flex flex-col h-full">
                    <!-- Two Column Layout: Logo on Left, Content on Right -->
                    <div class="mb-2 py-2 grid md:grid-cols-[auto_1fr] gap-1 items-start">
                        <!-- Left Section: Logo -->
                        <div class="flex items-center justify-center md:justify-start">
                            <img src="{{ asset('images/logo.svg') }}" alt="Learning-Cube Logo" class="w-80 md:w-80">
                        </div>
                        
                        <!-- Right Section: Main heading and banner -->
                        <div class="flex flex-col gap-2 w-full">
                            <!-- Main heading in white box -->
                            <div class="mb-0 w-full rounded-lg overflow-hidden" style="min-height: 90px; height: 90px; display: flex; align-items: center; justify-content: center;">
                                <img src="{{ asset('images/homepage/image1.svg') }}" alt="Homepage image 1" class="w-full h-full object-contain">
                            </div>
                            
                            <!-- Dark blue banner -->
                            <div class="bg-navy text-white px-4 md:px-8 py-3 rounded-lg mb-0 w-full" style="min-height: 90px; height: 90px; display: flex; align-items: center;">
                                <p class="text-center text-sm md:text-base leading-snug">The right guidance makes all the difference. Get a Strong foundation from Class 6th to 12th.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Student illustration area with thought bubbles -->
                    <div class="relative mb-0 pb-0 mt-auto">
                        <div class="relative w-full max-w-[33.6rem] mx-auto pb-0">
                            <!-- Student illustration -->
                            <div class="relative flex items-end justify-center pb-0">
                                <picture>
                                    <source srcset="{{ asset('images/homepage/student_homepage.webp') }}" type="image/webp">
                                    <img src="{{ asset('images/homepage/student_homepage.png') }}" 
                                         alt="Student illustration" 
                                         class="w-full h-auto max-w-[33.6rem] block pb-0 mb-0"
                                         style="display: block; margin-bottom: 0; padding-bottom: 0; vertical-align: bottom;"
                                         width="1076" height="917">
                                </picture>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Registration Form -->
            <div class="flex justify-center md:justify-end items-start">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-2xl border border-slate-200" style="width: 100%; max-width: 480px;">
                    <h2 class="text-2xl md:text-3xl font-semibold text-navy mb-6 text-center">Register Now</h2>
                <form action="{{ route('contact') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Your Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none transition">
                    </div>
                    <div>
                        <label for="mobile" class="block text-sm font-medium text-slate-700 mb-2">Mobile Number</label>
                        <input type="tel" id="mobile" name="mobile" required
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none transition">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email id</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none transition">
                    </div>
                    <div>
                        <label for="class" class="block text-sm font-medium text-slate-700 mb-2">Class</label>
                        <select id="class" name="class" required
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none transition bg-white">
                            <option value="">Select Class</option>
                            @for($i = 6; $i <= 12; $i++)
                                <option value="Class {{ $i }}">Class {{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="state" class="block text-sm font-medium text-slate-700 mb-2">State</label>
                            <select id="state" name="state" required
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none transition bg-white">
                                <option value="">Select State</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="West Bengal">West Bengal</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="city" class="block text-sm font-medium text-slate-700 mb-2">City</label>
                            <select id="city" name="city" required
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent outline-none transition bg-white">
                                <option value="">Select City</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-4 rounded-lg transition-colors shadow-lg">
                        ENROLL NOW
                    </button>
                </form>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        // State-City mapping
        const stateCityMap = {
            'Maharashtra': ['Mumbai', 'Pune', 'Nagpur', 'Nashik', 'Aurangabad', 'Solapur', 'Thane', 'Other'],
            'Gujarat': ['Ahmedabad', 'Surat', 'Vadodara', 'Rajkot', 'Bhavnagar', 'Jamnagar', 'Gandhinagar', 'Other'],
            'Delhi': ['New Delhi', 'North Delhi', 'South Delhi', 'East Delhi', 'West Delhi', 'Central Delhi', 'Other'],
            'Karnataka': ['Bangalore', 'Mysore', 'Hubli', 'Mangalore', 'Belgaum', 'Gulbarga', 'Other'],
            'Tamil Nadu': ['Chennai', 'Coimbatore', 'Madurai', 'Tiruchirappalli', 'Salem', 'Tirunelveli', 'Other'],
            'West Bengal': ['Kolkata', 'Howrah', 'Durgapur', 'Asansol', 'Siliguri', 'Other'],
            'Rajasthan': ['Jaipur', 'Jodhpur', 'Kota', 'Bikaner', 'Ajmer', 'Udaipur', 'Other'],
            'Uttar Pradesh': ['Lucknow', 'Kanpur', 'Agra', 'Varanasi', 'Allahabad', 'Noida', 'Other'],
            'Other': ['Other']
        };

        // Update city dropdown based on state selection
        document.getElementById('state')?.addEventListener('change', function() {
            const state = this.value;
            const citySelect = document.getElementById('city');
            
            // Clear existing options
            citySelect.innerHTML = '<option value="">Select City</option>';
            
            // Add cities for selected state
            if (state && stateCityMap[state]) {
                stateCityMap[state].forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    citySelect.appendChild(option);
                });
            }
        });
    </script>
    @endpush

    <section class="relative w-full py-16 overflow-x-visible overflow-y-hidden">
        <!-- Full-bleed curve: pulls to viewport left edge (navy to match Our Strengths section) -->
        <div class="absolute bottom-0 left-0 w-screen h-44 md:h-52 pointer-events-none z-0" style="margin-left: calc(-50vw + 50% - 2rem);">
            <svg class="absolute left-0 bottom-0 h-full w-[58vw] min-w-[320px]" viewBox="-25 0 550 100" preserveAspectRatio="none" aria-hidden="true">
                <path d="M -50 100 L 0 100 L 500 100 C 380 100 120 5 0 35 L 0 100 L -50 100 L -50 35 L -50 100 Z" fill="#002f6c"/>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-[1fr_1.2fr] gap-10 lg:gap-14 items-start">
            <!-- Left: Heading, description, and illustration -->
            <div class="flex flex-col">
                <h2 class="text-3xl md:text-4xl font-bold text-navy">OUR COACHING PROGRAMS</h2>
                <p class="mt-4 text-slate-600 text-base leading-relaxed max-w-lg">
                    Focused academic programs for Classes 6-12 designed to strengthen concepts, improve performance, and build long-term success through structured teaching, personalised attention, and consistent evaluation.
                </p>
                <div class="mt-8 flex justify-center lg:justify-start">
                    <picture>
                        <source srcset="{{ asset('images/homepage/coaching_program.webp') }}" type="image/webp">
                        <img src="{{ asset('images/homepage/coaching_program.png') }}" alt="Coaching programs illustration" class="w-full max-w-3xl h-auto object-contain" width="1200" height="1193">
                    </picture>
                </div>
            </div>

            <!-- Right: 2x2 grid of dark blue program cards -->
            <div class="grid sm:grid-cols-2 gap-5">
                @foreach ($programs as $program)
                    <div class="bg-navy rounded-2xl p-6 flex flex-col shadow-card hover:shadow-xl transition-shadow">
                        <h3 class="text-xl font-semibold text-white">{{ $program['name'] }}</h3>
                        <p class="mt-2 flex items-center gap-2 text-sm text-purple-200">
                            <i class="ri-information-2-line text-lg flex-shrink-0" aria-hidden="true"></i>
                            <span>{{ $program['grades'] }}</span>
                        </p>
                        <p class="mt-4 text-white/90 text-sm leading-relaxed flex-grow">{{ $program['focus'] }}</p>
                        <a href="{{ route('contact') }}" class="mt-6 inline-flex justify-center items-center bg-accent hover:bg-amber-500 text-white font-semibold py-2.5 px-4 rounded-xl transition-colors">
                            Enquiry Now
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

    <section class="bg-navy py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-accent">Our Strengths & Features:</h2>
            <p class="mt-4 text-white text-base md:text-lg leading-relaxed max-w-3xl">
                {{ $strengths['intro'] }}
            </p>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @foreach ($strengths['items'] as $item)
                    @php
                        $isDark = $item['variant'] === 'dark';
                        $isAccent = $item['variant'] === 'accent';
                        $isLightSlate = ($item['variant'] ?? '') === 'light_slate';
                        $cardBg = $isDark ? 'bg-navy/95 border border-white/10' : ($isAccent ? 'bg-pink-100' : ($isLightSlate ? 'bg-slate-50' : 'bg-amber-50'));
                        $titleColor = ($isDark) ? 'text-white' : 'text-navy';
                        $bodyColor = ($isDark) ? 'text-white/90' : 'text-slate-700';
                        $iconBgMap = ['orange' => 'bg-amber-200', 'mint' => 'bg-teal-100'];
                        $iconBg = $iconBgMap[$item['icon_bg'] ?? ''] ?? 'bg-amber-100';
                        $iconColor = 'text-navy';
                    @endphp
                    <div class="{{ $cardBg }} rounded-2xl p-6 shadow-lg flex flex-col">
                        <div class="inline-flex w-14 h-14 flex-shrink-0 items-center justify-center rounded-2xl {{ $iconBg }} {{ $iconColor }} mb-4">
                            <i class="{{ $item['icon'] }} text-2xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base font-bold uppercase tracking-wide {{ $titleColor }}">{{ $item['title'] }}</h3>
                        <div class="mt-3 {{ $bodyColor }} text-sm leading-relaxed flex-grow space-y-2">
                            <p>{{ $item['body'] }}</p>
                            @if(!empty($item['bullets']))
                                <ul class="list-disc list-inside space-y-1">
                                    @foreach ($item['bullets'] as $bullet)
                                        <li>{{ $bullet }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            @if(!empty($item['body_end']))
                                <p>{{ $item['body_end'] }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-navy text-white py-16 relative overflow-hidden">
        <!-- Subtle background: dots top-left, diagonal stripes bottom-right -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden" aria-hidden="true">
            <div class="absolute top-0 left-0 w-80 h-80 opacity-[0.05]" style="background-image: radial-gradient(circle, white 2px, transparent 2px); background-size: 16px 16px;"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-80 opacity-[0.06]" style="background: repeating-linear-gradient(-45deg, transparent, transparent 6px, rgba(255,255,255,0.8) 6px, rgba(255,255,255,0.8) 8px);"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 relative">
            <h2 class="text-3xl md:text-4xl font-bold text-accent uppercase">How Learning-Cube Supports Your Child</h2>
            <p class="mt-4 text-white text-base md:text-lg leading-relaxed max-w-3xl">
                {{ $supportSteps['intro'] }}
            </p>

            <div class="mt-10 grid gap-6 md:grid-cols-5">
                @foreach ($supportSteps['steps'] as $step)
                    @php
                        $bannerColors = ['yellow' => 'bg-yellow-400', 'lime' => 'bg-lime-400', 'teal' => 'bg-teal-400', 'blue' => 'bg-blue-500', 'blue_dark' => 'bg-blue-600'];
                        $banner = $bannerColors[$step['banner'] ?? 'blue'] ?? 'bg-blue-500';
                    @endphp
                    <div class="flex flex-col items-center text-center">
                        <!-- White circular icon (solid white so black icons stay visible) -->
                        <div class="flex w-16 h-16 flex-shrink-0 items-center justify-center rounded-full border-2 border-white bg-white mb-3 p-2">
                            @if(!empty($step['icon_image']))
                                <img src="{{ asset($step['icon_image']) }}" alt="" class="w-full h-full object-contain" width="48" height="48">
                            @else
                                <i class="{{ $step['icon'] ?? 'ri-circle-line' }} text-2xl text-navy" aria-hidden="true"></i>
                            @endif
                        </div>
                        <!-- Colored chevron-style banner with number -->
                        <div class="w-full {{ $banner }} py-2.5 px-3 mb-4" style="clip-path: polygon(0 0, 100% 0, 100% 85%, 50% 100%, 0 85%);">
                            <span class="text-white font-bold text-lg">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                        <h3 class="text-base font-bold uppercase tracking-wide text-white">{{ $step['title'] }}</h3>
                        <p class="mt-2 text-white/90 text-sm leading-relaxed">{{ $step['body'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Dashed line with colored dots -->
            <div class="mt-6 max-w-4xl mx-auto border-t-2 border-dashed border-white/30 flex" aria-hidden="true">
                @foreach ($supportSteps['steps'] as $step)
                    @php $bc = ['yellow'=>'bg-yellow-400','lime'=>'bg-lime-400','teal'=>'bg-teal-400','blue'=>'bg-blue-500','blue_dark'=>'bg-blue-600'][$step['banner']??'blue'] ?? 'bg-blue-500'; @endphp
                    <div class="flex-1 flex justify-center -mt-[7px]">
                        <div class="w-3 h-3 rounded-full {{ $bc }}"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="section-title text-navy">
            <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Results That Make Us Proud</p>
            <h2 class="text-3xl font-semibold mt-2">Consistent improvement stories from families across India</h2>
        </div>
        <div class="mt-10 grid gap-8 lg:grid-cols-2">
            <div class="bg-slate-50 rounded-3xl p-8">
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($results['stats'] as $stat)
                        <div>
                            <p class="text-2xl font-semibold text-navy">{{ $stat['value'] }}</p>
                            <p class="text-sm text-slate-500">{{ $stat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="mt-8">
                    @foreach ($results['testimonials'] as $testimonial)
                        <blockquote class="border-l-4 border-accent pl-4 mb-6 text-slate-700">
                            “{{ $testimonial['quote'] }}”
                            <footer class="mt-2 text-sm text-slate-500">— {{ $testimonial['author'] }}</footer>
                        </blockquote>
                    @endforeach
                </div>
                <a href="{{ route('results') }}" class="inline-flex items-center gap-2 text-accent font-semibold mt-4">
                    View all results & testimonials <i class="ri-arrow-right-up-line"></i>
                </a>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-card border border-slate-100">
                <div class="section-title text-navy">
                    <h3 class="text-2xl font-semibold">Start Your Child’s Learning-Cube Journey</h3>
                </div>
                <p class="mt-4 text-slate-600">
                    Share a few details and our team will call you to suggest the best batch and schedule for your child.
                </p>
                <ul class="mt-6 space-y-3 text-slate-700 text-sm">
                    <li class="flex gap-3"><i class="ri-checkbox-circle-line text-accent text-xl"></i>Personalized batch recommendation</li>
                    <li class="flex gap-3"><i class="ri-checkbox-circle-line text-accent text-xl"></i>Hybrid & centre options across cities</li>
                    <li class="flex gap-3"><i class="ri-checkbox-circle-line text-accent text-xl"></i>Transparent fee plans and scholarships</li>
                </ul>
                <a href="{{ route('contact') }}"
                    class="mt-8 inline-flex items-center justify-center w-full bg-navy text-white rounded-full py-3 font-semibold hover:bg-accent transition">
                    Book a Free Demo Class
                </a>
                <p class="text-center text-sm text-slate-500 mt-3">Or call us at <a href="tel:+919898075217"
                        class="text-accent font-semibold">+91 98980 75217</a></p>
            </div>
        </div>
    </section>
@endsection

