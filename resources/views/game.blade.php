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
                    <div class="sticky top-24 bg-linear-to-br from-carrot-orange-700 to-carrot-orange-900 rounded-lg flex items-center justify-center overflow-hidden p-4">
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
                        <!-- Messages Container -->
                        <div id="comments-container" class="flex-1 overflow-y-auto mb-4 space-y-4 pr-2">
                            <!-- Comments will be loaded here -->
                        </div>

                        <!-- Input Form -->
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

@endsection

@push('scripts')
<script>
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

                // Auto-scroll to bottom
                container.scrollTop = container.scrollHeight;
            })
            .catch(error => console.error('Error loading comments:', error));
    }

    function escapeHtml(text) {
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.replace(/[&<>"']/g, m => map[m]);
    }

    document.getElementById('comment-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const username = document.getElementById('username-input').value.trim();
        const message = document.getElementById('message-input').value.trim();
        const token = document.querySelector('input[name="_token"]').value;

        if (!username || !message) {
            alert('Please fill in both fields');
            return;
        }

        fetch('/api/comments', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify({
                username: username,
                message: message
            })
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => Promise.reject(err));
            }
            return response.json();
        })
        .then(data => {
            document.getElementById('message-input').value = '';
            loadComments();
        })
        .catch(error => {
            console.error('Error posting comment:', error);
            alert('Error posting comment. Please try again.');
        });
    });

    // Load comments on page load
    loadComments();
</script>
<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.3s ease-out;
    }
</style>
@endpush
