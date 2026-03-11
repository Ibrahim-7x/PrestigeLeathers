@extends('layouts.app')
@section('title', 'Prestige Leathers | Premium Leather Gear & Biker Suits')

@section('styles')
<style>
    /* Hero Video/Image overlay */
    .hero-overlay {
        background: linear-gradient(135deg, rgba(10,10,10,0.85) 0%, rgba(10,10,10,0.4) 40%, rgba(10,10,10,0.6) 70%, rgba(10,10,10,0.9) 100%);
    }
    .hero-bg {
        animation: slowZoom 20s ease-in-out infinite alternate;
    }
    @keyframes slowZoom {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
    }

    /* Category card image */
    .category-img {
        transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94), filter 0.5s ease;
    }
    .group:hover .category-img {
        transform: scale(1.15);
        filter: brightness(0.6);
    }

    /* Product card image */
    .product-img {
        transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .group:hover .product-img {
        transform: scale(1.08);
    }

    /* Lifestyle gallery hover */
    .gallery-item img {
        transition: transform 0.8s ease, filter 0.5s ease;
    }
    .gallery-item:hover img {
        transform: scale(1.1);
        filter: brightness(1.1);
    }

    /* Video play button pulse */
    .play-pulse {
        animation: playPulse 2s ease-in-out infinite;
    }
    @keyframes playPulse {
        0%, 100% { box-shadow: 0 0 0 0 rgba(230, 57, 70, 0.4); }
        50% { box-shadow: 0 0 0 20px rgba(230, 57, 70, 0); }
    }

    /* Newsletter glow */
    .newsletter-glow {
        background: radial-gradient(ellipse at center, rgba(230, 57, 70, 0.15) 0%, transparent 70%);
    }

    /* Testimonial card */
    .testimonial-card {
        background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%);
    }

    /* Feature icon glow */
    .feature-icon-glow {
        filter: drop-shadow(0 0 8px rgba(230, 57, 70, 0.3));
    }
</style>
@endsection

