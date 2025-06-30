@extends('layouts.app')

@section('title', 'All Packages - Stan Safari')

@push('styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!-- Hero Section -->
    @php
        $heroImages = [
            'safari' => 'storage/images/safari-hero.webp',
            'zanzibar' => 'storage/images/Zanzibar-hero.webp',
            'kilimanjaro' => 'storage/images/Kilimanjaro-hero.webp',
            'default' => 'storage/images/honeymoon-Tanzania-and-Zanzibar.webp'
        ];
        
        $category = request()->query('category', 'default');
        $heroImage = $heroImages[$category] ?? $heroImages['default'];
    @endphp
    @include('partials.sections.page-hero', [
        'image' => asset($heroImage),
        'title' => $title,
        'subtitle' => $subtitle
    ])

    <!-- Safari Packages Section -->
    <div class="section-spacing">
        <div id="bgLayers_comp-m1luvo7h" data-hook="bgLayers" data-motion-part="BG_LAYER comp-m1luvo7h" class="MW5IWV">
            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
            <div id="bgMedia_comp-m1luvo7h" data-motion-part="BG_MEDIA comp-m1luvo7h" class="VgO9Yg"></div>
        </div>
      
        @if($packages->count() > 0)
            @include('partials.packages.related-packages', [
                'title' => 'Our Packages',
                'viewAllLink' => '#',
                'packages' => $packages->map(function($package) {
                    return [
                        'title' => $package->title,
                        'url' => route('package.show', $package->slug),
                        'image' => $package->featured_image ?? 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80',
                        'duration' => $package->duration,
                        'description' => $package->short_description,
                        'views' => $package->views,
                        'likes' => $package->likes
                    ];
                })
            ])

            <!-- Pagination -->
            <div class="pagination-wrapper" style="margin-top: 2rem; display: flex; justify-content: center;">
                {{ $packages->links('pagination::bootstrap-4') }}
            </div>
        @else
            <div class="no-packages-wrapper" style="min-height: 60vh; display: flex; align-items: center; justify-content: center; padding: 1rem; font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color: #333; box-sizing: border-box;">
                <div class="no-packages" style="text-align: center; width: 100%; max-width: 700px; margin: 0 auto; padding: 2rem 1.5rem; background: #fff; border-radius: 12px; box-shadow: 0 5px 30px rgba(0,0,0,0.06); box-sizing: border-box;">
                    <div class="icon-wrapper" style="width: 80px; height: 80px; margin: 0 auto 1.5rem; background: #f8f5ee; border-radius: 50%; display: flex; align-items: center; justify-content: center; animation: bounce 2s infinite; box-sizing: border-box;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#4d4402" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-compass">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                        </svg>
                    </div>
                    
                    <h2 style="font-size: clamp(1.5rem, 5vw, 2rem); color: #2c3e50; margin: 0 0 1.25rem; font-weight: 600; line-height: 1.3;">No Featured Packages Available</h2>
                    
                    <p style="color: #5d6d7e; font-size: clamp(0.95rem, 3vw, 1.1rem); margin: 0 auto 2rem; line-height: 1.7; max-width: 580px; padding: 0 0.5rem; box-sizing: border-box;">We're currently updating our collection of amazing safari experiences. Check back soon for our latest adventures or contact us for personalized recommendations.</p>
                    
                    <div class="cta-buttons" style="display: flex; flex-direction: column; gap: 0.75rem; width: 100%; max-width: 280px; margin: 0 auto; box-sizing: border-box; position: relative; z-index: 100;">
                        <a href="{{ route('contact') }}" class="btn-primary" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; background: #4d4402; color: white; padding: 0.8rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: 500; transition: all 0.3s ease; font-size: 1rem; white-space: nowrap; border: 2px solid transparent; width: 100%; box-sizing: border-box; cursor: pointer; position: relative; z-index: 101; pointer-events: auto;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                            Contact Us
                        </a>
                        <a href="{{ route('home') }}" class="btn-secondary" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; background: #f5f2ed; color: #4d4402; padding: 0.8rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: 500; transition: all 0.3s ease; font-size: 1rem; white-space: nowrap; border: 2px solid #e0d9cc; width: 100%; box-sizing: border-box; cursor: pointer; position: relative; z-index: 101; pointer-events: auto;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Return Home
                        </a>
                    </div>
                </div>
            </div>
            
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
                
                @keyframes bounce {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(-5px); }
                }
                
                .btn-primary {
                    background: #4d4402 !important;
                    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                }
                
                .btn-primary:hover {
                    background: #3a3500 !important;
                    transform: translateY(-2px);
                    box-shadow: 0 4px 12px rgba(77, 68, 2, 0.15);
                }
                
                .btn-secondary {
                    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                }
                
                .btn-secondary:hover {
                    background: #ece7de !important;
                    transform: translateY(-2px);
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
                    border-color: #d4ccbd !important;
                }
                
                @media (min-width: 480px) {
                    .no-packages {
                        padding: 3rem 2rem !important;
                    }
                    
                    .cta-buttons {
                        flex-direction: row !important;
                        max-width: 500px !important;
                    }
                    
                    .btn-primary,
                    .btn-secondary {
                        width: auto !important;
                        min-width: 160px;
                    }
                }
                
                @media (min-width: 768px) {
                    .no-packages-wrapper {
                        padding: 2rem !important;
                    }
                    
                    .no-packages {
                        padding: 3.5rem 2.5rem !important;
                    }
                    
                    h2 {
                        font-size: 2rem !important;
                    }
                    
                    p {
                        font-size: 1.1rem !important;
                        margin-bottom: 0.5rem !important;
                    }
                }
            </style>
        @endif
    </div>
@endsection

@push('styles')
<style>
    .section-spacing {
    margin: 0px 0 !important;
}
    .explore-hero {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                    url('https://source.unsplash.com/random/1920x1080/?safari,africa') no-repeat center center/cover;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding: 0 20px;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .hero-content p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }
    #comp-m2opghgh {
    --l_display: unset;
    height: auto;
    min-width: 0;
    width: 80%;
    max-width: 99999px;
    --comp-display: unset;
    display: var(--l_display,var(--display,block));
    align-self: start;
    justify-self: center;
    margin-left: 1.5557065217391304%;
    margin-right: 0%;
    margin-top: 0.031002964426878% !important;
    margin-bottom: 0%;
    grid-area: 1/1/2/2;
    position: relative;
}

    @media screen and (min-width: 320px) and (max-width: 1000px) {
    #comp-m2opghgh {
        width: 100%;
        margin-left: 0%;
        margin-top: 0.094538512616202% !important;
    }
}

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2.5rem;
        }
        
        .hero-content p {
            font-size: 1.2rem;
        }
    }
</style>
@endpush

@push('styles')
    <!-- Additional page-specific styles -->
    <style>
        .P0dCOY .PJ4KCX {
    background-color: rgba(255, 255, 255, 1);
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
}
        .section-spacing {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1.5rem;
            box-sizing: border-box;
        }
        @media (max-width: 768px){
            .section-spacing {
                padding: 0 0rem;
            }
        }
        @media (min-width: 768px) {
            .section-spacing {
                padding: 0 2rem;
            }
        }
        @media (min-width: 1200px) {
            .section-spacing {
                padding: 0 4rem;
            }
        }
    </style>
@endpush

@push('scripts')
    <!-- Additional page-specific scripts -->
@endpush