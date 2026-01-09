<div x-data="{ heroQuoteModal: false }">
@if(session('error'))
                            <div style="color:red; text-align: center;">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if(session('success'))
                            <div style="color:green; text-align: center;">
                                {{ session('success') }}
                            </div>
                        @endif
<!-- Hero Section with Navigation -->
<header class="relative h-screen w-full overflow-hidden">
<!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <!-- Fallback image that shows first -->
        <img 
            id="hero-fallback"
            src="{{ asset('images/image-used/cover1.jpg') }}" 
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
            <source src="{{ asset('images/image-used/video-hero.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 97.73%);"></div>
    </div>
    <div class="px-4 sm:px-6 lg:px-8">
    @include('partials.sections.navigation')
    </div>
    
    <!-- Hero Content (unchanged) -->
    <div class="relative z-10 flex flex-col items-center justify-center h-[calc(100vh-5rem)] px-4 sm:px-6 lg:px-8 text-center">
       <div id="hero-content">
           <h1 class="text-5xl md:text-6xl xl:text-7xl tracking-tight mb-4 text-white the-girl-next-door-regular">
               <span id="typewriter-text"></span><span class="typewriter-cursor">|</span>
           </h1>
           <h2 id="subtitle" class="hidden text-2xl md:text-5xl tracking-tight mb-2 text-white neon-text font-dancing" style="font-family: 'Dancing Script !important', cursive; font-style: italic; opacity: 0; transition: opacity 0.5s ease-in-out;">Create unforgettable memories with us</h2>
       </div>
       <script>
           document.addEventListener('DOMContentLoaded', function() {
               const text = "Welcome to\nGrandezza Tours and Travel";
               const element = document.getElementById('typewriter-text');
               const subtitle = document.getElementById('subtitle');
               let i = 0;
               
               function typeWriter() {
                   if (i < text.length) {
                       if (text.charAt(i) === '\n') {
                           element.innerHTML += '<br>';
                       } else {
                           element.innerHTML += text.charAt(i);
                       }
                       i++;
                       setTimeout(typeWriter, 200);
                   } else {
                       document.querySelector('.typewriter-cursor').style.display = 'none';
                       // Start bouncing animation
                       element.parentElement.style.animation = 'bounce 0.5s 3';
                       // After bouncing, fade out and show subtitle
                       setTimeout(() => {
                           element.parentElement.style.opacity = '0';
                           element.parentElement.style.transition = 'all 0.5s ease-in-out';
                           // Show subtitle after title fades out
                           setTimeout(() => {
                               subtitle.classList.remove('hidden');
                               subtitle.style.opacity = '1';
                               // Hide subtitle after 3 seconds
                               setTimeout(() => {
                                   subtitle.style.opacity = '0';
                               }, 3000);
                           }, 500);
                       }, 2000); // 2 seconds after typing completes
                   }
               }
               
               // Start the animation
               setTimeout(typeWriter, 1000);
           });
       </script>
       <style>
           .typewriter-cursor {
               display: inline-block;
               margin-left: 2px;
               animation: blink 0.7s infinite;
           }
           @keyframes blink {
               0%, 100% { opacity: 1; }
               50% { opacity: 0; }
           }
           @keyframes bounce {
               0%, 100% { transform: translateY(0); }
               50% { transform: translateY(-20px); }
           }
           #hero-content {
               min-height: 200px; /* Ensure space for the bouncing animation */
           }
       </style>
        <div class="flex flex-col sm:flex-row gap-4 py-6">
            <a @click="heroQuoteModal = true" as="button" class="cursor-pointer inline-block mt-2 bg-transparent hover:bg-[#444] text-white border border-white px-3 py-2 rounded-sm font-medium transition-colors text-sm text-center" style="font-family: brandon-bold-webfont, sans-serif; font-size: 0.8rem !important; letter-spacing: 1.84px !important; text-transform: uppercase !important; font-weight: normal !important;">
                Book Now
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

    .neon-text {
    text-shadow: 0 0 5px rgba(255,255,255,1),
            0 0 10px rgba(255,255,255,1),
            0 0 20px rgba(255,255,255,1),
            0 0 40px rgba(0,255,255,1),
            0 0 80px rgba(0,255,255,0.5),
            0 0 90px rgba(0,255,255,0.5),
            0 0 100px rgba(0,255,255,0.5);
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
@include('partials.sections.quick-quote',['modalName'=>'heroQuoteModal'])
</div>