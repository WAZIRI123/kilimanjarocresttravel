@extends('layouts.app')

@section('title', 'Explore - Stan Safari')

@push('styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!-- Hero Section -->
    @include('partials.sections.page-hero', [
        'image'=>'https://static.wixstatic.com/media/851897_9587828f79e74b21a175b075af31661e~mv2.jpg',
        'title' => $package->title ?? 'Explore Our Destinations',
        'subtitle' => $package->short_description ?? 'Discover the most breathtaking safari experiences in Africa'
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
           <!-- Your package content will go here -->
           <div class="content-section">
               <h3 style="margin-bottom: 0rem; text-align:center">Overview</h3>
               <span style="text-align:center;">{!! $package->description??'' !!}</span>
           </div>
           {{-- <div class="content-section">
               <h3>Trip Highlights</h3>
               <ul class="trip-highlights">
                   <li>Game drives in Serengeti National Park</li>
                   <li>Witness the Great Migration (seasonal)</li>
                   <li>Visit Ngorongoro Crater, a UNESCO World Heritage Site</li>
                   <li>Luxury lodge accommodations</li>
                   <li>Expert local guides and private safari vehicles</li>
                   <li>Sunset game viewing experiences</li>
               </ul>
           </div> --}}
           <div class="content-section" style="text-align: center; width:80%;margin:0 auto;">
               <div style="display: inline-block; max-width: 1200px; width: 100%; text-align: left;">
                   <div style="font-size: 0; text-align: center;">
                       @if(isset($package->best_time_to_visit))
                       <div style="display: inline-block; width: calc(50% - 1rem); margin: 0 0.5rem 1.5rem; vertical-align: top; font-size: 1rem; text-align: left;" id="best-time-section">
                           
                           <div style="margin-top: 0.5rem; padding: 1rem; border: 1px solid #e2e8f0; border-radius: 8px; text-align:center">
                            <p style="margin: 0;">Best Time to Visit: <br/> <strong>{{ strip_tags($package->best_time_to_visit) }}</strong></p>
                           </div>
                       </div>
                       @endif
                       
                       <div style="display: inline-block; width: calc(50% - 1rem); margin: 0 0.5rem 1.5rem; vertical-align: top; font-size: 1rem; text-align: left;"id="trip-price-section">
                           <div style="margin-bottom: 0.5rem;">
                               
                           </div>
                           <div style="padding: 1rem; border: 1px solid #e0e0e0; border-radius: 8px; text-align: center; min-height: 100%;">
                               <p style="margin: 0;">Starts at: <br/> <strong>${{ number_format($package->price ?? 0, 2) }}</strong> Per Person</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="content-section">
               <h3 style="text-align:center">Day 1 - Airport pick-up- Drop off at hotel</h3>
               <div class="itinerary-card">
                   <div class="itinerary-day">
                       <div class="itinerary-content">
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Luxury Lodge in Arusha">
                           </div>
                           <div class="itinerary-text">
                               <p>You will be picked up by the staff of Stan Safaris from Kilimanjaro International Airport (JRO) and driven to your accommodation in Moshi. Participants will be given a short briefing for the climb the next day. Kits and the necessary equipment will be checked as well.</p>
                           </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                    <h3 style="text-align:center">Day 2 - Marangu Gate (1860m) – Mandara hut (2715m)</h3>
                       <div class="itinerary-content">
                           @include('partials.itinerary.meta-pills', [
                               'items' => [
                                   ['label' => 'Hiking Time', 'value' => '5hrs'],
                                   ['label' => 'Distance', 'value' => '8.1 km'],
                                   ['label' => 'Habitat', 'value' => 'Montane Forest']
                               ]
                           ])
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1585405278873-1f3f88147a7a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Tarangire Elephants">
                           </div>
                           <div class="itinerary-text">
                               <p>The drive from Moshi to the Kilimanjaro National Park gate takes about 50 minutes. The journey passes through the village of Marangu, which is located on the lower slopes of the mountain. Once you reach the park gate, all hikers are requested to sign in at the Park office and make their final preparations for the climb. Porters will be seen arranging and loading their packs, containing the food, water, cooking gas as well as most of your equipment.  </p>
                           </div>
                               <div class="itinerary-text">
                                <p>
                                From the park gate, we ascend on a cleared ridge trail through the rain forest where you will see most of Kilimanjaro’s animals. An alternative and more scenic parallel forest trail branches off to the left a few minutes after the gate. This trail follows the edge of a stream through the undergrowth and offers you the option to rejoin the main trail either after 1.5 hours hiking, or 1 hour before Mandara hut where you will spend the night.
                                Mandara hut consists of a group of wooden A-framed huts in a forest clearing. Each hut features 6-8 sleeping bunks with solar generated lighting. The total capacity of the camp is 60 climbers. Water is piped into the camp from springs above and there are flush toilets behind the main hut.
                                </p>
                           </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                    <h3 style="text-align:center">Day 3 - Mandara hut (2715m) – Horombo hut (3705m)</h3>
                       <div class="itinerary-content">
                        @include('partials.itinerary.meta-pills', [
                            'items' => [
                                ['label' => 'Hiking Time', 'value' => '6hrs'],
                                ['label' => 'Distance', 'value' => 'Approximately 11.6 km'],
                                ['label' => 'Habitat', 'value' => 'Moorland']
                            ]
                        ])
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1516426122078-c23e76319893?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Serengeti Landscape">
                           </div>
                           <div class="itinerary-text">
                               <p>From Mandara hut, the trail passes through a short stretch of forest, skirts the base of the Maundi Crater and then emerges into a transition from rain forest to moorland. It is well worth a short detour to scramble up the rim of the Maundi Crater for your first impressive view of the Kibo Crater. On a clear day, Kibo will glimmer in the distance, with sightings of majestic glaciers in the morning sun.</p>
                           </div>

                           <div class="itinerary-text">
                            <p>Once you are in the open moorland, you will get the chance to see some of Kilimanjaro’s most spectacular plants – the endemic giant lobelia which grows up to 3 m in height and the giant groundsel (Senecia Kilimanjari), which can reach heights of 5m. After about 6 hours trek from here, you reach the Horombo hut for your accommodation.</p>
                        </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                    <h3 style="text-align:center">Day 4 - Horombo hut (3705m) – Acclimatization Day</h3>
                       <div class="itinerary-content">
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Ngorongoro Crater">
                           </div>
                           

                        <div class="itinerary-text">
                            <p>Horombo hut is a village of huts perched on a small plateau, with buildings similar to Mandara with a capacity of 120 climbers! Horombo is normally bustling with hikers, guides and porters, with an atmosphere of adventure and excitement. 
                            </p>
                        </div>
                        <div class="itinerary-text">
                            <p>
                            You will meet both ascending and descending hikers here. This extra day and night at Horombo are for additional acclimatization. A hike towards the Mawenzi hut, passing the Zebra Rocks on the way (about 3 hours up and 1,5 hours down) is strongly recommended.</p>
                        </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                       <h3 style="text-align:center">Day 5 - Horombo hut (3705m) – Kibo hut (4730m)</h3>
                       <div class="itinerary-content">
                           @include('partials.itinerary.meta-pills', [
                               'items' => [
                                   ['label' => 'Hiking Time', 'value' => '6 hours'],
                                   ['label' => 'Distance', 'value' => 'Approximately 9.6 km'],
                                   ['label' => 'Habitat', 'value' => 'Alpine desert']
                               ]
                           ])
                           <div class="itinerary-text">
                               <p>After breakfast, we continue our ascent into the Alpine desert habitat. From Horombo, there are two trails to the "Saddle" (which refers to the area located between the peaks of Mawenzi and Kibo). There is an upper route (right hand fork) and lower route (left hand fork) to choose from. The upper route should be very familiar, as you will have climbed most of it the previous day towards Mawenzi hut. This section is very stony and eroded.</p>
                           </div>
                           <div class="itinerary-text">
                               <p>The recommended lower route (left hand fork) is much easier and nearly an hour shorter, and it also passes the last watering point at 4130m. You will have to fill your water bottles with all the water you will need until your return to Horombo hut in two night's time (unless you are willing to buy Mineral water at Kibo hut).</p>
                           </div>
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1585405278873-1f3f88147a7a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Alpine desert on Kilimanjaro">
                           </div>
                           <div class="itinerary-text">
                               <p>Situated in the barren Alpine desert is Kibo hut, a stone build block house which has bunk beds for 60 climbers, but no streams with water nearby. It is however possible to buy mineral water and soft drinks at the camp office. There are platform toilets behind the hut.</p>
                           </div>
                           <div class="itinerary-text">
                               <p>The summit is now a further 1195m up and you will make your final ascent the same night. Prepare your equipment, ski-stick and thermal clothing for your summit bid. This should include the replacement of your headlamp and camera batteries and make sure you have a spare set available as well. To prevent freezing, it will be wise to carry your water in a thermal flask.</p>
                           </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                       <h3 style="text-align:center">Day 6 - Kibo hut (4730m) – Uhuru Peak (5895m) – Horombo hut (3705m)</h3>
                       <div class="itinerary-content">
                           <div class="itinerary-text">
                               <p>You will rise around 23h30, and after some tea and biscuits you shuffle off into the night, and this is where the going really gets tough. The first section of the trail consists of a rocky path to the Hans Meyer Cave (5150m), also a good resting spot. The path then zigzags up to Gillman's point (5 681m), which is located on the crater rim. This section is very steep with a lot of stone scree, requiring a great physical and mental effort. This is probably the most demanding section of the entire route. Do the Kili shuffle and move slowly.</p>
                           </div>
                           <div class="itinerary-image">
                            <img src="https://images.unsplash.com/photo-1585405278873-1f3f88147a7a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Alpine desert on Kilimanjaro">
                        </div>
                           <div class="itinerary-text">
                               <p>From Gillmans Point you will normally encounter snow all the way up to Uhuru peak (5895m), the highest point in Africa. Total walking time will be around 8 hours to reach Uhuru peak, where you will be able to see the most glorious sunrise you are ever likely to witness. Weather conditions on the summit will determine how long you will be able to spend, taking photographs before the 3 hour descent back to Kibo hut.</p>
                           </div>
                           
                           <div class="itinerary-text">
                               <p>After a short rest you gather all your gear for the ascent and head down to Horombo hut (3 hours) for your overnight. The return to Horombo hut will seem surprisingly fast compared to the ascent. The total time spent walking on this day is around 14 hours, so prepare for this.</p>
                           </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                       <h3 style="text-align:center">Day 7 - Horombo hut (3705m) – Marangu Gate (1860m)</h3>
                       <div class="itinerary-content">
                           <div class="itinerary-text">
                               <p>After breakfast you continue your descent (6 hours), passing the Mandara hut, down to the Marangu gate. At Marangu gate you sign your name and details in a register. To make your achievement official, you will receive a summit certificate. If you reached Gillman's Point (5685m) you will be presented with a green certificate and if you reached Uhuru Peak (5895m), you will have earned yourself a gold certificate.</p>
                           </div>
                           <div class="itinerary-text">
                               <p>From the Marangu gate, a vehicle will meet you at Marangu village to drive you back to your hotel in Moshi/Arusha. Don't forget to tip your guides and porters. It is time for celebration!</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           
           <div class="button-container" style="display: flex; justify-content: center; margin: 2rem 0 4rem 0; width: 100%;">
               <a href="#" class="book-tour-btn" style="display: inline-block; background-color: #4d4402; color: white; padding: 1rem 2.5rem; text-decoration: none; border-radius: 4px; font-weight: 500; text-align: center; width: 100%; max-width: 280px;">Book This Tour</a>
           </div>
           
           <!-- Inclusions & Exclusions Section -->
           <div class="content-section" style="margin: 4rem 0; padding: 0;">
               <h3 style="text-align: center; margin-bottom: 2.5rem; font-size: 1.75rem; color: #333; font-weight: 600; line-height: 1.3;">What's Included & Excluded</h3>
               
               <div style="display: flex; flex-wrap: wrap; gap: 2.5rem; justify-content: space-between;">
                   <!-- Inclusions -->
                   <div class="inclusion-card" style="flex: 1; min-width: 300px; border: 1px solid #e0e0e0; border-radius: 8px; padding: 2rem; background: transparent;">
                       <h4 style="color: #4d4402; font-size: 1.25rem; margin: 0 0 1.5rem 0; padding-bottom: 0.75rem; border-bottom: 1px solid #f0e6d2; font-weight: 600; line-height: 1.4;">Inclusions</h4>
                       <ul style="list-style: none; padding: 0; margin: 0;">
                           @if(isset($package->included_items) && is_array($package->included_items))
                           @foreach($package->included_items as $item)
                           <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                               <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                               <span>{{ $item }}</span>
                           </li>
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
                   <div class="exclusion-card" style="flex: 1; min-width: 300px; border: 1px solid #e0e0e0; border-radius: 8px; padding: 2rem; background: transparent;">
                       <h4 style="color: #4d4402; font-size: 1.25rem; margin: 0 0 1.5rem 0; padding-bottom: 0.75rem; border-bottom: 1px solid #f0e6d2; font-weight: 600; line-height: 1.4;">Exclusions</h4>
                       <ul style="list-style: none; padding: 0; margin: 0;">
                       @if(isset($package->excluded_items) && is_array($package->excluded_items))
                           @foreach($package->excluded_items as $item)
                           <li style="padding: 0.5rem 0; display: flex; align-items: flex-start;">
                               <span style="color: #4d4402; margin-right: 0.75rem;">•</span>
                               <span>{{ $item }}</span>
                           </li>
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
           width:70%;
           margin: 0 auto;
           overflow: hidden; /* Clearfix for floated elements */
           position: relative;
       }
       
       /* Base image styles */
       .itinerary-image {
           width: 40%;
           max-width: 100%;
           margin: 0rem 1.5rem 0rem 0;
           overflow: hidden;
           box-shadow: 0 2px 8px rgba(0,0,0,0.1);
           position: relative;
           padding-top: 33.75%;
           float: left;
       }
       
       /* Even items - image on right */
       .itinerary-day:nth-child(even) .itinerary-image {
           float: right;
           margin: 1rem 0 1rem 1.5rem;
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
               padding: 1.25rem 0;
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
   
   <!-- Related Packages Section -->
   @include('partials.packages.related-packages', [
       'title' => 'You May Also Like',
       'viewAllLink' => '#',
       'packages' => [
           [
               'title' => 'Serengeti Migration Safari',
               'url' => '#',
               'image' => 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80',
               'duration' => '6 Days',
               'description' => "Experience the breathtaking wildebeest migration across the vast Serengeti plains. Witness nature's greatest spectacle with expert guides.",
               'views' => '1.5k',
               'likes' => '42'
           ],
           [
               'title' => 'Kilimanjaro Trekking',
               'url' => '#',
               'image' => 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
               'duration' => '7 Days',
               'description' => "Conquer Africa's highest peak through the scenic Machame route. Our experienced guides ensure a safe and memorable climbing experience.",
               'views' => '1.2k',
               'likes' => '36'
           ],
           [
               'title' => 'Zanzibar Beach Retreat',
               'url' => '#',
               'image' => 'https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
               'duration' => '5 Days',
               'description' => "Unwind on Zanzibar's pristine white sand beaches. Explore the rich culture and crystal-clear waters of this tropical paradise.",
               'views' => '2.1k',
               'likes' => '64'
           ]
       ]
   ])
   
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