<!-- Destinations Grid Partial -->
<section class="destinations-section bg-[rgba(0,0,0,0.05)]">
    <div class="container">
        <div class="section-header">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Popular Destinations</h2>
            @include('partials.divider')
            <p class="section-subtitle">Explore our most sought-after safari destinations</p>
        </div>
        
        <div class="destinations-grid">
            <!-- Destination Card 1 -->
            <a href="#" class="destination-card block shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="card-image">
                    <img src="https://stanley-safaris.com/wp-content/uploads/2024/12/Stanley-Safaris-Honeymoon-112.jpg.pagespeed.ce.Jp54jafdCt.jpg" alt="Maasai Mara National Reserve">
                    <div class="card-overlay">
                        <div class="flex flex-col h-full justify-between py-6">
                            <div class="mt-auto w-full">
                                <div class="flex flex-row justify-between items-center w-full">
                                    <h3 class="text-white text-lg sm:text-xl font-semibold line-clamp-1 pr-2">Maasai Mara</h3>
                                    <div class="duration whitespace-nowrap bg-white/20 text-white px-2 py-1 rounded text-sm sm:text-base">3 Days</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Destination Card 2 -->
            <a href="#" class="destination-card block shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="card-image">
                    <img src="https://stanley-safaris.com/wp-content/uploads/2024/12/Stanley-Safaris-Honeymoon-112.jpg.pagespeed.ce.Jp54jafdCt.jpg" alt="Serengeti National Park">
                    <div class="card-overlay">
                        <div class="flex flex-col h-full justify-between py-6">
                            <div class="mt-auto w-full">
                                <div class="flex flex-row justify-between items-center w-full">
                                    <h3 class="text-white text-lg sm:text-xl font-semibold line-clamp-1 pr-2">Serengeti</h3>
                                    <div class="duration whitespace-nowrap bg-white/20 text-white px-2 py-1 rounded text-sm sm:text-base">4 Days</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Destination Card 3 -->
            <a href="#" class="destination-card block shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="card-image">
                    <img src="https://stanley-safaris.com/wp-content/uploads/2024/12/Stanley-Safaris-Honeymoon-112.jpg.pagespeed.ce.Jp54jafdCt.jpg" alt="Amboseli National Park">
                    <div class="card-overlay">
                        <div class="flex flex-col h-full justify-between py-6">
                            <div class="mt-auto w-full">
                                <div class="flex flex-row justify-between items-center w-full">
                                    <h3 class="text-white text-lg sm:text-xl font-semibold line-clamp-1 pr-2">Amboseli</h3>
                                    <div class="duration whitespace-nowrap bg-white/20 text-white px-2 py-1 rounded text-sm sm:text-base">3 Days</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
        
    </div>
</section>

<style>
/* Destinations Section Styles */
.destinations-section {
    padding: 2rem 0;
    background-color: #f9f9f9;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-title {
    font-size: 2.5rem;
    color: #1a472a;
    margin-bottom: 1rem;
    font-weight: 700;
}

.section-subtitle {
    color: #666;
    font-size: 1.1rem;
    max-width: 700px;
    margin: 0 auto;
}

.destinations-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.destination-card {
    background: transparent;
    border-radius: 10px;
    min-height: 80%;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.destination-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.card-image {
    position: relative;
    height: 420px;
    overflow: hidden;
    border-radius: 10px;
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

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.1) 100%);
    color: #fff;
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    box-sizing: border-box;
}

.price-tag {
    background: #e67e22;
    color: #fff;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
    margin: 0;
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.duration {
    background: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(5px);
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    text-align: center;
    margin: 0;
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.2);
    flex-shrink: 0;
    margin-left: 0.5rem;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

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
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .destinations-grid {
        grid-template-columns: 1fr;
    }
    
    .section-title {
        font-size: 2rem;
    }
}
</style>
