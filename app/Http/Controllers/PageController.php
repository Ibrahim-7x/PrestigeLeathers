<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getProducts()
    {
        return [
            [
                'id' => 1,
                'name' => 'Apex Pro Racing Suit',
                'slug' => 'apex-pro-racing-suit',
                'price' => 899.99,
                'original_price' => 1199.99,
                'category' => 'racing-suits',
                'category_name' => 'Racing Suits',
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=600&h=800&fit=crop',
                'description' => 'Engineered for the track and built for speed. The Apex Pro Racing Suit features premium cowhide leather with CE Level 2 armor, aerodynamic hump, and perforated panels for maximum ventilation. Race-proven protection meets uncompromising style.',
                'short_description' => 'Premium cowhide leather racing suit with CE Level 2 armor and aerodynamic design.',
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'colors' => [
                    ['name' => 'Stealth Black', 'hex' => '#1a1a1a'],
                    ['name' => 'Racing Red', 'hex' => '#E63946'],
                    ['name' => 'Midnight Blue', 'hex' => '#1d3557'],
                ],
                'rating' => 4.8,
                'reviews_count' => 124,
                'badge' => 'BESTSELLER',
                'in_stock' => true,
                'features' => ['CE Level 2 Armor', '1.3mm Cowhide', 'Perforated Ventilation', 'Speed Hump', 'Knee Sliders'],
            ],
            [
                'id' => 2,
                'name' => 'Vortex Leather Jacket',
                'slug' => 'vortex-leather-jacket',
                'price' => 549.99,
                'original_price' => null,
                'category' => 'jackets',
                'category_name' => 'Leather Jackets',
                'image' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=600&h=800&fit=crop',
                'description' => 'The Vortex Leather Jacket blends classic biker aesthetics with modern protection technology. Crafted from full-grain buffalo leather with D3O armor inserts, this jacket transitions seamlessly from highway cruises to city streets.',
                'short_description' => 'Full-grain buffalo leather jacket with D3O armor inserts for street and highway.',
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'colors' => [
                    ['name' => 'Vintage Brown', 'hex' => '#8B4513'],
                    ['name' => 'Dark Black', 'hex' => '#0a0a0a'],
                ],
                'rating' => 4.9,
                'reviews_count' => 89,
                'badge' => 'NEW',
                'in_stock' => true,
                'features' => ['Full-Grain Buffalo Leather', 'D3O Armor', 'YKK Zippers', 'Thermal Liner', 'Ventilation Zips'],
            ],
            [
                'id' => 3,
                'name' => 'Phantom Riding Pants',
                'slug' => 'phantom-riding-pants',
                'price' => 349.99,
                'original_price' => 449.99,
                'category' => 'pants',
                'category_name' => 'Riding Pants',
                'image' => 'https://images.unsplash.com/photo-1584370848010-d7fe6bc767ec?w=600&h=800&fit=crop',
                'description' => 'Stealth meets safety in the Phantom Riding Pants. Premium leather construction with stretch panels for maximum mobility, CE-approved knee and hip armor, and connection zipper for jacket integration.',
                'short_description' => 'Premium leather riding pants with CE armor and stretch panels for mobility.',
                'sizes' => ['28', '30', '32', '34', '36', '38'],
                'colors' => [
                    ['name' => 'Jet Black', 'hex' => '#111111'],
                ],
                'rating' => 4.6,
                'reviews_count' => 56,
                'badge' => 'SALE',
                'in_stock' => true,
                'features' => ['CE Knee & Hip Armor', 'Stretch Panels', 'Connection Zipper', 'Reflective Details', 'Abrasion Resistant'],
            ],
            [
                'id' => 4,
                'name' => 'Titan Gauntlet Gloves',
                'slug' => 'titan-gauntlet-gloves',
                'price' => 179.99,
                'original_price' => null,
                'category' => 'gloves',
                'category_name' => 'Gloves',
                'image' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=600&h=800&fit=crop',
                'description' => 'The Titan Gauntlet Gloves offer race-level protection with kangaroo leather palms and carbon fiber knuckle protectors. Pre-curved construction ensures a natural grip and reduces fatigue on long rides.',
                'short_description' => 'Race-level kangaroo leather gloves with carbon fiber knuckle protection.',
                'sizes' => ['S', 'M', 'L', 'XL'],
                'colors' => [
                    ['name' => 'Black/Red', 'hex' => '#E63946'],
                    ['name' => 'Black/White', 'hex' => '#ffffff'],
                ],
                'rating' => 4.7,
                'reviews_count' => 203,
                'badge' => null,
                'in_stock' => true,
                'features' => ['Kangaroo Leather', 'Carbon Fiber Knuckles', 'Pre-curved Design', 'Touch Screen Compatible', 'Wrist Closure'],
            ],
            [
                'id' => 5,
                'name' => 'Stealth Rider Boots',
                'slug' => 'stealth-rider-boots',
                'price' => 289.99,
                'original_price' => 329.99,
                'category' => 'boots',
                'category_name' => 'Boots',
                'image' => 'https://images.unsplash.com/photo-1638247025967-b4e38f787b76?w=600&h=800&fit=crop',
                'description' => 'Dominate every ride with the Stealth Rider Boots. Full leather construction with reinforced ankle protection, oil-resistant sole, and waterproof membrane. Engineered for all-day comfort and maximum protection.',
                'short_description' => 'Full leather riding boots with reinforced ankle support and waterproof membrane.',
                'sizes' => ['7', '8', '9', '10', '11', '12', '13'],
                'colors' => [
                    ['name' => 'Matte Black', 'hex' => '#1a1a1a'],
                    ['name' => 'Dark Brown', 'hex' => '#5C4033'],
                ],
                'rating' => 4.5,
                'reviews_count' => 78,
                'badge' => null,
                'in_stock' => true,
                'features' => ['Reinforced Ankles', 'Oil-Resistant Sole', 'Waterproof Membrane', 'Shift Pad', 'Anti-Slip'],
            ],
            [
                'id' => 6,
                'name' => 'Nomad Touring Suit',
                'slug' => 'nomad-touring-suit',
                'price' => 1299.99,
                'original_price' => 1599.99,
                'category' => 'racing-suits',
                'category_name' => 'Racing Suits',
                'image' => 'https://images.unsplash.com/photo-1609873814058-a8928924184a?w=600&h=800&fit=crop',
                'description' => 'Born for the open road. The Nomad Touring Suit combines premium leather craftsmanship with touring-focused features including waterproof lining, multiple ventilation zones, and modular thermal layers.',
                'short_description' => 'Premium touring suit with waterproof lining and modular thermal layers.',
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'colors' => [
                    ['name' => 'Black/Grey', 'hex' => '#333333'],
                    ['name' => 'Black/Orange', 'hex' => '#FF6B35'],
                ],
                'rating' => 4.9,
                'reviews_count' => 45,
                'badge' => 'PREMIUM',
                'in_stock' => true,
                'features' => ['Waterproof Lining', 'Thermal Layers', 'CE Level 2', 'Multiple Pockets', 'Reflective Panels'],
            ],
            [
                'id' => 7,
                'name' => 'Blaze Summer Jacket',
                'slug' => 'blaze-summer-jacket',
                'price' => 429.99,
                'original_price' => null,
                'category' => 'jackets',
                'category_name' => 'Leather Jackets',
                'image' => 'https://images.unsplash.com/photo-1520975954732-35dd22299614?w=600&h=800&fit=crop',
                'description' => 'Stay cool without compromising safety. The Blaze Summer Jacket features perforated leather panels, mesh lining, and removable CE armor. Perfect for warm-weather riding with unmatched airflow.',
                'short_description' => 'Perforated leather jacket with mesh lining for warm-weather riding.',
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'colors' => [
                    ['name' => 'Charcoal', 'hex' => '#36454F'],
                    ['name' => 'Tan', 'hex' => '#D2B48C'],
                ],
                'rating' => 4.4,
                'reviews_count' => 67,
                'badge' => null,
                'in_stock' => true,
                'features' => ['Perforated Leather', 'Mesh Lining', 'Removable CE Armor', 'Zippered Vents', 'Lightweight'],
            ],
            [
                'id' => 8,
                'name' => 'Fury Race Gloves',
                'slug' => 'fury-race-gloves',
                'price' => 219.99,
                'original_price' => 259.99,
                'category' => 'gloves',
                'category_name' => 'Gloves',
                'image' => 'https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=600&h=800&fit=crop',
                'description' => 'Precision engineered for MotoGP-level performance. The Fury Race Gloves feature a kangaroo leather construction, titanium sliders, and advanced palm protection system for maximum track confidence.',
                'short_description' => 'MotoGP-level kangaroo leather gloves with titanium sliders.',
                'sizes' => ['S', 'M', 'L', 'XL'],
                'colors' => [
                    ['name' => 'Black/Neon', 'hex' => '#39FF14'],
                    ['name' => 'Black/Red', 'hex' => '#E63946'],
                ],
                'rating' => 4.8,
                'reviews_count' => 156,
                'badge' => 'SALE',
                'in_stock' => true,
                'features' => ['Kangaroo Leather', 'Titanium Sliders', 'Palm Protection', 'Pre-curved', 'Ventilated'],
            ],
            [
                'id' => 9,
                'name' => 'Shadow Ankle Boots',
                'slug' => 'shadow-ankle-boots',
                'price' => 199.99,
                'original_price' => null,
                'category' => 'boots',
                'category_name' => 'Boots',
                'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600&h=800&fit=crop',
                'description' => 'Urban style meets rider protection. The Shadow Ankle Boots look as great off the bike as they do on it, with hidden ankle armor, non-slip soles, and premium leather construction.',
                'short_description' => 'Urban-styled riding boots with hidden ankle armor and premium leather.',
                'sizes' => ['7', '8', '9', '10', '11', '12'],
                'colors' => [
                    ['name' => 'Obsidian', 'hex' => '#0a0a0a'],
                    ['name' => 'Espresso', 'hex' => '#4A2C2A'],
                ],
                'rating' => 4.6,
                'reviews_count' => 92,
                'badge' => 'NEW',
                'in_stock' => true,
                'features' => ['Hidden Ankle Armor', 'Non-slip Sole', 'Premium Leather', 'Reinforced Toe', 'Casual Look'],
            ],
            [
                'id' => 10,
                'name' => 'Maverick Cafe Racer Jacket',
                'slug' => 'maverick-cafe-racer-jacket',
                'price' => 649.99,
                'original_price' => null,
                'category' => 'jackets',
                'category_name' => 'Leather Jackets',
                'image' => 'https://images.unsplash.com/photo-1521223890158-f9f7c3d5d504?w=600&h=800&fit=crop',
                'description' => 'A tribute to the golden era of motorcycling. The Maverick Cafe Racer Jacket features hand-finished leather, vintage-inspired design with modern CE armor, and a tailored fit that turns heads everywhere.',
                'short_description' => 'Hand-finished leather cafe racer jacket with vintage design and modern protection.',
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'colors' => [
                    ['name' => 'British Racing Green', 'hex' => '#004225'],
                    ['name' => 'Heritage Brown', 'hex' => '#6F4E37'],
                    ['name' => 'Classic Black', 'hex' => '#111111'],
                ],
                'rating' => 4.9,
                'reviews_count' => 211,
                'badge' => 'BESTSELLER',
                'in_stock' => true,
                'features' => ['Hand-Finished Leather', 'Vintage Design', 'CE Armor', 'Tailored Fit', 'Snap Collar'],
            ],
            [
                'id' => 11,
                'name' => 'Aero Sport Pants',
                'slug' => 'aero-sport-pants',
                'price' => 399.99,
                'original_price' => null,
                'category' => 'pants',
                'category_name' => 'Riding Pants',
                'image' => 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop',
                'description' => 'Track-ready leather pants with aerodynamic design, perforated panels for ventilation, and advanced slider systems. Features full CE Level 2 certification and connection zipper compatibility.',
                'short_description' => 'Track-ready leather pants with aerodynamic design and CE Level 2 certification.',
                'sizes' => ['28', '30', '32', '34', '36'],
                'colors' => [
                    ['name' => 'Black', 'hex' => '#0a0a0a'],
                    ['name' => 'Black/Red', 'hex' => '#E63946'],
                ],
                'rating' => 4.7,
                'reviews_count' => 38,
                'badge' => null,
                'in_stock' => true,
                'features' => ['CE Level 2', 'Aerodynamic Design', 'Perforated Panels', 'Slider System', 'Connection Zipper'],
            ],
            [
                'id' => 12,
                'name' => 'Defender Back Protector',
                'slug' => 'defender-back-protector',
                'price' => 129.99,
                'original_price' => 159.99,
                'category' => 'accessories',
                'category_name' => 'Accessories',
                'image' => 'https://images.unsplash.com/photo-1611312449408-fcece27cdbb7?w=600&h=800&fit=crop',
                'description' => 'Maximum spinal protection with CE Level 2 certified back protector. Ergonomic design conforms to your body shape with ventilated construction for all-day comfort.',
                'short_description' => 'CE Level 2 ergonomic back protector with ventilated construction.',
                'sizes' => ['S', 'M', 'L', 'XL'],
                'colors' => [
                    ['name' => 'Black', 'hex' => '#1a1a1a'],
                ],
                'rating' => 4.5,
                'reviews_count' => 165,
                'badge' => 'SALE',
                'in_stock' => true,
                'features' => ['CE Level 2', 'Ergonomic Design', 'Ventilated', 'Lightweight', 'Multi-Fit'],
            ],
        ];
    }

    private function getCategories()
    {
        return [
            ['slug' => 'racing-suits', 'name' => 'Racing Suits', 'description' => 'Track-proven protection for the ultimate ride', 'icon' => 'suit', 'count' => 2, 'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=800&h=600&fit=crop'],
            ['slug' => 'jackets', 'name' => 'Leather Jackets', 'description' => 'Style and safety engineered as one', 'icon' => 'jacket', 'count' => 3, 'image' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=800&h=600&fit=crop'],
            ['slug' => 'pants', 'name' => 'Riding Pants', 'description' => 'Move freely with full protection', 'icon' => 'pants', 'count' => 2, 'image' => 'https://images.unsplash.com/photo-1584370848010-d7fe6bc767ec?w=800&h=600&fit=crop'],
            ['slug' => 'gloves', 'name' => 'Gloves', 'description' => 'Precision grip with armored confidence', 'icon' => 'gloves', 'count' => 2, 'image' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=800&h=600&fit=crop'],
            ['slug' => 'boots', 'name' => 'Boots', 'description' => 'Ground-up protection for every ride', 'icon' => 'boots', 'count' => 2, 'image' => 'https://images.unsplash.com/photo-1638247025967-b4e38f787b76?w=800&h=600&fit=crop'],
            ['slug' => 'accessories', 'name' => 'Accessories', 'description' => 'Complete your gear setup', 'icon' => 'accessories', 'count' => 1, 'image' => 'https://images.unsplash.com/photo-1611312449408-fcece27cdbb7?w=800&h=600&fit=crop'],
        ];
    }

    private function getTestimonials()
    {
        return [
            ['name' => 'Marcus Reed', 'role' => 'Professional Racer', 'text' => 'The Apex Pro suit saved me in a 120mph highside. The armor held up perfectly and I walked away without a scratch. Prestige Leathers is the only brand I trust on track.', 'rating' => 5, 'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face'],
            ['name' => 'Elena Vasquez', 'role' => 'Adventure Rider', 'text' => 'I\'ve ridden through 15 countries in my Nomad Touring Suit. Rain, sun, cold — it handles everything. The quality of the leather only gets better with age.', 'rating' => 5, 'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&h=150&fit=crop&crop=face'],
            ['name' => 'James Chen', 'role' => 'Daily Commuter', 'text' => 'The Maverick Cafe Racer Jacket turns heads everywhere I go. It\'s comfortable enough for my daily commute and tough enough for weekend canyon rides.', 'rating' => 5, 'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face'],
            ['name' => 'Sarah Mitchell', 'role' => 'Track Day Enthusiast', 'text' => 'Finally found a brand that makes gear for women that actually fits properly. The custom sizing options from Prestige Leathers are game-changing.', 'rating' => 5, 'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=face'],
        ];
    }

    public function home()
    {
        $products = $this->getProducts();
        $categories = $this->getCategories();
        $testimonials = $this->getTestimonials();
        $featuredProducts = array_filter($products, fn($p) => in_array($p['badge'], ['BESTSELLER', 'NEW', 'PREMIUM']));
        $saleProducts = array_filter($products, fn($p) => $p['original_price'] !== null);

        return view('home', compact('products', 'categories', 'testimonials', 'featuredProducts', 'saleProducts'));
    }

    public function shop(Request $request)
    {
        $products = $this->getProducts();
        $categories = $this->getCategories();
        $selectedCategory = $request->query('category');

        if ($selectedCategory) {
            $products = array_filter($products, fn($p) => $p['category'] === $selectedCategory);
        }

        return view('shop', compact('products', 'categories', 'selectedCategory'));
    }

    public function product($slug)
    {
        $products = $this->getProducts();
        $product = collect($products)->firstWhere('slug', $slug);

        if (!$product) {
            abort(404);
        }

        $relatedProducts = array_filter($products, fn($p) => $p['category'] === $product['category'] && $p['id'] !== $product['id']);

        return view('product-detail', compact('product', 'relatedProducts'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
