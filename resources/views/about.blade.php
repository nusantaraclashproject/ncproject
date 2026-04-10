@extends('layouts.app')

@section('title', 'About - Nusantara Clash')

@section('content')
    <section class="min-h-screen bg-dark-coffee-900 py-16 flex items-center">
        <div class="max-w-5xl mx-auto px-6 w-full">
            <div class="grid grid-cols-1 gap-12">
                <!-- Profile Image -->
                <div class="flex flex-col items-center justify-center">
                    <div class="w-80 bg-linear-to-br from-dark-coffee-600 to-dark-coffee-900 rounded-2xl flex items-center justify-center shadow-2xl">
                        <img src="{{ asset('img/profile.jpeg') }}" alt="Profile" srcset="" class="rounded-2xl">                            
                    </div>
                    <p class="text-dark-coffee-300 text-xl mt-4">Founder & Creator</p>
                </div>

                <!-- About Content -->
                <div class="space-y-6">
                    <div>
                        <h1 class="text-5xl font-bold text-rosy-copper-500 mb-2">Who Am I???</h1>
                        <p class="text-apricot-cream-500 font-bold text-xl">My Name Is Cayla Felicia Agustin</p>
                    </div>

                    <p class="text-dark-coffee-200 text-lg leading-relaxed">
                        I am a Junior Programmer and 2D Designer Game from PPLG student in SMK Negeri 12 Surabaya. I was learned around game, website, and how we can to become a game developer. And also, I still learning, so let's make an amazing thing together.
                    </p>

                    <!-- Mission Statement -->
                    <div class="bg-dark-coffee-800 border-l-4 border-rosy-copper-500 p-6 rounded-lg mt-8">
                        <h3 class="text-2xl font-bold text-rosy-copper-500 mb-3">🎯 Mission</h3>
                        <p class="text-dark-coffee-100">
                            Menciptakan permainan yang tidak hanya menghibur, tetapi juga mengedukasi dan menginspirasi generasi muda untuk menghargai 
                            kekayaan budaya dan sejarah Nusantara melalui medium yang paling menarik: bermain.
                        </p>
                    </div>

                    <!-- Key Achievements -->
                    <div class="grid grid-cols-3 gap-4 mt-8">
                        <div class="bg-dark-coffee-800 p-4 rounded-lg text-center">
                            <p class="text-3xl font-bold text-dark-cyan-400">2</p>
                            <p class="text-dark-coffee-200 text-sm mt-2">Years Experience</p>
                        </div>
                        <div class="bg-dark-coffee-800 p-4 rounded-lg text-center">
                            <p class="text-3xl font-bold text-apricot-cream-400">PHP</p>
                            <p class="text-dark-coffee-200 text-sm mt-2">My Favorite Language</p>
                        </div>
                        <div class="bg-dark-coffee-800 p-4 rounded-lg text-center">
                            <p class="text-3xl font-bold text-carrot-orange-400">100%</p>
                            <p class="text-dark-coffee-200 text-sm mt-2">Passion Driven</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
