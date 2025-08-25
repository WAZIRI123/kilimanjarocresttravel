<!-- Why Travel With Us -->
<div class="py-16" style="background-color: #F5F5DC;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Travel With Us</h2>
            @include('partials.divider')
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Experience the difference with our exceptional travel services designed for the modern explorer.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 lg:w-3/4 lg:mx-auto">
            <!-- Card 1 -->
            <div class="group relative rounded-xl border border-gray-200 p-6 shadow-sm transition-all hover:shadow-md hover:-translate-y-1 overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center z-0" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('images/image-used/experts.jpeg') }}') no-repeat center center; background-size: cover;"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center mb-4 group-hover:bg-blue-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 text-white">Expertly Curated Experiences</h3>
                    <p class="text-gray-300">Our travel experts curate destinations and activities for unforgettable experiences and true cultural immersion.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group relative rounded-xl border border-gray-200 p-6 shadow-sm transition-all hover:shadow-md hover:-translate-y-1 overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center z-0" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('images/image-used/plan.jpg') }}') no-repeat center center; background-size: cover;"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 rounded-lg bg-green-50 flex items-center justify-center mb-4 group-hover:bg-green-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Seamless Planning</h3>
                    <p class="text-gray-300">From flights and comfortable accommodations to guided activities and unique local experiences, we take care of every detail.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group relative rounded-xl border border-gray-200 p-6 shadow-sm transition-all hover:shadow-md hover:-translate-y-1 overflow-hidden">
                  <div class="absolute inset-0 bg-cover bg-center z-0" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('images/image-used/CHARITY-1.jpeg') }}') no-repeat center center; background-size: cover;"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 rounded-lg bg-purple-50 flex items-center justify-center mb-4 group-hover:bg-purple-100 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Sustainable Tourism</h3>
                    <p class="text-gray-300">We believe in creating meaningful connections through responsible travel by Empowering local initiatives, and supporting education.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partner Logos -->
<div class="py-16 ">
    <div class="text-center mb-3">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Partners</h2>
        @include('partials.divider')
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 items-center justify-items-center px-4 lg:w-2/3 lg:mx-auto">
        <!-- Partner 1 -->
        <a href="https://tatotz.org" target="_blank" class="block p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all border border-gray-100 w-full max-w-[100px] h-24 flex items-center justify-center">
            <img src="https://tatotz.org/wp-content/uploads/2023/12/tato-vector-new-1-200x200.png" alt="Partner 1" class="w-auto opacity-100 transition-opacity" />
        </a>
        
        <!-- Partner 2 -->
        <a href="https://www.airbnb.com" target="_blank" class="block p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all border border-gray-100 w-full max-w-[100px] h-24 flex items-center justify-center">
            <img src="https://cdn.brandfetch.io/idQDSrdYa_/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1751430637549" alt="Partner 2" class="w-auto opacity-100 transition-opacity" />
        </a>
        
        <!-- Partner 3 -->
        <a href="https://www.tanzaniatourism.go.tz/" target="_blank" class="block p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-200 border border-gray-100 w-full max-w-[100px] h-24 flex items-center justify-center">
            <img src="{{ asset('storage/images/tanzania.png') }}" alt="Partner 3" class="w-auto opacity-100 transition-opacity" />
        </a>
        
        <!-- Partner 4 -->
        <a href="https://www.safaribookings.com/" target="_blank" class="block p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all border border-gray-100 w-full max-w-[100px] h-24 flex items-center justify-center">
            <img src="{{ asset('storage/images/safari-bookings.png') }}" alt="Partner 4" class="w-auto opacity-100 transition-opacity" />
        </a>
        
        <!-- Partner 5 -->
        <a href="https://www.tripadvisor.com/" target="_blank" class="block p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-200 border border-gray-100 w-full max-w-[100px] h-24 flex items-center justify-center">
            <img src="{{ asset('storage/images/tripadvisor1.png') }}" alt="Partner 5" class="w-auto opacity-100 transition-opacity" />
        </a>
    </div>
</div>
