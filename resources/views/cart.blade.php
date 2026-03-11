@extends('layouts.app')
@section('title', 'Shopping Cart | Prestige Leathers')

@section('content')
<section class="pt-32 pb-20 lg:pb-32 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        {{-- Header --}}
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Your Cart</span>
            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Shopping <span class="gradient-text">Cart</span>
            </h1>
        </div>

        {{-- Cart Content --}}
        <div x-show="cart.length > 0">
            <div class="grid lg:grid-cols-3 gap-8">
                {{-- Cart Items --}}
                <div class="lg:col-span-2">
                    {{-- Header --}}
                    <div class="hidden md:grid grid-cols-12 gap-4 pb-4 border-b border-white/10 text-xs uppercase tracking-widest text-gray-500">
                        <div class="col-span-6">Product</div>
                        <div class="col-span-2 text-center">Price</div>
                        <div class="col-span-2 text-center">Quantity</div>
                        <div class="col-span-2 text-right">Total</div>
                    </div>

                    <template x-for="(item, index) in cart" :key="item.id + '-' + item.size + '-' + item.color">
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 py-6 border-b border-white/5 items-center"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:leave="transition ease-in duration-200"
                             x-transition:leave-start="opacity-100 transform translate-x-0"
                             x-transition:leave-end="opacity-0 transform -translate-x-8">

                            {{-- Product --}}
                            <div class="md:col-span-6 flex items-center gap-4">
                                <div class="w-24 h-28 bg-dark-800 rounded-xl flex items-center justify-center flex-shrink-0 border border-white/5">
                                    <i data-lucide="package" class="w-10 h-10 text-gray-700"></i>
                                </div>
                                <div>
                                    <h3 class="font-heading text-sm uppercase tracking-wider font-semibold" x-text="item.name"></h3>
                                    <p class="text-xs text-gray-500 mt-1">Size: <span x-text="item.size"></span></p>
                                    <p class="text-xs text-gray-500">Color: <span x-text="item.color"></span></p>
                                    <button @click="removeFromCart(item)" class="text-xs text-primary-400 hover:text-primary-300 mt-2 flex items-center gap-1 transition-colors">
                                        <i data-lucide="trash-2" class="w-3 h-3"></i> Remove
                                    </button>
                                </div>
                            </div>

                            {{-- Price --}}
                            <div class="md:col-span-2 text-center">
                                <span class="text-gray-300" x-text="'$' + item.price.toFixed(2)"></span>
                            </div>

                            {{-- Quantity --}}
                            <div class="md:col-span-2 flex items-center justify-center">
                                <div class="flex items-center glass rounded-xl overflow-hidden">
                                    <button @click="updateQuantity(item, -1)" class="px-3 py-2 hover:bg-white/5 transition-colors">−</button>
                                    <span class="w-10 text-center font-medium" x-text="item.quantity"></span>
                                    <button @click="updateQuantity(item, 1)" class="px-3 py-2 hover:bg-white/5 transition-colors">+</button>
                                </div>
                            </div>

                            {{-- Total --}}
                            <div class="md:col-span-2 text-right">
                                <span class="font-bold text-white" x-text="'$' + (item.price * item.quantity).toFixed(2)"></span>
                            </div>
                        </div>
                    </template>

                    {{-- Actions --}}
                    <div class="flex flex-col sm:flex-row items-center justify-between mt-6 gap-4">
                        <a href="{{ route('shop') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-white transition-colors text-sm">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                            Continue Shopping
                        </a>
                        <button @click="if(confirm('Clear all items from cart?')) clearCart()" class="text-sm text-gray-500 hover:text-primary-400 transition-colors flex items-center gap-2">
                            <i data-lucide="trash" class="w-4 h-4"></i>
                            Clear Cart
                        </button>
                    </div>
                </div>

                {{-- Order Summary --}}
                <div class="lg:col-span-1">
                    <div class="glass rounded-2xl p-6 lg:sticky lg:top-32">
                        <h3 class="font-heading text-lg uppercase tracking-wider mb-6 pb-4 border-b border-white/10">Order Summary</h3>

                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-400">Subtotal</span>
                                <span x-text="'$' + cartTotal.toFixed(2)"></span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-400">Shipping</span>
                                <span x-text="cartTotal >= 500 ? 'FREE' : '$29.99'" :class="cartTotal >= 500 ? 'text-green-400' : ''"></span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-400">Tax (estimated)</span>
                                <span x-text="'$' + (cartTotal * 0.08).toFixed(2)"></span>
                            </div>
                        </div>

                        {{-- Promo Code --}}
                        <div class="mb-6 pb-6 border-b border-white/10" x-data="{ promoCode: '', promoApplied: false }">
                            <div class="flex gap-2">
                                <input type="text" x-model="promoCode" placeholder="Promo code" class="flex-1 bg-dark-800 border border-white/10 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:border-primary-500 transition-colors" :disabled="promoApplied">
                                <button @click="promoApplied = promoCode.length > 0" class="px-4 py-2.5 bg-white/5 border border-white/10 rounded-lg text-sm hover:bg-white/10 transition-colors" :class="promoApplied ? 'opacity-50' : ''">
                                    <span x-text="promoApplied ? 'Applied' : 'Apply'"></span>
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between text-lg font-bold mb-6">
                            <span>Total</span>
                            <span class="gradient-text" x-text="'$' + (cartTotal + (cartTotal >= 500 ? 0 : 29.99) + cartTotal * 0.08).toFixed(2)"></span>
                        </div>

                        <div x-show="cartTotal < 500" class="mb-6 bg-primary-500/10 border border-primary-500/20 rounded-xl p-4 text-center">
                            <p class="text-xs text-primary-400">
                                Add <span class="font-bold" x-text="'$' + (500 - cartTotal).toFixed(2)"></span> more for <span class="font-bold">FREE shipping!</span>
                            </p>
                            <div class="w-full bg-dark-800 rounded-full h-1.5 mt-2">
                                <div class="bg-gradient-to-r from-primary-500 to-gold-500 h-1.5 rounded-full transition-all duration-500" :style="'width:' + Math.min((cartTotal / 500) * 100, 100) + '%'"></div>
                            </div>
                        </div>

                        <button class="w-full bg-gradient-to-r from-primary-500 to-primary-700 text-white py-4 rounded-xl font-heading uppercase tracking-wider text-lg hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic shadow-lg shadow-primary-500/25 mb-3">
                            Proceed to Checkout
                        </button>

                        <div class="flex items-center justify-center gap-4 mt-4 text-gray-500">
                            <i data-lucide="lock" class="w-4 h-4"></i>
                            <span class="text-xs">Secure SSL Encrypted Checkout</span>
                        </div>

                        {{-- Trust Badges --}}
                        <div class="grid grid-cols-3 gap-2 mt-6">
                            <div class="text-center p-3 glass-light rounded-lg">
                                <i data-lucide="truck" class="w-5 h-5 text-gray-500 mx-auto mb-1"></i>
                                <span class="text-[10px] text-gray-500 block">Free Ship</span>
                            </div>
                            <div class="text-center p-3 glass-light rounded-lg">
                                <i data-lucide="shield-check" class="w-5 h-5 text-gray-500 mx-auto mb-1"></i>
                                <span class="text-[10px] text-gray-500 block">Secure</span>
                            </div>
                            <div class="text-center p-3 glass-light rounded-lg">
                                <i data-lucide="refresh-cw" class="w-5 h-5 text-gray-500 mx-auto mb-1"></i>
                                <span class="text-[10px] text-gray-500 block">Returns</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Empty Cart --}}
        <div x-show="cart.length === 0" class="text-center py-20" data-aos="fade-up">
            <div class="w-32 h-32 mx-auto mb-8 rounded-full bg-dark-800 flex items-center justify-center">
                <i data-lucide="shopping-bag" class="w-16 h-16 text-gray-700"></i>
            </div>
            <h2 class="font-heading text-3xl uppercase tracking-wider text-gray-400 mb-4">Your Cart is Empty</h2>
            <p class="text-gray-500 max-w-md mx-auto mb-8">Looks like you haven't added any gear yet. Explore our collection and find the perfect leather gear for your next ride.</p>
            <a href="{{ route('shop') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-primary-500 to-primary-700 text-white px-10 py-4 rounded-xl font-heading uppercase tracking-wider hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic shadow-lg shadow-primary-500/25">
                Start Shopping
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
    </div>
</section>
@endsection
