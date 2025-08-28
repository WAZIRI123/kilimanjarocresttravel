@extends('layouts.app')
@section('content')
    <!-- Hero Section with Page Title -->
    @include('partials.sections.page-hero', [
        'image' => asset('images/image-used/safari.webp'),
        'title' => 'About Us',
        'subtitle' => 'We’ll Get Back Soon'
    ])
   @include('partials.sections.text-image-about')
@endsection
