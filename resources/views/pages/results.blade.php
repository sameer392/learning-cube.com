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
        <div class="grid lg:grid-cols-3 gap-6">
            @foreach ($results['testimonials'] as $testimonial)
                <div class="bg-navy text-white rounded-3xl p-6 shadow-card">
                    <p class="text-sm text-white/80">“{{ $testimonial['quote'] }}”</p>
                    <p class="mt-4 text-sm font-semibold text-accent">{{ $testimonial['author'] }}</p>
                </div>
            @endforeach
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

