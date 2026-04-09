@extends('layouts.app')

@section('title', 'Merch - Nusantara Clash')

@section('content')
    <section class="min-h-screen bg-charcoal-blue-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Title -->
            <h2 class="text-5xl font-bold text-brick-red-500 mb-16">Our Merch</h2>

            <!-- Merch Item 1 -->
            <div class="mb-20 flex items-center gap-8">
                <!-- Description (60%) -->
                <div class="w-3/5">
                    <h3 class="text-3xl font-bold text-tangerine-dream-500 mb-6">Baju Wira Tradisional: Nusantara Clash</h3>
                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-4">
                        Dapatkan baju eksklusif Nusantara Clash dengan desain modern yang menampilkan logo permainan. Merchandise ini dirancang sebagai pelengkap sekaligus media promosi board game Nusantara Clash dengan tema permainan tradisional Nusantara yang autentik.
                    </p>
                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-6">
                        Dibuat dari bahan premium cotton berkualitas tinggi dengan cetakan yang tahan lama. Merchandise ini tidak hanya berfungsi sebagai sarana promosi yang memperkuat identitas visual permainan, tetapi juga sebagai produk pendukung yang menarik bagi pemain maupun kolektor.
                    </p>
                    <p class="text-2xl font-bold text-brick-red-500">Rp 199.000</p>
                    <button class="mt-6 px-8 py-3 bg-brick-red-500 text-white font-bold rounded-lg hover:bg-brick-red-600 transition-colors duration-300">
                        Beli Sekarang
                    </button>
                </div>

                <!-- Image (40%) -->
                <div class="w-2/5">
                    <div class="aspect-square bg-linear-to-br from-prussian-blue-700 to-prussian-blue-900 rounded-lg flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('img/merch-shirt.svg') }}" alt="Baju Wira Tradisional" class="w-full h-full object-cover p-4">
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="h-1 bg-prussian-blue-700 mb-20"></div>

            <!-- Merch Item 2 -->
            <div class="mb-20 flex items-center gap-8">
                <!-- Description (60%) -->
                <div class="w-3/5">
                    <h3 class="text-3xl font-bold text-tangerine-dream-500 mb-6">Topi Wira Tradisional: Nusantara Clash</h3>
                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-4">
                        Topi eksklusif Nusantara Clash dengan logo permainan yang eye-catching. Merchandise ini merupakan bagian dari koleksi pelengkap board game Nusantara Clash yang mengusung tema tradisional Nusantara dengan sentuhan modern.
                    </p>
                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-6">
                        Dengan desain yang konsisten dengan identitas visual permainan, topi ini sangat cocok untuk gaming enthusiast dan kolektor. Dibuat dari bahan berkualitas tinggi yang nyaman digunakan dalam berbagai kesempatan, baik untuk casual daily wear maupun sebagai identitas komunitas Nusantara Clash.
                    </p>
                    <p class="text-2xl font-bold text-brick-red-500">Rp 149.000</p>
                    <button class="mt-6 px-8 py-3 bg-brick-red-500 text-white font-bold rounded-lg hover:bg-brick-red-600 transition-colors duration-300">
                        Beli Sekarang
                    </button>
                </div>

                <!-- Image (40%) -->
                <div class="w-2/5">
                    <div class="aspect-square bg-linear-to-br from-tangerine-dream-700 to-tangerine-dream-900 rounded-lg flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('img/merch-cap.svg') }}" alt="Topi Wira Tradisional" class="w-full h-full object-cover p-4">
                    </div>
                </div>
        </div>
    </section>
@endsection
