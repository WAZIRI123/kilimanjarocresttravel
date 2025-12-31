<!-- Hero Section with Navigation -->
<header class="relative h-screen w-full overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <!-- Fallback image that shows first -->
        <img 
            id="hero-fallback"
            src="{{ asset('images/image-used/experts.jpeg') }}" 
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
            <source src="{{ asset('images/image-used/full.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black/20 backdrop-blur-xsm"></div>
    </div>
    <div class="px-4 sm:px-6 lg:px-8">
    @include('partials.sections.navigation')
    </div>
    
    <!-- Hero Content (unchanged) -->
    <div class="relative z-10 flex flex-col items-center justify-center h-[calc(100vh-5rem)] px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 " style="font-size: 3.8125rem;
        letter-spacing: 3.5px;font-family: AlternateGotNo1D, sans-serif;line-height: 1.2;
text-transform: uppercase;">
           Discover Kilimanjaro’s  <br/>Hidden Gem
        </h1>
        <div class="flex flex-col sm:flex-row gap-4 py-6">
            <a href="{{ route('contact') }}" class="inline-block mt-2 bg-transparent hover:bg-[#444] text-white border border-white px-3 py-2 rounded-sm font-medium transition-colors text-sm text-center" style="font-family: brandon-bold-webfont, sans-serif; font-size: 0.8rem !important; letter-spacing: 1.84px !important; text-transform: uppercase !important; font-weight: normal !important;">
                ENQUIRE NOW
            </a>
        </div>
        
        <!-- Animated Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 cursor-pointer" onclick="document.querySelector('#next-section').scrollIntoView({ behavior: 'smooth' });">
            <div class="scroll-indicator">
                <div class="scroll-line"></div>
                <div class="scroll-text text-white text-xs mt-2" style="font-family: AlternateGotNo1D, sans-serif; font-size: 1.2rem !important; letter-spacing: 1.84px !important; font-weight: 400 !important;">SCROLL</div>
            </div>
        </div>
    </div>
</header>

<style>
    .scroll-indicator {
        display: flex;
        flex-direction: column-reverse;
        align-items: center;
        height: 80px;
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }
    
    .scroll-indicator:hover {
        opacity: 1;
    }
    
    .scroll-line {
        width: 1px;
        height: 60px;
        position: relative;
        overflow: hidden;
        margin-top: 8px;
        font-weight: bold;
    }
    
    .scroll-line::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
        animation: scrollLine 2s infinite ease-in-out;
        transform-origin: bottom;
        font-weight: bold;
    }
    
    @keyframes scrollLine {
        0%, 100% {
            transform: scaleY(0);
            opacity: 0;
        }
        50% {
            transform: scaleY(1);
            opacity: 0.8;
        }
    }
    
    .scroll-text {
        letter-spacing: 2px;
        animation: fadeIn 2s ease-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 0.8; }
    }
</style>

<!-- Mobile Menu Toggle Script -->
