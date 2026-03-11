@extends('layouts.app')
@section('title', 'About Us | Prestige Leathers')

@section('content')
{{-- Hero --}}
<section class="pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-primary-900/20 to-dark-950"></div>
    <div class="absolute top-1/4 left-1/3 w-96 h-96 bg-primary-500/5 rounded-full blur-[128px]"></div>

    <div class="max-w-7xl mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Our Story</span>
            <h1 class="font-heading text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wider mb-6">
                Crafted for the <span class="gradient-text">Fearless</span>
            </h1>
            <p class="text-gray-400 text-lg leading-relaxed">
                For over 25 years, Prestige Leathers has been at the forefront of motorcycle gear innovation. Born from a passion for riding and an obsession with quality, we create gear that protects, performs, and inspires.
            </p>
        </div>
    </div>
</section>

{{-- Story Section --}}
<section class="py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="aspect-[4/5] rounded-2xl bg-gradient-to-br from-dark-800 to-dark-900 border border-white/5 flex items-center justify-center relative overflow-hidden group">
                    <div class="text-center">
                        <div class="w-32 h-32 mx-auto mb-6 rounded-full bg-gradient-to-br from-primary-500/20 to-gold-500/20 flex items-center justify-center">
                            <i data-lucide="heart" class="w-16 h-16 text-primary-400"></i>
                        </div>
                        <p class="font-heading text-xl uppercase tracking-wider text-gray-500">Since 2001</p>
                    </div>
                    {{-- Animated corner accents --}}
                    <div class="absolute top-4 left-4 w-12 h-12 border-t-2 border-l-2 border-primary-500/30 rounded-tl-lg"></div>
                    <div class="absolute bottom-4 right-4 w-12 h-12 border-b-2 border-r-2 border-primary-500/30 rounded-br-lg"></div>
                </div>
            </div>

            <div data-aos="fade-left">
                <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">The Beginning</span>
                <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold uppercase tracking-wider mb-6">
                    Born from <span class="gradient-text">Passion</span>
                </h2>
                <p class="text-gray-400 leading-relaxed mb-6">
                    In a small workshop in Milan, Italy, master craftsman Marco Prestige began creating custom leather suits for local racers. His obsession with perfect stitching, premium materials, and rider safety quickly gained attention from professional riders across Europe.
                </p>
                <p class="text-gray-400 leading-relaxed mb-6">
                    What started as one man's passion has grown into a globally recognized brand, but our core principles remain unchanged: every piece of gear that bears the Prestige name must meet the highest standards of craftsmanship, safety, and style.
                </p>
                <p class="text-gray-400 leading-relaxed mb-8">
                    Today, Prestige Leathers supplies gear to championship-winning racers, adventure riders, and daily commuters in over 40 countries. Each product is still designed, cut, and finished by hand in our Italian workshop.
                </p>

                <div class="grid grid-cols-2 gap-6">
                    <div class="glass rounded-xl p-6">
                        <div class="font-heading text-3xl font-bold gradient-text mb-1">2001</div>
                        <div class="text-xs uppercase tracking-widest text-gray-500">Founded</div>
                    </div>
                    <div class="glass rounded-xl p-6">
                        <div class="font-heading text-3xl font-bold gradient-text mb-1">40+</div>
                        <div class="text-xs uppercase tracking-widest text-gray-500">Countries</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Values Section --}}
