<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nusantara Clash')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-charcoal-blue-900 text-charcoal-blue-50">
    <!-- Navbar -->
    <nav class=" bg-charcoal-blue-900 rounded-xl sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('img/logo.png') }}" alt="Nusantara Clash" class="h-12 w-auto">
            </div>
            
            <!-- Navigation Links -->
            <div class="flex gap-8">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/merch" class="nav-link {{ request()->is('merch') ? 'active' : '' }}">Merch</a>
                <a href="/game" class="nav-link {{ request()->is('game') ? 'active' : '' }}">Game</a>
                <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-charcoal-blue-800 border-t border-prussian-blue-700 mt-16 py-8">
        <div class="max-w-7xl mx-auto px-6 text-center text-charcoal-blue-400">
            <p>&copy; 2026 Nusantara Clash. All rights reserved.</p>
        </div>
    </footer>

    <style>
        .nav-link {
            @apply text-charcoal-blue-900 hover:text-brick-red-500 transition-colors duration-300 relative font-medium;
        }
        
        .nav-link.active {
            @apply text-brick-red-500;
        }
        
        .nav-link.active::after {
            @apply block absolute bottom-0 h-1 w-full bg-brick-red-500;
            content: '';
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }
    </style>

    @stack('scripts')
</body>
</html>
