@extends('layouts.app')
@section('title', $product['name'] . ' | Prestige Leathers')

@section('content')
<section class="pt-32 pb-20 lg:pb-32" x-data="productDetail()">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-gray-500 mb-8" data-aos="fade-down">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
            <a href="{{ route('shop') }}" class="hover:text-white transition-colors">Shop</a>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
            <a href="{{ route('shop', ['category' => $product['category']]) }}" class="hover:text-white transition-colors">{{ $product['category_name'] }}</a>
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
            <span class="text-white">{{ $product['name'] }}</span>
        </nav>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
            {{-- Product Gallery --}}
            <div class="relative" data-aos="fade-right">
                <div class="aspect-square rounded-2xl bg-dark-900 border border-white/5 overflow-hidden group relative">
                    {{-- Badge --}}
                    @if ($product['badge'])
                    <div class="absolute top-6 left-6 z-10 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider
                        {{ $product['badge'] === 'BESTSELLER' ? 'badge-bestseller' : '' }}
                        {{ $product['badge'] === 'NEW' ? 'badge-new' : '' }}
                        {{ $product['badge'] === 'SALE' ? 'badge-sale' : '' }}
                        {{ $product['badge'] === 'PREMIUM' ? 'badge-premium' : '' }}
                    ">
                        {{ $product['badge'] }}
                    </div>
                    @endif

                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    {{-- Zoom icon --}}
                    <button class="absolute bottom-6 right-6 w-12 h-12 glass rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-white/10">
                        <i data-lucide="maximize-2" class="w-5 h-5"></i>
                    </button>
                </div>

                {{-- Thumbnails --}}
                <div class="grid grid-cols-4 gap-3 mt-4">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="aspect-square rounded-xl bg-dark-800 border {{ $i === 0 ? 'border-primary-500' : 'border-white/5 hover:border-white/20' }} cursor-pointer transition-colors flex items-center justify-center">
                        <i data-lucide="image" class="w-6 h-6 text-gray-700"></i>
                    </div>
                    @endfor
                </div>
            </div>

            {{-- Product Info --}}
            <div data-aos="fade-left">
                {{-- Category --}}
                <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-3">{{ $product['category_name'] }}</span>

                {{-- Name --}}
                <h1 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold uppercase tracking-wider mb-4">{{ $product['name'] }}</h1>

                {{-- Rating --}}
                <div class="flex items-center gap-3 mb-6">
                    <div class="flex items-center gap-1">
                        @for ($s = 0; $s < 5; $s++)
                        <svg class="w-4 h-4 {{ $s < floor($product['rating']) ? 'text-yellow-400' : 'text-gray-700' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <span class="text-sm text-gray-400">{{ $product['rating'] }} ({{ $product['reviews_count'] }} reviews)</span>
                </div>

                {{-- Price --}}
                <div class="flex items-center gap-4 mb-8">
                    <span class="font-heading text-4xl font-bold">${{ number_format($product['price'], 2) }}</span>
                    @if ($product['original_price'])
                    <span class="text-xl text-gray-500 line-through">${{ number_format($product['original_price'], 2) }}</span>
                    <span class="bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-sm font-bold">
                        Save ${{ number_format($product['original_price'] - $product['price'], 2) }}
                    </span>
                    @endif
                </div>

                {{-- Description --}}
                <p class="text-gray-400 leading-relaxed mb-8">{{ $product['description'] }}</p>

                {{-- Color Selector --}}
                <div class="mb-6">
                    <h4 class="text-sm font-medium uppercase tracking-wider mb-3">
                        Color: <span class="text-primary-400" x-text="selectedColor"></span>
                    </h4>
                    <div class="flex gap-3">
                        @foreach ($product['colors'] as $color)
                        <button @click="selectedColor = '{{ $color['name'] }}'"
                                class="w-12 h-12 rounded-full border-2 transition-all duration-300 flex items-center justify-center"
                                :class="selectedColor === '{{ $color['name'] }}' ? 'border-primary-500 scale-110' : 'border-white/10 hover:border-white/30'"
                                title="{{ $color['name'] }}">
                            <span class="w-8 h-8 rounded-full" style="background-color: {{ $color['hex'] }};"></span>
                        </button>
                        @endforeach
                    </div>
                </div>

                {{-- Size Selector --}}
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="text-sm font-medium uppercase tracking-wider">
                            Size: <span class="text-primary-400" x-text="selectedSize"></span>
                        </h4>
                        <button class="text-xs text-primary-400 underline hover:text-primary-300 transition-colors">Size Guide</button>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        @foreach ($product['sizes'] as $size)
                        <button @click="selectedSize = '{{ $size }}'"
                                class="size-btn w-14 h-12 rounded-xl border border-white/10 flex items-center justify-center text-sm font-medium transition-all duration-300 hover:border-primary-500/50"
                                :class="selectedSize === '{{ $size }}' ? 'active' : ''">
                            {{ $size }}
                        </button>
                        @endforeach
                    </div>
                </div>

                {{-- Quantity & Add to Cart --}}
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <div class="flex items-center glass rounded-xl overflow-hidden">
                        <button @click="quantity > 1 && quantity--" class="px-4 py-4 hover:bg-white/5 transition-colors text-lg">−</button>
                        <input type="number" x-model.number="quantity" min="1" max="10" class="w-16 text-center bg-transparent focus:outline-none text-lg font-medium">
                        <button @click="quantity < 10 && quantity++" class="px-4 py-4 hover:bg-white/5 transition-colors text-lg">+</button>
                    </div>
                    <button @click="addToCart({id: {{ $product['id'] }}, name: '{{ $product['name'] }}', price: {{ $product['price'] }}}, selectedSize, selectedColor, quantity)"
                            class="flex-1 bg-gradient-to-r from-primary-500 to-primary-700 text-white py-4 rounded-xl font-heading uppercase tracking-wider text-lg hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic flex items-center justify-center gap-3 shadow-lg shadow-primary-500/25">
                        <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                        Add to Cart
                    </button>
                    <button @click="toggleWishlist({{ $product['id'] }})"
                            class="w-14 h-14 glass rounded-xl flex items-center justify-center hover:bg-primary-500/10 transition-all duration-300 flex-shrink-0"
                            :class="isInWishlist({{ $product['id'] }}) ? 'border-primary-500 text-primary-400' : ''">
                        <i data-lucide="heart" class="w-5 h-5" :class="isInWishlist({{ $product['id'] }}) ? 'fill-current' : ''"></i>
                    </button>
                </div>

                {{-- Features --}}
                <div class="glass rounded-xl p-6 mb-6">
                    <h4 class="font-heading text-sm uppercase tracking-widest text-gold-400 mb-4">Key Features</h4>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach ($product['features'] as $feature)
                        <div class="flex items-center gap-2">
                            <i data-lucide="check-circle" class="w-4 h-4 text-green-400 flex-shrink-0"></i>
                            <span class="text-sm text-gray-300">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Guarantees --}}
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center glass-light rounded-xl p-4">
                        <i data-lucide="truck" class="w-6 h-6 text-primary-400 mx-auto mb-2"></i>
                        <span class="text-xs text-gray-400 block">Free Shipping</span>
                    </div>
                    <div class="text-center glass-light rounded-xl p-4">
                        <i data-lucide="refresh-cw" class="w-6 h-6 text-primary-400 mx-auto mb-2"></i>
                        <span class="text-xs text-gray-400 block">30-Day Returns</span>
                    </div>
                    <div class="text-center glass-light rounded-xl p-4">
                        <i data-lucide="shield-check" class="w-6 h-6 text-primary-400 mx-auto mb-2"></i>
                        <span class="text-xs text-gray-400 block">CE Certified</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Product Tabs --}}
        <div class="mt-20" data-aos="fade-up">
            <div x-data="{ activeTab: 'description' }" class="glass rounded-2xl overflow-hidden">
                {{-- Tab Headers --}}
                <div class="flex border-b border-white/10 overflow-x-auto">
                    <button @click="activeTab = 'description'" class="px-8 py-4 font-heading uppercase tracking-wider text-sm whitespace-nowrap transition-colors" :class="activeTab === 'description' ? 'text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 hover:text-white'">Description</button>
                    <button @click="activeTab = 'specs'" class="px-8 py-4 font-heading uppercase tracking-wider text-sm whitespace-nowrap transition-colors" :class="activeTab === 'specs' ? 'text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 hover:text-white'">Specifications</button>
                    <button @click="activeTab = 'reviews'" class="px-8 py-4 font-heading uppercase tracking-wider text-sm whitespace-nowrap transition-colors" :class="activeTab === 'reviews' ? 'text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 hover:text-white'">Reviews ({{ $product['reviews_count'] }})</button>
                    <button @click="activeTab = 'shipping'" class="px-8 py-4 font-heading uppercase tracking-wider text-sm whitespace-nowrap transition-colors" :class="activeTab === 'shipping' ? 'text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 hover:text-white'">Shipping</button>
                </div>

                {{-- Tab Content --}}
                <div class="p-8">
                    <div x-show="activeTab === 'description'">
                        <p class="text-gray-300 leading-relaxed mb-6">{{ $product['description'] }}</p>
                        <p class="text-gray-400 leading-relaxed">
                            Designed and tested under extreme conditions, this product represents the pinnacle of rider safety technology combined with unmistakable Prestige Leathers style. Every material has been carefully selected and every seam reinforced for maximum durability and protection.
                        </p>
                    </div>

                    <div x-show="activeTab === 'specs'" x-cloak>
                        <div class="grid gap-4 max-w-lg">
                            <div class="flex justify-between py-3 border-b border-white/5"><span class="text-gray-500">Material</span><span>Premium Leather</span></div>
                            <div class="flex justify-between py-3 border-b border-white/5"><span class="text-gray-500">Protection</span><span>CE Level 2</span></div>
                            <div class="flex justify-between py-3 border-b border-white/5"><span class="text-gray-500">Lining</span><span>Mesh + Thermal</span></div>
                            <div class="flex justify-between py-3 border-b border-white/5"><span class="text-gray-500">Closure</span><span>YKK Zippers</span></div>
                            <div class="flex justify-between py-3 border-b border-white/5"><span class="text-gray-500">Weight</span><span>~3.2 kg</span></div>
                            <div class="flex justify-between py-3"><span class="text-gray-500">Origin</span><span>Handcrafted in Italy</span></div>
                        </div>
                    </div>

                    <div x-show="activeTab === 'reviews'" x-cloak>
                        <div class="flex flex-col lg:flex-row gap-12">
                            {{-- Rating Summary --}}
                            <div class="lg:w-64 flex-shrink-0">
                                <div class="text-center glass-light rounded-xl p-6">
                                    <div class="font-heading text-5xl font-bold gradient-text mb-2">{{ $product['rating'] }}</div>
                                    <div class="flex items-center justify-center gap-1 mb-2">
                                        @for ($s = 0; $s < 5; $s++)
                                        <svg class="w-4 h-4 {{ $s < floor($product['rating']) ? 'text-yellow-400' : 'text-gray-700' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        @endfor
                                    </div>
                                    <p class="text-sm text-gray-400">{{ $product['reviews_count'] }} reviews</p>
                                </div>
                            </div>

                            {{-- Reviews List --}}
                            <div class="flex-1 space-y-6">
                                @php
                                    $fakeReviews = [
                                        ['name' => 'Alex R.', 'date' => '2 weeks ago', 'rating' => 5, 'text' => 'Absolutely incredible quality. The leather is thick and soft at the same time. Fits perfectly after the break-in period. Worth every penny!'],
                                        ['name' => 'Maria S.', 'date' => '1 month ago', 'rating' => 5, 'text' => 'This is my second purchase from Prestige Leathers and they never disappoint. The attention to detail is remarkable.'],
                                        ['name' => 'Tom K.', 'date' => '2 months ago', 'rating' => 4, 'text' => 'Great product overall. Only took one star off because shipping took a bit longer than expected. The quality itself is top-notch.'],
                                    ];
                                @endphp
                                @foreach ($fakeReviews as $review)
                                <div class="pb-6 border-b border-white/5">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-gold-500 rounded-full flex items-center justify-center font-bold text-sm">
                                                {{ substr($review['name'], 0, 1) }}
                                            </div>
                                            <div>
                                                <span class="font-medium text-sm">{{ $review['name'] }}</span>
                                                <div class="flex items-center gap-1">
                                                    @for ($s = 0; $s < $review['rating']; $s++)
                                                    <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-xs text-gray-500">{{ $review['date'] }}</span>
                                    </div>
                                    <p class="text-gray-400 text-sm leading-relaxed">{{ $review['text'] }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div x-show="activeTab === 'shipping'" x-cloak>
                        <div class="space-y-6 max-w-2xl">
                            <div class="flex items-start gap-4">
                                <i data-lucide="truck" class="w-6 h-6 text-primary-400 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h5 class="font-medium mb-1">Free Standard Shipping</h5>
                                    <p class="text-gray-400 text-sm">Free shipping on orders over $500. Standard delivery within 5-7 business days.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i data-lucide="zap" class="w-6 h-6 text-gold-400 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h5 class="font-medium mb-1">Express Shipping</h5>
                                    <p class="text-gray-400 text-sm">2-3 business days. Additional $49.99 shipping fee.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i data-lucide="refresh-cw" class="w-6 h-6 text-green-400 flex-shrink-0 mt-1"></i>
                                <div>
                                    <h5 class="font-medium mb-1">Returns & Exchanges</h5>
                                    <p class="text-gray-400 text-sm">30-day return policy. Items must be unworn with tags attached. Free return shipping.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Related Products --}}
        @if (count($relatedProducts) > 0)
        <div class="mt-20" data-aos="fade-up">
            <h2 class="font-heading text-3xl md:text-4xl font-bold uppercase tracking-wider mb-8">
                You May Also <span class="gradient-text">Like</span>
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 gsap-stagger">
                @foreach ($relatedProducts as $related)
                <div class="group card-hover">
                    <div class="bg-dark-800/50 rounded-2xl overflow-hidden border border-white/5 hover:border-primary-500/30 transition-colors duration-500">
                        <div class="aspect-[3/4] bg-dark-900 overflow-hidden">
                            <img src="{{ $related['image'] }}" alt="{{ $related['name'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                        </div>
                        <div class="p-5">
                            <a href="{{ route('product', $related['slug']) }}">
                                <h3 class="font-heading text-sm font-semibold uppercase tracking-wider group-hover:text-primary-400 transition-colors duration-300 line-clamp-1">{{ $related['name'] }}</h3>
                            </a>
                            <div class="flex items-center gap-3 mt-2">
                                <span class="font-bold">${{ number_format($related['price'], 2) }}</span>
                                @if ($related['original_price'])
                                <span class="text-sm text-gray-500 line-through">${{ number_format($related['original_price'], 2) }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection

@section('scripts')
<script>
    function productDetail() {
        return {
            selectedColor: '{{ $product['colors'][0]['name'] }}',
            selectedSize: '{{ $product['sizes'][1] ?? $product['sizes'][0] }}',
            quantity: 1,
        }
    }
</script>
@endsection
