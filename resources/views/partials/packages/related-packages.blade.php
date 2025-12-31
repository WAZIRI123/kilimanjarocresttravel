@if(isset($packages) && count($packages) > 0)
<div class="related-packages" style="padding: 3rem 0; margin: 0 auto;">
    <div style="width: 100%; display: flex; justify-content: center;">
        <div style="width: 100%; max-width: 100%; padding: 0 15px;">
            @if(isset($title) || isset($viewAllLink))
            <div style="display: flex; justify-content:center; align-items: center; margin-bottom: 2rem; padding: 0 0px;">
                @if(isset($title))
                 <h2 style="font-size: 1.8rem; color: #2c3e50; margin-bottom: 5px; padding-left: 15px; position: relative;">
{{ $title }}
    <span style="position: absolute; bottom: -4px; left: 15px; width: 8rem; height: 4px; background-color: #E7247A; content: '';"></span>
</h2>
                @endif
            </div>
            @endif
            
            <div class="grid grid-cols-1 mx-auto sm:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10 w-[100%] justify-items-center">
                @foreach($packages as $package)
                <div class="package-card" style="position: relative; width: 100%; max-width: 400px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <a href="{{ $package['url'] ?? route('package.show', $package['slug']) }}" style="text-decoration: none; color: inherit;">
                        <!-- Image Container with Overlay -->
                        <div style="position: relative; height: 250px; overflow: hidden;">
                            <img src="{{ $package['image'] ? Storage::url($package['image']) :  Storage::url($package['featured_image']) }}" 
                                 alt="{{ $package['title'] }}" 
                                 style="width: 100%; height: 100%; object-fit: cover;">
                            
                            <!-- Featured Tag -->
                            <div style="position: absolute; top: 15px; left: 15px; background-color: #e7247a; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">
                                FEATURED
                            </div>
                            
                            <!-- Heart Icon -->
                            <div style="position: absolute; top: 15px; right: 15px; background-color: white; width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                            </div>
                            
                            <!-- Photo Counter -->
                         
                        </div>
                        
                        <!-- Card Content -->
                        <div style="background: white; padding: 1.5rem; position: relative;">
                            <!-- Title -->
                            <h3 style="font-size: 1.25rem; font-weight: 700; margin: 0 0 1rem 0; color: #2d3748; line-height: 1.3;">
                                {{ strtoupper($package['title']) }}
                            </h3>
                            
                            <!-- Info Icons -->
                            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-bottom: 1.25rem;">
                               
                                <div style="display: flex; align-items: center; color: #4a5568; font-size: 0.9rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 6px;">
                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                   
                                    @php
                                        $prices = explode(',', $package['price']);
                                        $firstPrice = $prices[0] ?? 0;
                                    @endphp
                                
                                    From {{ $firstPrice }}
                                </div>
                                <div style="display: flex; align-items: center; color: #4a5568; font-size: 0.9rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 6px;">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                  1 Day
                                </div>
                                
                            </div>
                            
                            <!-- Explore Button -->
                            <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 1rem; border-top: 1px solid #e2e8f0;">
                                <span style="font-weight: 600; color: #4a5568; font-size: 0.95rem;">Explore</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
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
            grid-template-columns: repeat(2, 1fr) !important;
            justify-content: center !important;
            gap: 1rem !important;
            padding: 0 10px;
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
