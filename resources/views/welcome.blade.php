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
            @include('partials.sections.popular-package')
            @include('partials.sections.text-image-without-rounded')
            @include('partials.sections.text-image-without-rounded2')
            @include('partials.sections.Our-partner')
            @include('partials.sections.get-in-touch')
    
</x-layouts.app>
