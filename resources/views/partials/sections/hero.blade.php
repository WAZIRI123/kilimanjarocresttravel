<section id="hero-section" class="hero-section" data-testid="section-container">
    <!-- Modern Transparent Navbar -->
    @include('partials.sections.navigation')

<style>
    .overlay-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.35); /* Adjust opacity as needed */
    }

    </style>

    <!-- Hero Content -->
    <div class="hero-content" style="padding-top: 30vh;">
        <div class="hero-text">
            <h1 class="font_0 wixui-rich-text__text" style="color:#fff;font-weight: bold; font-size: 90px;
    text-decoration: none;
    text-align: center;
    letter-spacing: 0.01em;">
                <div class="title-wrapper" style="overflow: hidden;">
                    <div class="title-line" style="display: inline-block; transform: translateY(100%); opacity: 0; animation: slideUp 0.8s ease-out 0.3s forwards;">
                        The Essence of Untamed
                    </div>
                </div>
                <div class="title-wrapper" style="overflow: hidden;">
                    <div class="title-line accent hero-description" style="display: inline-block; transform: translateY(100%); opacity: 0; animation: slideUp 0.8s ease-out 0.6s forwards; padding: 2.0rem 0;  font-family: 'The Girl Next Door', cursive;
font-weight: 400;
font-style: normal;
font-size: 50px;
line-height: 1.2;
text-align: center;
text-decoration: none;
letter-spacing: 0.01em;">
                        African Exploration...
                    </div>
                </div>
            </h1>
            <div class="hero-cta">
                <div class="cta-wrapper">
                    <div class="cta-buttons">
                        <a href="all-packages" class="cta-button">View Tours</a>
                        <a href="book-now" class="cta-button secondary" >Book Now</a>
                    </div>
                    
                    <!-- Scroll Indicator -->
                    <a href="#comp-m2vttpv8" class="scroll-indicator" id="scroll-indicator">
                        <div class="arrow-down"> 
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 5v14M5 12l7 7 7-7"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom CSS for the hero section -->
    <style>
    
        /* Hero Section */
        .hero-section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
            color: white;
            text-align: center;
            padding: 0 1.5rem;
            margin: 0;
            box-sizing: border-box;
        }
        
        /* Hero Content */
        .hero-content {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex: 1;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }
        
        /* Tribal Motifs */
        .tribal-motif {
            position: absolute;
            opacity: 0.6;
            transition: all 0.4s ease;
            z-index: 2;
            filter: drop-shadow(0 0 3px rgba(232, 177, 67, 0.3));
        }
        
        .tribal-motif:hover {
            opacity: 0.9;
            transform: scale(1.1);
        }
        
        .motif-1 {
            top: 30px;
            left: 30px;
            transform: rotate(-10deg);
        }
        
        .motif-2 {
            top: 30px;
            right: 30px;
            transform: rotate(10deg);
        }
        
        .motif-3 {
            bottom: 40px;
            left: 40px;
            transform: rotate(-5deg);
        }
        
        .motif-4 {
            bottom: 30px;
            right: 30px;
            transform: rotate(5deg);
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding-top: 60px; /* Space for navbar */
                min-height: calc(100vh - 60px);
            }
            .hero-description{
                padding: 1.8rem 0rem !important;
                font-size: 2rem !important;
            }
            
            .hero-content {
                padding: 1rem;
                margin-top: 0;
            }
            
            .tribal-motif {
                opacity: 0.5;
            }
            
            .motif-1, .motif-2 {
                top: 15px;
            }
            
            .motif-3, .motif-4 {
                bottom: 15px;
            }
            
            .motif-1, .motif-3 {
                left: 15px;
            }
            
            .motif-2, .motif-4 {
                right: 15px;
            }
        }

        .hero-bg-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 40%;
            transition: transform 0.5s ease;
        }

        .hero-section:hover .hero-bg-image {
            transform: scale(1.03);
        }

        /* Footprint Styling */
        .footprint {
            position: absolute;
            z-index: 2;
            opacity: 0.8;
            animation: float 6s ease-in-out infinite;
        }
        
        .footprint-top-left {
            top: 30px;
            left: 30px;
            transform: rotate(-15deg);
        }
        
        .footprint-top-right {
            top: 30px;
            right: 30px;
            transform: rotate(15deg);
        }
        
        .footprint-bottom-left {
            bottom: 30px;
            left: 30px;
            transform: rotate(15deg) scaleX(-1);
        }
        
        .footprint-bottom-right {
            bottom: 30px;
            right: 30px;
            transform: rotate(-15deg) scaleX(-1);
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(-15deg); }
            50% { transform: translateY(-10px) rotate(-15deg); }
        }

        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            max-width: 1200px;
            width: 90%;
            padding: 0 20px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out;
        }

        .hero-text {
            margin-bottom: 60px;
        }

        .hero-title {
            font-size: 4.5rem;
            font-weight: 700;
            margin: 0 0 20px;
            line-height: 1.1;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.3);
        }

        .title-line {
            display: block;
            font-size: 5.6rem;
            line-height: 1.1;
        }

        .title-line.accent {
            color: #ffffff;
            font-family: 'Sacramento', cursive;
            font-size: 5.5rem;
            margin-top: -15px;
            line-height: 1;
        }

        /* Responsive Font Sizes */
        @media (max-width: 1200px) {
            .title-line {
                font-size: 5rem;
            }
            .title-line.accent {
                font-size: 5rem;
            }
        }

        @media (max-width: 992px) {
            .title-line {
                font-size: 4.5rem;
            }
            .title-line.accent {
                font-size: 4.5rem;
            }
        }

        @media (max-width: 768px) {
            .title-line {
                font-size: 3.5rem;
            }
            .title-line.accent {
                font-size: 3.5rem;
                margin-top: -10px;
            }
          
        }

        @media (max-width: 576px) {
            .navbar-container{
                padding: 0 0rem;
            }
          
            .logo-img {
            height: 80px; /* Reduced logo size */
            width: auto;
            transition: all 0.3s ease;
            filter: brightness(1.4) contrast(1.3) saturate(1.4);
        }
            .title-line {
                font-size: 2.8rem;
            }
            .title-line.accent {
                font-size: 3rem;
                margin-top: -5px;
            }
            .cta-button {
                padding: 12px 25px !important;
                font-size: 0.8rem !important;
            }
            .hero-content {
                padding-top: 10vh !important;
            }
        }

        @media (max-width: 576px) {
            .cta-buttons {
                flex-direction: column;
                align-items: center;
                gap: 15px !important;
            }
            .cta-button {
                width: 200px;
                max-width: 100%;
                text-align: center;
                margin: 0 auto;
            }
            .scroll-indicator {
                padding-left: 0;
                margin-left: 0;
                left: 0;
                right: 0;
                display: flex;
                justify-content: center;
            }
            .arrow-down {
                margin: 0 auto;
            }
        }

        /* Removed hero-description styles */

        .hero-cta {
            display: flex;
            justify-content: center;
            width: 100%;
            margin: 0 auto;
            max-width: 600px;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            width: 100%;
            padding: 0 20px;
            box-sizing: border-box;
        }
        
        .cta-buttons a {
            margin: 0;
            flex: 0 0 auto;
            text-align: center;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .cta-button:first-child {
            background-color: rgba(77, 68, 2, 1);
            font-family: questrial, sans-serif;
    font-size: calc(15 * var(--theme-spx-ratio));
            color: #fff;
            font-weight: 900;
            border: 2px solid #4d4402e0;
        }

        .cta-button:first-child:hover {
            background-color: #4d4402e0; /* Keep the same background color on hover */
            color: #fff; /* Keep the text color consistent */
            transform: translateY(-3px);
            font-family: questrial, sans-serif;
    font-size: calc(15 * var(--theme-spx-ratio));
    font-weight: 400;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            opacity: 0.95; /* Slight opacity change for feedback */
        }

        .cta-button.secondary {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
        }

        .cta-button.secondary:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Scroll Indicator */
        .scroll-indicator {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
            margin: 30px auto 0;
            position: relative;
            width: 100%;
            max-width: 100px;
            text-align: center;
            padding-top: 10px;
        }
        
        .scroll-indicator::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: rgba(255, 255, 255, 0.3);
        }
        
        .arrow-down {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: bounce 2s infinite;
        }
        
        .arrow-down svg {
            width: 30px;
            height: 30px;
            color: #fff;
        }
        
        .scroll-text {
            font-size: 16px;
            letter-spacing: 2px;
            margin-top: 15px;
            opacity: 0.8;
            text-transform: uppercase;
            font-weight: 300;
            letter-spacing: 3px;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scroll {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(15px);
                opacity: 0;
            }
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 3.5rem;
            }
            
            .title-line.accent {
                font-size: 4.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.25rem;
                padding: 0 20px;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .title-line.accent {
                font-size: 3.8rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .cta-button {
                padding: 12px 30px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .title-line.accent {
                font-size: 3rem;
                margin-top: -10px;
            }
            
            .hero-subtitle {
                font-size: 1rem;
                margin-bottom: 30px;
            }
            
            .hero-cta {
                flex-direction: column;
                gap: 15px;
            }
            
            .cta-button {
                width: 100%;
                max-width: 250px;
                margin: 0 auto;
            }
        }
    </style>

    
</section>