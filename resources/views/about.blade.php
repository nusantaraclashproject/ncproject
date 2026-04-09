@extends('layouts.app')

@section('title', 'About - Nusantara Clash')

@section('content')
    <section class="min-h-screen bg-charcoal-blue-900 py-16 flex items-center">
        <div class="max-w-5xl mx-auto px-6 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Profile Image -->
                <div class="flex items-center justify-center">
                    <div class="w-80 h-80 bg-gradient-to-br from-prussian-blue-600 to-prussian-blue-900 rounded-2xl flex items-center justify-center shadow-2xl">
                        <div class="text-center">
                            <p class="text-6xl">👨‍💼</p>
                            <p class="text-charcoal-blue-300 text-xl mt-4">Founder & Creator</p>
                        </div>
                    </div>
                </div>

                <!-- About Content -->
                <div class="space-y-6">
                    <div>
                        <h1 class="text-5xl font-bold text-brick-red-500 mb-2">Nusantara Clash</h1>
                        <p class="text-tangerine-dream-500 font-bold text-xl">Board Game Strategi Tradisional Indonesia</p>
                    </div>

                    <p class="text-charcoal-blue-200 text-lg leading-relaxed">
                        Permainan tradisional Nusantara merupakan bagian penting dari warisan budaya Indonesia yang mencerminkan nilai kebersamaan, strategi, dan keterampilan sosial. Berbagai permainan seperti Engklek, Congklak, Gobak Sodor, Gasing, dan Bentengan telah dimainkan turun-temurun sebagai sarana hiburan sekaligus pembelajaran nilai kerja sama dan ketangkasan.
                    </p>

                    <p class="text-charcoal-blue-200 text-lg leading-relaxed">
                        Namun, seiring berkembangnya teknologi digital dan perubahan gaya hidup, minat generasi muda terhadap permainan tradisional mulai berkurang. Nusantara Clash hadir sebagai upaya untuk menghadirkan kembali semangat permainan tradisional dalam bentuk yang lebih modern dan interaktif.
                    </p>

                    <p class="text-charcoal-blue-200 text-lg leading-relaxed">
                        Permainan ini menggabungkan konsep pergerakan arena yang terinspirasi dari pola permainan tradisional dengan mekanik strategi berbasis kartu, menekankan strategi melalui Area Control, Movement on Board, Hand Management, dan Duel atau Challenge untuk merebut wilayah.
                    </p>

                    <!-- Mission Statement -->
                    <div class="bg-charcoal-blue-800 border-l-4 border-brick-red-500 p-6 rounded-lg mt-8">
                        <h3 class="text-2xl font-bold text-brick-red-500 mb-3">🎯 Mission</h3>
                        <p class="text-charcoal-blue-100">
                            Menciptakan permainan yang tidak hanya menghibur, tetapi juga mengedukasi dan menginspirasi generasi muda untuk menghargai 
                            kekayaan budaya dan sejarah Nusantara melalui medium yang paling menarik: bermain.
                        </p>
                    </div>

                    <!-- Key Achievements -->
                    <div class="grid grid-cols-3 gap-4 mt-8">
                        <div class="bg-charcoal-blue-800 p-4 rounded-lg text-center">
                            <p class="text-3xl font-bold text-prussian-blue-400">10+</p>
                            <p class="text-charcoal-blue-200 text-sm mt-2">Years Experience</p>
                        </div>
                        <div class="bg-charcoal-blue-800 p-4 rounded-lg text-center">
                            <p class="text-3xl font-bold text-tangerine-dream-400">50K+</p>
                            <p class="text-charcoal-blue-200 text-sm mt-2">Players Worldwide</p>
                        </div>
                        <div class="bg-charcoal-blue-800 p-4 rounded-lg text-center">
                            <p class="text-3xl font-bold text-crimson-violet-400">100%</p>
                            <p class="text-charcoal-blue-200 text-sm mt-2">Passion Driven</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
