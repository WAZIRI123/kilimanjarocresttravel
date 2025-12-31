@php 
$latestDayTrip = \App\Models\Package::where('is_active', true)
    ->where('category', 'day-trip')
    ->inRandomOrder()
    ->limit(4)
    ->get();




$latestHiking = \App\Models\Package::where('is_active', true)
    ->where('category', 'hiking')
    ->inRandomOrder()
    ->orderBy('created_at', 'desc')
    ->orderBy('id', 'Asc')
    ->limit(1)
    ->get();

    //join two
    $combinedPackages = $latestDayTrip->merge($latestHiking);

@endphp
<!-- Destinations Grid Partial -->
<section class="destinations-section">
    <div class="container">
        <div class="section-header">
            <h2 class="text-3xl font-bold text-gray-900 mb-4" >Our Popular Destination Tours</h2>
        </div>
        
        <div class="destinations-grid">
            @foreach($combinedPackages as $package)
                <!-- Destination Card -->
                <div class="destination-card" data-aos-delay="{{100 + ($loop->index * 100)}}">
                    <a href="{{ route('package.show', $package->slug) }}" class="block h-full">
                        <div class="card-image">
                            <img src="{{asset('storage/' . $package->featured_image)}}" alt="{{$package->category}}">
                            <div class="card-overlay">
                                <h3 class="destination-title">{{$package->title}}</h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            
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
    padding: 0 20px;
    margin: 0 auto;
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

/* Grid Layout */
.destinations-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1.5rem;
    padding: 1rem 0;
}

/* Card Styles */
.destination-card {
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    height: 100%;
}

.destination-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.card-image {
    position: relative;
    width: 100%;
    height: 20rem;
    padding-top: 75%; /* 4:3 Aspect Ratio */
    overflow: hidden;
}

.card-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.destination-card:hover .card-image img {
    transform: scale(1.1);
}

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.destination-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin: 0;
    color: white;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    width: 100%;
}

/* Responsive Adjustments */
@media (max-width: 1024px) {
    .destinations-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    }
}

@media (max-width: 768px) {
    .destinations-section {
        padding: 3rem 0;
    }
    
    .destinations-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1rem;
    }
}

@media (max-width: 480px) {
    .destinations-grid {
        grid-template-columns: 1fr;
        max-width: 400px;
        margin: 0 auto;
    }
    
    .section-header h2 {
        font-size: 1.75rem;
    }
}
</style>
