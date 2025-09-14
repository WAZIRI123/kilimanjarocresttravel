@php
// Get all active packages grouped by category
$categories = \App\Models\Package::where('is_active', true)
    ->orderBy('sort_order', 'asc')
    ->get()
    ->groupBy('category')
    ->map(function ($packages) {
        return $packages->map(function ($package) {
            return [
                'id' => $package->id,
                'title' => $package->title,
                'location' => $package->country,
                'price' => $package->price,
                'duration' => $package->duration,
                'image' => $package->featured_image,
                'rating' => 4.8, // Default rating, you can add this to your Package model if needed
                'reviews' => 0, // Default reviews count, add to Package model if needed
                'slug' => $package->slug,
                'description' => $package->short_description
            ];
        })->toArray();
    });

// Define the tabs structure based on the categories
$tabs = [];
$categoryNames = [
    'safari' => 'safari',
    'kilimanjaro' => 'kilimanjaro',
    'zanzibar' => 'zanzibar',
    // Add more category mappings as needed
];

foreach ($categoryNames as $id => $name) {
    if (isset($categories[$name])) {
        $tabs[] = [
            'id' => $id,
            'name' => $name,
            'packages' => $categories[$name]
        ];
    }
}
@endphp

@if(count($tabs) > 0)

<section class="py-6 md:py-6 lg:py-6" x-data="{ activeTab: '{{ $tabs[0]['id'] }}' }" style="background-image: url({{ asset('images/image-used/bg.AVIF') }}) !important; background-size: cover !important; background-position: center !important;">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-3" data-aos="fade-up">
            <h2 class="text-3xl text-white font-bold text-gray-900 mb-4" data-aos="fade-up">Popular Packages</h2>
            <p class="text-xl text-white max-w-2xl mx-auto section-subtitle" data-aos="fade-up">Discover our most sought-after experiences in Africa's most breathtaking destinations</p>
        </div>
        
        <!-- Tabs Navigation -->
        <div class="flex justify-center mb-6">
            <div class="inline-flex outline outline-1 outline-gray-300 rounded-lg border border-gray-200 p-1 bg-gray-50">
                @foreach($tabs as $tab)
                    <button 
                        @click="activeTab = '{{ $tab['id'] }}'"
                        :class="{ 'bg-white shadow-sm text-gray-600': activeTab === '{{ $tab['id'] }}', 'text-gray-600 hover:text-gray-700': activeTab !== '{{ $tab['id'] }}' }"
                        class="px-6 py-3 text-sm font-medium rounded-md transition-colors duration-200 focus:outline-none"
                    >
                        {{ $tab['name'] }}
                    </button>
                @endforeach
            </div>
        </div>
        
        <!-- Tab Content -->
        @foreach($tabs as $tab)
            <div x-show="activeTab === '{{ $tab['id'] }}'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                <div class="flex overflow-x-auto pb-6 -mx-4 px-4 scrollbar-hide">
                    <div class="flex space-x-6">
                        @foreach($tab['packages'] as $package)
                        <div class="group relative bg-white rounded-sm border border-gray-300 overflow-hidden transition-all duration-300 shadow-lg flex-shrink-0 w-80" data-aos="fade-up">
                            <!-- Image Container -->
                            <div class="relative">
                                <a href="{{ route('package.show', $package['slug']) }}" class="group">
                                    <div class="relative">
                                        <img src="{{'storage/'. $package['image'] }}" alt="{{ $package['title'] }}" class="w-full h-120 object-cover transition-transform duration-500 group-hover:scale-105">
                                        <!-- Base Overlay -->
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                                        
                                        <!-- Hover Overlay (Darker) -->
                                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-all duration-300">
                                            <div class="p-6 flex flex-col justify-between h-full">
                                                <!-- Top Content -->
                                                <div class="flex justify-end">
                                                    <div class="">
                                                        <span class="text-sm font-medium text-white">${{ number_format($package['price']) }}</span>
                                                    </div>
                                                </div>

                                                <!-- Bottom Content -->
                                                <div>
                                                    <h3 class="text-2xl font-bold text-white mb-2" style="font-family: 'brandon-bold-webfont', sans-serif; font-weight: 700; font-size: 1rem !important; letter-spacing: 1.5px !important;  line-height: 22.1px !important; text-transform:uppercase; !important;">{{ $package['title'] }}</h3>
                                                    
                                                    <!-- Package Description (Hover Only) -->
                                                    <div class="max-h-0 overflow-hidden group-hover:max-h-20 transition-all duration-300 ease-in-out">
                                                        <p class="section-subtitle text-gray-300 text-xl leading-relaxed line-clamp-3 mb-2">
                                                            {{ $package['description'] ?? 'Experience the adventure of a lifetime with our exclusive package.' }}
                                                        </p>
                                                    </div>

                                                    <!-- Book Now Button -->
                                                    <a href="/packages/{{ $package['slug'] }}" class="inline-block mt-2 bg-transparent hover:bg-[#444] text-white border border-white px-3 py-2 rounded-sm font-medium transition-colors text-sm text-center" style="font-family: brandon-bold-webfont, sans-serif; font-size: 0.8rem !important; letter-spacing: 1.84px !important; text-transform: uppercase\ !important; font-weight: normal !important;">
                                                        Explore Package
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- View All Button -->
                <div class="mt-5 mb-5 text-center">
                    <a href="{{ route('all-packages', ['category' => $tab['name']]) }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-black transition-colors duration-200" style="font-family: 'brandon-bold-webfont', sans-serif; font-weight: 400; font-size: 1.2rem !important; letter-spacing: 1.84px !important; text-transform: capitalize !important;">
                        View All {{ $tab['name'] }} Packages
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endif