<section class="py-20 lg:py-32 bg-dark-900/30">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">What We Believe</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Our <span class="gradient-text">Values</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 gsap-stagger">
            <div class="glass rounded-2xl p-8 card-hover text-center">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-primary-500/10 to-primary-500/5 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="shield" class="w-8 h-8 text-primary-400"></i>
                </div>
                <h3 class="font-heading text-xl uppercase tracking-wider mb-3">Safety First</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Every product exceeds international safety standards. We use only CE-certified armor and impact-tested materials, because your life is worth the best protection.</p>
            </div>

            <div class="glass rounded-2xl p-8 card-hover text-center">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-gold-500/10 to-gold-500/5 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="gem" class="w-8 h-8 text-gold-400"></i>
                </div>
                <h3 class="font-heading text-xl uppercase tracking-wider mb-3">Uncompromising Quality</h3>
                <p class="text-gray-400 text-sm leading-relaxed">We source the finest leathers from Italian tanneries and use only premium hardware. Every product undergoes rigorous quality checks before it reaches you.</p>
            </div>

            <div class="glass rounded-2xl p-8 card-hover text-center">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-blue-500/10 to-blue-500/5 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="sparkles" class="w-8 h-8 text-blue-400"></i>
                </div>
                <h3 class="font-heading text-xl uppercase tracking-wider mb-3">Innovation</h3>
                <p class="text-gray-400 text-sm leading-relaxed">We continuously push boundaries in material science and ergonomic design. Our R&D team works with racers to develop next-generation riding gear.</p>
            </div>

            <div class="glass rounded-2xl p-8 card-hover text-center">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-green-500/10 to-green-500/5 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="leaf" class="w-8 h-8 text-green-400"></i>
                </div>
                <h3 class="font-heading text-xl uppercase tracking-wider mb-3">Sustainability</h3>
                <p class="text-gray-400 text-sm leading-relaxed">We're committed to responsible sourcing and sustainable practices. Our leathers come from ethical suppliers and our production minimizes waste.</p>
            </div>

            <div class="glass rounded-2xl p-8 card-hover text-center">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-purple-500/10 to-purple-500/5 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="users" class="w-8 h-8 text-purple-400"></i>
                </div>
                <h3 class="font-heading text-xl uppercase tracking-wider mb-3">Community</h3>
                <p class="text-gray-400 text-sm leading-relaxed">We're riders ourselves. We sponsor racing events, support new talent, and host riding meetups because the riding community is at the heart of everything we do.</p>
            </div>

            <div class="glass rounded-2xl p-8 card-hover text-center">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-orange-500/10 to-orange-500/5 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="wrench" class="w-8 h-8 text-orange-400"></i>
                </div>
                <h3 class="font-heading text-xl uppercase tracking-wider mb-3">Handcrafted</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Every suit takes over 72 hours of skilled handiwork. No mass production, no shortcuts. Each piece is made with the same care as if the craftsman were wearing it.</p>
            </div>
        </div>
    </div>
</section>

{{-- Timeline --}}
<section class="py-20 lg:py-32 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">Milestones</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Our <span class="gradient-text">Journey</span>
            </h2>
        </div>

        <div class="relative">
            {{-- Center Line --}}
            <div class="absolute left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-primary-500/50 via-primary-500/20 to-transparent hidden md:block"></div>

            @php
                $milestones = [
                    ['year' => '2001', 'title' => 'Workshop Founded', 'desc' => 'Marco Prestige opens his first leather workshop in Milan, creating custom suits for local racers.'],
                    ['year' => '2005', 'title' => 'First Pro Contract', 'desc' => 'Signed first deal with a MotoGP team, putting Prestige on the international stage.'],
                    ['year' => '2010', 'title' => 'Global Expansion', 'desc' => 'Launched online store and expanded distribution to 20+ countries worldwide.'],
                    ['year' => '2015', 'title' => 'Innovation Lab', 'desc' => 'Opened dedicated R&D facility for next-gen materials and safety technology.'],
                    ['year' => '2020', 'title' => 'CE Level 2 Range', 'desc' => 'Entire product line achieves CE Level 2 certification, the highest standard.'],
                    ['year' => '2026', 'title' => 'The Future', 'desc' => 'Launching revolutionary smart-leather technology with integrated impact sensors.'],
                ];
            @endphp

            @foreach ($milestones as $index => $milestone)
            <div class="flex items-center gap-8 mb-12 {{ $index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse' }}" data-aos="{{ $index % 2 === 0 ? 'fade-right' : 'fade-left' }}">
                <div class="flex-1 {{ $index % 2 === 0 ? 'md:text-right' : 'md:text-left' }}">
                    <div class="glass rounded-xl p-6 inline-block card-hover">
                        <span class="font-heading text-2xl font-bold gradient-text">{{ $milestone['year'] }}</span>
                        <h4 class="font-heading text-lg uppercase tracking-wider mt-1 mb-2">{{ $milestone['title'] }}</h4>
                        <p class="text-gray-400 text-sm">{{ $milestone['desc'] }}</p>
                    </div>
                </div>
                <div class="hidden md:flex w-4 h-4 bg-primary-500 rounded-full flex-shrink-0 relative z-10 shadow-lg shadow-primary-500/50"></div>
                <div class="flex-1 hidden md:block"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Stats Bar --}}
