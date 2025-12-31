@extends('layouts.app')

@section('content')
@php
    $itineraries = is_string($package->itineraries) ? json_decode($package->itineraries, true) : $package->itineraries;
    $heroImage = !empty($itineraries[1]['image']) ? $itineraries[1]['image'] : '851897_9587828f79e74b21a175b075af31661e~mv2.jpg';
    
    $prices = explode(',', $package->price);
@endphp

@include('partials.sections.page-hero', [
    'image' => '/storage/'.$heroImage,
    'title' => $package->title ?? 'Explore Our Destinations',
    'subtitle' => $package->duration ?? ''
])

<div style="background-color: #fcfcf9; padding: 40px 0;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; flex-wrap: wrap; gap: 40px;">
        
        <div style="flex: 2; min-width: 300px;">
            

            <section style="margin-bottom: 40px; text-align: center; background: #fff;" class="shadow-lg rounded-sm">
                <h2 style="font-size: 1.8rem; color: #2c3e50; margin-bottom: 5px; position: relative;">
 Overview
    <span style="position: absolute; bottom: -4px; left: 50%; transform: translateX(-50%); width: 9rem; height: 4px; background-color: #E7247A; content: '';"></span>
</h2>
                <div style="line-height: 1.8; color: #555; font-size: 1.05rem; background: #fff; padding: 20px; border-radius: 8px;">
                    {!! $package->overview !!}
                </div>
            </section>

            <section style="margin-bottom: 40px; background: #fff; padding-bottom: 5px;" class="shadow-lg rounded-sm; padding-bottom: 1rem !important;">
                  <h2 style="font-size: 1.8rem; color: #2c3e50;  text-align: center; margin-bottom: 5px; position: relative;">
Group Prices
    <span style="position: absolute; bottom: -3px; left: 50%; transform: translateX(-50%); width: 10rem; height: 4px; background-color: #E7247A; content: '';"></span>
