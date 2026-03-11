@extends('layouts.app')
@section('title', 'Prestige Leathers | Premium Leather Gear & Biker Suits')

@section('content')
{{-- ==================== HERO SECTION ==================== --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden noise-overlay">
    {{-- Animated Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-dark-950 via-dark-900 to-dark-950"></div>
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary-500/10 rounded-full blur-[128px] animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gold-500/10 rounded-full blur-[128px] animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-primary-700/5 rounded-full blur-[100px] animate-float"></div>
    </div>

    {{-- Grid Pattern --}}
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>

    {{-- Floating Particles --}}
    <div class="absolute inset-0 overflow-hidden">
        @for ($i = 0; $i < 20; $i++)
        <div class="particle" style="
            width: {{ rand(2, 6) }}px; height: {{ rand(2, 6) }}px;
            left: {{ rand(0, 100) }}%; top: {{ rand(0, 100) }}%;
            animation-delay: {{ $i * 0.3 }}s;
            animation-duration: {{ rand(4, 8) }}s;
            opacity: {{ rand(1, 5) / 10 }};
        "></div>
        @endfor
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 lg:px-8 text-center">
        {{-- Badge --}}
        <div class="inline-flex items-center gap-2 glass rounded-full px-6 py-2 mb-8" data-aos="fade-down" data-aos-delay="200">
            <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
            <span class="text-xs uppercase tracking-widest text-gray-300">New 2026 Collection Available</span>
        </div>

        {{-- Heading --}}
        <h1 class="font-heading text-5xl md:text-7xl lg:text-8xl xl:text-9xl font-bold uppercase leading-none mb-6" data-aos="fade-up" data-aos-delay="400">
            <span class="block gradient-text-white">Ride with</span>
            <span class="block gradient-text mt-2">Prestige</span>
        </h1>

        {{-- Subtext --}}
        <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed" data-aos="fade-up" data-aos-delay="600">
            Premium leather gear engineered for riders who demand the ultimate fusion of
            <span class="text-white font-medium">protection</span>,
            <span class="text-white font-medium">performance</span>, and
            <span class="text-white font-medium">style</span>.
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4" data-aos="fade-up" data-aos-delay="800">
            <a href="{{ route('shop') }}" class="group relative inline-flex items-center gap-3 bg-gradient-to-r from-primary-500 to-primary-700 text-white px-10 py-4 rounded-xl font-heading uppercase tracking-wider text-lg hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic shadow-lg shadow-primary-500/25">
                Explore Collection
                <i data-lucide="arrow-right" class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="{{ route('about') }}" class="group inline-flex items-center gap-3 glass text-white px-10 py-4 rounded-xl font-heading uppercase tracking-wider text-lg hover:bg-white/10 transition-all duration-300">
                Our Story
                <i data-lucide="play-circle" class="w-5 h-5 transform group-hover:scale-110 transition-transform"></i>
            </a>
        </div>

        {{-- Stats --}}
        <div class="flex items-center justify-center gap-8 md:gap-16 mt-16" data-aos="fade-up" data-aos-delay="1000">
            <div class="text-center">
                <div class="font-heading text-3xl md:text-4xl font-bold gradient-text count-up">25+</div>
                <div class="text-xs uppercase tracking-widest text-gray-500 mt-1">Years of Craft</div>
            </div>
            <div class="w-px h-12 bg-white/10"></div>
            <div class="text-center">
                <div class="font-heading text-3xl md:text-4xl font-bold gradient-text count-up">50K+</div>
                <div class="text-xs uppercase tracking-widest text-gray-500 mt-1">Riders Trust Us</div>
            </div>
            <div class="w-px h-12 bg-white/10"></div>
            <div class="text-center">
                <div class="font-heading text-3xl md:text-4xl font-bold gradient-text count-up">CE L2</div>
                <div class="text-xs uppercase tracking-widest text-gray-500 mt-1">Certified Armor</div>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
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
        <span class="font-heading text-4xl md:text-5xl font-bold uppercase tracking-widest gradient-text mx-8 whitespace-nowrap opacity-20">•</span>
        <span class="font-heading text-4xl md:text-5xl font-bold uppercase tracking-widest text-white/5 mx-8 whitespace-nowrap">Ride with Power</span>
        <span class="font-heading text-4xl md:text-5xl font-bold uppercase tracking-widest gradient-text mx-8 whitespace-nowrap opacity-20">•</span>
        @endfor
    </div>
</section>

{{-- ==================== CATEGORIES SECTION ==================== --}}
<section class="py-20 lg:py-32 relative">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Categories</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Gear for Every <span class="gradient-text">Ride</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary-500 to-gold-500 mx-auto mt-6 rounded-full"></div>
        </div>

        {{-- Category Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 gsap-stagger">
            @php
                $categoryIcons = [
                    'suit' => 'shield',
                    'jacket' => 'shirt',
                    'pants' => 'scissors',
                    'gloves' => 'hand-metal',
                    'boots' => 'footprints',
                    'accessories' => 'briefcase',
                ];
                $categoryImages = [
                    'Racing Suits' => 'from-red-900/40 to-dark-950',
                    'Leather Jackets' => 'from-amber-900/40 to-dark-950',
                    'Riding Pants' => 'from-blue-900/40 to-dark-950',
                    'Gloves' => 'from-green-900/40 to-dark-950',
                    'Boots' => 'from-purple-900/40 to-dark-950',
                    'Accessories' => 'from-orange-900/40 to-dark-950',
                ];
            @endphp
            @foreach ($categories as $category)
            <a href="{{ route('shop', ['category' => $category['slug']]) }}"
               class="group relative overflow-hidden rounded-2xl glass card-hover h-64 flex flex-col justify-end p-8 cursor-pointer">
                {{-- Background Gradient --}}
                <div class="absolute inset-0 bg-gradient-to-t {{ $categoryImages[$category['name']] ?? 'from-primary-900/40 to-dark-950' }} opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                {{-- Hover Glow --}}
                <div class="absolute inset-0 bg-gradient-to-t from-primary-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                {{-- Icon --}}
                <div class="absolute top-6 right-6 w-14 h-14 glass-light rounded-xl flex items-center justify-center transform group-hover:rotate-12 group-hover:scale-110 transition-all duration-500">
                    <i data-lucide="{{ $categoryIcons[$category['icon']] ?? 'package' }}" class="w-7 h-7 text-primary-400"></i>
                </div>
                {{-- Content --}}
                <div class="relative z-10">
                    <span class="text-xs uppercase tracking-widest text-primary-400/70 mb-2 block">{{ $category['count'] }} Products</span>
                    <h3 class="font-heading text-2xl font-bold uppercase tracking-wider mb-2 group-hover:text-primary-400 transition-colors duration-300">{{ $category['name'] }}</h3>
                    <p class="text-gray-400 text-sm">{{ $category['description'] }}</p>
                    <div class="flex items-center gap-2 mt-4 text-primary-400 text-sm font-medium opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                        Shop Now <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ==================== FEATURED PRODUCTS ==================== --}}
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
                    <div class="relative product-img-wrapper aspect-[3/4] bg-gradient-to-br from-dark-800 to-dark-900 flex items-center justify-center">
                        <div class="text-center">
                            <i data-lucide="package" class="w-16 h-16 text-gray-700 mx-auto mb-3"></i>
                            <span class="text-xs text-gray-600 uppercase tracking-wider">{{ $product['category_name'] }}</span>
                        </div>

                        {{-- Badge --}}
                        @if ($product['badge'])
                        <div class="absolute top-4 left-4 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider
                            {{ $product['badge'] === 'BESTSELLER' ? 'badge-bestseller' : '' }}
                            {{ $product['badge'] === 'NEW' ? 'badge-new' : '' }}
                            {{ $product['badge'] === 'SALE' ? 'badge-sale' : '' }}
                            {{ $product['badge'] === 'PREMIUM' ? 'badge-premium' : '' }}
                        ">
                            {{ $product['badge'] }}
                        </div>
                        @endif

                        {{-- Quick Actions --}}
                        <div class="absolute top-4 right-4 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transform translate-x-4 group-hover:translate-x-0 transition-all duration-300">
                            <button @click.prevent="toggleWishlist({{ $product['id'] }})" class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-primary-500/20 transition-colors">
                                <i data-lucide="heart" class="w-4 h-4" :class="isInWishlist({{ $product['id'] }}) ? 'fill-primary-400 text-primary-400' : ''"></i>
                            </button>
                            <a href="{{ route('product', $product['slug']) }}" class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-primary-500/20 transition-colors">
                                <i data-lucide="eye" class="w-4 h-4"></i>
                            </a>
                        </div>

                        {{-- Add to Cart Quick --}}
                        <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                            <button @click.prevent="addToCart({id: {{ $product['id'] }}, name: '{{ $product['name'] }}', price: {{ $product['price'] }}}, '{{ $product['sizes'][1] ?? $product['sizes'][0] }}', '{{ $product['colors'][0]['name'] }}')"
                                    class="w-full glass py-3 rounded-xl text-sm font-medium uppercase tracking-wider hover:bg-primary-500 transition-colors duration-300 btn-magnetic">
                                Add to Cart
                            </button>
                        </div>
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

{{-- ==================== PARALLAX BANNER ==================== --}}
<section class="relative py-32 lg:py-48 overflow-hidden" data-aos="fade-up">
    <div class="absolute inset-0 bg-gradient-to-r from-primary-900/90 via-dark-950/95 to-dark-950/90"></div>
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0" style="background: radial-gradient(circle at 30% 50%, rgba(230, 57, 70, 0.3) 0%, transparent 50%);"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Craftsmanship</span>
                <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider leading-tight mb-6">
                    Where Safety Meets <span class="gradient-text">Art</span>
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed mb-8">
                    Every piece of Prestige gear is handcrafted by master artisans using the finest leathers sourced from premium Italian tanneries. From cutting to stitching, each step follows generations of expertise refined for the modern rider.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="glass rounded-xl p-6 text-center">
                        <div class="font-heading text-3xl font-bold gradient-text mb-2">100%</div>
                        <div class="text-xs uppercase tracking-widest text-gray-400">Premium Leather</div>
                    </div>
                    <div class="glass rounded-xl p-6 text-center">
                        <div class="font-heading text-3xl font-bold gradient-text mb-2">72hr</div>
                        <div class="text-xs uppercase tracking-widest text-gray-400">Craft Per Suit</div>
                    </div>
                    <div class="glass rounded-xl p-6 text-center">
                        <div class="font-heading text-3xl font-bold gradient-text mb-2">2mm</div>
                        <div class="text-xs uppercase tracking-widest text-gray-400">Stitch Precision</div>
                    </div>
                    <div class="glass rounded-xl p-6 text-center">
                        <div class="font-heading text-3xl font-bold gradient-text mb-2">∞</div>
                        <div class="text-xs uppercase tracking-widest text-gray-400">Passion</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-2xl bg-gradient-to-br from-dark-800/50 to-dark-900/50 border border-white/5 flex items-center justify-center overflow-hidden group">
                    <div class="text-center">
                        <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gradient-to-br from-primary-500/20 to-gold-500/20 flex items-center justify-center">
                            <i data-lucide="shield-check" class="w-16 h-16 text-primary-400"></i>
                        </div>
                        <p class="font-heading text-2xl uppercase tracking-wider text-gray-400">Handcrafted Excellence</p>
                    </div>
                    {{-- Animated border --}}
                    <div class="absolute inset-0 rounded-2xl border-2 border-transparent" style="background: linear-gradient(var(--angle, 0deg), #E63946, transparent, #D4A853) border-box; -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0); mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0); -webkit-mask-composite: xor; mask-composite: exclude;"></div>
                </div>
                {{-- Floating elements --}}
                <div class="absolute -top-4 -right-4 w-20 h-20 glass rounded-xl flex items-center justify-center animate-float">
                    <i data-lucide="award" class="w-8 h-8 text-gold-400"></i>
                </div>
                <div class="absolute -bottom-4 -left-4 w-20 h-20 glass rounded-xl flex items-center justify-center animate-float" style="animation-delay: 2s;">
                    <i data-lucide="zap" class="w-8 h-8 text-primary-400"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== SALE PRODUCTS ==================== --}}
@if (count($saleProducts) > 0)
<section class="py-20 lg:py-32 relative">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-green-400 font-medium mb-4">Limited Time</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Special <span class="gradient-text">Deals</span>
            </h2>
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

                    <div class="aspect-[3/4] bg-gradient-to-br from-dark-800 to-dark-900 flex items-center justify-center product-img-wrapper">
                        <div class="text-center">
                            <i data-lucide="package" class="w-16 h-16 text-gray-700 mx-auto mb-3"></i>
                            <span class="text-xs text-gray-600 uppercase tracking-wider">{{ $product['category_name'] }}</span>
                        </div>
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

{{-- ==================== FEATURES BAR ==================== --}}
<section class="py-20 bg-dark-900/50 border-y border-white/5">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 gsap-stagger">
            <div class="text-center group" data-aos="fade-up" data-aos-delay="0">
                <div class="w-16 h-16 mx-auto glass-light rounded-2xl flex items-center justify-center mb-4 group-hover:bg-primary-500/10 group-hover:border-primary-500/30 transition-all duration-300 transform group-hover:scale-110">
                    <i data-lucide="truck" class="w-7 h-7 text-primary-400"></i>
                </div>
                <h4 class="font-heading text-lg uppercase tracking-wider mb-2">Free Shipping</h4>
                <p class="text-gray-500 text-sm">On orders over $500 worldwide</p>
            </div>
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 mx-auto glass-light rounded-2xl flex items-center justify-center mb-4 group-hover:bg-primary-500/10 group-hover:border-primary-500/30 transition-all duration-300 transform group-hover:scale-110">
                    <i data-lucide="shield-check" class="w-7 h-7 text-primary-400"></i>
                </div>
                <h4 class="font-heading text-lg uppercase tracking-wider mb-2">CE Certified</h4>
                <p class="text-gray-500 text-sm">Level 2 armor in all suits</p>
            </div>
            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 mx-auto glass-light rounded-2xl flex items-center justify-center mb-4 group-hover:bg-primary-500/10 group-hover:border-primary-500/30 transition-all duration-300 transform group-hover:scale-110">
                    <i data-lucide="refresh-cw" class="w-7 h-7 text-primary-400"></i>
                </div>
                <h4 class="font-heading text-lg uppercase tracking-wider mb-2">Easy Returns</h4>
                <p class="text-gray-500 text-sm">30-day hassle-free returns</p>
            </div>
            <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 mx-auto glass-light rounded-2xl flex items-center justify-center mb-4 group-hover:bg-primary-500/10 group-hover:border-primary-500/30 transition-all duration-300 transform group-hover:scale-110">
                    <i data-lucide="headphones" class="w-7 h-7 text-primary-400"></i>
                </div>
                <h4 class="font-heading text-lg uppercase tracking-wider mb-2">24/7 Support</h4>
                <p class="text-gray-500 text-sm">Expert gear advice anytime</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== TESTIMONIALS ==================== --}}
<section class="py-20 lg:py-32 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-1/2 left-1/4 w-72 h-72 bg-primary-500/5 rounded-full blur-[100px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Testimonials</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Riders <span class="gradient-text">Speak</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 gsap-stagger">
            @foreach ($testimonials as $testimonial)
            <div class="glass rounded-2xl p-8 card-hover">
                <div class="flex items-center gap-1 mb-4">
                    @for ($s = 0; $s < $testimonial['rating']; $s++)
                    <svg class="w-4 h-4 text-gold-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-gray-300 leading-relaxed mb-6 italic">"{{ $testimonial['text'] }}"</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-gold-500 rounded-full flex items-center justify-center font-heading font-bold text-lg">
                        {{ substr($testimonial['name'], 0, 1) }}
                    </div>
                    <div>
                        <h4 class="font-medium">{{ $testimonial['name'] }}</h4>
                        <p class="text-sm text-gray-500">{{ $testimonial['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ==================== CTA SECTION ==================== --}}
<section class="py-20 lg:py-32 relative overflow-hidden" data-aos="fade-up">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/40 via-dark-950 to-dark-950"></div>
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-full h-full" style="background: radial-gradient(circle at 70% 30%, rgba(230, 57, 70, 0.15) 0%, transparent 50%);"></div>
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
    // Hero parallax effect
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        const hero = document.querySelector('section');
        if (hero && scrollY < window.innerHeight) {
            hero.style.transform = `translateY(${scrollY * 0.3}px)`;
            hero.style.opacity = 1 - (scrollY / window.innerHeight) * 0.5;
        }
    });
</script>
@endsection
