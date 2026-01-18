@extends('layouts.app')

@section('content')
    <section class="bg-navy">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <h2 class="text-3xl md:text-4xl font-semibold text-accent mb-8">Our Story:</h2>
            <div class="space-y-6 text-white max-w-4xl">
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

    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="section-title text-navy mb-12">
                <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Message from the Founders</p>
                <h2 class="text-3xl font-semibold mt-2">Meet Our Leadership</h2>
            </div>
            <!-- Mobile: Image + Content for each person | Desktop: Images column + Content column -->
            <div class="space-y-16">
                <!-- Vikas Section -->
                <div class="grid md:grid-cols-2 gap-12 items-start">
                    <div class="flex justify-center md:justify-start relative">
                        <div class="relative group w-full max-w-sm">
                            <div class="absolute -inset-4 bg-gradient-to-br from-accent/20 to-navy/10 rounded-3xl blur-xl opacity-50 group-hover:opacity-75 transition-opacity"></div>
                            <div class="relative bg-white rounded-2xl p-4 shadow-lg border-2 border-slate-100">
                                <div class="aspect-square w-full overflow-hidden rounded-xl">
                                    <img src="{{ asset('images/vikas.svg') }}" alt="Vikas Gupta" class="w-full h-full object-contain">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-slate-50 to-white rounded-3xl p-8 shadow-card/40 border border-slate-100">
                        <h3 class="text-2xl font-semibold text-navy">Vikas Gupta</h3>
                        <p class="text-sm text-slate-500 mt-1">Founder, Education Cube & Learning Cube</p>
                        <p class="mt-6 text-slate-600 leading-relaxed">
                            With over 25 years of experience in academia and global education, my journey—from educator to international consultant—has strengthened my belief that true success depends on receiving the Right Education, at the Right Time, in the Right Way.
                        </p>
                        <p class="mt-4 text-slate-600 leading-relaxed">
                            Learning-Cube was created with a clear purpose: To build an environment where academic excellence meets holistic growth. Here, we do more than teach chapters—we inspire curiosity, discipline, confidence, and a sense of purpose.
                        </p>
                        <p class="mt-4 text-slate-600 leading-relaxed">
                            Every student who joins Learning Cube becomes part of a larger vision—to shape capable thinkers, confident achievers, and responsible global citizens who are prepared for tomorrow's world.
                        </p>
                        <p class="mt-6 text-navy font-semibold italic border-l-4 border-accent pl-4">"Guiding learners toward academic excellence and global success."</p>
                    </div>
                </div>
                
                <!-- Avinash Section -->
                <div class="grid md:grid-cols-2 gap-12 items-start">
                    <div class="flex justify-center md:justify-start relative">
                        <div class="relative group w-full max-w-sm">
                            <div class="absolute -inset-4 bg-gradient-to-br from-accent/20 to-navy/10 rounded-3xl blur-xl opacity-50 group-hover:opacity-75 transition-opacity"></div>
                            <div class="relative bg-white rounded-2xl p-4 shadow-lg border-2 border-slate-100">
                                <div class="aspect-square w-full overflow-hidden rounded-xl">
                                    <img src="{{ asset('images/avinash.svg') }}" alt="Avinash Dubey" class="w-full h-full object-contain">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-slate-50 to-white rounded-3xl p-8 shadow-card/40 border border-slate-100">
                        <h3 class="text-2xl font-semibold text-navy">Avinash Dubey</h3>
                        <p class="text-sm text-slate-500 mt-1">Co-Founder, Learning Cube</p>
                        <p class="mt-6 text-slate-600 leading-relaxed">
                            My journey—from a B.Tech graduate of Vellore Institute of Technology (VIT) to a published novelist—has shown me that success is built not only on knowledge but on the right guidance that shapes character, discipline, and perspective.
                        </p>
                        <p class="mt-4 text-slate-600 leading-relaxed">
                            At Learning Cube, every student is a part of my extended family. My aim is not only to help them excel in academics but to prepare them to contribute meaningfully to society.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-16 grid md:grid-cols-2 gap-10">
        <div class="bg-white rounded-3xl p-8 shadow-card border border-slate-100">
            <h2 class="text-2xl font-semibold text-navy">Our Vision</h2>
            <p class="mt-4 text-slate-600">
                To make high-quality, personalized academic support accessible to every school-going child in India, while nurturing them into ethical, informed, confident, and globally aware individuals.
            </p>
            <p class="mt-4 text-slate-600">
                We envision students who do not merely study for exams, but who understand, question, analyze, and apply knowledge meaningfully.
            </p>
        </div>
        <div class="bg-navy text-white rounded-3xl p-8 shadow-card">
            <h2 class="text-2xl font-semibold">Our Mission</h2>
            <ul class="mt-5 space-y-3 text-white/85">
                <li class="flex gap-3"><i class="ri-star-fill text-accent"></i>Build strong conceptual foundations in every core subject</li>
                <li class="flex gap-3"><i class="ri-star-fill text-accent"></i>Help students approach every exam with clarity, confidence, and strategy</li>
                <li class="flex gap-3"><i class="ri-star-fill text-accent"></i>Bridge the gap between school learning and true understanding</li>
                <li class="flex gap-3"><i class="ri-star-fill text-accent"></i>Inspire a lifelong passion for learning, thinking, and problem-solving</li>
                <li class="flex gap-3"><i class="ri-star-fill text-accent"></i>Prepare students to become responsible human beings and global contributors</li>
            </ul>
        </div>
    </section>

    <section class="bg-slate-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="section-title text-navy">
                <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Our Teaching Philosophy</p>
                <h2 class="text-3xl font-semibold mt-2">At Learning-Cube, our approach is grounded in methods that make learning effective, enjoyable, and meaningful.</h2>
            </div>
            <div class="mt-10 grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-card/40 border border-white hover:-translate-y-1 transition">
                    <p class="font-semibold text-navy">Concept First → Practice Next</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-card/40 border border-white hover:-translate-y-1 transition">
                    <p class="font-semibold text-navy">Learn → Apply → Revise → Test</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-card/40 border border-white hover:-translate-y-1 transition">
                    <p class="font-semibold text-navy">Encourage questions, curiosity, and open thinking</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-card/40 border border-white hover:-translate-y-1 transition">
                    <p class="font-semibold text-navy">Regular feedback for students and parents</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-card/40 border border-white hover:-translate-y-1 transition">
                    <p class="font-semibold text-navy">Focus on interest-driven learning, not rote memorization</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-card/40 border border-white hover:-translate-y-1 transition">
                    <p class="font-semibold text-navy">Nurture both academic strength and personal discipline</p>
                </div>
            </div>
            <p class="mt-8 text-center text-lg text-slate-700 font-medium">
                We don't just teach subjects — we inspire minds, shape character, and prepare students for life.
            </p>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="section-title text-navy">
                <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Why Our Approach is Different</p>
                <h2 class="text-3xl font-semibold mt-2">Learning Cube is not just a coaching class —</h2>
                <p class="text-xl text-slate-600 mt-4 max-w-4xl">
                    It is a nurturing ground for future thinkers, creators, leaders, and responsible citizens.
                </p>
            </div>
            <div class="mt-10">
                <p class="text-lg text-slate-700 mb-8 max-w-4xl">
                    We believe that when interest is ignited, self-motivation, performance, and success naturally follow.
                </p>
                <p class="text-lg font-semibold text-navy mb-6">Our teaching approach is designed to build not only marks but also:</p>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 shadow-card/30">
                        <h3 class="font-semibold text-navy mb-3">Confidence</h3>
                        <p class="text-slate-600 text-sm">Building self-assurance through understanding and practice</p>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 shadow-card/30">
                        <h3 class="font-semibold text-navy mb-3">Discipline</h3>
                        <p class="text-slate-600 text-sm">Cultivating consistent study habits and time management</p>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 shadow-card/30">
                        <h3 class="font-semibold text-navy mb-3">Curiosity</h3>
                        <p class="text-slate-600 text-sm">Encouraging questions and exploration beyond textbooks</p>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 shadow-card/30">
                        <h3 class="font-semibold text-navy mb-3">Moral Values</h3>
                        <p class="text-slate-600 text-sm">Instilling integrity, respect, and ethical principles</p>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 shadow-card/30">
                        <h3 class="font-semibold text-navy mb-3">Life Skills</h3>
                        <p class="text-slate-600 text-sm">Developing problem-solving and critical thinking abilities</p>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100 shadow-card/30">
                        <h3 class="font-semibold text-navy mb-3">Global Awareness</h3>
                        <p class="text-slate-600 text-sm">Preparing students to be informed global citizens</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="section-title text-navy">
                <p class="uppercase tracking-[0.35em] text-xs text-slate-400">Our Team</p>
                <h2 class="text-3xl font-semibold mt-2">Experienced academic leadership + hybrid centres</h2>
            </div>
            <div class="mt-10 grid md:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl border border-slate-100 shadow-card/30 bg-white">
                    <h3 class="font-semibold text-navy">Expert Faculty</h3>
                    <p class="mt-3 text-slate-600 text-sm">Subject specialists with 5–15 years of classroom coaching experience across CBSE,
                        ICSE, State Boards, IB & Cambridge curricula.</p>
                </div>
                <div class="p-6 rounded-2xl border border-slate-100 shadow-card/30 bg-white">
                    <h3 class="font-semibold text-navy">Academic Mentors</h3>
                    <p class="mt-3 text-slate-600 text-sm">Dedicated mentors oversee parent communication, track attendance, and run progress
                        reviews every month.</p>
                </div>
                <div class="p-6 rounded-2xl border border-slate-100 shadow-card/30 bg-white">
                    <h3 class="font-semibold text-navy">Hybrid Centres</h3>
                    <p class="mt-3 text-slate-600 text-sm">Operate both online and through partner centres across India with recorded lessons
                        so students never miss a concept.</p>
                </div>
            </div>
            <div class="mt-10">
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-card/30">
                    <h3 class="font-semibold text-navy mb-2">Akshita Goel</h3>
                    <p class="text-slate-600 text-sm">Science Faculty – Dedicated to building strong conceptual clarity and scientific thinking among students.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