@section('content')
{{-- ==================== HERO SECTION WITH BACKGROUND IMAGE ==================== --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1558981806-ec527fa84c39?w=1920&h=1080&fit=crop"
             alt="Motorcycle rider on open road"
             class="hero-bg w-full h-full object-cover">
    </div>
    {{-- Overlay --}}
    <div class="absolute inset-0 hero-overlay"></div>
    {{-- Noise texture --}}
    <div class="absolute inset-0 opacity-[0.04]" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=\'0 0 256 256\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'noise\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.9\' numOctaves=\'4\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23noise)\'/%3E%3C/svg%3E');"></div>

    {{-- Floating Particles --}}
    <div class="absolute inset-0 overflow-hidden">
        @for ($i = 0; $i < 15; $i++)
        <div class="particle" style="
            width: {{ rand(2, 5) }}px; height: {{ rand(2, 5) }}px;
            left: {{ rand(0, 100) }}%; top: {{ rand(0, 100) }}%;
            animation-delay: {{ $i * 0.4 }}s;
            animation-duration: {{ rand(5, 9) }}s;
            opacity: {{ rand(2, 5) / 10 }};
        "></div>
        @endfor
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 lg:px-8 w-full">
        <div class="grid lg:grid-cols-2 gap-12 items-center min-h-screen py-32">
            {{-- Left Content --}}
            <div>
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 glass rounded-full px-6 py-2 mb-8" data-aos="fade-right" data-aos-delay="200">
                    <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                    <span class="text-xs uppercase tracking-widest text-gray-300">New 2026 Collection Available</span>
                </div>

                {{-- Heading --}}
                <h1 class="font-heading text-5xl md:text-7xl lg:text-8xl font-bold uppercase leading-[0.9] mb-6" data-aos="fade-right" data-aos-delay="400">
                    <span class="block text-white">Born to</span>
                    <span class="block gradient-text mt-2">Ride</span>
                    <span class="block text-white text-3xl md:text-4xl lg:text-5xl mt-3 font-light tracking-widest">in Prestige</span>
                </h1>

                {{-- Subtext --}}
                <p class="text-gray-400 text-lg md:text-xl max-w-lg mb-10 leading-relaxed" data-aos="fade-right" data-aos-delay="600">
                    Premium leather gear engineered for riders who demand the ultimate fusion of
                    <span class="text-white font-medium">protection</span>,
                    <span class="text-white font-medium">performance</span>, and
                    <span class="text-white font-medium">style</span>.
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row items-start gap-4" data-aos="fade-right" data-aos-delay="800">
                    <a href="{{ route('shop') }}" class="group relative inline-flex items-center gap-3 bg-gradient-to-r from-primary-500 to-primary-700 text-white px-10 py-4 rounded-xl font-heading uppercase tracking-wider text-lg hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic shadow-lg shadow-primary-500/25">
                        Shop Collection
                        <i data-lucide="arrow-right" class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="{{ route('about') }}" class="group inline-flex items-center gap-3 glass text-white px-10 py-4 rounded-xl font-heading uppercase tracking-wider text-lg hover:bg-white/10 transition-all duration-300">
                        <div class="w-10 h-10 rounded-full border-2 border-primary-400 flex items-center justify-center play-pulse">
                            <i data-lucide="play" class="w-4 h-4 text-primary-400 ml-0.5"></i>
                        </div>
                        Our Story
                    </a>
                </div>

                {{-- Trust Badges --}}
                <div class="flex items-center gap-6 mt-12 flex-wrap" data-aos="fade-right" data-aos-delay="1000">
                    <div class="flex items-center gap-2">
                        <i data-lucide="shield-check" class="w-5 h-5 text-primary-400 feature-icon-glow"></i>
                        <span class="text-xs uppercase tracking-wider text-gray-400">CE Certified</span>
                    </div>
                    <div class="w-px h-6 bg-white/10 hidden sm:block"></div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="award" class="w-5 h-5 text-gold-400 feature-icon-glow"></i>
                        <span class="text-xs uppercase tracking-wider text-gray-400">Premium Leather</span>
                    </div>
                    <div class="w-px h-6 bg-white/10 hidden sm:block"></div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="truck" class="w-5 h-5 text-green-400 feature-icon-glow"></i>
                        <span class="text-xs uppercase tracking-wider text-gray-400">Free Shipping</span>
                    </div>
                </div>
            </div>

            {{-- Right - Featured Product Showcase --}}
            <div class="hidden lg:block" data-aos="fade-left" data-aos-delay="600">
                <div class="relative">
                    {{-- Main featured image --}}
                    <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl shadow-black/50">
                        <img src="https://images.unsplash.com/photo-1558981806-ec527fa84c39?w=700&h=900&fit=crop&crop=center"
                             alt="Premium Leather Gear"
                             class="w-full h-[550px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark-950 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-block bg-primary-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-3">Bestseller</span>
                            <h3 class="font-heading text-2xl font-bold uppercase tracking-wider">Apex Pro Racing Suit</h3>
                            <p class="text-gray-400 text-sm mt-1">Starting from $899.99</p>
                        </div>
                    </div>

                    {{-- Floating stats card --}}
                    <div class="absolute -bottom-6 -left-6 glass rounded-xl p-4 animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-primary-500/20 rounded-full flex items-center justify-center">
                                <i data-lucide="users" class="w-6 h-6 text-primary-400"></i>
                            </div>
                            <div>
                                <div class="font-heading text-xl font-bold">50K+</div>
                                <div class="text-xs text-gray-400 uppercase tracking-wider">Riders Trust Us</div>
                            </div>
                        </div>
                    </div>

                    {{-- Quality badge --}}
                    <div class="absolute -top-4 -right-4 glass rounded-xl p-4 animate-float" style="animation-delay: 2s;">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gold-500/20 rounded-full flex items-center justify-center">
                                <i data-lucide="gem" class="w-6 h-6 text-gold-400"></i>
                            </div>
                            <div>
                                <div class="font-heading text-xl font-bold">25yr</div>
                                <div class="text-xs text-gray-400 uppercase tracking-wider">Craftsmanship</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce z-10">
        <span class="text-xs uppercase tracking-widest text-gray-500">Scroll</span>
        <div class="w-6 h-10 rounded-full border-2 border-gray-600 flex justify-center pt-2">
            <div class="w-1 h-3 bg-primary-500 rounded-full animate-pulse"></div>
        </div>
    </div>
</section>

{{-- ==================== BRAND MARQUEE ==================== --}}
<section class="py-6 border-y border-white/5 bg-dark-900/50 overflow-hidden">
    <div class="marquee-track animate-marquee">
        @for ($i = 0; $i < 4; $i++)
        <span class="font-heading text-4xl md:text-5xl font-bold uppercase tracking-widest text-white/5 mx-8 whitespace-nowrap">Prestige Leathers</span>
        <span class="font-heading text-4xl md:text-5xl font-bold uppercase tracking-widest gradient-text mx-8 whitespace-nowrap opacity-20">&bull;</span>
        <span class="font-heading text-4xl md:text-5xl font-bold uppercase tracking-widest text-white/5 mx-8 whitespace-nowrap">Ride with Power</span>
        <span class="font-heading text-4xl md:text-5xl font-bold uppercase tracking-widest gradient-text mx-8 whitespace-nowrap opacity-20">&bull;</span>
        @endfor
    </div>
</section>

{{-- ==================== CATEGORIES WITH IMAGES ==================== --}}
<section class="py-20 lg:py-32 relative">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Categories</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Gear for Every <span class="gradient-text">Ride</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-xl mx-auto">From track-ready racing suits to everyday riding essentials. Find your perfect gear.</p>
            <div class="w-20 h-1 bg-gradient-to-r from-primary-500 to-gold-500 mx-auto mt-6 rounded-full"></div>
        </div>

        {{-- Category Grid - Bento Style --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 gsap-stagger">
            @php
                $categoryIcons = [
                    'suit' => 'shield',
                    'jacket' => 'shirt',
                    'pants' => 'scissors',
                    'gloves' => 'hand-metal',
                    'boots' => 'footprints',
                    'accessories' => 'briefcase',
                ];
                $catSizes = [
                    0 => 'lg:col-span-2 lg:row-span-2 h-80 lg:h-full',
                    1 => 'h-72 lg:h-auto',
                    2 => 'h-72 lg:h-auto',
                    3 => 'h-72 lg:h-auto',
                    4 => 'h-72 lg:h-auto',
                    5 => 'lg:col-span-2 h-72 lg:h-64',
                ];
            @endphp
            @foreach ($categories as $index => $category)
            <a href="{{ route('shop', ['category' => $category['slug']]) }}"
               class="group relative overflow-hidden rounded-2xl cursor-pointer {{ $catSizes[$index] ?? 'h-72' }}" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                {{-- Background Image --}}
                <img src="{{ $category['image'] }}"
                     alt="{{ $category['name'] }}"
                     class="category-img absolute inset-0 w-full h-full object-cover" loading="lazy">
                {{-- Dark Overlay --}}
                <div class="absolute inset-0 bg-gradient-to-t from-dark-950 via-dark-950/40 to-transparent group-hover:via-dark-950/50 transition-all duration-500"></div>
                {{-- Hover glow --}}
                <div class="absolute inset-0 bg-gradient-to-t from-primary-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                {{-- Content --}}
                <div class="absolute inset-0 flex flex-col justify-end p-6 lg:p-8 z-10">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 glass-light rounded-lg flex items-center justify-center transform group-hover:rotate-12 group-hover:scale-110 transition-all duration-500">
                            <i data-lucide="{{ $categoryIcons[$category['icon']] ?? 'package' }}" class="w-5 h-5 text-primary-400"></i>
                        </div>
                        <span class="text-xs uppercase tracking-widest text-primary-400/80">{{ $category['count'] }} Products</span>
                    </div>
                    <h3 class="font-heading text-2xl {{ $index === 0 ? 'lg:text-4xl' : 'lg:text-2xl' }} font-bold uppercase tracking-wider group-hover:text-primary-400 transition-colors duration-300">{{ $category['name'] }}</h3>
                    <p class="text-gray-400 text-sm mt-1 {{ $index === 0 ? 'lg:text-base' : '' }}">{{ $category['description'] }}</p>
                    <div class="flex items-center gap-2 mt-4 text-primary-400 text-sm font-medium opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                        Explore Collection <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ==================== FEATURED PRODUCTS WITH IMAGES ==================== --}}
<section class="py-20 lg:py-32 bg-dark-900/30 relative overflow-hidden">
    {{-- Decorative --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary-500/5 rounded-full blur-[128px]"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-gold-500/5 rounded-full blur-[128px]"></div>

    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-16 gap-6" data-aos="fade-up">
            <div>
                <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Featured</span>
                <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                    Best <span class="gradient-text">Sellers</span>
                </h2>
                <p class="text-gray-500 mt-3 max-w-lg">Handpicked favorites trusted by professional riders worldwide.</p>
            </div>
            <a href="{{ route('shop') }}" class="group inline-flex items-center gap-2 text-primary-400 font-medium hover:text-primary-300 transition-colors">
                View All Products
                <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        {{-- Products Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 gsap-stagger">
            @foreach (array_slice($products, 0, 8) as $product)
            <div class="group card-hover" x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false">
                <div class="bg-dark-800/50 rounded-2xl overflow-hidden border border-white/5 hover:border-primary-500/30 transition-colors duration-500">
                    {{-- Image --}}
                    <div class="relative overflow-hidden aspect-[3/4] bg-dark-900">
                        <img src="{{ $product['image'] }}"
                             alt="{{ $product['name'] }}"
                             class="product-img w-full h-full object-cover" loading="lazy">

                        {{-- Badge --}}
                        @if ($product['badge'])
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider z-10
                            {{ $product['badge'] === 'BESTSELLER' ? 'badge-bestseller' : '' }}
                            {{ $product['badge'] === 'NEW' ? 'badge-new' : '' }}
                            {{ $product['badge'] === 'SALE' ? 'badge-sale' : '' }}
                            {{ $product['badge'] === 'PREMIUM' ? 'badge-premium' : '' }}
                        ">
                            {{ $product['badge'] }}
                        </div>
                        @endif

                        {{-- Quick Actions --}}
                        <div class="absolute top-4 right-4 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transform translate-x-4 group-hover:translate-x-0 transition-all duration-300 z-10">
                            <button @click.prevent="toggleWishlist({{ $product['id'] }})" class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-primary-500/20 transition-colors">
                                <i data-lucide="heart" class="w-4 h-4" :class="isInWishlist({{ $product['id'] }}) ? 'fill-primary-400 text-primary-400' : ''"></i>
                            </button>
                            <a href="{{ route('product', $product['slug']) }}" class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-primary-500/20 transition-colors">
                                <i data-lucide="eye" class="w-4 h-4"></i>
                            </a>
                        </div>

                        {{-- Add to Cart Quick --}}
                        <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 z-10">
                            <button @click.prevent="addToCart({id: {{ $product['id'] }}, name: '{{ $product['name'] }}', price: {{ $product['price'] }}}, '{{ $product['sizes'][1] ?? $product['sizes'][0] }}', '{{ $product['colors'][0]['name'] }}')"
                                    class="w-full glass py-3 rounded-xl text-sm font-medium uppercase tracking-wider hover:bg-primary-500 transition-colors duration-300 btn-magnetic">
                                Add to Cart
                            </button>
                        </div>

                        {{-- Bottom gradient --}}
                        <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-dark-900/80 to-transparent pointer-events-none"></div>
                    </div>

                    {{-- Info --}}
                    <div class="p-5">
                        <div class="flex items-center gap-1 mb-2">
                            @for ($s = 0; $s < 5; $s++)
                            <svg class="w-3.5 h-3.5 {{ $s < floor($product['rating']) ? 'text-gold-400' : 'text-gray-700' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            @endfor
                            <span class="text-xs text-gray-500 ml-1">({{ $product['reviews_count'] }})</span>
                        </div>

                        <a href="{{ route('product', $product['slug']) }}" class="block">
                            <h3 class="font-heading text-base font-semibold uppercase tracking-wider group-hover:text-primary-400 transition-colors duration-300 line-clamp-1">{{ $product['name'] }}</h3>
                        </a>
                        <p class="text-gray-500 text-xs mt-1">{{ $product['category_name'] }}</p>

                        <div class="flex items-center gap-3 mt-3">
                            <span class="text-lg font-bold text-white">${{ number_format($product['price'], 2) }}</span>
                            @if ($product['original_price'])
                            <span class="text-sm text-gray-500 line-through">${{ number_format($product['original_price'], 2) }}</span>
                            <span class="text-xs text-green-400 font-medium">-{{ round((1 - $product['price'] / $product['original_price']) * 100) }}%</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- View All CTA --}}
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('shop') }}" class="inline-flex items-center gap-3 glass px-10 py-4 rounded-xl font-heading uppercase tracking-wider hover:bg-white/10 transition-all duration-300 btn-magnetic">
                View All Products
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
    </div>
</section>

{{-- ==================== LIFESTYLE FULL-WIDTH BANNER ==================== --}}
<section class="relative py-0 overflow-hidden" data-aos="fade-up">
    <div class="grid lg:grid-cols-2 min-h-[600px]">
        {{-- Image Side --}}
        <div class="relative h-80 lg:h-auto overflow-hidden">
            <img src="https://images.unsplash.com/photo-1449426468159-d96dbf08f19f?w=1000&h=700&fit=crop"
                 alt="Motorcycle craftsmanship"
                 class="w-full h-full object-cover"
                 loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-dark-950 hidden lg:block"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-dark-950 to-transparent lg:hidden"></div>
        </div>

        {{-- Content Side --}}
        <div class="relative bg-dark-950 flex items-center">
            <div class="absolute inset-0 opacity-30">
                <div class="absolute inset-0" style="background: radial-gradient(circle at 0% 50%, rgba(230, 57, 70, 0.2) 0%, transparent 60%);"></div>
            </div>
            <div class="relative z-10 p-8 lg:p-16 xl:p-20 max-w-xl">
                <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-6">Craftsmanship</span>
                <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider leading-tight mb-6">
                    Where Safety Meets <span class="gradient-text">Art</span>
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed mb-8">
                    Every piece of Prestige gear is handcrafted by master artisans using the finest leathers
                    sourced from premium Italian tanneries. From cutting to stitching, each step follows
                    generations of expertise refined for the modern rider.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="glass rounded-xl p-5 text-center">
                        <div class="font-heading text-2xl font-bold gradient-text mb-1">100%</div>
                        <div class="text-xs uppercase tracking-widest text-gray-500">Premium Leather</div>
                    </div>
                    <div class="glass rounded-xl p-5 text-center">
                        <div class="font-heading text-2xl font-bold gradient-text mb-1">72hr</div>
                        <div class="text-xs uppercase tracking-widest text-gray-500">Per Suit</div>
                    </div>
                    <div class="glass rounded-xl p-5 text-center">
                        <div class="font-heading text-2xl font-bold gradient-text mb-1">2mm</div>
                        <div class="text-xs uppercase tracking-widest text-gray-500">Precision</div>
                    </div>
                    <div class="glass rounded-xl p-5 text-center">
                        <div class="font-heading text-2xl font-bold gradient-text mb-1">CE L2</div>
                        <div class="text-xs uppercase tracking-widest text-gray-500">Certified</div>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="group inline-flex items-center gap-2 text-primary-400 font-heading uppercase tracking-wider hover:text-primary-300 transition-colors">
                    Learn Our Story
                    <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ==================== SALE PRODUCTS ==================== --}}
@if (count($saleProducts) > 0)
<section class="py-20 lg:py-32 relative overflow-hidden">
    {{-- Background decoration --}}
    <div class="absolute inset-0">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-green-500/[0.03] rounded-full blur-[150px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-green-400 font-medium mb-4">Limited Time</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Special <span class="gradient-text">Deals</span>
            </h2>
            <p class="text-gray-500 mt-4">Grab these exclusive offers before they're gone.</p>
            <div class="w-20 h-1 bg-gradient-to-r from-green-500 to-primary-500 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 gsap-stagger">
            @foreach ($saleProducts as $product)
            <div class="group card-hover">
                <div class="bg-dark-800/50 rounded-2xl overflow-hidden border border-white/5 hover:border-green-500/30 transition-colors duration-500 relative">
                    {{-- Sale Ribbon --}}
                    <div class="absolute top-0 right-0 z-10">
                        <div class="bg-gradient-to-l from-green-500 to-green-600 text-white text-xs font-bold px-4 py-1.5 rounded-bl-xl">
                            -{{ round((1 - $product['price'] / $product['original_price']) * 100) }}% OFF
                        </div>
                    </div>

                    <div class="aspect-[3/4] overflow-hidden bg-dark-900">
                        <img src="{{ $product['image'] }}"
                             alt="{{ $product['name'] }}"
                             class="product-img w-full h-full object-cover" loading="lazy">
                    </div>

                    <div class="p-5">
                        <a href="{{ route('product', $product['slug']) }}">
                            <h3 class="font-heading text-base font-semibold uppercase tracking-wider group-hover:text-green-400 transition-colors duration-300 line-clamp-1">{{ $product['name'] }}</h3>
                        </a>
                        <div class="flex items-center gap-3 mt-3">
                            <span class="text-lg font-bold text-green-400">${{ number_format($product['price'], 2) }}</span>
                            <span class="text-sm text-gray-500 line-through">${{ number_format($product['original_price'], 2) }}</span>
                        </div>
                        <button @click="addToCart({id: {{ $product['id'] }}, name: '{{ $product['name'] }}', price: {{ $product['price'] }}}, '{{ $product['sizes'][1] ?? $product['sizes'][0] }}', '{{ $product['colors'][0]['name'] }}')"
                                class="w-full mt-4 py-3 rounded-xl text-sm font-medium uppercase tracking-wider border border-green-500/30 text-green-400 hover:bg-green-500 hover:text-white transition-all duration-300">
                            Grab Deal
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ==================== LIFESTYLE GALLERY ==================== --}}
<section class="py-20 lg:py-32 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Lifestyle</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                The Prestige <span class="gradient-text">Life</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-xl mx-auto">Captured moments from riders who live the Prestige lifestyle.</p>
        </div>

        {{-- Masonry-style gallery --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
            <div class="gallery-item col-span-2 row-span-2 rounded-2xl overflow-hidden relative cursor-pointer group" data-aos="fade-up" data-aos-delay="0">
                <img src="https://images.unsplash.com/photo-1558981285-6f0c94958bb6?w=800&h=800&fit=crop"
                     alt="Rider on mountain road"
                     class="w-full h-full object-cover min-h-[300px] md:min-h-[500px]" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                    <span class="text-sm font-heading uppercase tracking-wider text-white">Mountain Pass</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden relative cursor-pointer group" data-aos="fade-up" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1568772585407-9361f9bf3a87?w=400&h=400&fit=crop"
                     alt="Close-up of leather jacket detail"
                     class="w-full h-48 md:h-60 object-cover" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                    <span class="text-xs font-heading uppercase tracking-wider text-white">Detail Shots</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden relative cursor-pointer group" data-aos="fade-up" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1609630875171-b1321377ee65?w=400&h=400&fit=crop"
                     alt="Motorcycle parked at sunset"
                     class="w-full h-48 md:h-60 object-cover" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                    <span class="text-xs font-heading uppercase tracking-wider text-white">Golden Hour</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden relative cursor-pointer group" data-aos="fade-up" data-aos-delay="150">
                <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?w=400&h=400&fit=crop"
                     alt="Group of riders"
                     class="w-full h-48 md:h-60 object-cover" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                    <span class="text-xs font-heading uppercase tracking-wider text-white">Crew Rides</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden relative cursor-pointer group" data-aos="fade-up" data-aos-delay="250">
                <img src="https://images.unsplash.com/photo-1558980394-4c7c9299fe96?w=400&h=400&fit=crop"
                     alt="Biker gear close-up"
                     class="w-full h-48 md:h-60 object-cover" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute bottom-3 left-3 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                    <span class="text-xs font-heading uppercase tracking-wider text-white">Gear Up</span>
                </div>
            </div>
        </div>

        {{-- Instagram CTA --}}
        <div class="text-center mt-10" data-aos="fade-up">
            <a href="#" class="inline-flex items-center gap-3 glass px-8 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all duration-300">
                <i data-lucide="instagram" class="w-5 h-5 text-primary-400"></i>
                Follow @PrestigeLeathers
            </a>
        </div>
    </div>
</section>

{{-- ==================== FEATURES BAR ==================== --}}
<section class="py-20 bg-dark-900/50 border-y border-white/5 relative overflow-hidden">
    {{-- Background pattern --}}
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="max-w-7xl mx-auto px-4 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 gsap-stagger">
            <div class="text-center group" data-aos="fade-up" data-aos-delay="0">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-primary-500/10 to-primary-500/5 rounded-2xl flex items-center justify-center mb-5 group-hover:from-primary-500/20 group-hover:to-primary-500/10 border border-primary-500/10 group-hover:border-primary-500/30 transition-all duration-500 transform group-hover:scale-110 group-hover:-rotate-3">
                    <i data-lucide="truck" class="w-8 h-8 text-primary-400 feature-icon-glow"></i>
                </div>
                <h4 class="font-heading text-lg uppercase tracking-wider mb-2">Free Shipping</h4>
                <p class="text-gray-500 text-sm">On orders over $500 worldwide</p>
            </div>
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-gold-500/10 to-gold-500/5 rounded-2xl flex items-center justify-center mb-5 group-hover:from-gold-500/20 group-hover:to-gold-500/10 border border-gold-500/10 group-hover:border-gold-500/30 transition-all duration-500 transform group-hover:scale-110 group-hover:rotate-3">
                    <i data-lucide="shield-check" class="w-8 h-8 text-gold-400 feature-icon-glow"></i>
                </div>
                <h4 class="font-heading text-lg uppercase tracking-wider mb-2">CE Certified</h4>
                <p class="text-gray-500 text-sm">Level 2 armor in all suits</p>
            </div>
            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-green-500/10 to-green-500/5 rounded-2xl flex items-center justify-center mb-5 group-hover:from-green-500/20 group-hover:to-green-500/10 border border-green-500/10 group-hover:border-green-500/30 transition-all duration-500 transform group-hover:scale-110 group-hover:-rotate-3">
                    <i data-lucide="refresh-cw" class="w-8 h-8 text-green-400 feature-icon-glow"></i>
                </div>
                <h4 class="font-heading text-lg uppercase tracking-wider mb-2">Easy Returns</h4>
                <p class="text-gray-500 text-sm">30-day hassle-free returns</p>
            </div>
            <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-blue-500/10 to-blue-500/5 rounded-2xl flex items-center justify-center mb-5 group-hover:from-blue-500/20 group-hover:to-blue-500/10 border border-blue-500/10 group-hover:border-blue-500/30 transition-all duration-500 transform group-hover:scale-110 group-hover:rotate-3">
                    <i data-lucide="headphones" class="w-8 h-8 text-blue-400 feature-icon-glow"></i>
                </div>
                <h4 class="font-heading text-lg uppercase tracking-wider mb-2">24/7 Support</h4>
                <p class="text-gray-500 text-sm">Expert gear advice anytime</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== TESTIMONIALS WITH AVATARS ==================== --}}
