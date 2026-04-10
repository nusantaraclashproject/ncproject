@extends('layouts.app')
 
@section('title', 'Game - Nusantara Clash')
 
@section('content')
    <section class="min-h-screen bg-dark-coffee-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center gap-12">
                <!-- Left Content (60%) -->
                <div class="w-3/5">
                    <h2 class="text-5xl font-bold text-rosy-copper-500 mb-8">Nusantara Clash</h2>
                    
                    <p class="text-dark-coffee-200 text-lg leading-relaxed mb-6">
                        <strong class="text-apricot-cream-500">Permainan Papan Strategi Berbasis Kartu</strong> yang mempertemukan 2–4 pemain dalam perebutan kendali di berbagai arena permainan tradisional Indonesia. Menggunakan mekanisme hand management sederhana dengan sistem 3 kartu tetap di tangan, di mana setiap pemain selalu memegang tiga jenis kartu berbeda.
                    </p>
 
                    <p class="text-dark-coffee-200 text-lg leading-relaxed mb-6">
                        <strong class="text-dark-cyan-300">Papan Permainan:</strong> Terdiri dari 5 arena permainan (Engklek, Gobak Sodor, Congklak, Gasing, Bentengan) yang menjadi lokasi utama perebutan token kemenangan. Pemain harus bergerak ke arena-arena ini dan menggunakan kartu secara strategis untuk menguasai wilayah.
                    </p>
 
                    <p class="text-dark-coffee-200 text-lg leading-relaxed mb-8">
                        <strong class="text-carrot-orange-300">Tujuan Permainan:</strong> Berhasil mengumpulkan 3 token dari 3 arena berbeda untuk memenangkan permainan. Setiap giliran, pemain dapat bergerak menuju arena tertentu atau memainkan kartu untuk mempengaruhi situasi permainan melalui duel atau deklarasi.
                    </p>
 
                    <!-- Game Features -->
                    <div class="mt-10">
                        <h3 class="text-2xl font-bold text-apricot-cream-500 mb-4">Jenis Kartu</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-dark-coffee-200">
                                <span class="text-rosy-copper-500 font-bold text-xl">🏃</span>
                                <span><strong>Kartu Gerak (10 kartu):</strong> Digunakan untuk memindahkan pemain ke arena lain. Termasuk aksi seperti Langkah Cepat, Lari Cepat, dan Kejar Lawan.</span>
                            </li>
                            <li class="flex items-start gap-3 text-dark-coffee-200">
                                <span class="text-rosy-copper-500 font-bold text-xl">⚔️</span>
                                <span><strong>Kartu Taktik (10 kartu):</strong> Digunakan untuk mengatur strategi atau mengganggu lawan. Termasuk Pertahanan Benteng, Gangguan Penjaga, dan Tukar Posisi.</span>
                            </li>
                            <li class="flex items-start gap-3 text-dark-coffee-200">
                                <span class="text-rosy-copper-500 font-bold text-xl">🏆</span>
                                <span><strong>Kartu Tantangan (10 kartu):</strong> Digunakan untuk duel atau deklarasi penguasaan arena. Memiliki nilai 1-5 dengan 2 kartu untuk setiap nilai.</span>
                            </li>
                        </ul>
                    </div>
 
                    <a href="/merch" class="inline-block mt-10 px-8 py-4 bg-rosy-copper-500 text-white font-bold rounded-lg hover:bg-rosy-copper-600 transition-colors duration-300">
                        Order Game Sekarang
                    </a>
                </div>
 
                <!-- Right Image (40%) -->
                <div class="w-2/5">
                    <div class="sticky top-24 bg-gradient-to-br from-carrot-orange-700 to-carrot-orange-900 rounded-lg flex items-center justify-center overflow-hidden p-4">
                        <img src="{{ asset('img/banner 40x30.png') }}" alt="Nusantara Clash Board Game" class="w-full h-auto object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Live Comments Section -->
    <section class="bg-gradient-to-b from-dark-coffee-800 to-dark-coffee-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-rosy-copper-500 mb-12">Live Chat</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Chat Messages (70%) -->
                <div class="lg:col-span-2">
                    <div class="bg-dark-coffee-700 rounded-lg p-6 h-96 flex flex-col">
                        <div id="comments-container" class="flex-1 overflow-y-auto mb-4 space-y-4 pr-2">
                            <!-- Comments will be loaded here -->
                        </div>
                        <form id="comment-form" class="flex gap-2">
                            @csrf
                            <input 
                                type="text" 
                                id="username-input"
                                placeholder="Nama kamu..." 
                                class="flex-1 bg-dark-coffee-600 text-dark-coffee-50 rounded px-4 py-2 text-sm placeholder-dark-coffee-400 focus:outline-none focus:ring-2 focus:ring-rosy-copper-500"
                                required
                            >
                            <input 
                                type="text" 
                                id="message-input"
                                placeholder="Ketik komentar..." 
                                class="flex-1 bg-dark-coffee-600 text-dark-coffee-50 rounded px-4 py-2 text-sm placeholder-dark-coffee-400 focus:outline-none focus:ring-2 focus:ring-rosy-copper-500"
                                required
                            >
                            <button type="submit" class="px-4 py-2 bg-rosy-copper-500 text-white rounded font-bold hover:bg-rosy-copper-600 transition-colors">Send</button>
                        </form>
                    </div>
                </div>
 
                <!-- Live Stats (30%) -->
                <div class="space-y-4">
                    <div class="bg-dark-coffee-700 rounded-lg p-6">
                        <h3 class="text-xl font-bold text-dark-cyan-200 mb-4">📊 Live Stats</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-dark-coffee-200">Active Players</span>
                                <span class="font-bold text-rosy-copper-500">247</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-dark-coffee-200">Games Today</span>
                                <span class="font-bold text-apricot-cream-500">1.2K</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-dark-coffee-200">Avg. Game Time</span>
                                <span class="font-bold text-carrot-orange-500">67 min</span>
                            </div>
                        </div>
                    </div>
 
                    <div class="bg-dark-coffee-700 rounded-lg p-6">
                        <h3 class="text-xl font-bold text-apricot-cream-200 mb-4">🏆 Top Players</h3>
                        <div class="space-y-2 text-sm">
                            <p class="text-dark-coffee-100">1. <span class="text-rosy-copper-500 font-bold">StrategyMaster</span></p>
                            <p class="text-dark-coffee-100">2. <span class="text-rosy-copper-500 font-bold">TacticalGamer</span></p>
                            <p class="text-dark-coffee-100">3. <span class="text-rosy-copper-500 font-bold">NusantaraKing</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================
         KARTU TANTANGAN SECTION
    ========================= -->
    <section class="bg-dark-coffee-800 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-rosy-copper-500 mb-12">Kartu Tantangan</h2>
            <div class="flex items-center gap-3">
                <button onclick="scrollCarousel('slider-tantangan', -280)"
                    class="flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center bg-white/10 border-2 border-white/20 text-white/70 hover:bg-white/20 hover:text-white hover:border-white/40 transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <div class="flex-1 overflow-hidden">
                    <div id="slider-tantangan" class="flex gap-4 overflow-x-auto scroll-smooth py-3 px-1 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                        <img src="{{ asset('img/cards/1.webp') }}" alt="Kartu Tantangan 1"
                            class="flex-shrink-0 w-16 sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/2.webp') }}" alt="Kartu Tantangan 2"
                            class="flex-shrink-0 w-16 sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/3.webp') }}" alt="Kartu Tantangan 3"
                            class="flex-shrink-0 w-16 sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/4.webp') }}" alt="Kartu Tantangan 4"
                            class="flex-shrink-0 w-16 sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/5.webp') }}" alt="Kartu Tantangan 5"
                            class="flex-shrink-0 w-16 sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                    </div>
                </div>
                <button onclick="scrollCarousel('slider-tantangan', 280)"
                    class="flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center bg-white/10 border-2 border-white/20 text-white/70 hover:bg-white/20 hover:text-white hover:border-white/40 transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- ========================
         KARTU AKSI SECTION
    ========================= -->
    <section class="bg-dark-coffee-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-apricot-cream-500 mb-12">Kartu Aksi</h2>
            <div class="flex items-center gap-3">
                <button onclick="scrollCarousel('slider-aksi', -280)"
                    class="flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center bg-white/10 border-2 border-white/20 text-white/70 hover:bg-white/20 hover:text-white hover:border-white/40 transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <div class="flex-1 overflow-hidden">
                    <div id="slider-aksi" class="flex gap-4 overflow-x-auto scroll-smooth py-3 px-1 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                        <img src="{{ asset('img/cards/7.webp') }}" alt="Kartu Aksi 1"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/8.webp') }}" alt="Kartu Aksi 2"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/9.webp') }}" alt="Kartu Aksi 3"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/10.webp') }}" alt="Kartu Aksi 4"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/11.webp') }}" alt="Kartu Aksi 5"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/12.webp') }}" alt="Kartu Aksi 6"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/13.webp') }}" alt="Kartu Aksi 7"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/14.webp') }}" alt="Kartu Aksi 8"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/15.webp') }}" alt="Kartu Aksi 9"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/16.webp') }}" alt="Kartu Aksi 10"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                    </div>
                </div>
                <button onclick="scrollCarousel('slider-aksi', 280)"
                    class="flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center bg-white/10 border-2 border-white/20 text-white/70 hover:bg-white/20 hover:text-white hover:border-white/40 transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- ========================
         KARTU TAKTIK SECTION
    ========================= -->
    <section class="bg-dark-coffee-800 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-dark-cyan-500 mb-12">Kartu Taktik</h2>
            <div class="flex items-center gap-3">
                <button onclick="scrollCarousel('slider-taktik', -280)"
                    class="flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center bg-white/10 border-2 border-white/20 text-white/70 hover:bg-white/20 hover:text-white hover:border-white/40 transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <div class="flex-1 overflow-hidden">
                    <div id="slider-taktik" class="flex gap-4 overflow-x-auto scroll-smooth py-3 px-1 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                        <img src="{{ asset('img/cards/18.webp') }}" alt="Kartu Taktik 1"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/19.webp') }}" alt="Kartu Taktik 2"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/20.webp') }}" alt="Kartu Taktik 3"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/21.webp') }}" alt="Kartu Taktik 4"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/22.webp') }}" alt="Kartu Taktik 5"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/23.webp') }}" alt="Kartu Taktik 6"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/24.webp') }}" alt="Kartu Taktik 7"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/25.webp') }}" alt="Kartu Taktik 8"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/26.webp') }}" alt="Kartu Taktik 9"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/27.webp') }}" alt="Kartu Taktik 10"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                    </div>
                </div>
                <button onclick="scrollCarousel('slider-taktik', 280)"
                    class="flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center bg-white/10 border-2 border-white/20 text-white/70 hover:bg-white/20 hover:text-white hover:border-white/40 transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- ========================
         KARTU JALAN SECTION
    ========================= -->
    <section class="bg-dark-coffee-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-carrot-orange-500 mb-12">Kartu Jalan</h2>
            <div class="flex items-center gap-3">
                <button onclick="scrollCarousel('slider-jalan', -280)"
                    class="flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center bg-white/10 border-2 border-white/20 text-white/70 hover:bg-white/20 hover:text-white hover:border-white/40 transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <div class="flex-1 overflow-hidden">
                    <div id="slider-jalan" class="flex gap-4 overflow-x-auto scroll-smooth py-3 px-1 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                        <img src="{{ asset('img/cards/29.webp') }}" alt="Kartu Jalan 1"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/30.webp') }}" alt="Kartu Jalan 2"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('img/cards/31.webp') }}" alt="Kartu Jalan 3"
                            class="flex-shrink-0 w-[72px] sm:w-32 md:w-36 aspect-[2/3] object-cover rounded-lg shadow-lg hover:-translate-y-2 hover:scale-105 transition-transform duration-300 cursor-pointer">
                    </div>
                </div>
                <button onclick="scrollCarousel('slider-jalan', 280)"
                    class="flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center bg-white/10 border-2 border-white/20 text-white/70 hover:bg-white/20 hover:text-white hover:border-white/40 transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

