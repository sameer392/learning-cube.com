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
                                <img src="{{ asset('images/homepage/student_homepage.svg') }}" 
                                     alt="Student illustration" 
                                     class="w-full h-auto max-w-[33.6rem] block pb-0 mb-0"
                                     style="display: block; margin-bottom: 0; padding-bottom: 0; vertical-align: bottom;">
                                
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

    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="section-title text-navy">
            <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Our Coaching Programs</p>
            <h2 class="text-3xl font-semibold mt-2">Structured support for every stage of school</h2>
        </div>
        <div class="mt-10 grid gap-8 md:grid-cols-2">
            @foreach ($programs as $program)
                <div class="border border-slate-100 rounded-3xl p-8 shadow-card/50 hover:-translate-y-1 transition">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="text-2xl font-semibold text-navy">{{ $program['name'] }}</h3>
                        <span class="px-3 py-1 text-xs font-semibold bg-navy text-white rounded-full">{{ $program['grades'] }}</span>
                    </div>
                    <p class="mt-4 text-slate-600">{{ $program['focus'] }}</p>
                    <dl class="mt-6 space-y-2 text-sm text-slate-500">
                        <div class="flex gap-2"><dt class="font-semibold min-w-[90px]">Boards:</dt>
                            <dd>{{ $program['boards'] }}</dd>
                        </div>
                        <div class="flex gap-2"><dt class="font-semibold min-w-[90px]">Mode:</dt>
                            <dd>{{ $program['mode'] }}</dd>
                        </div>
                        <div class="flex gap-2"><dt class="font-semibold min-w-[90px]">Schedule:</dt>
                            <dd>{{ $program['frequency'] }}</dd>
                        </div>
                    </dl>
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-slate-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="section-title text-navy">
                <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Why Parents Trust Learning-Cube</p>
                <h2 class="text-3xl font-semibold mt-2">Designed for clarity, consistency & confidence</h2>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @foreach ($whyUs as $reason)
                    <div class="bg-white rounded-2xl p-6 shadow-card/30 border border-white">
                        <h3 class="text-lg font-semibold text-navy">{{ $reason['title'] }}</h3>
                        <p class="mt-3 text-slate-600">{{ $reason['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-navy text-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="section-title text-white">
                <p class="uppercase tracking-[0.35em] text-xs text-white/50">How Learning-Cube Supports Your Child</p>
                <h2 class="text-3xl font-semibold mt-2">A transparent journey from counselling to confident results</h2>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-5">
                @foreach ($supportSteps as $step)
                    <div class="bg-white/05 rounded-2xl p-5 border border-white/10">
                        <span class="inline-flex w-10 h-10 items-center justify-center rounded-full bg-accent text-white font-semibold">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <h3 class="mt-4 font-semibold">{{ $step['title'] }}</h3>
                        <p class="text-white/80 text-sm mt-2">{{ $step['body'] }}</p>
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

