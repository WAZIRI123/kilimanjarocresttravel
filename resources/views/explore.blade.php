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
    <div class="section-spacing">
        <div id="bgLayers_comp-m1luvo7h" data-hook="bgLayers" data-motion-part="BG_LAYER comp-m1luvo7h" class="MW5IWV"><div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div><div id="bgMedia_comp-m1luvo7h" data-motion-part="BG_MEDIA comp-m1luvo7h" class="VgO9Yg"></div></div>
        @include('partials.packages.related-packages', [
            'title' => 'Our Packages',
            'customTitle' => 'Custom Package',
            'viewAllLink' => '#',
            'packages' => [
                [
                    'title' => '6 Days | Kilimanjaro Trekking',
                    'url' => '#',
                    'image' => 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80',
                    'description' => "Many hikers believe that the Marangu route is the easiest route to Uhuru peak, since it is the only route which can be hiked in 5 days (making it the cheapest option)",
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