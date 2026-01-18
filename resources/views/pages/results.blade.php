@extends('layouts.app')

@section('content')
    <section class="bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <p class="uppercase tracking-[0.35em] text-xs text-slate-500">Results & Testimonials</p>
            <h1 class="text-4xl font-semibold text-navy mt-4">Results that make us proud</h1>
            <p class="mt-6 text-lg text-slate-600 max-w-4xl">
                Transparent metrics, anonymised report cards, and real voices from students and parents across India who trusted
                Learning-Cube for board success.
            </p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-16 space-y-12">
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($results['stats'] as $stat)
                <div class="bg-white rounded-2xl p-8 text-center shadow-card/40 border border-slate-100">
                    <p class="text-3xl font-semibold text-navy">{{ $stat['value'] }}</p>
                    <p class="mt-3 text-slate-600">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="section-title text-navy">
            <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Student Stories</p>
            <h2 class="text-3xl font-semibold mt-2">Snapshots of transformation</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($results['stories'] as $story)
                <div class="rounded-2xl border border-slate-100 p-6 shadow-card/40 bg-white">
                    <h3 class="font-semibold text-navy">{{ $story['title'] }}</h3>
                    <p class="mt-3 text-slate-600 text-sm">{{ $story['body'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="section-title text-navy">
            <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Testimonials</p>
            <h2 class="text-3xl font-semibold mt-2">Parents & students speak</h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
            <!-- Left: testimonial illustration -->
            <div class="flex justify-center lg:justify-start">
                <picture>
                    <source srcset="{{ asset('images/testimonial_left_image.webp') }}" type="image/webp">
                    <img src="{{ asset('images/testimonial_left_image.png') }}" alt="Time for review" class="w-full max-w-md object-contain">
                </picture>
            </div>
            <!-- Right: review carousel + link to Google -->
            <div class="relative">
                <div id="testimonial-carousel" class="relative">
                    @foreach ($results['testimonials'] as $i => $t)
                        @php
                            $name = $t['author'] ?? $t['name'] ?? 'Anonymous';
                            $initials = implode('', array_map(fn($w) => mb_substr($w, 0, 1), array_slice(preg_split('/\s+/', $name), 0, 2)));
                            $stars = (int) ($t['stars'] ?? 5);
                        @endphp
                        <div class="testimonial-slide {{ $i !== 0 ? 'hidden' : '' }}" data-index="{{ $i }}">
                            <div class="relative bg-white rounded-2xl p-8 shadow-card border border-slate-100">
                                <span class="absolute -top-2 -left-1 text-7xl md:text-8xl text-slate-200 font-serif leading-none select-none" aria-hidden="true">"</span>
                                <div class="relative z-10 flex flex-col items-center text-center">
                                    <div class="w-16 h-16 rounded-full bg-slate-100 flex items-center justify-center text-navy font-semibold text-lg">{{ $initials }}</div>
                                    <p class="font-semibold text-navy mt-3">{{ $name }}</p>
                                    <p class="text-slate-400 text-sm">{{ $t['time'] ?? 'Recent' }}</p>
                                    <p class="text-slate-600 mt-4 leading-relaxed">"{{ $t['quote'] }}"</p>
                                    <div class="flex gap-0.5 mt-4" aria-label="{{ $stars }} out of 5 stars">
                                        @for ($s = 1; $s <= 5; $s++)
                                            <i class="ri-star-{{ $s <= $stars ? 'fill' : 'line' }} text-amber-400 text-lg"></i>
                                        @endfor
                                    </div>
                                </div>
                                <span class="absolute -bottom-2 -right-1 text-7xl md:text-8xl text-slate-200 font-serif leading-none select-none" aria-hidden="true">"</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="testimonial-prev" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-12 w-10 h-10 rounded-full bg-navy text-white flex items-center justify-center shadow hover:bg-navy/90 transition" aria-label="Previous review">
                    <i class="ri-arrow-left-s-line text-xl"></i>
                </button>
                <button type="button" id="testimonial-next" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-12 w-10 h-10 rounded-full bg-navy text-white flex items-center justify-center shadow hover:bg-navy/90 transition" aria-label="Next review">
                    <i class="ri-arrow-right-s-line text-xl"></i>
                </button>
                <p class="mt-6 text-center">
                    <a href="{{ $results['google_reviews_url'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="text-navy font-medium hover:text-accent transition underline">
                        View all reviews <i class="ri-arrow-right-up-line inline -mb-0.5"></i>
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="bg-navy text-white py-16">
        <div class="max-w-6xl mx-auto px-4 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <p class="uppercase tracking-[0.35em] text-xs text-white/50">Need proof?</p>
                <h2 class="text-3xl font-semibold mt-3">Request anonymised report cards or schedule a counselling call.</h2>
                <p class="mt-4 text-white/80">We share anonymised before/after scorecards, test analytics, and parent references on
                    request.</p>
            </div>
            <div class="bg-white text-navy rounded-3xl p-8 shadow-card">
                <h3 class="text-2xl font-semibold">Talk to an Academic Counsellor</h3>
                <p class="mt-3 text-slate-600">Share your child’s current class, board, and goals.</p>
                <a href="{{ route('contact') }}"
                    class="mt-6 inline-flex items-center justify-center w-full bg-accent text-white rounded-full py-3 font-semibold">
                    Request a Call Back
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var slides = document.querySelectorAll('.testimonial-slide');
    var prev = document.getElementById('testimonial-prev');
    var next = document.getElementById('testimonial-next');
    if (!slides.length || !prev || !next) return;

    var i = 0;
    function go(n) {
        slides[i].classList.add('hidden');
        i = (n + slides.length) % slides.length;
        slides[i].classList.remove('hidden');
    }
    prev.addEventListener('click', function() { go(i - 1); });
    next.addEventListener('click', function() { go(i + 1); });
});
</script>
@endpush