<section class="py-20 bg-dark-900/50 border-y border-white/5">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 gsap-stagger">
            <div class="text-center" data-aos="fade-up">
                <div class="font-heading text-4xl md:text-5xl font-bold gradient-text mb-2">25+</div>
                <div class="text-sm uppercase tracking-widest text-gray-500">Years of Excellence</div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="font-heading text-4xl md:text-5xl font-bold gradient-text mb-2">50K+</div>
                <div class="text-sm uppercase tracking-widest text-gray-500">Riders Worldwide</div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="font-heading text-4xl md:text-5xl font-bold gradient-text mb-2">200+</div>
                <div class="text-sm uppercase tracking-widest text-gray-500">Products</div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="font-heading text-4xl md:text-5xl font-bold gradient-text mb-2">15</div>
                <div class="text-sm uppercase tracking-widest text-gray-500">Racing Titles</div>
            </div>
        </div>
    </div>
</section>

{{-- Team Section --}}
<section class="py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block text-xs uppercase tracking-[0.3em] text-primary-400 font-medium mb-4">The Crew</span>
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wider">
                Meet the <span class="gradient-text">Team</span>
            </h2>
        </div>

        @php
            $team = [
                ['name' => 'Marco Prestige', 'role' => 'Founder & Master Craftsman', 'initial' => 'MP'],
                ['name' => 'Elena Rossi', 'role' => 'Head of Design', 'initial' => 'ER'],
                ['name' => 'David Kang', 'role' => 'R&D Director', 'initial' => 'DK'],
                ['name' => 'Sofia Andersson', 'role' => 'Racing Division Lead', 'initial' => 'SA'],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 gsap-stagger">
            @foreach ($team as $member)
            <div class="text-center group card-hover">
                <div class="glass rounded-2xl p-8">
                    <div class="w-24 h-24 mx-auto bg-gradient-to-br from-primary-500 to-gold-500 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="font-heading text-2xl font-bold text-white">{{ $member['initial'] }}</span>
                    </div>
                    <h4 class="font-heading text-lg uppercase tracking-wider mb-1">{{ $member['name'] }}</h4>
                    <p class="text-sm text-gray-500">{{ $member['role'] }}</p>
                    <div class="flex justify-center gap-3 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="text-gray-500 hover:text-primary-400 transition-colors"><i data-lucide="linkedin" class="w-4 h-4"></i></a>
                        <a href="#" class="text-gray-500 hover:text-primary-400 transition-colors"><i data-lucide="twitter" class="w-4 h-4"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 lg:py-32 bg-gradient-to-r from-primary-900/30 via-dark-950 to-dark-950 border-t border-white/5">
    <div class="max-w-4xl mx-auto px-4 lg:px-8 text-center" data-aos="fade-up">
        <h2 class="font-heading text-4xl md:text-5xl font-bold uppercase tracking-wider mb-6">
            Ready to Experience <span class="gradient-text">Prestige</span>?
        </h2>
        <p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
            Discover why thousands of riders choose Prestige Leathers for their most important gear.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('shop') }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-primary-500 to-primary-700 text-white px-10 py-4 rounded-xl font-heading uppercase tracking-wider hover:from-primary-600 hover:to-primary-800 transition-all duration-300 btn-magnetic shadow-lg shadow-primary-500/25">
                Shop Collection
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 glass text-white px-10 py-4 rounded-xl font-heading uppercase tracking-wider hover:bg-white/10 transition-all duration-300">
                Get in Touch
            </a>
        </div>
    </div>
</section>
@endsection
