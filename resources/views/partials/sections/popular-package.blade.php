@php
// Get all active packages grouped by category
$categories = \App\Models\Package::where('is_active', true)
    ->orderBy('sort_order', 'asc')
    ->get()
    ->groupBy('category')
    ->map(function ($packages) {
        return $packages->take(3)->map(function ($package) {
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
    'zanzibar' => 'honeymoon',
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

<section class="py-6 md:py-6 lg:py-6 bg-white" x-data="{ activeTab: '{{ $tabs[0]['id'] }}' }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-3">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Popular Packages</h2>
         @include('partials.divider')
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our most sought-after experiences in Africa's most breathtaking destinations</p>
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
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                    @foreach($tab['packages'] as $package)
                    <div class="group relative bg-white rounded-xl border-gray-300 overflow-hidden transition-all duration-300  shadow-lg">
                        <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                            <img src="{{'storage/'. $package['image'] }}" alt="{{ $package['title'] }}" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-semibold text-gray-900">{{ $package['title'] }}</h3>
                            </div>
                            
                            <p class="text-gray-600 mb-4 text-sm flex items-center">
                                <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                {{ $package['location'] }}
                            </p>
                            
                            <div class="flex justify-between items-center border-t border-gray-100 pt-4 mt-4">
                                <div>
                                    <span class="text-2xl font-bold text-gray-900">${{ number_format($package['price']) }}</span>
                                    <span class="text-gray-500 text-sm ml-1">/ person</span>
                                </div>
                                <span class="text-gray-500 text-sm">{{ $package['duration'] }}</span>
                            </div>
                            
                            <div class="mt-6">
                                <a href="/packages/{{ $package['slug'] }}" class="w-full inline-flex justify-center items-center px-6 py-3 border ring-offset-background border-transparent text-white text-lg font-medium rounded-md outline-double outline-1 outline-gray-300  bg-black hover:bg-black transition-colors duration-200" wire:navigate.hover>
                                    Book Now
                                    <svg class="ml-2 -mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- View All Button -->
                <div class="mt-10 text-center">
                    <a href="{{ route('all-packages', ['category' => $tab['name']]) }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-black transition-colors duration-200" wire:navigate.hover>
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
