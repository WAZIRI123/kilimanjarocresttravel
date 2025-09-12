@extends('layouts.app')
@php
    $packages = \App\Models\Package::where(function($query) {
        $query->where('is_active', true)
              ->where('is_special', true);
    })->orWhere(function($query) {
        $query->where('is_active', false)
              ->where('is_special', true);
    })->get();
@endphp
@section('content')
<!-- Hero Section -->
<div class="relative bg-cover bg-center h-96 flex items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('storage/' . $packages?->last()?->featured_image) }}')">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold text-white mb-4">Special Offers</h1>
        <p class="text-xl text-gray-200">Exclusive deals and packages for your dream safari adventure</p>
    </div>
</div>

<!-- Offers Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Current Special Deals</h2>
            <div class="w-24 h-1 bg-black mx-auto"></div>
        </div>

        <!-- Offers Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:w-[95%] lg:mx-auto">

            <!-- Offer Card 2 -->
            @foreach ($packages as $package)
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="relative h-64">
                    <img src="{{ asset( 'storage/' . $package?->featured_image) }}" alt="Serengeti Special" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-black text-white text-sm font-bold px-3 py-1 rounded-full">
                        {{ $package?->discount_percentage }}% Off
                    </div>
                       <div class="absolute top-4 left-4 bg-black text-white text-sm font-bold px-3 py-1 rounded-full">
                       Valid until {{ $package?->valid_until }}
                    </div>
                </div>
                <div class="px-2 py-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $package?->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $package?->short_description }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">${{ ($package?->price - ($package?->price * $package?->discount_percentage / 100)) }} <span class="text-gray-500 line-through text-sm">${{ $package?->price }}</span></span>
                      
                         <a href="{{ route('package.show', $package?->slug) }}" class="mt-4 inline-block bg-black hover:bg-black/80 text-white text-center font-bold py-2 px-6 rounded-full transition-colors duration-300">
                        Book Now!
                    </a>
                    </div>
                   
                </div>
            </div>
               @endforeach
            </div>

        <!-- CTA Section -->
        <div class="mt-16 bg-yellow-50 rounded-lg p-8 text-center lg:w-[95%] lg:mx-auto" >
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Looking for a Custom Package?</h3>
            <p class="text-gray-600 mb-6 max-w-2xl mx-auto">Contact our safari experts to create a personalized itinerary tailored to your preferences and budget.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-black hover:bg-black/80 text-white font-bold py-3 px-8 rounded-full transition-colors duration-300">
                Contact Us
            </a>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-2xl font-bold mb-4">Subscribe to Our Newsletter</h3>
        <p class="text-gray-300 mb-6 max-w-2xl mx-auto">Be the first to know about our exclusive offers and new safari packages.</p>
           @if (session()->has('success'))
            <div class="alert alert-success" style="background-color: green; padding-bottom: 10px;">
                {{ session('success') }}
            </div>
            @endif
        <form class="max-w-md mx-auto flex" action="{{ route('subscribe') }}" method="POST">
            @csrf
            <input name="email" type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-l-lg focus:outline-none text-black bg-white">
            <button type="submit" class="bg-yellow-50 hover:bg-yellow-60 text-black font-bold py-3 px-6 rounded-r-lg transition-colors duration-300 cursor-pointer">
                Subscribe
            </button>
        </form>
    </div>
</div>
@endsection
