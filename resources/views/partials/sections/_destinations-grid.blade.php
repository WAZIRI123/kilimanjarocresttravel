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
            <div class="destination-card">
                <div class="card-image">
                    <img src="https://stanley-safaris.com/wp-content/uploads/2024/12/Stanley-Safaris-Honeymoon-112.jpg.pagespeed.ce.Jp54jafdCt.jpg" alt="Maasai Mara National Reserve">
                    <div class="card-overlay">
                        <div class="price-tag">From $1,200</div>
                        <div class="duration">3 Days</div>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="destination-name"><a href="/destinations/maasai-mara" class="text-xl font-semibold text-gray-900">Maasai Mara National Reserve</a></h3>
                </div>
            </div>

            <!-- Destination Card 2 -->
            <div class="destination-card">
                <div class="card-image">
                    <img src="https://stanley-safaris.com/wp-content/uploads/2024/12/Stanley-Safaris-Honeymoon-112.jpg.pagespeed.ce.Jp54jafdCt.jpg" alt="Serengeti National Park">
                    <div class="card-overlay">
                        <div class="price-tag">From $1,500</div>
                        <div class="duration">4 Days</div>
                    </div>
                </div>
                 <div class="card-content">
                    <h3 class="destination-name"><a href="/destinations/maasai-mara" class="text-xl font-semibold text-gray-900">Maasai Mara National Reserve</a></h3>
                </div>
            </div>

            <!-- Destination Card 3 -->
            <div class="destination-card">
                <div class="card-image">
                    <img src="https://stanley-safaris.com/wp-content/uploads/2024/12/Stanley-Safaris-Honeymoon-112.jpg.pagespeed.ce.Jp54jafdCt.jpg" alt="Amboseli National Park">
                    <div class="card-overlay">
                        <div class="price-tag">From $950</div>
                        <div class="duration">2 Days</div>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="destination-name"><a href="/destinations/amboseli" class="text-xl font-semibold text-gray-900">Amboseli National Park</a></h3>

                </div>
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
    background: #fff;
    border-radius: 10px;
    min-height: 60vh;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.destination-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.card-image {
    position: relative;
    height: 320px;
    overflow: hidden;
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
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 50%);
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    padding: 20px;
    color: #fff;
}

.price-tag {
    background: #e67e22;
    color: #fff;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
    margin: 0;
}

.duration {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(5px);
    padding: 3px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    margin: 0;
}

.card-content {
    padding: 1.5rem;
    text-align:center;
    text-decoration:underline;
}

.destination-name {
    font-size: 1.4rem;
    color: #1a472a;
    margin-bottom: 0.5rem;
    font-weight: 700;
}

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
