@php 
$latestSafari = \App\Models\Package::where('is_active', true)
    ->where('category', 'safari')
    ->orderBy('created_at', 'desc')
    ->orderBy('id', 'desc')
    ->first();
$latestKilimanjaro = \App\Models\Package::where('is_active', true)
    ->where('category', 'kilimanjaro')
    ->orderBy('created_at', 'desc')
    ->orderBy('id', 'desc')
    ->first();

$latestzanzibar = \App\Models\Package::where('is_active', true)
    ->where('category', 'zanzibar')
    ->orderBy('created_at', 'desc')
    ->orderBy('id', 'desc')
    ->first();

@endphp
<!-- Destinations Grid Partial -->
<section class="destinations-section" style="background-image: url({{ asset('images/image-used/bg.AVIF') }}) !important; background-size: cover !important; background-position: center !important;">
    <div class="container">
        <div class="section-header d-block lg:hidden">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 text-white " data-aos="fade-up">Popular Destinations</h2>
            <p class="section-subtitle text-white text-xl" data-aos="fade-up">Explore our most popular Tanzanian destinations</p>
        </div>
        
        <div class="destinations-scroll-container">
            <div class="destinations-grid h-120">
                <!-- Destination Card 1 -->
                <a href="#" class="destination-card block duration-300 hidden lg:block" data-aos="fade-up">
                    <div class="card-image">
                        <div>
                            <div class="flex flex-col h-full justify-between py-6">
                                <div class="mt-auto w-full">
                                    <div class="flex flex-row justify-center items-center w-full">
                                        <div class="section-header">
            <h2 class="text-3xl md:text-4xl font-bold text-white" style="font-family: 'AlternateGotNo1D', sans-serif;
    font-weight: 400 !important;
    font-size: 30px!important;
    letter-spacing: 3px !important;
    text-transform: uppercase !important;
    line-height: 54px !important;">Popular Destinations</h2>
            <p class="section-subtitle text-white">Explore our most popular Tanzanian destinations</p>
        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

  <!-- Destination Card 1 -->
                <a href="#" class="destination-card block duration-300" data-aos="fade-up">
                    <div class="card-image">
                        <img src="{{asset('storage/' . $latestSafari?->featured_image)}}" alt="Maasai Mara National Reserve">
                        <div class="card-overlay bg-black/20 hover:bg-black/25 transition duration-500 ease-in-out">
                            <div class="flex flex-col h-full justify-between py-6">
                                <div class="mt-auto w-full" style="margin-top:60%" >
                                    <div class="flex flex-row justify-center items-center w-full">
                                        <h3 class="text-lg sm:text-xl font-semibold pr-2">Safaris</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>


  <!-- Destination Card 1 -->
                <a href="#" class="destination-card block duration-300" data-aos="fade-up">
                    <div class="card-image">
                        <img src="{{asset('storage/' . $latestSafari?->featured_image)}}" alt="Maasai Mara National Reserve">
                        <div class="card-overlay bg-black/20 hover:bg-black/25 transition duration-500 ease-in-out">
                            <div class="flex flex-col h-full justify-between py-6">
                                <div class="mt-auto w-full" style="margin-top:60%" >
                                    <div class="flex flex-row justify-center items-center w-full">
                                        <h3 class="text-white text-lg sm:text-xl font-semibold pr-2">Safaris</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Destination Card 2 -->
                <a href="#" class="destination-card block duration-300" data-aos="fade-up">
                    <div class="card-image">
                        <img src="{{asset('storage/' . $latestKilimanjaro?->featured_image)}}" alt="Serengeti National Park">
                        <div class="card-overlay bg-black/20 hover:bg-black/25 transition duration-500 ease-in-out">
                            <div class="flex flex-col h-full justify-between py-6">
                                <div class="mt-auto w-full" style="margin-top:60%" >
                                    <div class="flex flex-row justify-center items-center w-full">
                                        <h3 class="text-white text-lg sm:text-xl font-semibold  pr-2">Hiking</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Destination Card 3 -->
                <a href="#" class="destination-card block duration-300" data-aos="fade-up">
                    <div class="card-image">
                        <img src="{{asset('storage/' . $latestzanzibar?->featured_image)}}" alt="Amboseli National Park">                    <div class="card-overlay bg-black/20 hover:bg-black/25 transition duration-500 ease-in-out">
                            <div class="flex flex-col h-full justify-between py-6">
                                <div class="mt-auto w-full" style="margin-top:60%" >
                                    <div class="flex flex-row justify-center items-center w-full">
                                        <h3 class="text-white text-lg sm:text-xl font-semibold pr-2 ">Beaches</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                
                <!-- You can add more cards here -->
                {{-- Example of additional card --}}
                {{--
                <a href="#" class="destination-card block duration-300" data-aos="fade-up">
                    <div class="card-image">
                        <img src="{{ asset('path/to/additional/image.jpg') }}" alt="Additional Destination">
                        <div class="card-overlay bg-black/20 hover:bg-black/25 transition duration-500 ease-in-out">
                            <div class="flex flex-col h-full justify-between py-6">
                                <div class="mt-auto w-full" style="margin-top:60%" >
                                    <div class="flex flex-row justify-center items-center w-full">
                                        <h3 class="text-white text-lg sm:text-xl font-semibold pr-2">New Destination</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                --}}
            </div>
        </div>
        
    </div>