<section class="py-20 lg:py-32 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-1/2 left-1/4 w-72 h-72 bg-primary-500/5 rounded-full blur-[100px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-gold-500/5 rounded-full blur-[100px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Testimonials</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Riders <span class="gradient-text">Speak</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-xl mx-auto">Real stories from riders who trust Prestige with their safety.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 gsap-stagger">
            @foreach ($testimonials as $index => $testimonial)
            <div class="testimonial-card rounded-2xl p-8 border border-white/5 hover:border-primary-500/20 transition-colors duration-500 card-hover" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                {{-- Quote icon --}}
                <div class="mb-6">
                    <svg class="w-10 h-10 text-primary-500/30" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>

                {{-- Stars --}}
                <div class="flex items-center gap-1 mb-4">
                    @for ($s = 0; $s < $testimonial['rating']; $s++)
                    <svg class="w-4 h-4 text-gold-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>

                {{-- Text --}}
                <p class="text-gray-300 leading-relaxed mb-8 text-lg italic">"{{ $testimonial['text'] }}"</p>

                {{-- Author --}}
                <div class="flex items-center gap-4">
                    <img src="{{ $testimonial['avatar'] }}"
                         alt="{{ $testimonial['name'] }}"
                         class="w-14 h-14 rounded-full object-cover border-2 border-primary-500/30"
                         loading="lazy">
                    <div>
                        <h4 class="font-heading font-semibold text-lg uppercase tracking-wider">{{ $testimonial['name'] }}</h4>
                        <p class="text-sm text-primary-400">{{ $testimonial['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ==================== NEWSLETTER SECTION ==================== --}}
<section class="py-20 lg:py-28 relative overflow-hidden">
    <div class="absolute inset-0 newsletter-glow"></div>
    <div class="absolute inset-0 bg-dark-900/50"></div>

    {{-- Background image with heavy overlay --}}
    <div class="absolute inset-0 opacity-10">
        <img src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?w=1920&h=600&fit=crop"
             alt="" class="w-full h-full object-cover" loading="lazy">
    </div>

    <div class="relative z-10 max-w-3xl mx-auto px-4 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 glass rounded-full px-6 py-2 mb-6" data-aos="fade-up">
            <i data-lucide="mail" class="w-4 h-4 text-primary-400"></i>
            <span class="text-xs uppercase tracking-widest text-gray-300">Newsletter</span>
        </div>

        <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold uppercase tracking-wider mb-4" data-aos="fade-up" data-aos-delay="100">
            Stay in the <span class="gradient-text">Fast Lane</span>
        </h2>
        <p class="text-gray-400 text-lg mb-8 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Get exclusive drops, early access to sales, and riding tips delivered straight to your inbox.
        </p>

        <div class="flex flex-col sm:flex-row gap-3 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="300">
            <input type="email" placeholder="Enter your email address"
                   class="flex-1 bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white placeholder-gray-500 focus:outline-none focus:border-primary-500/50 transition-all duration-300">
            <button class="bg-gradient-to-r from-primary-500 to-primary-700 text-white px-8 py-4 rounded-xl font-heading uppercase tracking-wider hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic whitespace-nowrap shadow-lg shadow-primary-500/25">
                Subscribe
            </button>
        </div>
        <p class="text-xs text-gray-600 mt-4" data-aos="fade-up" data-aos-delay="400">No spam, ever. Unsubscribe anytime.</p>
    </div>
</section>

{{-- ==================== FINAL CTA ==================== --}}
<section class="relative py-32 lg:py-44 overflow-hidden" data-aos="fade-up">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1558981852-426c6c22a060?w=1920&h=800&fit=crop"
             alt="Open road motorcycle"
             class="w-full h-full object-cover" loading="lazy">
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-dark-950/95 via-dark-950/80 to-dark-950/95"></div>
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-full h-full" style="background: radial-gradient(circle at 50% 50%, rgba(230, 57, 70, 0.1) 0%, transparent 60%);"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 glass rounded-full px-6 py-2 mb-8">
            <span class="w-2 h-2 bg-gold-400 rounded-full animate-pulse"></span>
            <span class="text-xs uppercase tracking-widest text-gold-400">Ready to Ride?</span>
        </div>

        <h2 class="font-heading text-4xl md:text-5xl lg:text-7xl font-bold uppercase tracking-wider mb-6">
            Gear Up with <br><span class="gradient-text">Prestige</span>
        </h2>
        <p class="text-gray-400 text-lg max-w-2xl mx-auto mb-10">
            Join thousands of riders who trust Prestige Leathers for their safety and style. Premium gear, premium protection, premium experience.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('shop') }}" class="group inline-flex items-center gap-3 bg-gradient-to-r from-primary-500 to-primary-700 text-white px-10 py-4 rounded-xl font-heading uppercase tracking-wider text-lg hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic shadow-lg shadow-primary-500/25">
                Shop Now
                <i data-lucide="shopping-bag" class="w-5 h-5 transform group-hover:scale-110 transition-transform"></i>
            </a>
            <a href="{{ route('contact') }}" class="group inline-flex items-center gap-3 glass text-white px-10 py-4 rounded-xl font-heading uppercase tracking-wider text-lg hover:bg-white/10 transition-all duration-300">
                Custom Orders
                <i data-lucide="pen-tool" class="w-5 h-5"></i>
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Hero parallax effect on scroll
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        const hero = document.querySelector('section');
        if (hero && scrollY < window.innerHeight) {
            const heroBg = hero.querySelector('.hero-bg');
            if (heroBg) {
                heroBg.style.transform = 'scale(' + (1 + scrollY * 0.0003) + ') translateY(' + (scrollY * 0.3) + 'px)';
            }
            const content = hero.querySelector('.relative.z-10');
            if (content) {
                content.style.opacity = 1 - (scrollY / window.innerHeight) * 0.6;
            }
        }
    });

    // Lazy load images with fade-in
    document.addEventListener('DOMContentLoaded', () => {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.5s ease';
            if (img.complete) {
                img.style.opacity = '1';
            } else {
                img.addEventListener('load', () => { img.style.opacity = '1'; });
            }
        });
    });
</script>
@endsection
