@extends('layouts.app')
@section('content')
    <!-- Hero Section with Page Title -->
    @include('partials.sections.page-hero', [
        'image' => asset('images/image-used/about.jpg'),
        'title' => 'Who We Are',
        'subtitle' => 'We’ll Get Back Soon'
    ])
   @include('partials.sections.text-image-about')
   @include('partials.sections.quick-quote',['modalName'=>'transfersQuoteModal'])
@endsection
