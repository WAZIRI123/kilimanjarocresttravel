@extends('layouts.app')

@section('title', 'Explore - Stan Safari')

@push('styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!-- Hero Section -->
    @include('partials.sections.page-hero', [
        'image'=>'https://static.wixstatic.com/media/851897_9587828f79e74b21a175b075af31661e~mv2.jpg',
        'title' => 'Explore Our Destinations',
        'subtitle' => 'Discover the most breathtaking safari experiences in Africa'
    ])

   <!-- Safari Packages Section -->
   <div class="safari-package">
    <div id="bgLayers_comp-m1luvo7h" data-hook="bgLayers" data-motion-part="BG_LAYER comp-m1luvo7h" class="MW5IWV"><div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div><div id="bgMedia_comp-m1luvo7h" data-motion-part="BG_MEDIA comp-m1luvo7h" class="VgO9Yg"></div></div>
       <div class="package-header">
           <h2 class="package-title">8 Days | Classic Luxury Tanzania Signature Safari</h2>
       </div>
       <div class="package-image">
           <img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" 
                alt="Tanzania Safari" 
                class="img-fluid">
       </div>
       <div class="image-caption">Experience the breathtaking beauty of Tanzania's wildlife and landscapes</div>
       <div class="package-content">
           <!-- Your package content will go here -->
           <div class="content-section">
               <h3>Overview</h3>
               <p>Experience the ultimate luxury safari in Tanzania's most famous national parks. This 8-day adventure takes you through the heart of the African wilderness.</p>
           </div>
           <div class="content-section">
               <h3>Trip Highlights</h3>
               <ul class="trip-highlights">
                   <li>Game drives in Serengeti National Park</li>
                   <li>Witness the Great Migration (seasonal)</li>
                   <li>Visit Ngorongoro Crater, a UNESCO World Heritage Site</li>
                   <li>Luxury lodge accommodations</li>
                   <li>Expert local guides and private safari vehicles</li>
                   <li>Sunset game viewing experiences</li>
               </ul>
           </div>
           <div class="content-section">
               <h3>Trip Price</h3>
               <p>Starts at $ 8,900 Per Person.</p>
           </div>

           <div class="content-section">
               <h3>Itinerary</h3>
               <div class="itinerary-card">
                   <div class="itinerary-day">
                       <div class="itinerary-header">
                           <h4>Day 1: Arrival in Arusha</h4>
                       </div>
                       <div class="itinerary-content">
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Luxury Lodge in Arusha">
                           </div>
                           <div class="itinerary-text">
                               <p>Arrive at Kilimanjaro International Airport, transfer to your luxury lodge. Evening at leisure to relax and prepare for your safari adventure.</p>
                           </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                       <div class="itinerary-header">
                           <h4>Day 2: Tarangire National Park</h4>
                       </div>
                       <div class="itinerary-content">
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1585405278873-1f3f88147a7a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Tarangire Elephants">
                           </div>
                           <div class="itinerary-text">
                               <p>Morning game drive in Tarangire, known for its large elephant herds and baobab trees. Afternoon game viewing and overnight at luxury camp.</p>
                           </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                       <div class="itinerary-header">
                           <h4>Day 3-4: Serengeti National Park</h4>
                       </div>
                       <div class="itinerary-content">
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1516426122078-c23e76319893?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Serengeti Landscape">
                           </div>
                           <div class="itinerary-text">
                               <p>Two full days of game drives in the world-famous Serengeti. Witness the Great Migration (seasonal) and spot the Big Five.</p>
                           </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                       <div class="itinerary-header">
                           <h4>Day 5: Ngorongoro Crater</h4>
                       </div>
                       <div class="itinerary-content">
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Ngorongoro Crater">
                           </div>
                           

                        <div class="itinerary-text">
                            <p>The charming town of Arusha rests underneath the mighty gaze of Mount Meru and is an ideal base to explore Tanzania Northern Safari Circuit. It's hard to think of another place in the world that is in close vicinity to such a variety of national parks and game reserves!</p>
                        </div>
                        <div class="itinerary-text">
                            <p>Arrive in Arusha and transfer to your lodge, situated on a working coffee plantation. Your private chalet near Mount Meru features a log fireplace and a balcony. Arusha in Africa is your gateway to Tanzania's treasure store.</p>
                        </div>
                        <div class="itinerary-text">
                            <p>Descend into the Ngorongoro Crater for a full day of wildlife viewing in this natural wonder. Picnic lunch by the hippo pool.</p>
                        </div>
                       </div>
                   </div>
                   
                   <div class="itinerary-day">
                       <div class="itinerary-header">
                           <h4>Day 6: Lake Manyara & Departure</h4>
                       </div>
                       <div class="itinerary-content">
                           <div class="itinerary-image">
                               <img src="https://images.unsplash.com/photo-1585405278873-1f3f88147a7a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Lake Manyara">
                           </div>
                           <div class="itinerary-text">
                               <p>Morning game drive in Lake Manyara National Park, known for its tree-climbing lions. Afternoon transfer to Arusha for departure.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           
           <div class="button-container" style="display: flex; justify-content: center; margin: 2rem 0 4rem 0; width: 100%;">
               <a href="#" class="book-tour-btn" style="display: inline-block; background-color: #4d4402; color: white; padding: 1rem 2.5rem; text-decoration: none; border-radius: 4px; font-weight: 500; text-align: center; width: 100%; max-width: 280px;">Book This Tour</a>
           </div>
       </div>
   </div>
   
   @push('styles')
   <style>
    
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
           margin-bottom: 2rem;
       }
       
       .content-section:last-child {
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
           color: #4a5568;
           line-height: 1.7;
           margin: 0 0 1rem 0;
           font-size: clamp(0.95rem, 3vw, 1.1rem);
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
           margin: 0 auto 0.75rem;
           padding: 0 0px;
       }
       
       .itinerary-header h4 {
           color: #2d3748;
           font-size: 1.1rem;
           margin: 0;
           font-weight: 600;
       }
       
       .itinerary-content {
           padding: 0;
           overflow: hidden; /* Clearfix for floated elements */
           position: relative;
       }
       
       /* Base image styles */
       .itinerary-image {
           width: 60%;
           max-width: 100%;
           margin: 1rem 1.5rem 1rem 0;
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
           color: #4a5568;
           font-size: 0.95rem;
           line-height: 1.6;
           margin: 0;
       }
       
       @media (max-width: 992px) {
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
               padding: 1.25rem;
           }
           
           .itinerary-image {
               height: 180px;
           }
           
           .itinerary-header h4 {
               font-size: 1rem;
           }
           
           .itinerary-text p {
               font-size: 0.9rem;
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
           .related-packages{
            width:80%;
           }
       }
   </style>
   @endpush
   
   <!-- Related Packages Section -->
   <div class="related-packages" style="padding: 3rem 0; margin: 0 auto;">
       <div style="width: 100%; display: flex; justify-content: center;">
           <div style="width: 100%; max-width: 100%; padding: 0 15px;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; padding: 0 15px;">
                    <h2 style="font-size: clamp(1.25rem, 6vw, 1.75rem); color: #333; font-weight: 600; margin: 0;">You May Also Like</h2>
                    <a href="#" style="color: #4d4402; text-decoration: none; font-weight: 500; font-size: clamp(0.875rem, 4vw, 1rem); display: flex; align-items: center;">
                        View All <i class="fas fa-arrow-right" style="margin-left: 0.5rem; font-size: 0.8em;"></i>
                    </a>
                </div>
            
           <div class="package-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; justify-items: center; position: relative; z-index: 10;">
               <!-- Package 1 -->
               <a href="#" class="package-card" style="display: block; text-decoration: none; color: inherit; background-color: #f5f2ed; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 100%; width: 100%;">
                   <div style="height: 200px; overflow: hidden;">
                       <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" 
                            alt="Serengeti Safari" 
                            style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                   </div>
                   <div style="padding: 1.5rem;">
                       <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                           <h3 style="font-size: 1.25rem; color: #222; margin: 0;">Serengeti Migration Safari</h3>
                           <span style="background-color: #4d4402e0; color: white; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">6Days</span>
                       </div>
                       <p style="color: #666; font-size: 0.95rem; line-height: 1.5; margin: 0.75rem 0;">
                           Experience the breathtaking wildebeest migration across the vast Serengeti plains. Witness nature's greatest spectacle with expert guides.
                       </p>
                       <div style="border-top: 1px solid #e0e0e0; margin: 1rem 0; padding-top: 0.75rem; display: flex; justify-content: space-between; align-items: center; font-size: 0.9rem; color: #666;">
                           <span><i class="far fa-eye" style="margin-right: 0.25rem;"></i> 1.5k</span>
                           <span><i class="far fa-heart" style="margin-right: 0.25rem;"></i> 42</span>
                       </div>
                   </div>
               </a>
               
               <!-- Package 2 -->
               <a href="#" class="package-card" style="display: block; text-decoration: none; color: inherit; background-color: #f5f2ed; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 100%; width: 100%;">
                   <div style="height: 200px; overflow: hidden;">
                       <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                            alt="Kilimanjaro Climb" 
                            style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                   </div>
                   <div style="padding: 1.5rem;">
                       <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                           <h3 style="font-size: 1.25rem; color: #222; margin: 0;">Kilimanjaro Trekking</h3>
                           <span style="background-color: #4d4402e0; color: white; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">7Days</span>
                       </div>
                       <p style="color: #666; font-size: 0.95rem; line-height: 1.5; margin: 0.75rem 0;">
                           Conquer Africa's highest peak through the scenic Machame route. Our experienced guides ensure a safe and memorable climbing experience.
                       </p>
                       <div style="border-top: 1px solid #e0e0e0; margin: 1rem 0; padding-top: 0.75rem; display: flex; justify-content: space-between; align-items: center; font-size: 0.9rem; color: #666;">
                           <span><i class="far fa-eye" style="margin-right: 0.25rem;"></i> 1.2k</span>
                           <span><i class="far fa-heart" style="margin-right: 0.25rem;"></i> 36</span>
                       </div>
                   </div>
               </a>
               
               <!-- Package 3 -->
               <a href="#" class="package-card" style="display: block; text-decoration: none; color: inherit; background-color: #f5f2ed; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 100%; width: 100%;">
                   <div style="height: 200px; overflow: hidden;">
                       <img src="https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                            alt="Zanzibar Beach" 
                            style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                   </div>
                   <div style="padding: 1.5rem;">
                       <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                           <h3 style="font-size: 1.25rem; color: #222; margin: 0;">Zanzibar Beach Retreat</h3>
                           <span style="background-color: #4d4402e0; color: white; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">5Days</span>
                       </div>
                       <p style="color: #666; font-size: 0.95rem; line-height: 1.5; margin: 0.75rem 0;">
                           Unwind on Zanzibar's pristine white sand beaches. Explore the rich culture and crystal-clear waters of this tropical paradise.
                       </p>
                       <div style="border-top: 1px solid #e0e0e0; margin: 1rem 0; padding-top: 0.75rem; display: flex; justify-content: space-between; align-items: center; font-size: 0.9rem; color: #666;">
                           <span><i class="far fa-eye" style="margin-right: 0.25rem;"></i> 2.1k</span>
                           <span><i class="far fa-heart" style="margin-right: 0.25rem;"></i> 64</span>
                       </div>
                   </div>
               </a>
           </div>
       </div>
   </div>
   
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