@endsection

@push('styles')
<style>
    @font-face {
        font-family: 'BitcountPropSingle';
        src: url('{{ asset("fonts/BitcountPropSingle-Bold.ttf") }}') format('truetype');
        font-weight: bold;
    }
</style>
@endpush
 
@push('scripts')
<script>
    function scrollCarousel(sliderId, distance) {
        const slider = document.getElementById(sliderId);
        if (slider) {
            slider.scrollBy({ left: distance, behavior: 'smooth' });
        }
    }
 
    const colors = ['bg-dark-coffee-600', 'bg-apricot-cream-600', 'bg-carrot-orange-600'];
    
    function getRandomColor() {
        return colors[Math.floor(Math.random() * colors.length)];
    }
 
    function formatTime(date) {
        const now = new Date();
        const diff = now - new Date(date);
        const seconds = Math.floor(diff / 1000);
        const minutes = Math.floor(seconds / 60);
        const hours = Math.floor(minutes / 60);
        if (seconds < 60) return 'just now';
        if (minutes < 60) return `${minutes}m ago`;
        if (hours < 24) return `${hours}h ago`;
        return new Date(date).toLocaleDateString();
    }
 
    function loadComments() {
        fetch('/api/comments')
            .then(response => response.json())
            .then(comments => {
                const container = document.getElementById('comments-container');
                container.innerHTML = '';
                if (comments.length === 0) {
                    container.innerHTML = '<p class="text-dark-coffee-400 text-center py-8">No comments yet. Be the first to comment!</p>';
                    return;
                }
                comments.forEach(comment => {
                    const commentEl = document.createElement('div');
                    commentEl.className = 'flex gap-3 animate-fade-in';
                    commentEl.innerHTML = `
                        <div class="w-10 h-10 ${getRandomColor()} rounded-full flex-shrink-0"></div>
                        <div class="flex-1">
                            <p class="font-bold text-dark-cyan-200 text-sm">${escapeHtml(comment.username)}</p>
                            <p class="text-dark-coffee-100 text-sm mt-1">${escapeHtml(comment.message)}</p>
                        </div>
                        <span class="text-dark-coffee-400 text-xs">${formatTime(comment.created_at)}</span>
                    `;
                    container.appendChild(commentEl);
                });
                container.scrollTop = container.scrollHeight;
            })
            .catch(error => console.error('Error loading comments:', error));
    }
 
    function escapeHtml(text) {
        const map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' };
        return text.replace(/[&<>"']/g, m => map[m]);
    }
 
    document.getElementById('comment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const username = document.getElementById('username-input').value.trim();
        const message = document.getElementById('message-input').value.trim();
        const token = document.querySelector('input[name="_token"]').value;
        if (!username || !message) { alert('Please fill in both fields'); return; }
        fetch('/api/comments', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': token },
            body: JSON.stringify({ username, message })
        })
        .then(response => {
            if (!response.ok) return response.json().then(err => Promise.reject(err));
            return response.json();
        })
        .then(() => {
            document.getElementById('message-input').value = '';
            loadComments();
        })
        .catch(error => {
            console.error('Error posting comment:', error);
            alert('Error posting comment. Please try again.');
        });
    });

    loadComments();
</script>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in { animation: fadeIn 0.3s ease-out; }
</style>
@endpush