</h2>
                <div style="overflow-x: auto; border-radius: 8px; border: 1px solid #e0e0e0; box-shadow: 0 2px 10px rgba(0,0,0,0.03); margin: 0.5rem 1rem;" >
                    <table style="width: 100%; border-collapse: collapse; background-color: white;">
                        <thead>
                            <tr style="background-color: #E7247A; color: white; text-align: center;">
                                <th style="padding: 0px; border-right: 1px solid rgba(255,255,255,0.2); font-weight: 600;">Group Size</th>
                                <th style="padding: 0px; font-weight: 600;">Price Per Person</th>
                            </tr>
                        </thead>
                        <tbody style="color: #555; text-align: center;">

                            @foreach($prices as $index => $price)
                            <tr style="border-bottom: 1px solid #eee;">
                                <td style="padding: 1px; border-right: 1px solid #eee;">{{ $index + 1 }} Person</td>
                                <td style="padding: 1px; font-weight: 600; color: #2c3e50;">US $ {{ trim($price) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <section style="margin-bottom: 40px;background: #fff;" class="shadow-lg rounded-sm">
               <h2 style="font-size: 1.8rem; color: #2c3e50; margin-bottom: 5px; position: relative; text-align: center;">
    Itinerary
    <span style="position: absolute; bottom: -4px; left: 50%; transform: translateX(-50%); width: 6rem; height: 4px; background-color: #E7247A; content: '';"></span>
</h2>
                @foreach($itineraries as $index => $itinerary)
                <div style="background: white; border-radius: 12px; margin-bottom: 20px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.03); border: 1px solid #f0f0f0;">
                    <div style="padding: 20px; display: flex; flex-wrap: wrap; gap: 20px;">
                        @if(!empty($itinerary['image']))
                        <div style="flex: 1; min-width: 200px;">
                            <img src="{{ asset('storage/' . $itinerary['image']) }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                        </div>
                             <div style="flex: 1; min-width: 200px;">
                            <img src="{{ asset('storage/' . $itinerary['image']) }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                        </div>
                             <div style="flex: 1; min-width: 200px;">
                            <img src="{{ asset('storage/' . $itinerary['image']) }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                        </div>
                        @endif
                        <div style="flex: 2; min-width: 250px;">
                            <h3 style="margin: 5px 0 15px 0; color: #2c3e50;">{{ $itinerary['title'] ?? '' }}</h3>
                            <div style="color: #666; font-size: 0.95rem; line-height: 1.6;">
                                @if(isset($itinerary['descriptions']))
                                    @foreach($itinerary['descriptions'] as $desc)
                                        {!! $desc['content'] ?? '' !!}
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </section>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                <div style="background: #fff; padding: 25px; border-radius: 12px;" class="shadow-lg">
                      <h2 style="font-size: 1.8rem; color: #2c3e50; margin-bottom: 5px; position: relative; text-align: center;">
 Inclusions
    <span style="position: absolute; bottom: -4px; left: 50%; transform: translateX(-50%); width: 8rem; height: 4px; background-color: #E7247A; content: '';"></span>
</h2>
                    <ul style="list-style: none; padding: 0; font-size: 16px; line-height: 2;color: #666;">
                        @foreach($package->included_items ?? [] as $item)
                            <li><i class="fas fa-check-circle" style="color: margin-right: 8px;"></i> {{ is_array($item) ? ($item['item'] ?? '') : $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div style="background: #fff; padding: 25px; border-radius: 12px;" class="shadow-lg">
                       <h2 style="font-size: 1.8rem; color: #2c3e50; text-align: center; margin-bottom: 5px; position: relative;">
 Exclusions
    <span style="position: absolute; bottom: -4px; left: 50%; transform: translateX(-50%); width: 8rem; height: 4px; background-color: #E7247A; content: '';"></span>
</h2>
                    <ul style="list-style: none; padding: 0; font-size: 16px; line-height: 2; color: #666;">
                        @foreach($package->excluded_items ?? [] as $item)
                            <li><i class="fas fa-times-circle" style="color: margin-right: 8px;"></i> {{ is_array($item) ? ($item['item'] ?? '') : $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div style="flex: 1; min-width: 320px;">
            <div style="position: sticky; top: 100px; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border: 1px solid #eee;">
                <h3 style="margin-top: 0; color: #2c3e50; font-size: 1.4rem;">Book This Safari</h3>
                <p style="color: #7f8c8d; font-size: 0.9rem; margin-bottom: 25px;">Ready for adventure? Send us an inquiry to get started.</p>
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 @error('name') border-red-500 @enderror">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 @error('email') border-red-500 @enderror">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject <span class="text-red-500">*</span></label>
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 @error('subject') border-red-500 @enderror">
                                @error('subject')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message <span class="text-red-500">*</span></label>
                                <textarea id="message" name="message" rows="4" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- add Recaptcha site key --}}
                            <div class="col-md-12">

                                    <div class="form-group">

                                        <strong>ReCaptcha:</strong>

                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                                        @if ($errors->has('g-recaptcha-response'))

                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>

                                        @endif

                                    </div>  

                                </div>
                  
                            @if ($errors->has('g-recaptcha-response'))
                                <div class="mt-2 text-sm text-red-600">
                                    {{ $errors->first('g-recaptcha-response') }}
                                </div>
                            @endif

                            
                            <div class="pt-2">
                                <button type="submit" 
                                    class="w-full bg-[#e7247a] text-white font-semibold py-3 px-6 rounded-md hover:bg-[#e7247a] transition duration-300">
                                    Send Message
                                </button>
                            </div>
                        </form>
            </div>
        </div>

    </div>
</div>

<div style="max-width: 1200px; margin: 40px auto; padding: 0 20px;">
     <h2 style="font-size: 1.8rem; text-align: center; color: #2c3e50; margin-bottom: 5px; position: relative; margin-left: auto; margin-right: auto;">
    Your May Also Like
    <span style="position: absolute; bottom: -4px; left: 50%; transform: translateX(-50%); width: 16rem; height: 4px; background-color: #E7247A; content: '';"></span>
</h2>
    @include('partials.packages.related-packages', ['packages' => $relatedPackages])
</div>

@endsection