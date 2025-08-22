@if(isset($packages) && count($packages) > 0)
<div class="related-packages" style="padding: 3rem 0; margin: 0 auto;">
    <div style="width: 100%; display: flex; justify-content: center;">
        <div style="width: 100%; max-width: 100%; padding: 0 15px;">
            @if(isset($title) || isset($viewAllLink))
            <div style="display: flex; justify-content:center; align-items: center; margin-bottom: 2rem; padding: 0 15px;">
                @if(isset($title))
                <h2 style="font-size: clamp(1.25rem, 6vw, 1.75rem); color: #333; font-weight: 600; margin: 0;">{{ $title }}</h2>
                @endif
            </div>
            @endif
            
            <div class="package-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 300px)); gap: 2rem; justify-content: center; position: relative; z-index: 10; width: 100%;">
                @foreach($packages as $package)
                <a href="{{ $package['url'] ?? '#' }}" class="package-card" style="display: flex; flex-direction: column; height: 100%; text-decoration: none; color: inherit; background-color: #f5f2ed; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <div style="height: 200px; overflow: hidden; flex-shrink: 0;">
                        <img src="{{  Storage::url($package['image'])}}" 
                             alt="{{ $package['title'] }}" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                    </div>
                    <div style="padding: 1.5rem; display: flex; flex-direction: column; flex-grow: 1;">
                        <div style="flex-grow: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.75rem;">
                                <h3 style="font-size: 1.25rem; color: #222; margin: 0; margin-right: 1rem;">{{ $package['title'] }}</h3>
                               
                            </div>
                            @if(isset($package['description']))
                            <p style="color: #333; font-size: 0.95rem; line-height: 1.5; margin: 0 0 1rem 0; min-height: 4.5em; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                {{ $package['description'] }}
                            </p>
                            
                            @endif
                            
                        </div>
                        <div style="border-top: 1px solid #e0e0e0; padding-top: 0.75rem; margin-top: auto; display: flex; justify-content: center; align-items: center; font-size: 0.9rem; color: #666;">
    
                            <span class="inline-flex items-center px-6 pb-2 pt-1 border border-transparent text-center font-medium rounded-md shadow-sm text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-200">View Package </span>

                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .related-packages > div {
            width: 100% !important;
            max-width: 100% !important;
            padding: 0 0px;
        }
    }
    
    @media (max-width: 768px) {
        .package-grid {
            grid-template-columns: minmax(280px, 400px) !important;
            justify-content: center !important;
            gap: 1.5rem !important;
            padding: 0 15px;
        }
    
        .related-packages {
            padding: 2rem 0 !important;
        }
    }
    
    /* Match main content width */
    @media (min-width: 1024px) {
        .related-packages > div > div {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }
    }
    
    /* Hover effects */
    .package-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .package-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .package-card-link {
        color: inherit;
        text-decoration: none;
        display: block;
        height: 100%;
    }
    
    .package-card {
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .package-card-link:hover .package-card {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
</style>
@endpush
@endif
