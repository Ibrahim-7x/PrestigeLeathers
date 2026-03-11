<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prestige Leathers - Premium Leather Gear & Biker Suits. Engineered for riders who demand the best.">
    <title>@yield('title', 'Prestige Leathers | Premium Leather Gear & Biker Suits')</title>

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { 50: '#fef2f2', 100: '#fde6e6', 200: '#fbd0d0', 300: '#f7a8a8', 400: '#f07070', 500: '#E63946', 600: '#cc2d3a', 700: '#ab2030', 800: '#8e1d2c', 900: '#7e1d2c', 950: '#450a13' },
                        dark: { 50: '#f6f6f6', 100: '#e7e7e7', 200: '#d1d1d1', 300: '#b0b0b0', 400: '#888888', 500: '#6d6d6d', 600: '#5d5d5d', 700: '#4f4f4f', 800: '#454545', 900: '#1a1a1a', 950: '#0a0a0a' },
                        gold: { 400: '#E8C872', 500: '#D4A853', 600: '#C49A3D' },
                    },
                    fontFamily: {
                        heading: ['Oswald', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slide-up': 'slideUp 0.6s ease-out forwards',
                        'slide-down': 'slideDown 0.3s ease-out forwards',
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'scale-in': 'scaleIn 0.5s ease-out forwards',
                        'shimmer': 'shimmer 2s linear infinite',
                        'pulse-glow': 'pulseGlow 2s ease-in-out infinite',
                        'marquee': 'marquee 30s linear infinite',
                    },
                    keyframes: {
                        float: { '0%, 100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-20px)' } },
                        glow: { '0%': { boxShadow: '0 0 5px #E63946, 0 0 10px #E63946' }, '100%': { boxShadow: '0 0 20px #E63946, 0 0 40px #E63946' } },
                        slideUp: { '0%': { opacity: '0', transform: 'translateY(40px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                        slideDown: { '0%': { opacity: '0', transform: 'translateY(-10px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                        fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
                        scaleIn: { '0%': { opacity: '0', transform: 'scale(0.9)' }, '100%': { opacity: '1', transform: 'scale(1)' } },
                        shimmer: { '0%': { backgroundPosition: '-200% 0' }, '100%': { backgroundPosition: '200% 0' } },
                        pulseGlow: { '0%, 100%': { opacity: '1' }, '50%': { opacity: '0.5' } },
                        marquee: { '0%': { transform: 'translateX(0%)' }, '100%': { transform: 'translateX(-50%)' } },
                    },
                }
            }
        }
    </script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- AOS Animation Library --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    {{-- Custom Styles --}}
    <style>
        * { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-heading { font-family: 'Oswald', sans-serif; }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0a0a0a; }
        ::-webkit-scrollbar-thumb { background: #E63946; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #cc2d3a; }

        /* Loader */
        .loader-wrapper {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: #0a0a0a; z-index: 9999;
            display: flex; align-items: center; justify-content: center;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        .loader-wrapper.loaded { opacity: 0; visibility: hidden; }

        .loader-text {
            font-family: 'Oswald', sans-serif; font-size: 4rem; font-weight: 700;
            letter-spacing: 0.3em; text-transform: uppercase;
            display: flex; gap: 2px;
        }
        .loader-text .letter {
            display: inline-block;
            background: linear-gradient(90deg, #E63946, #D4A853, #E63946);
            background-size: 200% 100%;
            -webkit-background-clip: text; background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: wave 1.4s ease-in-out infinite, shimmer 2s linear infinite;
        }
        @keyframes wave {
            0%, 100% { transform: translateY(0); }
            25% { transform: translateY(-18px); }
            50% { transform: translateY(0); }
            75% { transform: translateY(6px); }
        }

        /* Glass Effect */
        .glass {
            background: rgba(255,255,255,0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.08);
        }

        .glass-light {
            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #E63946, #D4A853);
            -webkit-background-clip: text; background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gradient-text-white {
            background: linear-gradient(135deg, #ffffff, #999999);
            -webkit-background-clip: text; background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Animated Border */
        .animated-border {
            position: relative; overflow: hidden;
        }
        .animated-border::before {
            content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 2px;
            background: linear-gradient(90deg, transparent, #E63946, transparent);
            animation: borderSlide 3s linear infinite;
        }
        @keyframes borderSlide { 100% { left: 100%; } }

        /* Hover Card Lift */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 60px rgba(230, 57, 70, 0.15);
        }

        /* Magnetic Button */
        .btn-magnetic { position: relative; overflow: hidden; transition: all 0.3s ease; }
        .btn-magnetic::before {
            content: ''; position: absolute; top: 50%; left: 50%;
            width: 0; height: 0; border-radius: 50%;
            background: rgba(255,255,255,0.1);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        .btn-magnetic:hover::before { width: 300px; height: 300px; }

        /* Product Image Hover */
        .product-img-wrapper { overflow: hidden; }
        .product-img-wrapper img {
            transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .product-img-wrapper:hover img { transform: scale(1.1); }

        /* Parallax */
        .parallax-bg {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        /* Noise texture overlay */
        .noise-overlay::after {
            content: ''; position: absolute; inset: 0; opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
            pointer-events: none;
        }

        /* Navbar scroll */
        .navbar-scrolled {
            background: rgba(10, 10, 10, 0.95) !important;
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 30px rgba(0,0,0,0.3);
        }

        /* Custom cursor */
        .custom-cursor {
            width: 20px; height: 20px; border: 2px solid #E63946;
            border-radius: 50%; position: fixed; pointer-events: none;
            z-index: 10001; transition: transform 0.15s ease, opacity 0.15s ease;
            mix-blend-mode: difference;
        }
        .custom-cursor.cursor-hover { transform: scale(2.5); background: rgba(230, 57, 70, 0.1); }

        /* Swiper customization */
        .swiper-pagination-bullet { background: #666 !important; opacity: 1 !important; }
        .swiper-pagination-bullet-active { background: #E63946 !important; width: 30px !important; border-radius: 4px !important; }

        /* Floating particles */
        .particle {
            position: absolute; border-radius: 50%;
            background: rgba(230, 57, 70, 0.3);
            animation: float 6s ease-in-out infinite;
        }

        /* Selection color */
        ::selection { background: #E63946; color: white; }

        /* Mobile menu */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.77, 0, 0.175, 1);
        }
        .mobile-menu.active { transform: translateX(0); }

        /* Marquee */
        .marquee-track { display: flex; width: max-content; }

        /* Badge styles */
        .badge-bestseller { background: linear-gradient(135deg, #D4A853, #E8C872); color: #0a0a0a; }
        .badge-new { background: linear-gradient(135deg, #E63946, #ff6b6b); color: white; }
        .badge-sale { background: linear-gradient(135deg, #10b981, #34d399); color: white; }
        .badge-premium { background: linear-gradient(135deg, #8b5cf6, #a78bfa); color: white; }

        /* Counter animation */
        .count-up { font-variant-numeric: tabular-nums; }

        /* Reveal animation */
        .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s cubic-bezier(0.5, 0, 0, 1); }
        .reveal.active { opacity: 1; transform: translateY(0); }

        /* Image skeleton */
        .skeleton {
            background: linear-gradient(90deg, #1a1a1a 25%, #2a2a2a 50%, #1a1a1a 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }

        /* Size selector */
        .size-btn.active { border-color: #E63946; background: rgba(230, 57, 70, 0.1); color: #E63946; }

        /* Quantity input */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button { -webkit-appearance: none; margin: 0; }
        input[type="number"] { -moz-appearance: textfield; }

        /* Page transition */
        .page-transition { animation: fadeIn 0.5s ease-out; }
    </style>

    @yield('styles')
</head>
<body class="bg-dark-950 text-white font-body antialiased" x-data="store()" x-init="init()">
    {{-- Loading Screen --}}
    <div class="loader-wrapper" id="loader">
        <div class="text-center flex flex-col items-center">
            <div class="loader-text">
                <span class="letter" style="animation-delay: 0s">P</span>
                <span class="letter" style="animation-delay: 0.1s">r</span>
                <span class="letter" style="animation-delay: 0.2s">e</span>
                <span class="letter" style="animation-delay: 0.3s">s</span>
                <span class="letter" style="animation-delay: 0.4s">t</span>
                <span class="letter" style="animation-delay: 0.5s">i</span>
                <span class="letter" style="animation-delay: 0.6s">g</span>
                <span class="letter" style="animation-delay: 0.7s">e</span>
            </div>
            <div class="mt-4 w-48 h-0.5 bg-dark-800 rounded overflow-hidden">
                <div class="h-full bg-gradient-to-r from-primary-500 to-gold-500 rounded" style="animation: loadBar 1.5s ease-out forwards;"></div>
            </div>
        </div>
    </div>
    <style>
        @keyframes loadBar { 0% { width: 0; } 100% { width: 100%; } }
    </style>

    {{-- Custom Cursor (Desktop only) --}}
    <div class="custom-cursor hidden lg:block" id="customCursor"></div>

    {{-- Navigation --}}
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500" id="navbar"
         x-data="{ mobileMenu: false, searchOpen: false }">

        {{-- Announcement Bar --}}
        <div class="bg-gradient-to-r from-primary-600 via-primary-500 to-primary-600 text-white text-center py-2 text-xs tracking-widest uppercase font-medium overflow-hidden">
            <div class="marquee-track animate-marquee">
                <span class="mx-8">🏍️ Free Shipping on Orders Over $500</span>
                <span class="mx-8">⚡ New Season Collection Available Now</span>
                <span class="mx-8">🛡️ CE Certified Protection</span>
                <span class="mx-8">🔥 Up to 25% Off Selected Items</span>
                <span class="mx-8">🏍️ Free Shipping on Orders Over $500</span>
                <span class="mx-8">⚡ New Season Collection Available Now</span>
                <span class="mx-8">🛡️ CE Certified Protection</span>
                <span class="mx-8">🔥 Up to 25% Off Selected Items</span>
            </div>
        </div>

        <div class="px-4 lg:px-8">
            <div class="max-w-7xl mx-auto flex items-center justify-between py-4">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-primary-700 rounded-lg flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>
                    <div>
                        <span class="font-heading text-xl font-bold tracking-wider uppercase">Prestige</span>
                        <span class="block text-[10px] tracking-[0.3em] text-gold-400 uppercase -mt-1">Leathers</span>
                    </div>
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden lg:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="nav-link text-sm uppercase tracking-wider font-medium hover:text-primary-400 transition-colors duration-300 {{ request()->routeIs('home') ? 'text-primary-400' : 'text-gray-300' }}">Home</a>
                    <a href="{{ route('shop') }}" class="nav-link text-sm uppercase tracking-wider font-medium hover:text-primary-400 transition-colors duration-300 {{ request()->routeIs('shop') ? 'text-primary-400' : 'text-gray-300' }}">Shop</a>

                    {{-- Categories Dropdown --}}
                    <div class="relative group">
                        <button class="nav-link text-sm uppercase tracking-wider font-medium text-gray-300 hover:text-primary-400 transition-colors duration-300 flex items-center gap-1">
                            Categories
                            <i data-lucide="chevron-down" class="w-4 h-4 transform group-hover:rotate-180 transition-transform duration-300"></i>
                        </button>
                        <div class="absolute top-full left-0 mt-4 w-64 glass rounded-xl p-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            <a href="{{ route('shop', ['category' => 'racing-suits']) }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/5 transition-colors duration-200">
                                <i data-lucide="shield" class="w-5 h-5 text-primary-400"></i>
                                <span class="text-sm">Racing Suits</span>
                            </a>
                            <a href="{{ route('shop', ['category' => 'jackets']) }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/5 transition-colors duration-200">
                                <i data-lucide="shirt" class="w-5 h-5 text-primary-400"></i>
                                <span class="text-sm">Leather Jackets</span>
                            </a>
                            <a href="{{ route('shop', ['category' => 'pants']) }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/5 transition-colors duration-200">
                                <i data-lucide="scissors" class="w-5 h-5 text-primary-400"></i>
                                <span class="text-sm">Riding Pants</span>
                            </a>
                            <a href="{{ route('shop', ['category' => 'gloves']) }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/5 transition-colors duration-200">
                                <i data-lucide="hand-metal" class="w-5 h-5 text-primary-400"></i>
                                <span class="text-sm">Gloves</span>
                            </a>
                            <a href="{{ route('shop', ['category' => 'boots']) }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/5 transition-colors duration-200">
                                <i data-lucide="footprints" class="w-5 h-5 text-primary-400"></i>
                                <span class="text-sm">Boots</span>
                            </a>
                            <a href="{{ route('shop', ['category' => 'accessories']) }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white/5 transition-colors duration-200">
                                <i data-lucide="briefcase" class="w-5 h-5 text-primary-400"></i>
                                <span class="text-sm">Accessories</span>
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="nav-link text-sm uppercase tracking-wider font-medium hover:text-primary-400 transition-colors duration-300 {{ request()->routeIs('about') ? 'text-primary-400' : 'text-gray-300' }}">About</a>
                    <a href="{{ route('contact') }}" class="nav-link text-sm uppercase tracking-wider font-medium hover:text-primary-400 transition-colors duration-300 {{ request()->routeIs('contact') ? 'text-primary-400' : 'text-gray-300' }}">Contact</a>
                </div>

                {{-- Right Actions --}}
                <div class="flex items-center gap-4">
                    {{-- Search --}}
                    <button @click="searchOpen = !searchOpen" class="p-2 hover:text-primary-400 transition-colors duration-300">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </button>

                    {{-- Wishlist --}}
                    <a href="#" class="p-2 hover:text-primary-400 transition-colors duration-300 hidden lg:block relative">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                        <span class="absolute -top-1 -right-1 w-4 h-4 bg-primary-500 rounded-full text-[10px] flex items-center justify-center" x-show="wishlist.length > 0" x-text="wishlist.length"></span>
                    </a>

                    {{-- Cart --}}
                    <a href="{{ route('cart') }}" class="p-2 hover:text-primary-400 transition-colors duration-300 relative">
                        <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                        <span class="absolute -top-1 -right-1 w-5 h-5 bg-primary-500 rounded-full text-[10px] flex items-center justify-center font-bold"
                              x-show="cartCount > 0" x-text="cartCount"
                              x-transition:enter="transition ease-out duration-300"
                              x-transition:enter-start="transform scale-0"
                              x-transition:enter-end="transform scale-100"></span>
                    </a>

                    {{-- Mobile Menu Toggle --}}
                    <button @click="mobileMenu = !mobileMenu" class="lg:hidden p-2">
                        <div class="w-6 h-5 relative flex flex-col justify-between">
                            <span class="w-full h-0.5 bg-white transition-all duration-300" :class="mobileMenu ? 'rotate-45 translate-y-2' : ''"></span>
                            <span class="w-full h-0.5 bg-white transition-all duration-300" :class="mobileMenu ? 'opacity-0' : ''"></span>
                            <span class="w-full h-0.5 bg-white transition-all duration-300" :class="mobileMenu ? '-rotate-45 -translate-y-2' : ''"></span>
                        </div>
                    </button>
                </div>
            </div>

            {{-- Search Bar --}}
            <div x-show="searchOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 -translate-y-4" class="max-w-2xl mx-auto pb-4" @click.away="searchOpen = false">
                <div class="relative">
                    <input type="text" placeholder="Search for leather jackets, racing suits, gloves..." class="w-full bg-white/5 border border-white/10 rounded-full px-6 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-primary-500 transition-colors duration-300">
                    <button class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary-400 transition-colors">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div class="mobile-menu fixed inset-0 bg-dark-950/98 backdrop-blur-xl lg:hidden z-50" :class="mobileMenu ? 'active' : ''" @keydown.escape="mobileMenu = false">
            <div class="flex flex-col h-full p-6">
                <div class="flex justify-between items-center mb-12">
                    <span class="font-heading text-2xl font-bold tracking-wider uppercase">Menu</span>
                    <button @click="mobileMenu = false" class="p-2">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
                <div class="flex flex-col gap-6 flex-1">
                    <a href="{{ route('home') }}" class="font-heading text-3xl uppercase tracking-wider hover:text-primary-400 transition-colors">Home</a>
                    <a href="{{ route('shop') }}" class="font-heading text-3xl uppercase tracking-wider hover:text-primary-400 transition-colors">Shop</a>
                    <a href="{{ route('shop', ['category' => 'racing-suits']) }}" class="font-heading text-xl uppercase tracking-wider text-gray-400 hover:text-primary-400 transition-colors pl-4">Racing Suits</a>
                    <a href="{{ route('shop', ['category' => 'jackets']) }}" class="font-heading text-xl uppercase tracking-wider text-gray-400 hover:text-primary-400 transition-colors pl-4">Leather Jackets</a>
                    <a href="{{ route('shop', ['category' => 'gloves']) }}" class="font-heading text-xl uppercase tracking-wider text-gray-400 hover:text-primary-400 transition-colors pl-4">Gloves</a>
                    <a href="{{ route('about') }}" class="font-heading text-3xl uppercase tracking-wider hover:text-primary-400 transition-colors">About</a>
                    <a href="{{ route('contact') }}" class="font-heading text-3xl uppercase tracking-wider hover:text-primary-400 transition-colors">Contact</a>
                </div>
                <div class="flex gap-6 mt-auto">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i data-lucide="instagram" class="w-6 h-6"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i data-lucide="facebook" class="w-6 h-6"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i data-lucide="youtube" class="w-6 h-6"></i></a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Cart Sidebar --}}
    <div x-show="cartOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50" @click="cartOpen = false">
    </div>
    <div class="fixed right-0 top-0 h-full w-full max-w-md bg-dark-900 z-50 transform transition-transform duration-500 shadow-2xl" :class="cartOpen ? 'translate-x-0' : 'translate-x-full'">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-between p-6 border-b border-white/10">
                <h3 class="font-heading text-xl uppercase tracking-wider">Your Cart (<span x-text="cartCount"></span>)</h3>
                <button @click="cartOpen = false" class="p-2 hover:text-primary-400 transition-colors"><i data-lucide="x" class="w-6 h-6"></i></button>
            </div>
            <div class="flex-1 overflow-y-auto p-6" x-show="cart.length > 0">
                <template x-for="item in cart" :key="item.id + '-' + item.size + '-' + item.color">
                    <div class="flex gap-4 mb-6 pb-6 border-b border-white/5">
                        <div class="w-20 h-24 bg-dark-800 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i data-lucide="package" class="w-8 h-8 text-gray-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-medium text-sm" x-text="item.name"></h4>
                            <p class="text-xs text-gray-500 mt-1">Size: <span x-text="item.size"></span> | <span x-text="item.color"></span></p>
                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center gap-2">
                                    <button @click="updateQuantity(item, -1)" class="w-7 h-7 rounded-full border border-white/10 flex items-center justify-center hover:border-primary-500 transition-colors text-xs">-</button>
                                    <span class="text-sm w-6 text-center" x-text="item.quantity"></span>
                                    <button @click="updateQuantity(item, 1)" class="w-7 h-7 rounded-full border border-white/10 flex items-center justify-center hover:border-primary-500 transition-colors text-xs">+</button>
                                </div>
                                <span class="text-primary-400 font-semibold text-sm" x-text="'$' + (item.price * item.quantity).toFixed(2)"></span>
                            </div>
                        </div>
                        <button @click="removeFromCart(item)" class="p-1 text-gray-500 hover:text-primary-400 transition-colors self-start"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                    </div>
                </template>
            </div>
            <div class="p-6 text-center text-gray-500" x-show="cart.length === 0">
                <i data-lucide="shopping-bag" class="w-16 h-16 mx-auto mb-4 opacity-30"></i>
                <p class="font-heading text-lg uppercase">Your cart is empty</p>
                <p class="text-sm mt-2">Add some gear to get started</p>
            </div>
            <div class="p-6 border-t border-white/10" x-show="cart.length > 0">
                <div class="flex justify-between mb-2 text-sm"><span class="text-gray-400">Subtotal</span><span x-text="'$' + cartTotal.toFixed(2)"></span></div>
                <div class="flex justify-between mb-4 text-sm"><span class="text-gray-400">Shipping</span><span class="text-green-400" x-text="cartTotal >= 500 ? 'FREE' : '$29.99'"></span></div>
                <div class="flex justify-between mb-6 text-lg font-bold border-t border-white/10 pt-4"><span>Total</span><span class="gradient-text" x-text="'$' + (cartTotal >= 500 ? cartTotal : cartTotal + 29.99).toFixed(2)"></span></div>
                <a href="{{ route('cart') }}" class="block w-full bg-gradient-to-r from-primary-500 to-primary-700 text-white text-center py-4 rounded-xl font-heading uppercase tracking-wider hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic">
                    View Cart & Checkout
                </a>
            </div>
        </div>
    </div>

    {{-- Notification Toast --}}
    <div x-show="notification.show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 translate-y-8"
         class="fixed bottom-6 right-6 z-50 glass rounded-xl p-4 flex items-center gap-3 max-w-sm">
        <div class="w-10 h-10 bg-green-500/20 rounded-full flex items-center justify-center flex-shrink-0">
            <i data-lucide="check" class="w-5 h-5 text-green-400"></i>
        </div>
        <div>
            <p class="font-medium text-sm" x-text="notification.title"></p>
            <p class="text-xs text-gray-400" x-text="notification.message"></p>
        </div>
    </div>

    {{-- Main Content --}}
    <main class="page-transition">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-dark-900 border-t border-white/5 relative overflow-hidden">
        {{-- Newsletter Section --}}
        <div class="border-b border-white/5">
            <div class="max-w-7xl mx-auto px-4 lg:px-8 py-16">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8" data-aos="fade-up">
                    <div class="text-center lg:text-left">
                        <h3 class="font-heading text-3xl lg:text-4xl uppercase tracking-wider mb-2">Join the <span class="gradient-text">Prestige</span> Club</h3>
                        <p class="text-gray-400">Get exclusive deals, early access to new collections, and rider content.</p>
                    </div>
                    <div class="flex w-full max-w-md">
                        <input type="email" placeholder="Enter your email" class="flex-1 bg-white/5 border border-white/10 rounded-l-xl px-6 py-4 text-white placeholder-gray-500 focus:outline-none focus:border-primary-500 transition-colors">
                        <button class="bg-gradient-to-r from-primary-500 to-primary-700 text-white px-8 py-4 rounded-r-xl font-heading uppercase tracking-wider hover:from-primary-600 hover:to-primary-800 transition-all duration-300 whitespace-nowrap">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                {{-- Brand --}}
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-primary-700 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                        </div>
                        <div>
                            <span class="font-heading text-lg font-bold tracking-wider uppercase">Prestige</span>
                            <span class="block text-[9px] tracking-[0.3em] text-gold-400 uppercase -mt-1">Leathers</span>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">Crafting premium leather gear for riders who demand the ultimate fusion of protection, performance, and style.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 glass-light rounded-full flex items-center justify-center hover:bg-primary-500/20 hover:border-primary-500/50 transition-all duration-300">
                            <i data-lucide="instagram" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 glass-light rounded-full flex items-center justify-center hover:bg-primary-500/20 hover:border-primary-500/50 transition-all duration-300">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 glass-light rounded-full flex items-center justify-center hover:bg-primary-500/20 hover:border-primary-500/50 transition-all duration-300">
                            <i data-lucide="youtube" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 glass-light rounded-full flex items-center justify-center hover:bg-primary-500/20 hover:border-primary-500/50 transition-all duration-300">
                            <i data-lucide="twitter" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4 class="font-heading text-sm uppercase tracking-widest text-gold-400 mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('shop') }}" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>All Products</a></li>
                        <li><a href="{{ route('shop', ['category' => 'racing-suits']) }}" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>Racing Suits</a></li>
                        <li><a href="{{ route('shop', ['category' => 'jackets']) }}" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>Leather Jackets</a></li>
                        <li><a href="{{ route('shop', ['category' => 'gloves']) }}" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>Gloves</a></li>
                        <li><a href="{{ route('shop', ['category' => 'boots']) }}" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>Boots</a></li>
                    </ul>
                </div>

                {{-- Support --}}
                <div>
                    <h4 class="font-heading text-sm uppercase tracking-widest text-gold-400 mb-6">Support</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>Size Guide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>Shipping & Returns</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>Care Instructions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center gap-2 group"><span class="w-0 h-px bg-primary-500 group-hover:w-4 transition-all duration-300"></span>FAQ</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="font-heading text-sm uppercase tracking-widest text-gold-400 mb-6">Get in Touch</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i data-lucide="map-pin" class="w-4 h-4 text-primary-400 mt-1 flex-shrink-0"></i>
                            <span class="text-gray-400 text-sm">123 Rider's Avenue, Milan, Italy 20121</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="phone" class="w-4 h-4 text-primary-400 flex-shrink-0"></i>
                            <span class="text-gray-400 text-sm">+39 02 1234 5678</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="mail" class="w-4 h-4 text-primary-400 flex-shrink-0"></i>
                            <span class="text-gray-400 text-sm">info&#64;prestigeleathers.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="clock" class="w-4 h-4 text-primary-400 flex-shrink-0"></i>
                            <span class="text-gray-400 text-sm">Mon - Fri: 9AM - 6PM CET</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-white/5">
            <div class="max-w-7xl mx-auto px-4 lg:px-8 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-xs">&copy; {{ date('Y') }} Prestige Leathers. All rights reserved. Crafted with passion for riders.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="text-gray-500 hover:text-gray-300 text-xs transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 text-xs transition-colors">Terms of Service</a>
                    <div class="flex items-center gap-2">
                        <svg class="w-8 h-5" viewBox="0 0 38 24" fill="none"><rect width="38" height="24" rx="4" fill="#1a1a2e"/><text x="19" y="15" text-anchor="middle" fill="#fff" font-size="7">VISA</text></svg>
                        <svg class="w-8 h-5" viewBox="0 0 38 24" fill="none"><rect width="38" height="24" rx="4" fill="#1a1a2e"/><text x="19" y="15" text-anchor="middle" fill="#fff" font-size="6">MC</text></svg>
                        <svg class="w-8 h-5" viewBox="0 0 38 24" fill="none"><rect width="38" height="24" rx="4" fill="#1a1a2e"/><text x="19" y="15" text-anchor="middle" fill="#fff" font-size="5">AMEX</text></svg>
                    </div>
                </div>
            </div>
        </div>

        {{-- Decorative element --}}
        <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-primary-500/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-60 h-60 bg-gold-500/5 rounded-full blur-3xl"></div>
    </footer>

    {{-- Back to Top --}}
    <button id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 bg-primary-500 rounded-full flex items-center justify-center shadow-lg shadow-primary-500/30 text-white opacity-0 invisible transition-all duration-300 hover:bg-primary-600 z-40 transform translate-y-4">
        <i data-lucide="arrow-up" class="w-5 h-5"></i>
    </button>

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- GSAP --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    {{-- Swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Store + Core JS --}}
    <script>
        // Alpine Store
        function store() {
            return {
                cart: JSON.parse(localStorage.getItem('prestige_cart') || '[]'),
                wishlist: JSON.parse(localStorage.getItem('prestige_wishlist') || '[]'),
                cartOpen: false,
                notification: { show: false, title: '', message: '' },

                get cartCount() {
                    return this.cart.reduce((sum, item) => sum + item.quantity, 0);
                },

                get cartTotal() {
                    return this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
                },

                init() {
                    this.$watch('cart', (val) => localStorage.setItem('prestige_cart', JSON.stringify(val)));
                    this.$watch('wishlist', (val) => localStorage.setItem('prestige_wishlist', JSON.stringify(val)));
                },

                addToCart(product, size, color, quantity = 1) {
                    const existing = this.cart.find(i => i.id === product.id && i.size === size && i.color === color);
                    if (existing) {
                        existing.quantity += quantity;
                    } else {
                        this.cart.push({ ...product, size, color, quantity });
                    }
                    this.cart = [...this.cart];
                    this.showNotification('Added to Cart', product.name + ' has been added to your cart.');
                    this.cartOpen = true;
                },

                removeFromCart(item) {
                    this.cart = this.cart.filter(i => !(i.id === item.id && i.size === item.size && i.color === item.color));
                },

                updateQuantity(item, change) {
                    const found = this.cart.find(i => i.id === item.id && i.size === item.size && i.color === item.color);
                    if (found) {
                        found.quantity += change;
                        if (found.quantity <= 0) {
                            this.removeFromCart(item);
                        } else {
                            this.cart = [...this.cart];
                        }
                    }
                },

                toggleWishlist(productId) {
                    const idx = this.wishlist.indexOf(productId);
                    if (idx > -1) {
                        this.wishlist.splice(idx, 1);
                    } else {
                        this.wishlist.push(productId);
                    }
                    this.wishlist = [...this.wishlist];
                },

                isInWishlist(productId) {
                    return this.wishlist.includes(productId);
                },

                showNotification(title, message) {
                    this.notification = { show: true, title, message };
                    setTimeout(() => { this.notification.show = false; }, 3000);
                },

                clearCart() {
                    this.cart = [];
                }
            }
        }

        // DOM Ready
        document.addEventListener('DOMContentLoaded', () => {
            // Loader
            setTimeout(() => {
                document.getElementById('loader').classList.add('loaded');
            }, 2800);

            // AOS
            AOS.init({ duration: 800, easing: 'ease-out-cubic', once: true, offset: 50 });

            // Lucide Icons
            lucide.createIcons();

            // Navbar Scroll
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 80) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });

            // Back to Top
            const backToTop = document.getElementById('backToTop');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 600) {
                    backToTop.classList.remove('opacity-0', 'invisible', 'translate-y-4');
                } else {
                    backToTop.classList.add('opacity-0', 'invisible', 'translate-y-4');
                }
            });
            backToTop.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            // Custom Cursor
            const cursor = document.getElementById('customCursor');
            if (cursor && window.innerWidth >= 1024) {
                document.addEventListener('mousemove', (e) => {
                    cursor.style.left = e.clientX - 10 + 'px';
                    cursor.style.top = e.clientY - 10 + 'px';
                });
                document.querySelectorAll('a, button, .card-hover').forEach(el => {
                    el.addEventListener('mouseenter', () => cursor.classList.add('cursor-hover'));
                    el.addEventListener('mouseleave', () => cursor.classList.remove('cursor-hover'));
                });
            }

            // GSAP Animations
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

                // Reveal animations
                gsap.utils.toArray('.gsap-reveal').forEach(el => {
                    gsap.from(el, {
                        y: 60, opacity: 0, duration: 1, ease: 'power3.out',
                        scrollTrigger: { trigger: el, start: 'top 85%', toggleActions: 'play none none none' }
                    });
                });

                // Stagger animations
                gsap.utils.toArray('.gsap-stagger').forEach(container => {
                    const children = container.children;
                    gsap.from(children, {
                        y: 40, opacity: 0, duration: 0.6, stagger: 0.15, ease: 'power2.out',
                        scrollTrigger: { trigger: container, start: 'top 80%', toggleActions: 'play none none none' }
                    });
                });
            }

            // Re-init Lucide after Alpine renders
            setTimeout(() => lucide.createIcons(), 500);
            setTimeout(() => lucide.createIcons(), 2000);
        });
    </script>

    @yield('scripts')
</body>
</html>
