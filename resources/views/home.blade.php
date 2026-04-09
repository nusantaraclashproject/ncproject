@extends('layouts.app')

@section('title', 'Home - Nusantara Clash')

@section('content')
    <section class="min-h-screen flex items-center justify-center bg-linear-to-b from-charcoal-blue-900 to-charcoal-blue-800">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <!-- Main Title with Animation -->
            <h2 class="text-6xl font-bold text-brick-red-500 mb-8 animate-fade-in-up">
                Nusantara Clash
            </h2>
            
            <!-- Subtitle with Staggered Animation -->
            <p class="text-xl text-charcoal-blue-200 max-w-2xl mx-auto leading-relaxed animate-fade-in-up delay-100">
                Permainan tradisional Nusantara merupakan bagian penting dari warisan budaya Indonesia. Board game Nusantara Clash menghadirkan kembali semangat permainan tradisional dalam bentuk yang lebih modern dan interaktif. Menggabungkan konsep pergerakan arena yang terinspirasi dari pola permainan tradisional dengan mekanik strategi berbasis kartu.
            </p>

            <!-- Call to Action Button -->
            <div class="mt-12 animate-fade-in-up delay-200">
                <a href="/merch" class="inline-block px-8 py-4 bg-brick-red-500 text-white font-bold rounded-lg hover:bg-brick-red-600 transition-colors duration-300">
                    Explore Merch
                </a>
            </div>
        </div>
    </section>
@endsection
