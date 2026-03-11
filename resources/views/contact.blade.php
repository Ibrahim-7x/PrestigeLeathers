@extends('layouts.app')
@section('title', 'Contact Us | Prestige Leathers')

@section('content')
{{-- Hero --}}
<section class="pt-32 pb-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-primary-900/20 to-dark-950"></div>
    <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-primary-500/5 rounded-full blur-[128px]"></div>

    <div class="max-w-7xl mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Get in Touch</span>
            <h1 class="font-heading text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wider mb-4">
                Contact <span class="gradient-text">Us</span>
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Have questions about our gear, need sizing help, or want to discuss a custom order? We're here to help.
            </p>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section class="pb-20 lg:pb-32">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12">

            {{-- Contact Info --}}
            <div class="lg:col-span-2" data-aos="fade-right">
                <div class="glass rounded-2xl p-8 mb-6">
                    <h3 class="font-heading text-xl uppercase tracking-wider mb-6">Reach Out</h3>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 glass-light rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-primary-500/10 group-hover:border-primary-500/30 transition-all duration-300">
                                <i data-lucide="map-pin" class="w-5 h-5 text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-sm mb-1">Visit Us</h4>
                                <p class="text-gray-400 text-sm">123 Rider's Avenue<br>Milan, Italy 20121</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 glass-light rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-primary-500/10 group-hover:border-primary-500/30 transition-all duration-300">
                                <i data-lucide="phone" class="w-5 h-5 text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-sm mb-1">Call Us</h4>
                                <p class="text-gray-400 text-sm">+39 02 1234 5678</p>
                                <p class="text-gray-500 text-xs mt-1">Mon-Fri, 9AM-6PM CET</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 glass-light rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-primary-500/10 group-hover:border-primary-500/30 transition-all duration-300">
                                <i data-lucide="mail" class="w-5 h-5 text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-sm mb-1">Email Us</h4>
                                <p class="text-gray-400 text-sm">info&#64;prestigeleathers.com</p>
                                <p class="text-gray-500 text-xs mt-1">Usually respond within 24hrs</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 glass-light rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-primary-500/10 group-hover:border-primary-500/30 transition-all duration-300">
                                <i data-lucide="message-circle" class="w-5 h-5 text-primary-400"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-sm mb-1">Live Chat</h4>
                                <p class="text-gray-400 text-sm">Available on website</p>
                                <p class="text-gray-500 text-xs mt-1">Mon-Sat, 8AM-10PM CET</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Social Links --}}
                <div class="glass rounded-2xl p-8">
                    <h3 class="font-heading text-sm uppercase tracking-widest text-gold-400 mb-4">Follow Us</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="#" class="flex items-center gap-3 glass-light rounded-xl p-4 hover:bg-primary-500/10 hover:border-primary-500/30 transition-all duration-300">
                            <i data-lucide="instagram" class="w-5 h-5 text-pink-400"></i>
                            <span class="text-sm">Instagram</span>
                        </a>
                        <a href="#" class="flex items-center gap-3 glass-light rounded-xl p-4 hover:bg-primary-500/10 hover:border-primary-500/30 transition-all duration-300">
                            <i data-lucide="facebook" class="w-5 h-5 text-blue-400"></i>
                            <span class="text-sm">Facebook</span>
                        </a>
                        <a href="#" class="flex items-center gap-3 glass-light rounded-xl p-4 hover:bg-primary-500/10 hover:border-primary-500/30 transition-all duration-300">
                            <i data-lucide="youtube" class="w-5 h-5 text-red-400"></i>
                            <span class="text-sm">YouTube</span>
                        </a>
                        <a href="#" class="flex items-center gap-3 glass-light rounded-xl p-4 hover:bg-primary-500/10 hover:border-primary-500/30 transition-all duration-300">
                            <i data-lucide="twitter" class="w-5 h-5 text-sky-400"></i>
                            <span class="text-sm">Twitter</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-3" data-aos="fade-left">
                <div class="glass rounded-2xl p-8" x-data="{ submitted: false, formData: { name: '', email: '', subject: '', message: '' } }">
                    <h3 class="font-heading text-xl uppercase tracking-wider mb-6">Send a Message</h3>

                    <div x-show="!submitted">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-xs uppercase tracking-widest text-gray-400 mb-2">Full Name *</label>
                                <input type="text" x-model="formData.name" placeholder="John Doe"
                                    class="w-full bg-dark-800 border border-white/10 rounded-xl px-5 py-3.5 text-white placeholder-gray-600 focus:outline-none focus:border-primary-500 transition-colors duration-300">
                            </div>
                            <div>
                                <label class="block text-xs uppercase tracking-widest text-gray-400 mb-2">Email Address *</label>
                                <input type="email" x-model="formData.email" placeholder="john@example.com"
                                    class="w-full bg-dark-800 border border-white/10 rounded-xl px-5 py-3.5 text-white placeholder-gray-600 focus:outline-none focus:border-primary-500 transition-colors duration-300">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs uppercase tracking-widest text-gray-400 mb-2">Subject *</label>
                            <select x-model="formData.subject" class="w-full bg-dark-800 border border-white/10 rounded-xl px-5 py-3.5 text-white focus:outline-none focus:border-primary-500 transition-colors duration-300">
                                <option value="" disabled selected class="text-gray-600">Select a subject</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Product Question">Product Question</option>
                                <option value="Sizing Help">Sizing Help</option>
                                <option value="Custom Order">Custom Order</option>
                                <option value="Returns & Exchange">Returns & Exchange</option>
                                <option value="Sponsorship">Sponsorship</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs uppercase tracking-widest text-gray-400 mb-2">Message *</label>
                            <textarea x-model="formData.message" rows="6" placeholder="Tell us how we can help..."
                                class="w-full bg-dark-800 border border-white/10 rounded-xl px-5 py-3.5 text-white placeholder-gray-600 focus:outline-none focus:border-primary-500 transition-colors duration-300 resize-none"></textarea>
                        </div>

                        <button @click="submitted = true"
                                :disabled="!formData.name || !formData.email || !formData.subject || !formData.message"
                                class="w-full bg-gradient-to-r from-primary-500 to-primary-700 text-white py-4 rounded-xl font-heading uppercase tracking-wider text-lg hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic shadow-lg shadow-primary-500/25 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center gap-3">
                            <i data-lucide="send" class="w-5 h-5"></i>
                            Send Message
                        </button>
                    </div>

                    {{-- Success State --}}
                    <div x-show="submitted" x-transition class="text-center py-12">
                        <div class="w-20 h-20 mx-auto bg-green-500/20 rounded-full flex items-center justify-center mb-6">
                            <i data-lucide="check-circle" class="w-10 h-10 text-green-400"></i>
                        </div>
                        <h3 class="font-heading text-2xl uppercase tracking-wider mb-3">Message Sent!</h3>
                        <p class="text-gray-400 mb-6">Thank you for reaching out. We'll get back to you within 24 hours.</p>
                        <button @click="submitted = false; formData = { name: '', email: '', subject: '', message: '' }"
                                class="inline-flex items-center gap-2 text-primary-400 hover:text-primary-300 transition-colors">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                            Send Another Message
                        </button>
                    </div>
                </div>

                {{-- FAQ Quick Links --}}
                <div class="mt-8 glass rounded-2xl p-8">
                    <h3 class="font-heading text-sm uppercase tracking-widest text-gold-400 mb-6">Frequently Asked</h3>

                    <div x-data="{ openFaq: null }" class="space-y-3">
                        @php
                            $faqs = [
                                ['q' => 'How do I choose the right size?', 'a' => 'Use our detailed size guide available on each product page. We recommend measuring your chest, waist, and inseam. If you\'re between sizes, contact us for personalized advice.'],
                                ['q' => 'What is your return policy?', 'a' => 'We offer a 30-day return policy for all unworn items with tags attached. Returns are free within the EU. International return shipping costs are the responsibility of the customer.'],
                                ['q' => 'Do you offer custom sizing?', 'a' => 'Yes! We offer custom sizing on all our racing suits and select jackets. Custom orders typically take 4-6 weeks and include a dedicated fitting consultation.'],
                                ['q' => 'How do I care for my leather gear?', 'a' => 'Clean with a damp cloth and use our recommended leather conditioner every 3-6 months. Store in a cool, dry place away from direct sunlight. Never machine wash.'],
                            ];
                        @endphp

                        @foreach ($faqs as $index => $faq)
                        <div class="border border-white/5 rounded-xl overflow-hidden">
                            <button @click="openFaq = openFaq === {{ $index }} ? null : {{ $index }}"
                                    class="w-full flex items-center justify-between p-4 text-left hover:bg-white/5 transition-colors">
                                <span class="text-sm font-medium">{{ $faq['q'] }}</span>
                                <i data-lucide="chevron-down" class="w-4 h-4 text-gray-500 transition-transform duration-300" :class="openFaq === {{ $index }} ? 'rotate-180' : ''"></i>
                            </button>
                            <div x-show="openFaq === {{ $index }}" x-collapse>
                                <div class="px-4 pb-4">
                                    <p class="text-sm text-gray-400 leading-relaxed">{{ $faq['a'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Map Section --}}
<section class="py-20 bg-dark-900/30 border-t border-white/5" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading text-3xl md:text-4xl font-bold uppercase tracking-wider">
                Find Our <span class="gradient-text">Workshop</span>
            </h2>
        </div>
        <div class="aspect-[16/6] rounded-2xl bg-dark-800 border border-white/5 flex items-center justify-center overflow-hidden relative">
            <div class="text-center">
                <i data-lucide="map" class="w-16 h-16 text-gray-700 mx-auto mb-4"></i>
                <p class="font-heading text-xl uppercase tracking-wider text-gray-500 mb-2">Milan, Italy</p>
                <p class="text-sm text-gray-600">123 Rider's Avenue, 20121</p>
            </div>
            {{-- Animated pin --}}
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-full">
                <div class="w-6 h-6 bg-primary-500 rounded-full animate-bounce shadow-lg shadow-primary-500/50"></div>
                <div class="w-3 h-3 bg-primary-500/30 rounded-full mx-auto -mt-1"></div>
            </div>
        </div>
    </div>
</section>
@endsection
