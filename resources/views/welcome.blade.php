<x-layouts.app>
    <div class="relative flex min-h-screen flex-col">
        <div class="flex-1">
            @include('partials.sections.hero')
            
            @php
            $packages = \App\Models\Package::where('is_featured', true)
                ->where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->take(3)
                ->get();
            @endphp
             
            <div id="next-section">
                @include('partials.sections.section-after-hero')
            </div>
            @include('partials.sections._destinations-grid')
            @include('partials.sections.text-image2')
            @include('partials.sections.popular-package')
            @include('partials.sections.Our-partner')
    <section class="py-6 md:py-6 lg:py-6 bg-white" style="background-color: #f5f5D5;" wire:ignore.self>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-3">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                @include('partials.divider')
            </div>
            <div class="max-h-96 overflow-y-auto">
                <!-- Client testimonials content will go here -->
                <div class="p-0">
                   <span class="40a07049806bb">&nbsp;</span>
                </div>
            </div>
        </div>
       
    </section>

</x-layouts.app>
