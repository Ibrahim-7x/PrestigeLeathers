@extends('layouts.app')
@section('title', 'Shop | Prestige Leathers')

@section('content')
{{-- Hero Banner --}}
<section class="pt-32 pb-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-primary-900/20 to-dark-950"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary-500/5 rounded-full blur-[128px]"></div>

    <div class="max-w-7xl mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">The Collection</span>
            <h1 class="font-heading text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wider mb-4">
                @if ($selectedCategory)
                    {{ collect($categories)->firstWhere('slug', $selectedCategory)['name'] ?? 'Shop' }}
                @else
                    All <span class="gradient-text">Products</span>
                @endif
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Discover our complete range of premium leather gear, engineered for the ultimate riding experience.
            </p>
        </div>
    </div>
</section>

{{-- Shop Content --}}
<section class="pb-20 lg:pb-32" x-data="shopFilter()" x-init="initShop()">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8">
            {{-- Sidebar Filters --}}
            <aside class="lg:w-72 flex-shrink-0">
                <div class="lg:sticky lg:top-32">
                    {{-- Mobile Filter Toggle --}}
                    <button @click="showFilters = !showFilters" class="lg:hidden w-full glass rounded-xl p-4 flex items-center justify-between mb-4">
                        <span class="font-heading uppercase tracking-wider flex items-center gap-2">
                            <i data-lucide="sliders-horizontal" class="w-5 h-5"></i> Filters
                        </span>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform" :class="showFilters ? 'rotate-180' : ''"></i>
                    </button>

                    <div :class="showFilters ? 'block' : 'hidden lg:block'">
                        {{-- Categories --}}
                        <div class="glass rounded-xl p-6 mb-4">
                            <h3 class="font-heading text-sm uppercase tracking-widest text-gold-400 mb-4">Categories</h3>
                            <div class="space-y-2">
                                <a href="{{ route('shop') }}"
                                   class="flex items-center justify-between py-2 px-3 rounded-lg transition-colors duration-200 {{ !$selectedCategory ? 'bg-primary-500/10 text-primary-400' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                                    <span class="text-sm">All Products</span>
                                    <span class="text-xs text-gray-600">{{ count($products) + ($selectedCategory ? count(array_filter($products, fn() => true)) : 0) }}</span>
                                </a>
                                @foreach ($categories as $category)
                                <a href="{{ route('shop', ['category' => $category['slug']]) }}"
                                   class="flex items-center justify-between py-2 px-3 rounded-lg transition-colors duration-200 {{ $selectedCategory === $category['slug'] ? 'bg-primary-500/10 text-primary-400' : 'text-gray-400 hover:bg-white/5 hover:text-white' }}">
                                    <span class="text-sm">{{ $category['name'] }}</span>
                                    <span class="text-xs text-gray-600">{{ $category['count'] }}</span>
                                </a>
                                @endforeach
                            </div>
                        </div>

                        {{-- Price Range --}}
                        <div class="glass rounded-xl p-6 mb-4">
                            <h3 class="font-heading text-sm uppercase tracking-widest text-gold-400 mb-4">Price Range</h3>
                            <div class="space-y-2">
                                <label class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-white/5 cursor-pointer transition-colors">
                                    <input type="radio" name="priceRange" value="all" x-model="priceRange" class="accent-red-500">
                                    <span class="text-sm text-gray-400">All Prices</span>
                                </label>
                                <label class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-white/5 cursor-pointer transition-colors">
                                    <input type="radio" name="priceRange" value="0-200" x-model="priceRange" class="accent-red-500">
                                    <span class="text-sm text-gray-400">Under $200</span>
                                </label>
                                <label class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-white/5 cursor-pointer transition-colors">
                                    <input type="radio" name="priceRange" value="200-500" x-model="priceRange" class="accent-red-500">
                                    <span class="text-sm text-gray-400">$200 - $500</span>
                                </label>
                                <label class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-white/5 cursor-pointer transition-colors">
                                    <input type="radio" name="priceRange" value="500-1000" x-model="priceRange" class="accent-red-500">
                                    <span class="text-sm text-gray-400">$500 - $1,000</span>
                                </label>
                                <label class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-white/5 cursor-pointer transition-colors">
                                    <input type="radio" name="priceRange" value="1000+" x-model="priceRange" class="accent-red-500">
                                    <span class="text-sm text-gray-400">Over $1,000</span>
                                </label>
                            </div>
                        </div>

                        {{-- Sort --}}
                        <div class="glass rounded-xl p-6">
                            <h3 class="font-heading text-sm uppercase tracking-widest text-gold-400 mb-4">Sort By</h3>
                            <select x-model="sortBy" class="w-full bg-dark-800 border border-white/10 rounded-lg px-4 py-2.5 text-sm text-gray-300 focus:outline-none focus:border-primary-500 transition-colors">
                                <option value="featured">Featured</option>
                                <option value="price-asc">Price: Low to High</option>
                                <option value="price-desc">Price: High to Low</option>
                                <option value="rating">Top Rated</option>
                                <option value="newest">Newest</option>
                            </select>
                        </div>
                    </div>
                </div>
            </aside>

            {{-- Products Grid --}}
            <div class="flex-1">
                {{-- Toolbar --}}
                <div class="flex items-center justify-between mb-8 glass rounded-xl p-4">
                    <p class="text-sm text-gray-400">
                        Showing <span class="text-white font-medium" x-text="filteredProducts.length"></span> products
                    </p>
                    <div class="flex items-center gap-2">
                        <button @click="gridCols = 2" class="p-2 rounded-lg transition-colors" :class="gridCols === 2 ? 'bg-primary-500/20 text-primary-400' : 'text-gray-500 hover:text-white'">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><rect x="1" y="1" width="7" height="7" rx="1"/><rect x="12" y="1" width="7" height="7" rx="1"/><rect x="1" y="12" width="7" height="7" rx="1"/><rect x="12" y="12" width="7" height="7" rx="1"/></svg>
                        </button>
                        <button @click="gridCols = 3" class="p-2 rounded-lg transition-colors hidden lg:block" :class="gridCols === 3 ? 'bg-primary-500/20 text-primary-400' : 'text-gray-500 hover:text-white'">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><rect x="1" y="1" width="4.5" height="4.5" rx="1"/><rect x="7.75" y="1" width="4.5" height="4.5" rx="1"/><rect x="14.5" y="1" width="4.5" height="4.5" rx="1"/><rect x="1" y="7.75" width="4.5" height="4.5" rx="1"/><rect x="7.75" y="7.75" width="4.5" height="4.5" rx="1"/><rect x="14.5" y="7.75" width="4.5" height="4.5" rx="1"/><rect x="1" y="14.5" width="4.5" height="4.5" rx="1"/><rect x="7.75" y="14.5" width="4.5" height="4.5" rx="1"/><rect x="14.5" y="14.5" width="4.5" height="4.5" rx="1"/></svg>
                        </button>
                    </div>
                </div>

                {{-- Product Grid --}}
                <div class="grid gap-6" :class="gridCols === 3 ? 'lg:grid-cols-3 grid-cols-2' : 'grid-cols-1 sm:grid-cols-2'">
                    <template x-for="product in filteredProducts" :key="product.id">
                        <div class="group card-hover">
                            <div class="bg-dark-800/50 rounded-2xl overflow-hidden border border-white/5 hover:border-primary-500/30 transition-colors duration-500">
                                {{-- Image --}}
                                <div class="relative product-img-wrapper aspect-[3/4] bg-gradient-to-br from-dark-800 to-dark-900 flex items-center justify-center">
                                    <div class="text-center">
                                        <i data-lucide="package" class="w-16 h-16 text-gray-700 mx-auto mb-3"></i>
                                        <span class="text-xs text-gray-600 uppercase tracking-wider" x-text="product.category_name"></span>
                                    </div>

                                    {{-- Badge --}}
                                    <div x-show="product.badge" class="absolute top-4 left-4 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider"
                                         :class="{
                                            'badge-bestseller': product.badge === 'BESTSELLER',
                                            'badge-new': product.badge === 'NEW',
                                            'badge-sale': product.badge === 'SALE',
                                            'badge-premium': product.badge === 'PREMIUM'
                                         }" x-text="product.badge"></div>

                                    {{-- Quick Actions --}}
                                    <div class="absolute top-4 right-4 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transform translate-x-4 group-hover:translate-x-0 transition-all duration-300">
                                        <button @click.prevent="$root.toggleWishlist && toggleWishlist(product.id)" class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-primary-500/20 transition-colors">
                                            <i data-lucide="heart" class="w-4 h-4"></i>
                                        </button>
                                        <a :href="'/product/' + product.slug" class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-primary-500/20 transition-colors">
                                            <i data-lucide="eye" class="w-4 h-4"></i>
                                        </a>
                                    </div>

                                    {{-- Quick Add --}}
                                    <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                        <button @click.prevent="addToCart({id: product.id, name: product.name, price: product.price}, product.sizes[1] || product.sizes[0], product.colors[0].name)"
                                                class="w-full glass py-3 rounded-xl text-sm font-medium uppercase tracking-wider hover:bg-primary-500 transition-colors duration-300">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                {{-- Info --}}
                                <div class="p-5">
                                    <div class="flex items-center gap-1 mb-2">
                                        <template x-for="star in 5">
                                            <svg class="w-3.5 h-3.5" :class="star <= Math.floor(product.rating) ? 'text-yellow-400' : 'text-gray-700'" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        </template>
                                        <span class="text-xs text-gray-500 ml-1" x-text="'(' + product.reviews_count + ')'"></span>
                                    </div>

                                    <a :href="'/product/' + product.slug">
                                        <h3 class="font-heading text-base font-semibold uppercase tracking-wider group-hover:text-primary-400 transition-colors duration-300 line-clamp-1" x-text="product.name"></h3>
                                    </a>
                                    <p class="text-gray-500 text-xs mt-1" x-text="product.category_name"></p>

                                    <div class="flex items-center gap-3 mt-3">
                                        <span class="text-lg font-bold text-white" x-text="'$' + product.price.toFixed(2)"></span>
                                        <span x-show="product.original_price" class="text-sm text-gray-500 line-through" x-text="product.original_price ? '$' + product.original_price.toFixed(2) : ''"></span>
                                        <span x-show="product.original_price" class="text-xs text-green-400 font-medium" x-text="product.original_price ? '-' + Math.round((1 - product.price / product.original_price) * 100) + '%' : ''"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                {{-- Empty State --}}
                <div x-show="filteredProducts.length === 0" class="text-center py-20">
                    <i data-lucide="search-x" class="w-16 h-16 text-gray-700 mx-auto mb-4"></i>
                    <h3 class="font-heading text-2xl uppercase tracking-wider text-gray-500 mb-2">No Products Found</h3>
                    <p class="text-gray-600">Try adjusting your filters to find what you're looking for.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function shopFilter() {
        return {
            allProducts: @json(array_values($products)),
            priceRange: 'all',
            sortBy: 'featured',
            gridCols: 3,
            showFilters: false,

            initShop() {
                this.$watch('priceRange', () => this.reInitIcons());
                this.$watch('sortBy', () => this.reInitIcons());
            },

            reInitIcons() {
                this.$nextTick(() => {
                    setTimeout(() => lucide.createIcons(), 100);
                });
            },

            get filteredProducts() {
                let products = [...this.allProducts];

                // Price filter
                if (this.priceRange !== 'all') {
                    const [min, max] = this.priceRange.includes('+')
                        ? [parseInt(this.priceRange), Infinity]
                        : this.priceRange.split('-').map(Number);
                    products = products.filter(p => p.price >= min && p.price <= max);
                }

                // Sort
                switch (this.sortBy) {
                    case 'price-asc': products.sort((a, b) => a.price - b.price); break;
                    case 'price-desc': products.sort((a, b) => b.price - a.price); break;
                    case 'rating': products.sort((a, b) => b.rating - a.rating); break;
                    case 'newest': products.sort((a, b) => b.id - a.id); break;
                }

                return products;
            }
        }
    }
</script>
@endsection
