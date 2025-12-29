<section id="comp-m31oqvfr" tabindex="-1" data-block-level-container="Section" class="xuzjBY comp-m31oqvfr wixui-sectio="comp-m2opg1yq"id="section-container">
    <style>
        @media (min-width: 768px) {
            
            #comp-m31oqvfr {
                height: 40px !important;
            }
        }
    </style>
    <div id="bgLayers_comp-m31oqvfr" data-hook="bgLayers" data-motion-part="BG_LAYER comp-m31oqvfr" class="MW5IWV">
        <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
        <div id="bgMedia_comp-m31oqvfr" data-motion-part="BG_MEDIA comp-m31oqvfr" class="VgO9Yg"></div>
    </div>
    <div data-testid="responsive-container-content" class="comp-m31oqvfr-container max-width-container"></div>
</section><!--/$--><!--$-->

@if(isset($packages) && count($packages) > 0)
<div class="related-packages" id="comp-m2olr16u" style="padding: 3rem 0 1rem 0; margin: 0 auto; background-color:#fff;">

    <div style="width: 100%; display: flex; justify-content: center;">
        <div style="width: 100%; max-width: 100%; padding: 0 15px;">
            @if(isset($title) || isset($viewAllLink))
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; padding: 0 15px;">
                @if(isset($title))
                <h2 style="font-size: clamp(1.25rem, 6vw, 1.75rem); color: #333; font-weight: 600; margin: 0; text-align:center; width:100%;background-color:#fff">{{ $title }}
                    <div id="comp-m2vue5lh" class="comp-m2vue5lh JGtLUp wixui-horizontal-line" style="margin-top: 1rem;">
                    </div>
                </h2>
             
                @endif
               
            </div>
            @endif
            
            <div class="package-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 300px)); gap: 2rem; justify-content: center; position: relative; z-index: 10; width: 100%;">
                @foreach($packages as $package)
                <a href="{{ $package['url'] ?? '#' }}" class="package-card" style="display: block; height: 350px; text-decoration: none; color: inherit; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: relative;">
                    <div class="card-image" style="height: 100%; position: relative;">
                        <img src="{{  Storage::url($package['image'])}}" 
                             alt="{{ $package['title'] }}" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="card-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); display: flex; justify-content: center; align-items: center; text-align: center; padding: 2rem; opacity: 0; transition: all 0.3s ease;">
                            <div class="overlay-content">
                                <h3 class="package-title" style="font-size: 1.5rem; font-weight: bold; margin: 0 0 1rem 0; color: white;">{{ $package['title'] }}</h3>
                                @if(isset($package['description']))
                                <p class="package-description" style="font-size: 0.95rem; line-height: 1.5; margin: 0 0 1.5rem 0; color: rgba(255, 255, 255, 0.9); display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">{{ $package['description'] }}</p>
                                @endif
                                <button class="package-action-btn" style="background: linear-gradient(45deg, #f59e0b, #d97706); color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 25px; font-size: 0.9rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 0.5px;">Explore Package</button>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
        
            </div>

        </div>
    </div>
    <div class="text-center all-btn"
    style='margin:2rem auto 1rem auto; padding:auto; width: 50%; max-width: 300px; cursor:pointer !important; z-index:99; transition: width 0.3s ease;'>
    <style>
        @media (min-width: 992px) {
            .all-btn {
                width: 30% !important;
            }
        }
    </style>
    <div class="comp-m2vufkir" data-semantic-classname="button" style="cursor:pointer !important;"><a
            data-testid="linkElement" href="/all-packages" target="_self"
            class="StylableButton2545352419__root style-m2vufkiw8__root wixui-button StylableButton2545352419__link "
            style="background-color: #4d4402e0; cursor:pointer !important; color:#fff !important; font-weight:bold"
            aria-label="OUR PURPOSE"><span class="StylableButton2545352419__container"><span
                    class="StylableButton2545352419__label wixui-button__label"
                    data-testid="stylablebutton-label">
                    VIEW ALL PACKAGES</span><span class="StylableButton2545352419__icon wixui-button__icon"
                    aria-hidden="true"
                    data-testid="stylablebutton-icon"><span><!--?xml version="1.0" encoding="UTF-8"?-->

                    </span></span></span></a></div>
</div>
</div>


<style>
    @media(min-width:1024px){
    #comp-m2olr16u{
       width:80%;
    }
        
}
</style>

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
        .all-btn{
            width:50% !important;
        }
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
        .w-70p{
            width:70% !important;
        }
    }
    
    /* Package Card Styles */
    .package-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .package-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2) !important;
    }
    
    .package-card .card-image:hover img {
        transform: scale(1.1);
    }
    
    .package-card .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 2rem;
        opacity: 0;
        transition: all 0.3s ease;
    }
    
    .package-card:hover .card-overlay {
        opacity: 1;
    }
    
    .overlay-content {
        color: white;
        max-width: 90%;
    }
    
    .package-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0 0 1rem 0;
        color: white;
    }
    
    .package-description {
        font-size: 0.95rem;
        line-height: 1.5;
        margin: 0 0 1.5rem 0;
        color: rgba(255, 255, 255, 0.9);
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .package-action-btn {
        background: linear-gradient(45deg, #f59e0b, #d97706);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .package-action-btn:hover {
        background: linear-gradient(45deg, #d97706, #b45309);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(245, 158, 11, 0.4);
    }
</style>
@endpush
@endif
