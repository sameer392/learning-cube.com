@extends('layouts.app')

@section('content')
    <section class="bg-navy">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <h2 class="text-3xl md:text-4xl font-semibold text-accent mb-8 text-center">Our Story</h2>
            <div class="space-y-6 text-white text-justify">
                <p class="text-base md:text-lg leading-relaxed">
                    Learning-Cube is a nurturing space where young minds discover clarity, confidence, and a genuine love for learning. Designed for students of Classes 6–12, our programs focus on building strong conceptual foundations, disciplined study habits, and a mindset that embraces growth.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    With highly experienced educators and personalised attention, we create an environment where every child is seen, supported, and guided with care. Our philosophy is simple yet powerful: "When students understand deeply, they perform confidently."
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    To make learning meaningful and effective, we combine time-tested teaching methods with doubt-solving support, structured revision modules, and performance tracking. This balanced approach ensures that learning is both engaging and outcome-driven.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    At Learning-Cube, we believe that education should inspire students — not overwhelm them. We help learners build strong concepts, ask better questions, and think independently, preparing them not just for exams, but for life.
                </p>
                <p class="text-base md:text-lg leading-relaxed italic">
                    "Learning-Cube transforms education from a hurried race into a purposeful journey toward excellence, growth, and lifelong success."
                </p>
            </div>
        </div>
    </section>

    <section class="bg-navy py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-accent text-center">Meet Our Team</h2>
            <p class="text-indigo-100 text-center text-base md:text-lg mt-4 max-w-2xl mx-auto">The expert educators driving academic excellence and student success at Learning-Cube Coaching.</p>

            <div class="mt-12 grid md:grid-cols-2 gap-8 lg:gap-10">
                <!-- Vikas Gupta -->
                <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-card border border-slate-100 text-left">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-2 border-slate-200 flex-shrink-0 mb-6 mx-auto">
                        <img src="{{ asset('images/vikas.svg') }}" alt="Vikas Gupta" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-accent text-center">Vikas Gupta</h3>
                    <p class="text-navy text-base mt-1 text-center font-medium">Founder & CEO</p>
                    <div class="mt-6 space-y-4 text-slate-600 leading-relaxed">
                        <p>My professional journey from educator to international consultant and mentor has reinforced my belief that true success stems from proper education, guided in the right direction at the right time. With over 25 years of experience in academia and global education, I have witnessed how effective mentorship and structured learning can transform young minds into confident achievers.</p>
                        <p>Learning-Cube was founded on this very philosophy—to create an environment where academic excellence meets holistic growth. Here, we don't just focus on teaching subjects; we cultivate curiosity, discipline, and purpose. Every student who walks through our doors is part of a larger vision—to nurture thinkers, innovators, and responsible global citizens prepared for the challenges of tomorrow.</p>
                    </div>
                    <div class="mt-6 pt-6 border-t-2 border-dotted border-slate-200">
                        <p class="text-accent italic font-medium text-center">"Guiding learners toward academic excellence and global success."</p>
                    </div>
                </div>
                <!-- Avinash Dubey -->
                <div class="bg-white rounded-2xl p-8 lg:p-10 shadow-card border border-slate-100 text-left">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-2 border-slate-200 flex-shrink-0 mb-6 mx-auto">
                        <img src="{{ asset('images/avinash.svg') }}" alt="Avinash Dubey" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-accent text-center">Mr. Avinash Dubey</h3>
                    <p class="text-navy text-base mt-1 text-center font-medium">Co - Founder</p>
                    <div class="mt-6 space-y-4 text-slate-600 leading-relaxed">
                        <p>My professional path—from a qualified B.Tech Engineer from the esteemed Vellore Institute of Technology (VIT) to a published novelist—has given me a unique perspective on what it truly takes to succeed. I've learned that the most powerful tool for conquering the stage called the world is not just technical skill, but the Right Education—imparted at the Right time and in the Right way.</p>
                        <p>This belief is the bedrock of Learning Cube. I consider every student who walks through our doors to be a part of my extended family, and my greatest joy is seeing them succeed and contribute meaningfully to mankind. We are here not just to teach subjects, but to nurture the future generation.</p>
                    </div>
                    <div class="mt-6 pt-6 border-t-2 border-dotted border-slate-200">
                        <p class="text-accent italic font-medium text-center">"Right Education—imparted at the Right time and in the Right way."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-navy py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-accent text-center mb-12">Mission, Vision and Value</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-card border border-slate-100 text-left">
                    <h3 class="text-xl font-bold text-accent">Our Mission</h3>
                    <p class="mt-4 text-slate-600 leading-relaxed">
                        Our mission is to inspire a lifelong love for learning by nurturing curiosity, critical thinking, and academic excellence. We aim to empower every student with the confidence, skills, and values to succeed in exams, careers, and real life.
                    </p>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-card border border-slate-100 text-left">
                    <h3 class="text-xl font-bold text-accent">Our Vision</h3>
                    <p class="mt-4 text-slate-600 leading-relaxed">
                        Our vision is to build a world where students don't just study for marks, but embrace knowledge as a path to purpose. We strive to develop ethical, intelligent, globally aware individuals who contribute positively to society and lead with compassion.
                    </p>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-card border border-slate-100 text-left">
                    <h3 class="text-xl font-bold text-accent">Our Value</h3>
                    <p class="mt-4 text-slate-600 leading-relaxed">
                        Learning Cube is built on values of passion, integrity, curiosity, empathy, and excellence. We believe in personalized learning, emotional growth, and subject mastery—ensuring every student feels supported, confident, and motivated to achieve their fullest potential.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

