@extends('layouts.app')

@section('content')
    <section class="bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <p class="uppercase tracking-[0.35em] text-xs text-slate-500">Contact</p>
            <h1 class="text-4xl font-semibold text-navy mt-4">{{ $contact['headline'] }}</h1>
            <p class="mt-6 text-lg text-slate-600 max-w-4xl">{{ $contact['subtext'] }}</p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-16 grid lg:grid-cols-2 gap-10">
        <div class="bg-white rounded-3xl p-8 shadow-card border border-slate-100">
            <form class="space-y-4">
                <div>
                    <label class="text-sm font-semibold text-slate-600">Student Name</label>
                    <input type="text" class="mt-1 w-full rounded-2xl border-slate-200 focus:border-accent focus:ring-accent"
                        placeholder="Student full name">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-600">Parent Name</label>
                    <input type="text" class="mt-1 w-full rounded-2xl border-slate-200 focus:border-accent focus:ring-accent"
                        placeholder="Parent / Guardian name">
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-semibold text-slate-600">Class & Board</label>
                        <input type="text" class="mt-1 w-full rounded-2xl border-slate-200 focus:border-accent focus:ring-accent"
                            placeholder="e.g., Class 9 CBSE">
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-slate-600">City</label>
                        <input type="text" class="mt-1 w-full rounded-2xl border-slate-200 focus:border-accent focus:ring-accent"
                            placeholder="City">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-semibold text-slate-600">Mobile Number</label>
                        <input type="tel" class="mt-1 w-full rounded-2xl border-slate-200 focus:border-accent focus:ring-accent"
                            placeholder="+91">
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-slate-600">Email</label>
                        <input type="email" class="mt-1 w-full rounded-2xl border-slate-200 focus:border-accent focus:ring-accent"
                            placeholder="you@email.com">
                    </div>
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-600">Interested In</label>
                    <select class="mt-1 w-full rounded-2xl border-slate-200 focus:border-accent focus:ring-accent">
                        <option>Foundation Program</option>
                        <option>Board Prep</option>
                        <option>11–12 Coaching</option>
                        <option>Exam Booster / Other</option>
                    </select>
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-600">Message / Questions</label>
                    <textarea rows="4" class="mt-1 w-full rounded-2xl border-slate-200 focus:border-accent focus:ring-accent"
                        placeholder="Share learning goals, subjects or questions"></textarea>
                </div>
                <button type="button"
                    class="w-full bg-navy text-white rounded-full py-3 font-semibold hover:bg-accent transition">Request a
                    Call Back</button>
            </form>
        </div>
        <div class="space-y-6">
            <div class="rounded-3xl p-8 bg-navy text-white shadow-card">
                <h2 class="text-2xl font-semibold">Reach us directly</h2>
                <div class="mt-6 space-y-4 text-sm">
                    <p><span class="text-white/70">Phone / WhatsApp:</span>
                        <br>
                        @foreach ($contact['phone'] as $phone)
                            <a href="tel:{{ preg_replace('/\s+/', '', $phone) }}" class="font-semibold text-white">{{ $phone }}</a>@if (!$loop->last)
                                <span class="text-white/60"> | </span>
                            @endif
                        @endforeach
                    </p>
                    <p><span class="text-white/70">Email:</span>
                        <a href="mailto:{{ $contact['email'] }}" class="font-semibold text-white">{{ $contact['email'] }}</a>
                    </p>
                    <p><span class="text-white/70">Operating Hours:</span> {{ $contact['hours'] }}</p>
                    <p><span class="text-white/70">Head Office:</span> {{ $contact['address'] }}</p>
                </div>
            </div>
            <div class="rounded-3xl overflow-hidden shadow-card border border-slate-100">
                <iframe class="w-full h-64"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59062.65346330472!2d72.768971!3d21.1702404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05303d8ef8293%3A0x762db7df1bfc0ec!2sVesu%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1732130400!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection

