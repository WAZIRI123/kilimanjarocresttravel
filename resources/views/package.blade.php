@extends('layouts.app')

@section('title', 'Explore - Stan Safari')

@push('styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!-- Hero Section -->
    @php
    $heroImage = 'https://static.wixstatic.com/media/851897_9587828f79e74b21a175b075af31661e~mv2.jpg';
    $itineraries = is_string($package->itineraries) ? json_decode($package->itineraries, true) : $package->itineraries;
    
    // Check if itinerary 3 exists and has an image
    if (!empty($itineraries[1]['image'])) {
        $heroImage = $itineraries[1]['image'];
    }
@endphp
@include('partials.sections.page-hero', [
    'image' => '/storage/'.$heroImage,
    'title' => $package->title ?? 'Explore Our Destinations',
    'subtitle' => ''
])

   <!-- Safari Packages Section -->
   <div class="safari-package">
    <div id="bgLayers_comp-m1luvo7h" data-hook="bgLayers" data-motion-part="BG_LAYER comp-m1luvo7h" class="MW5IWV"><div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div><div id="bgMedia_comp-m1luvo7h" data-motion-part="BG_MEDIA comp-m1luvo7h" class="VgO9Yg"></div></div>
       <div class="package-header">
           <h2 class="package-title">
            {{ $package->duration ?? '6 Days' }} | {{ $package->title ?? 'Kilimanjaro Trekking' }}</h2>
       </div>
       <div class="package-image">
           <img src="{{ Storage::url($package->featured_image??'') }}" 
                alt="{{ $package->title ?? 'test' }}" 
                class="img-fluid">
       </div>
       <div class="image-caption">{{ $package->short_description ?? '' }}</div>
       <div class="package-content">
           <div class="content-section">
               <h3 style="margin-bottom: 0rem; text-align:center">Overview</h3>
               <span style="text-align:center;">{!! $package->description??'' !!}</span>
           </div>
           <div class="content-section" style="text-align: center; width:80%;margin:0 auto;">
               <div style="display: inline-block; max-width: 1200px; width: 100%; text-align: left;">
                   <div style="font-size: 0; text-align: center;">
                       @if(isset($package->best_time_to_visit))
                       <div style="display: inline-block; width: calc(50% - 1rem); margin: 0 0.5rem 1.5rem; vertical-align: top; font-size: 1rem; text-align: left; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1); transition: transform 0.2s ease, box-shadow 0.2s ease;" id="best-time-section">
                           <div style="margin-top: 0.5rem; padding: 1rem; border-radius: 8px; text-align:center">
                            <p style="margin: 0;">Best Time to Visit: <br/> <strong>{{ strip_tags($package->best_time_to_visit) }}</strong></p>
                           </div>
                       </div>
                       @endif
                       
                       <div style="display: inline-block; width: calc(50% - 1rem); margin: 0 0.5rem 1.5rem; vertical-align: top; font-size: 1rem; text-align: left; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1); transition: transform 0.2s ease, box-shadow 0.2s ease;"id="trip-price-section">
                           <div style="margin-bottom: 0.5rem;"></div>
                           <div style="padding: 1rem; border-radius: 8px; text-align: center; min-height: 100%;">
                               <p style="margin: 0;">Starts at: <br/> <strong>${{ number_format($package->price ?? 0, 2) }}</strong> Per Person</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="content-section">
               @php
                   // Ensure itineraries is decoded if it's a JSON string
                   $itineraries = is_string($package->itineraries) ? json_decode($package->itineraries, true) : $package->itineraries;
               @endphp
               
               @if(!empty($itineraries) && is_array($itineraries))
                   @foreach($itineraries as $index => $itinerary)
                    <div class="itinerary-card" style="margin-bottom: 2rem; padding-bottom: 2rem; border-bottom: 1px solid #e0e0e0;">
                        <h3 style="text-align: center; margin-top: 0; color: #2c3e50; padding-bottom: 0.75rem; margin-bottom: 1.5rem; position: relative;">
                            <span style=" padding: 0 1.5rem; position: relative; z-index: 1;">
                                 {{ $itinerary['title'] ?? 'Day ' . ($index + 1) }}
                            </span>
                            <span style="position: absolute; bottom: 0; left: 0; right: 0; height: 1px; background: #e0e0e0; overflow: hidden;">
                                <span style="position: absolute; left: 50%; top: 0; transform: translateX(-50%); width: 200px; height: 3px; background: #2c3e50; border-radius: 3px;"></span>
                            </span>
                        </h3>
                        
                        @php
                            // Process tips for pills
                            $tips = $itinerary['tips'] ?? [];
                            
                            // Convert string tips to array if needed
                            if (is_string($tips)) {
                                $tips = array_filter(array_map('trim', explode(',', $tips)));
                            } elseif (!is_array($tips)) {
                                $tips = [];
                            }
                            
                            // Format tips for meta-pills component
                            $metaItems = [];
                            foreach ($tips as $tip) {
                                if (trim($tip)) {
                                    $metaItems[] = [
                                        'label' => '',
                                        'value' => trim($tip)
                                    ];
                                }
                            }
                        @endphp
                        
                        @if(!empty($metaItems))
                            <div class="itinerary-tips" style="margin: 0.5rem 0 1.5rem 0; text-align: center;">
                                @include('partials.itinerary.meta-pills', [
                                    'items' => $metaItems
                                ])
                            </div>
                        @endif
                        
                        @php
                            $isEven = $index % 2 === 0;
                            $positionClass = $isEven ? 'image-left' : 'image-right';
                        @endphp
                        <div class="itinerary-day {{ $positionClass }}">
                            <div class="itinerary-content">
                                @if(!empty($itinerary['image']))
                                <div class="itinerary-image">
                                    <img src="{{ asset('storage/' . $itinerary['image']) }}" alt="{{ $itinerary['title'] ?? 'Itinerary Image' }}" class="img-fluid">
                                </div>
                                @endif
                                
                                @if(!empty($itinerary['descriptions']) && is_array($itinerary['descriptions']))
                                    @foreach($itinerary['descriptions'] as $description)
                                        @if(!empty($description['content']))

                                            {!! $description['content'] !!}
                                        
                                        @endif
                                    @endforeach
                                @endif
                           </div>
                       </div>
                   </div>
                   @endforeach
               @else
                   <div class="alert alert-info">No itinerary details available.</div>
               @endif
               
               <div class="button-container" style="display: flex; justify-content: center; margin: 2rem 0 4rem 0; width: 100%;">
                   <a href="#" class="book-tour-btn" style="display: inline-block; background-color: #4d4402; color: white; padding: 1rem 2.5rem; text-decoration: none; border-radius: 4px; font-weight: 500; text-align: center; width: 100%; max-width: 280px;">Book This Tour</a>
               </div>
               </div>
           </div>
           
      
           <!-- Inclusions & Exclusions Section -->
           <div class="content-section" style="padding: 0;width:90%;margin:1rem auto;">
               <h3 style="text-align: center; margin-bottom: 2.5rem; font-size: 1.75rem; color: #333; font-weight: 600; line-height: 1.3;">What's Included & Excluded</h3>
               
               <div style="display: flex; flex-wrap: wrap; gap: 2.5rem; justify-content: space-between;">
                   <!-- Inclusions -->
                   <div class="inclusion-card" style="flex: 1; min-width: 300px; border: 1px solid #e0e0e0; border-radius: 8px; padding: 2rem; background: #f5f2ed; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                       <h4 style="color: #4d4402; font-size: 1.25rem; margin: 0 0 1.5rem 0; padding-bottom: 0.75rem; border-bottom: 1px solid #f0e6d2; font-weight: 600; line-height: 1.4;">Inclusions</h4>
                       <ul style="list-style: none; padding: 0; margin: 0;">
                        
                           @if(isset($package->included_items) && is_array($package->included_items))
                               @foreach($package->included_items as $item)
                                   @php
                                       $itemText = is_array($item) ? ($item['item'] ?? '') : $item;
                                   @endphp
                                   @if(!empty(trim($itemText)))
                                   <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                                       <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                                       <span>{{ $itemText }}</span>
                                   </li>
                                   @endif
                               @endforeach
                       @else
                           <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                               <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                               <span>Park fees</span>
                           </li>
                           <!-- Default inclusions if none provided -->
                           <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                               <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                               <span>All activities (unless labeled as optional)</span>
                           </li>
                           <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                               <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                               <span>All accommodation as stated in the itinerary</span>
                           </li>
                       @endif
                       </ul>
                   </div>
                   
                   <!-- Exclusions -->
                   <div class="exclusion-card" style="flex: 1; min-width: 300px; border: 1px solid #e0e0e0; border-radius: 8px; padding: 2rem; background: #f5f2ed; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                       <h4 style="color: #4d4402; font-size: 1.25rem; margin: 0 0 1.5rem 0; padding-bottom: 0.75rem; border-bottom: 1px solid #f0e6d2; font-weight: 600; line-height: 1.4;">Exclusions</h4>
                       <ul style="list-style: none; padding: 0; margin: 0;">
                       @if(isset($package->excluded_items) && is_array($package->excluded_items))
                           @foreach($package->excluded_items as $item)
                               @php
                                   $itemText = is_array($item) ? ($item['item'] ?? '') : $item;
                               @endphp
                               @if(!empty(trim($itemText)))
                               <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                                   <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                                   <span>{{ $itemText }}</span>
                               </li>
                               @endif
                           @endforeach
                       @else
                           <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                               <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                               <span>International flights (from/to home)</span>
                           </li>
                           <!-- Default exclusions if none provided -->
                           <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                               <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                               <span>Additional accommodation before and at the end of the tour</span>
                           </li>
                           <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                               <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                               <span>Tips (tipping guideline US$20.00 pp per day)</span>
                           </li>
                       @endif
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
   @push('styles')
   <style>
       /* Style for list items in Inclusions/Exclusions section */
       .inclusion-card ul,
       .exclusion-card ul {
           font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
           color: #333;
           line-height: 1.6;
           font-size: 1rem;
       }
       
       .inclusion-card li,
       .exclusion-card li {
           padding: 0;
           display: flex;
           align-items: flex-start;
       }
       
       @media (max-width: 767px) {
           .inclusion-card,
           .exclusion-card {
               padding: 1.5rem;
               box-sizing: border-box;
               width: 100%;
           }
           
           .inclusion-card ul,
           .exclusion-card ul {
               width: 100%;
               margin: 0;
               padding: 0 0 0 1rem;
           }
           
           .inclusion-card li,
           .exclusion-card li {
               justify-content: flex-start;
               text-align: left;
               padding: 0.25rem 0;
               position: relative;
               padding-left: 1.5rem;
           }
           
           .inclusion-card li::before,
           .exclusion-card li::before {
               content: '';
               color: #4d4402;
               font-size: 1.5em;
               position: absolute;
               left: 0;
               line-height: 1;
           }
           
           .inclusion-card li span:first-child,
           .exclusion-card li span:first-child {
               display: none; /* Hide the original bullet span */
           }
       }
       
       .inclusion-card li span:first-child,
       .exclusion-card li span:first-child {
           color: #4d4402;
           margin-right: 0.75rem;
           font-size: 1.2em;
           line-height: 1.4;
           vertical-align: middle;
       }
       
       /* Meta Pills Styles */
       .itinerary-meta {
           display: flex;
           flex-wrap: wrap;
           justify-content: center;
           gap: 0.5rem;
           margin: 0 auto 1.5rem;
           width: 100%;
           max-width: 800px;
       }
       
       .itinerary-meta > div {
           background: white;
           border-radius: 20px;
           padding: 0.5rem 1rem;
           display: inline-flex;
           align-items: center;
           font-size: 0.9rem;
           white-space: nowrap;
           box-shadow: 0 1px 3px rgba(0,0,0,0.05);
       }
       
       .itinerary-meta span:first-child {
           color: #333;
           margin-right: 0.5rem;
       }
       
       .itinerary-meta span:last-child {
           font-weight: 500;
       }
    
       .safari-package {
           width: 90%;
           height: auto;
           max-width: 1200px;
           margin: 2rem auto;
           background-color: #fff;
           
       }
       
       .package-header {
           background-color: #f5f2ed;
           padding: 1.25rem 1.5rem;
           display: flex;
           justify-content: space-between;
           align-items: center;
           position: sticky;
           top: 0;
           z-index: 100;
       }.P0dCOY .PJ4KCX {
    background-color: rgba(255, 255, 255, 1);
    bottom: 0;
    left: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
}


       
       .package-title {
           font-size: clamp(1.25rem, 5vw, 1.75rem);
           font-weight: 600;
           color: #333;
           margin: 0;
           line-height: 1.3;
       }
       
       .package-image {
           width: 100%;
           margin: 0;
       }
       
       .package-image {
           margin: 0 0 0 0;
       }
       
       .package-image img {
           width: 100%;
           height: auto;
           display: block;
       }
       
       .image-caption {
           text-align: center;
           color: #555;
           background-color: #f5f2ed;
           font-size: 0.95rem;
           line-height: 1.5;
           padding: 0.5rem 0 0.5rem 0;
       }
       
       @media (max-width: 768px) {
           .image-caption {
               font-size: 0.85rem;
               padding: 0.5rem 0 0.5rem 0;
           }
       }
       
       .package-content {
           background-color: #f5f2ed;
           padding: 1.5rem;
           overflow-y: visible; /* Allow content to expand naturally */
       }
       
       @media (max-width: 768px) {
           .package-content {
               max-height: none;
               min-height: auto;
               padding: 1.25rem;
           }
           
           .safari-package {
               margin: 1rem auto;
               width: 100%;
           }
       }
       
       .content-section {
           margin-bottom: 1rem;
       }
       
       .content-section:last-child {
           margin-bottom: 0;
       }
        
        /* Itinerary day styling with muted borders */
        .itinerary-day {
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            padding-bottom: 2rem;
            margin-bottom: 2rem;
        }
        
        .itinerary-day:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
       
       .content-section h3 {
           color: #2c3e50;
           margin-top: 0;
           margin-bottom: 1rem;
           font-size: clamp(1.1rem, 4vw, 1.4rem);
           font-weight: 600;
           line-height: 1.4;
       }
       
       .trip-highlights {
           list-style: none;
           padding: 0;
           margin: 0 0 2rem 0;
       }
       
       .trip-highlights li {
           position: relative;
           padding: 0.5rem 0 0.5rem 2.5rem;
           line-height: 1.6;
           color: #4a5568;
           font-size: clamp(0.95rem, 3vw, 1.1rem);
           margin-bottom: 0.5rem;
       }
       
       .trip-highlights li:before {
           content: '•';
           font-weight: 900;
           font-size: 1.2em;
           line-height: 1;
           position: absolute;
           left: 0.25rem;
           top: 50%;
           transform: translateY(-50%);
       }
       
       .content-section p {
           color: #333;
           line-height: 1.7;
           margin: 0 0 0.5rem 0;
           font-size: clamp(1rem, 3vw, 1.1rem);
       }
       
       /* Itinerary Card Styles */
       .itinerary-card {
           background: transparent;
           overflow: hidden;
       }
       
       .itinerary-day {
           padding: 0;
           margin-bottom: 2.5rem;
           padding-bottom: 2.5rem;
           position: relative;
       }
       
       .itinerary-day:not(:last-child)::after {
           content: '';
           position: absolute;
           bottom: 0;
           left: 50%;
           transform: translateX(-50%);
           width: 50%;
           height: 1px;
           background-color: #212121;
       }
       
       .itinerary-day:last-child {
           border-bottom: none;
           padding-bottom: 0;
           margin-bottom: 0;
       }
       
       .itinerary-day:last-child {
           border-bottom: none;
       }
       
       .itinerary-header {
           width: 100%;
           max-width: 800px;
           margin: 0.5rem 0;
           padding: 0 0px;
       }
       
       .itinerary-header h4 {
           color: #333;
           font-size: 1.1rem;
           margin: 0;
           font-weight: 600;
       }
       
       .itinerary-content {
           padding: 0;
           width:90%;
           margin: 0 auto;
           overflow: hidden; /* Clearfix for floated elements */
           position: relative;
       }
       
       /* Base image styles */
       .itinerary-image {
           width: 70%;
           max-width: 100%;
           overflow: hidden;
           box-shadow: 0 2px 8px rgba(0,0,0,0.1);
           position: relative;
           padding-top: 33.75%;
           /* Float is now controlled by parent class */
       }
       
       /* Image on right */
       .itinerary-day.image-right .itinerary-image {
           float: right;
           margin: 1rem 0 1rem 1.5rem;
       }
       
       /* Image on left */
       .itinerary-day.image-left .itinerary-image {
           float: left;
           margin: 1rem 1.5rem 1rem 0;
       }
       
       .itinerary-image img {
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           object-fit: cover;
           display: block;
           transition: transform 0.3s ease;
       }
       
       .itinerary-text {
           padding: 0;
           margin-bottom: 1rem;
           overflow: hidden; /* Clearfix */
           position: relative;
           z-index: 2;
       }
       
       .itinerary-text p {
           margin-top: 0;
           
       }

       
       .itinerary-text p {
           color: #333;
           font-size: 17px;
           line-height: 1.6;
           margin: 0;
       }
       
       @media (max-width: 992px) {
        #best-time-section,
        #trip-price-section {
            width: calc(100% - 1rem) !important;
        }
           .itinerary-image,
           .itinerary-day:nth-child(even) .itinerary-image {
               width: 100%;
               max-width: 100%;
               float: none;
               margin: 0 0 1.5rem 0;
               padding-top: 56.25%;
           }
           
           .itinerary-header h4 {
               font-size: 1.05rem;
               padding-left: 0;
               text-align: center;
           }
           
           .itinerary-header h4:before {
               left: 0.25rem;
           }
       }
       
       /* Book Tour Button */
       .book-tour-btn {
           display: block;
           width: 70%;
           max-width: 400px;
           margin: 0 auto;
           background-color: #4d4402e0;
           color: white;
           font-size: 1.1rem;
           font-weight: 600;
           padding: 1rem 1.5rem;
           border-radius: 4px;
           text-decoration: none;
           text-transform: uppercase;
           text-align: center;
           letter-spacing: 1px;
           transition: all 0.3s ease;
           box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
           cursor: pointer !important; /* Force cursor */
           border: none;
           -webkit-appearance: none;
           -moz-appearance: none;
           appearance: none;
           position: relative; /* Ensure proper stacking context */
           z-index: 1; /* Ensure it's above other elements */
       }
       
       /* Ensure the link itself has pointer cursor */
       a.book-tour-btn {
           cursor: pointer !important;
       }
       
       .book-tour-btn:hover,
       .book-tour-btn:focus {
           background-color: #3d3702; /* Darker shade for hover */
           cursor: pointer;
           transform: translateY(-2px);
           box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
           outline: none;
       }
       
       .book-tour-btn:active {
           transform: translateY(0);
       }
       
       @media (max-width: 768px) {
           .book-tour-btn {
               width: 100%;
               max-width: 280px;
               padding: 1rem 2.5rem;
               font-size: 1.1rem;
               transition: background-color 0.3s ease;
           }
           
           .book-tour-btn:hover {
               background-color: #3d3702 !important;
           }
           
           .itinerary-header {
               padding: 0rem;
           }
           
           .itinerary-content {
               width:100%;
               padding: 0rem 0;
           }
           
           .itinerary-image {
               height: 180px;
           }
           
           .itinerary-header h4 {
               font-size: 1rem;
           }
           
           .itinerary-text p {
               font-size: 17px;
           }
       }
       
       @media (min-width: 768px) {
           .content-section p {
               line-height: 1.8;
           }
       }
       
       @media (min-width: 1024px) {
           .safari-package {
               width: 80%;
           }
          .itinerary-header {
           text-align:center;
          }
           .related-packages{
            width:80%;
           }
       }
   </style>
   @endpush
   @use('App\Models\Package')
   <!-- Related Packages Section -->
   @php $packages=Package::paginate(); @endphp
    @if($packages->count() > 0)
            @include('partials.packages.related-packages', [
                'title' => 'Our Featured Packages',
                'packages' => $packages->map(function($package) {
                    return [
                        'title' => $package->title,
                        'url' => route('package.show', $package->slug),
                        'image' => $package->featured_image ?? 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80',
                        'duration' => $package->duration,
                        'description' => $package->short_description,
                        'views' => number_format(rand(100, 2000) / 10, 1) . 'k',
                        'likes' => rand(10, 100)
                    ];
                })
            ])

            <!-- Pagination -->
            <div class="pagination-wrapper" style="margin-top: 2rem; display: flex; justify-content: center;">
                {{ $packages->links('pagination::bootstrap-4') }}
            </div>
    @endif
   
   <!-- Related Packages styles are now in the partial -->
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
@endpush

@push('scripts')
    <!-- Additional page-specific scripts -->
@endpush