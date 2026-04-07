@extends('layouts.app')

@section('title', 'Game - Nusantara Clash')

@section('content')
    <section class="min-h-screen bg-charcoal-blue-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center gap-12">
                <!-- Left Content (60%) -->
                <div class="w-3/5">
                    <h2 class="text-5xl font-bold text-brick-red-500 mb-8">What Is Nusantara Clash</h2>
                    
                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-6">
                        Nusantara Clash adalah permainan papan strategis yang menggabungkan elemen tradisional Indonesia dengan mekanik game modern. 
                        Pemain bersaing untuk menguasai wilayah-wilayah nusantara dengan taktik dan strategi yang mendalam.
                    </p>

                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <p class="text-charcoal-blue-200 text-lg leading-relaxed mb-8">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>

                    <!-- Game Features -->
                    <div class="mt-10">
                        <h3 class="text-2xl font-bold text-tangerine-dream-500 mb-4">Fitur Utama:</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-charcoal-blue-200">
                                <span class="text-brick-red-500 font-bold text-xl">•</span>
                                <span>Strategi mendalam dengan multiple paths to victory</span>
                            </li>
                            <li class="flex items-start gap-3 text-charcoal-blue-200">
                                <span class="text-brick-red-500 font-bold text-xl">•</span>
                                <span>Desain yang menampilkan kekayaan budaya Nusantara</span>
                            </li>
                            <li class="flex items-start gap-3 text-charcoal-blue-200">
                                <span class="text-brick-red-500 font-bold text-xl">•</span>
                                <span>Gameplay untuk 2-4 pemain dengan durasi 45-90 menit</span>
                            </li>
                            <li class="flex items-start gap-3 text-charcoal-blue-200">
                                <span class="text-brick-red-500 font-bold text-xl">•</span>
                                <span>Komponen berkualitas tinggi dan artwork yang memukau</span>
                            </li>
                        </ul>
                    </div>

                    <a href="/merch" class="inline-block mt-10 px-8 py-4 bg-brick-red-500 text-white font-bold rounded-lg hover:bg-brick-red-600 transition-colors duration-300">
                        Order Game Sekarang
                    </a>
                </div>

                <!-- Right Image (40%) -->
                <div class="w-2/5">
                    <div class="sticky top-24 aspect-square bg-linear-to-br from-crimson-violet-700 to-crimson-violet-900 rounded-lg flex items-center justify-center">
                        <div class="text-center">
                            <p class="text-charcoal-blue-300 text-lg">Board Game Image</p>
                            <p class="text-charcoal-blue-400 text-sm mt-2">Placeholder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Live Comments Section -->
    <section class="bg-gradient-to-b from-charcoal-blue-800 to-charcoal-blue-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-brick-red-500 mb-12">Live Chat</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Chat Messages (70%) -->
                <div class="lg:col-span-2">
                    <div class="bg-charcoal-blue-700 rounded-lg p-6 h-96 flex flex-col">
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
                                class="flex-1 bg-charcoal-blue-600 text-charcoal-blue-50 rounded px-4 py-2 text-sm placeholder-charcoal-blue-400 focus:outline-none focus:ring-2 focus:ring-brick-red-500"
                                required
                            >
                            <input 
                                type="text" 
                                id="message-input"
                                placeholder="Ketik komentar..." 
                                class="flex-1 bg-charcoal-blue-600 text-charcoal-blue-50 rounded px-4 py-2 text-sm placeholder-charcoal-blue-400 focus:outline-none focus:ring-2 focus:ring-brick-red-500"
                                required
                            >
                            <button type="submit" class="px-4 py-2 bg-brick-red-500 text-white rounded font-bold hover:bg-brick-red-600 transition-colors">Send</button>
                        </form>
                    </div>
                </div>

                <!-- Live Stats (30%) -->
                <div class="space-y-4">
                    <div class="bg-charcoal-blue-700 rounded-lg p-6">
                        <h3 class="text-xl font-bold text-prussian-blue-200 mb-4">📊 Live Stats</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-charcoal-blue-200">Active Players</span>
                                <span class="font-bold text-brick-red-500">247</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-charcoal-blue-200">Games Today</span>
                                <span class="font-bold text-tangerine-dream-500">1.2K</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-charcoal-blue-200">Avg. Game Time</span>
                                <span class="font-bold text-crimson-violet-500">67 min</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-charcoal-blue-700 rounded-lg p-6">
                        <h3 class="text-xl font-bold text-tangerine-dream-200 mb-4">🏆 Top Players</h3>
                        <div class="space-y-2 text-sm">
                            <p class="text-charcoal-blue-100">1. <span class="text-brick-red-500 font-bold">StrategyMaster</span></p>
                            <p class="text-charcoal-blue-100">2. <span class="text-brick-red-500 font-bold">TacticalGamer</span></p>
                            <p class="text-charcoal-blue-100">3. <span class="text-brick-red-500 font-bold">NusantaraKing</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    const colors = ['bg-prussian-blue-600', 'bg-tangerine-dream-600', 'bg-crimson-violet-600'];
    
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
                    container.innerHTML = '<p class="text-charcoal-blue-400 text-center py-8">No comments yet. Be the first to comment!</p>';
                    return;
                }

                comments.forEach(comment => {
                    const commentEl = document.createElement('div');
                    commentEl.className = 'flex gap-3 animate-fade-in';
                    commentEl.innerHTML = `
                        <div class="w-10 h-10 ${getRandomColor()} rounded-full flex-shrink-0"></div>
                        <div class="flex-1">
                            <p class="font-bold text-prussian-blue-200 text-sm">${escapeHtml(comment.username)}</p>
                            <p class="text-charcoal-blue-100 text-sm mt-1">${escapeHtml(comment.message)}</p>
                        </div>
                        <span class="text-charcoal-blue-400 text-xs">${formatTime(comment.created_at)}</span>
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
