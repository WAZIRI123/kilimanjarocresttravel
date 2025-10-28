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
                @include('partials.sections.grandezza1')
            </div>
            <div id="next-section">
                @include('partials.sections.grandezza2')
            </div>
            <div id="next-section">
                @include('partials.sections.grandezza3')
            </div>
            <div id="next-section">
                @include('partials.sections.grandezza4')
            </div>
    
</x-layouts.app>
