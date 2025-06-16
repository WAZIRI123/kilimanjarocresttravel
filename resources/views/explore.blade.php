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
        @include('partials.explore-page.packages')
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
@endpush

@push('scripts')
    <!-- Additional page-specific scripts -->
@endpush