</section>

<style>
/* Destinations Section Styles */
.destinations-section {
    padding: 2rem 0;
    background-color: #F5F5DC;
    overflow: hidden; /* Prevent horizontal scroll on the section */
}

.container {
    max-width: 100%; /* Full width container */
    padding: 0 20px;
    margin: 0 auto;
}

.section-header {
    text-align: center;
    margin-bottom: 2rem;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.destinations-scroll-container {
    width: 100%;
    overflow-x: auto;
    padding: 1rem 0;
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
    scrollbar-width: none; /* Hide scrollbar for Firefox */
    -ms-overflow-style: none; /* Hide scrollbar for IE and Edge */
}

.destinations-scroll-container::-webkit-scrollbar {
    display: none;
}
.card-overlay  {
    z-index: 999;
    position: absolute;
    top: 0;
    bottom:50;
    left: 50;
    width: 100%;
    height: 100%;
    color: #fff !important;
}

.destinations-grid {
    display: inline-flex;
    gap: 2rem;
    padding: 0 0rem 1rem; /* Add padding to prevent cards from touching the edges */
    min-width: min-content; /* Ensure the container is at least as wide as its content */
}



.destination-card {
    background: transparent;
    border-radius: 2px;
    min-width: 300px;
    max-width: 350px;
    flex: 0 0 auto;
    overflow: hidden;
    transition: transform 0.3s ease;
    position: relative;
}

.destination-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.card-image {
    position: relative;
    height: 100%;
    width: 100%;
    max-width: 300px;
    overflow: hidden;
    border-radius: 2px;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.destination-card:hover .card-image img {
    transform: scale(1.05);
}

/* Rest of the existing styles remain the same */
/* Removed card-content styles as they're no longer needed */

/* Removed destination-name styles as they're now in the overlay */

.destination-link {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s ease;
}

.destination-link:hover {
    color: #e67e22;
}

.location {
    display: flex;
    align-items: center;
    color: #e67e22;
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.location i {
    margin-right: 5px;
}

.description {
    color: #666;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.explore-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #1a472a;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: 500;
    transition: background-color 0.3s ease;
}

.explore-btn:hover {
    background-color: #2d5a3f;
}

.view-all-container {
    text-align: center;
    margin-top: 2rem;
}

.view-all-btn {
    display: inline-block;
    padding: 12px 30px;
    background-color: #e67e22;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: 600;
    transition: all 0.3s ease;
    border: 2px solid #e67e22;
}

.view-all-btn:hover {
    background-color: transparent;
    color: #e67e22;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .destinations-grid {
        gap: 1rem;
    }
}

@media (max-width: 768px) {
    .destination-card {
        min-width: 280px;
    }
    
    .destinations-grid {
        padding: 0 0rem 1rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .destination-card {
        min-width: 260px;
    }
    
}
</style>
