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
                    <h3 class="text-3xl font-bold text-tangerine-dream-500 mb-6">Classic Nusantara T-Shirt</h3>
                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-4">
                        Dapatkan t-shirt eksklusif Nusantara Clash dengan desain yang menampilkan filosofi permainan kami. 
                        Dibuat dari bahan premium cotton 100% dengan cetakan yang tahan lama.
                    </p>
                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="text-2xl font-bold text-brick-red-500">Rp 249.000</p>
                    <button class="mt-6 px-8 py-3 bg-brick-red-500 text-white font-bold rounded-lg hover:bg-brick-red-600 transition-colors duration-300">
                        Beli Sekarang
                    </button>
                </div>

                <!-- Image (40%) -->
                <div class="w-2/5">
                    <div class="aspect-square bg-linear-to-br from-prussian-blue-700 to-prussian-blue-900 rounded-lg flex items-center justify-center">
                        <div class="text-center">
                            <p class="text-charcoal-blue-300 text-lg">T-Shirt Image</p>
                            <p class="text-charcoal-blue-400 text-sm mt-2">Placeholder</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="h-1 bg-prussian-blue-700 mb-20"></div>

            <!-- Merch Item 2 -->
            <div class="mb-20 flex items-center gap-8">
                <!-- Description (60%) -->
                <div class="w-3/5">
                    <h3 class="text-3xl font-bold text-tangerine-dream-500 mb-6">Nusantara Signature Hoodie</h3>
                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-4">
                        Hoodie premium dengan logo Nusantara Clash yang bold dan modern. Sempurna untuk gaming sessions atau casual wear.
                        Tersedia dalam berbagai ukuran dan warna pilihan.
                    </p>
                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="text-2xl font-bold text-brick-red-500">Rp 449.000</p>
                    <button class="mt-6 px-8 py-3 bg-brick-red-500 text-white font-bold rounded-lg hover:bg-brick-red-600 transition-colors duration-300">
                        Beli Sekarang
                    </button>
                </div>

                <!-- Image (40%) -->
                <div class="w-2/5">
                    <div class="aspect-square bg-linear-to-br from-tangerine-dream-700 to-tangerine-dream-900 rounded-lg flex items-center justify-center">
                        <div class="text-center">
                            <p class="text-charcoal-blue-300 text-lg">Hoodie Image</p>
                            <p class="text-charcoal-blue-400 text-sm mt-2">Placeholder</p>
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
