@extends('layouts.app')

@section('content')
    <section class="bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <p class="uppercase tracking-[0.35em] text-xs text-slate-500">Programs</p>
            <h1 class="text-4xl font-semibold text-navy mt-4">Programs crafted for every learning milestone</h1>
            <p class="mt-6 text-lg text-slate-600 max-w-4xl">
                Each program blends structured teaching, adaptive assessments, and guided doubt-solving so students stay ahead
                of school schedules while mastering fundamentals.
            </p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-16 grid gap-8">
        @foreach ($programs as $program)
            <div class="border border-slate-100 rounded-3xl p-8 shadow-card/50 flex flex-col lg:flex-row gap-8">
                <div class="flex-1">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-400">{{ $program['grades'] }}</p>
                    <h2 class="text-3xl font-semibold text-navy mt-3">{{ $program['name'] }}</h2>
                    <p class="mt-4 text-slate-600">{{ $program['focus'] }}</p>
                    <ul class="mt-6 space-y-3 text-slate-600 text-sm">
                        <li><span class="font-semibold text-navy">Who is it for?</span> {{ $program['who'] }}</li>
                        <li><span class="font-semibold text-navy">Boards covered:</span> {{ $program['boards'] }}</li>
                        <li><span class="font-semibold text-navy">Mode:</span> {{ $program['mode_detail'] }}</li>
                        <li><span class="font-semibold text-navy">Duration & frequency:</span> {{ $program['duration'] }}</li>
                    </ul>
                </div>
                <div class="bg-navy text-white rounded-2xl p-6 w-full lg:max-w-sm self-start">
                    <p class="text-sm text-white/70">What to expect</p>
                    <ul class="mt-4 space-y-3 text-sm text-white/90">
                        <li class="flex gap-3"><i class="ri-checkbox-circle-line text-accent text-xl"></i>Hybrid classes +
                            recorded back-ups</li>
                        <li class="flex gap-3"><i class="ri-checkbox-circle-line text-accent text-xl"></i>Weekly assessments &
                            analytics</li>
                        <li class="flex gap-3"><i class="ri-checkbox-circle-line text-accent text-xl"></i>Dedicated mentors &
                            parent connects</li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="mt-6 inline-flex items-center justify-center w-full bg-white text-navy font-semibold py-3 rounded-full">
                        Request batch details
                    </a>
                </div>
            </div>
        @endforeach
    </section>

    <section class="bg-slate-50 py-16">
        <div class="max-w-6xl mx-auto px-4 lg:flex lg:items-center lg:justify-between gap-10">
            <div class="section-title text-navy">
                <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Specialised Support</p>
                <h2 class="text-3xl font-semibold mt-2">Plug-and-play services for targeted needs</h2>
            </div>
            <div class="grid sm:grid-cols-2 gap-4 mt-8 lg:mt-0">
                @foreach (config('learningcube.specialised_support') as $support)
                    <div class="bg-white rounded-2xl p-5 shadow-card/30 border border-white">
                        <p class="font-semibold text-navy">{{ $support }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

