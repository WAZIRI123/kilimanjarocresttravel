@extends('layouts.app')

@section('content')
    <!-- Hero Section with Page Title -->
    @include('partials.sections.page-hero', [
        'image' => asset('images/serengeti-safari-tanzania.jpg'),
        'title' => 'Contact Us',
        'subtitle' => 'Get in Touch'
    ])

    <!-- Contact Form Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Information -->
                    <div>
                        <h2 class="text-4xl font-bold text-gray-800 mb-6">Get in Touch</h2>
                        <p class="text-lg text-gray-700 mb-8 leading-relaxed">Have questions about our safaris or need help planning your trip? Our team is here to assist you.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-[#4d4402e0] p-3 rounded-full">
                                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Our Office</h3>
                                    <p class="text-gray-700 text-base">Dar es Salaam
                                        , Tanzania</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-[#4d4402e0] p-3 rounded-full">
                                    <i class="fas fa-phone-alt text-white text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Call Us</h3>
                                    <p class="text-gray-700 text-base">+255754 261 101</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-[#4d4402e0] p-3 rounded-full">
                                    <i class="fas fa-envelope text-white text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Email Us</h3>
                                    <p class="text-gray-700 text-base">info@stansafaris.com</p>
                                    <p class="text-gray-700 text-base">bookings@stansafaris.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-[#4d4402e0] p-3 rounded-full">
                                    <i class="fas fa-clock text-white text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Working Hours</h3>
                                    <p class="text-gray-700 text-base">Monday - Friday: 8:00 AM - 6:00 PM</p>
                                    <p class="text-gray-700 text-base">Saturday: 9:00 AM - 4:00 PM</p>
                                    <p class="text-gray-700 text-base">Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Follow Us</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-600 hover:text-white transition-colors">
                                    <i class="fab fa-facebook-f text-2xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-white transition-colors">
                                    <i class="fab fa-twitter text-2xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-white transition-colors">
                                    <i class="fab fa-instagram text-2xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-white transition-colors">
                                    <i class="fab fa-youtube text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                        <h2 class="text-3xl font-bold text-gray-800 mb-8">Send Us a Message</h2>
                        
                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-500">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-green-700">
                                            {{ session('success') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-red-700">
                                            @foreach($errors->all() as $error)
                                                {{ $error }}<br>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

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
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 @error('phone') border-red-500 @enderror">
                                @error('phone')
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
                            
                            <div class="pt-2">
                                <button type="submit" 
                                    class="w-full bg-[#4d4402e0] text-white font-semibold py-3 px-6 rounded-md hover:bg-[#4d4402e0] transition duration-300">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="h-96 bg-gray-100">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.964978242355!2d39.20820031477197!3d-6.792481195057237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b03e0991891%3A0x9d5eefcaf6a1f0a9!2sDar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            title="Stan Safaris Office Location - Dar es Salaam, Tanzania">
        </iframe>
    </section>

    <style>
        /* Improved Typography */
        body {
            font-size: 16px;
            line-height: 1.6;
        }
        
        h2 {
            font-size: 2rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }
        
        h3 {
            font-size: 1.25rem;
            line-height: 1.4;
            margin-bottom: 0.75rem;
        }
        
        p {
            margin-bottom: 1rem;
            line-height: 1.6;
        }
        
        .contact-subtitle {
            font-size: 1.1rem;
            color: #4b5563;
        }
        
        @media (max-width: 768px) {
            .contact-subtitle {
                margin-top: -25px;
                font-size: 1rem;
            }
            
            h2 {
                font-size: 1.75rem;
            }
            
            h3 {
                font-size: 1.1rem;
            }
        }
        .page-hero-section {
            min-height: 40vh;
            display: flex;
            align-items: center;
            position: relative;
            background-size: cover;
            background-position: center;
        }
        
        .bg-cover {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .transition-colors {
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms;
        }
        
        .focus\:ring-2:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }
        
        .focus\:ring-yellow-500:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgba(245, 158, 11, var(--tw-ring-opacity));
        }
        
        .hover\:bg-[#4d4402e0]:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(217, 119, 6, var(--tw-bg-opacity));
        }
    </style>
@endsection
