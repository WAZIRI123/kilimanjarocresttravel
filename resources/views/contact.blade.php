@extends('layouts.app')

@section('content')
    <!-- Hero Section with Page Title -->
    <section class="page-hero-section bg-cover bg-center relative" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1526772662000-3f88f10405ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
        <div class="container mx-auto px-4 h-full flex items-center justify-center text-center">
            <div class="text-white py-24">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Contact Us</h1>
                <div class="w-24 h-1 bg-yellow-500 mx-auto mb-6"></div>
                <p class="text-xl md:text-2xl">We'd love to hear from you. Get in touch with our team.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Information -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Get in Touch</h2>
                        <p class="text-gray-600 mb-8">Have questions about our safaris or need help planning your trip? Our team is here to assist you.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-full">
                                    <i class="fas fa-map-marker-alt text-yellow-500 text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Our Office</h3>
                                    <p class="text-gray-600">123 Safari Street, Arusha, Tanzania</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-full">
                                    <i class="fas fa-phone-alt text-yellow-500 text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Call Us</h3>
                                    <p class="text-gray-600">+255 123 456 789</p>
                                    <p class="text-gray-600">+255 987 654 321</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-full">
                                    <i class="fas fa-envelope text-yellow-500 text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Email Us</h3>
                                    <p class="text-gray-600">info@stansafaris.com</p>
                                    <p class="text-gray-600">bookings@stansafaris.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-full">
                                    <i class="fas fa-clock text-yellow-500 text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Working Hours</h3>
                                    <p class="text-gray-600">Monday - Friday: 8:00 AM - 6:00 PM</p>
                                    <p class="text-gray-600">Saturday: 9:00 AM - 4:00 PM</p>
                                    <p class="text-gray-600">Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Follow Us</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-600 hover:text-yellow-500 transition-colors">
                                    <i class="fab fa-facebook-f text-2xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-yellow-500 transition-colors">
                                    <i class="fab fa-twitter text-2xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-yellow-500 transition-colors">
                                    <i class="fab fa-instagram text-2xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-yellow-500 transition-colors">
                                    <i class="fab fa-youtube text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
                        <form action="#" method="POST" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" id="name" name="name" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" id="email" name="email" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" id="phone" name="phone" 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                <input type="text" id="subject" name="subject" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                                <textarea id="message" name="message" rows="4" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"></textarea>
                            </div>
                            
                            <div>
                                <button type="submit" 
                                    class="w-full bg-yellow-500 text-white font-semibold py-3 px-6 rounded-md hover:bg-yellow-600 transition duration-300">
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
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.534232990382!2d36.82182031475398!3d-1.2863436359668116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a6bf7445dc1%3A0x940b62a3b7f3b1e6!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2ske!4v1620000000000!5m2!1sen!2ske" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </section>

    <style>
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
        
        .hover\:bg-yellow-600:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(217, 119, 6, var(--tw-bg-opacity));
        }
    </style>
@endsection
