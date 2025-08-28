<!-- Hero Section with Navigation -->
<header class="relative h-screen w-full overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <!-- Fallback image that shows first -->
        <img 
            id="hero-fallback"
            src="{{ asset('images/image-used/hero-main-image.jpg') }}" 
            alt="Safari Adventure" 
            class="w-full h-full object-cover"
        >
        <!-- Video element that will be shown after loading -->
        <video 
            id="hero-video" 
            class="hidden w-full h-full object-cover" 
            autoplay 
            loop 
            muted 
            playsinline
            oncanplay="this.classList.remove('hidden'); document.getElementById('hero-fallback').classList.add('hidden');"
        >
            <source src="{{ asset('images/image-used/video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black/50 backdrop-blur-xsm"></div>
    </div>
    <div class="px-4 sm:px-6 lg:px-8">
    @include('partials.sections.navigation')
    </div>
    
    <!-- Hero Content (unchanged) -->
    <div class="relative z-10 flex flex-col items-center justify-center h-[calc(100vh-5rem)] px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
            Discover the Wild Beauty
        </h1>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl">
            Experience the thrill of African safaris with our expert guides and luxurious accommodations.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ route('book-now') }}" class="inline-block bg-white text-gray-900 px-8 py-3 rounded-full font-medium hover:bg-gray-100 transition-colors text-sm text-center">
                Book Now
            </a>
            <a href="{{ route('all-packages') }}" class="inline-block bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-medium hover:bg-white/10 transition-colors outline-double outline-1 outline-gray-300 text-sm text-center">
                Explore Tours
            </a>
        </div>
    </div>
</header>

<!-- Mobile Menu Toggle Script -->
