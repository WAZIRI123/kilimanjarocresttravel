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
                'slug' => $package->slug
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

<section class="py-6 md:py-6 lg:py-6 bg-[#f9f9f9]" x-data="{ activeTab: '{{ $tabs[0]['id'] }}' }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-3" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 section-title">Popular Packages</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto section-subtitle">Discover our most sought-after experiences in Africa's most breathtaking destinations</p>
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
                        <div class="group relative bg-white rounded-sm border border-gray-300 overflow-hidden transition-all duration-300 shadow-lg flex-shrink-0 w-80">
                            <!-- Image Container -->
                            <div class="relative" data-aos="fade-up">
                            <a href="{{ route('package.show', $package['slug']) }}">
                                <img src="{{'storage/'. $package['image'] }}" alt="{{ $package['title'] }}" class="w-full h-120 object-cover transition-transform duration-500 group-hover:scale-105">
                                <!-- Text Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent p-6 flex flex-col justify-between">
                                    <!-- Top Content -->
                                    <div class="flex justify-end">
                                        <!-- Price and Duration Badge -->
                                        <div class="bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full flex items-center space-x-2">
                                            <span class="text-sm font-medium text-gray-900">${{ number_format($package['price']) }}</span>
                                        </div>
                                    </div>

                                    <!-- Bottom Content -->
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2" style="font-family: 'brandon-bold-webfont', sans-serif; font-weight: 400; font-size: 1.4375rem !important; letter-spacing: 1.84px !important;  text-transform: capitalize; !important;">{{ $package['title'] }}</h3>
                                        <!-- Book Now Button -->
                                        
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
