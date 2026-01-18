@extends('layouts.app')

@section('content')
    <section class="bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <p class="uppercase tracking-[0.35em] text-xs text-slate-500">Resources</p>
            <h1 class="text-4xl font-semibold text-navy mt-4">Guides & downloads for students and parents</h1>
            <p class="mt-6 text-lg text-slate-600 max-w-4xl">
                Bookmark-ready articles, templates, and explainers to navigate board transitions, stream selection, and daily study
                routines.
            </p>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-4 py-16 space-y-6">
        @foreach ($resources as $resource)
            <article class="border border-slate-100 rounded-3xl p-8 shadow-card/40 hover:-translate-y-1 transition bg-white">
                <h2 class="text-2xl font-semibold text-navy">{{ $resource['title'] }}</h2>
                <p class="mt-3 text-slate-600">{{ $resource['description'] }}</p>
                <div class="mt-6 flex flex-wrap gap-4 text-sm text-slate-500">
                    <span class="inline-flex items-center gap-2"><i class="ri-time-line text-accent"></i>5 min read</span>
                    <span class="inline-flex items-center gap-2"><i class="ri-article-line text-accent"></i>Guide</span>
                </div>
                <button class="mt-6 inline-flex items-center gap-2 text-accent font-semibold" type="button">
                    Coming soon <i class="ri-arrow-right-line"></i>
                </button>
            </article>
        @endforeach
    </section>
@endsection

