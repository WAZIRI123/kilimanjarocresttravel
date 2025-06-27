<section id="hero-section" class="hero-section" data-testid="section-container">
    <!-- Modern Transparent Navbar -->
    <nav class="modern-navbar">
        <div class="navbar-container">
            <!-- Logo -->
            <div class="navbar-logo">
                <a href="/" class="logo-link">
                    <img src="{{ asset('images/star-safaris.png') }}" alt="Stan Safaris Tanzania" class="logo-img">
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="navbar-links">
                <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('all-packages') }}" class="nav-link {{ request()->is('all-packages*') ? 'active' : '' }}">Safari Packages</a>
                <a href="{{ route('destinations') }}" class="nav-link {{ request()->is('destinations*') ? 'active' : '' }}">Destinations</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->is('about*') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->is('contact*') ? 'active' : '' }}">Contact Us</a>
                <a href="https://wa.me/255754261101" target="_blank" rel="noopener noreferrer" class="nav-cta-button">
                    <i class="fab fa-whatsapp"></i> WhatsApp Us
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" aria-label="Toggle menu">
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
            </button>
        </div>
    </nav>
    
    <!-- Mobile Navigation (Hidden by default) with Enhanced Safari Theme -->
    <div class="mobile-nav">
        <!-- Background Overlay with Elephant Image -->
        <div class="mobile-nav-overlay"></div>
        
        <!-- Safari Decorative Elements -->
        <div class="safari-decorations">
            <div class="safari-bird safari-bird-1">
                <svg viewBox="0 0 24 24" width="24" height="24">
                    <path d="M23 3s-9.5 8-10.5 10c0 0-1.1 2-3.5 2s-3.5-2-3.5-2S2 13 1 12s1-1 1-1h2s1-1 2-2 1-2 3-2 5.5 2 5.5 2 3-3 5-3 3 1 3 1z" fill="#4d4402e0"/>
                </svg>
            </div>
            <div class="safari-leaf safari-leaf-1">
                <svg viewBox="0 0 24 24" width="20" height="20">
                    <path d="M17 8C8 10 5.9 16.2 4 22c2.9-1.5 5.9-2 9-2 3.1 0 6.1.5 9 2-1.9-5.8-4-12-13-14z" fill="#4CAF50"/>
                </svg>
            </div>
        </div>
        <button class="mobile-close-btn" aria-label="Close menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ route('all-packages') }}" class="mobile-nav-link {{ request()->is('all-packages*') ? 'active' : '' }}">Safari Packages</a>
        <a href="{{ route('destinations') }}" class="mobile-nav-link {{ request()->is('destinations*') ? 'active' : '' }}">Destinations</a>
        <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->is('about*') ? 'active' : '' }}">About Us</a>
        <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->is('contact*') ? 'active' : '' }}">Contact Us</a>
    </div>
    
    <!-- Background Image -->
    <div class="hero-background">
        <img 
            src="https://static.wixstatic.com/media/851897_9587828f79e74b21a175b075af31661e~mv2.jpg"
            alt="A herd of Elephants drinking water in Serengeti African Safaris - Tanzania"
            class="hero-bg-image"
            loading="eager"
        >
        <div class="overlay-bg"></div>
    
    </div>

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
        /* Safari Decorative Elements */
        .safari-decorations {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }
        
        .safari-bird, .safari-leaf {
            position: absolute;
            opacity: 0.3;
            animation-iteration-count: infinite;
        }
        
        .safari-bird-1 {
            top: 20%;
            right: 10%;
            animation: float 8s ease-in-out infinite;
        }
        
        .safari-leaf-1 {
            bottom: 25%;
            left: 15%;
            animation: float 6s ease-in-out 1s infinite reverse;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        /* Enhanced Mobile Nav Items */
        .mobile-nav-link {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            margin: 8px 0;
            padding: 12px 24px;
            border-radius: 4px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }
        
        .mobile-nav-link.active {
            color: #fff;
            font-weight: bold;
            text-decoration: underline;
            text-underline-offset: 4px;
        }
        
        .mobile-nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: #4d4402e0;
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }
        
        .mobile-nav-link:hover::before {
            transform: scaleY(1);
        }
        
        .mobile-nav-link:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateX(8px);
        }
        /* Mobile Navigation Overlay */
        .mobile-nav {
            position: relative;
            overflow: hidden;
        }
        
        .mobile-nav-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-color: rgba(0, 0, 0, 0.15);
            background-repeat: no-repeat;
            opacity: 0.15;
            z-index: -1;
        }
        
        .mobile-nav::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:  rgba(0, 0, 0, 0.4);
            z-index: -1;
        }
        @keyframes slideUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .title-line {
            display: inline-block;
        }
        /* Modern Navbar Styles */
        .modern-navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: auto; /* Fixed height */
            z-index: 1000;
            padding: 0.4rem 0;
            transition: all 0.4s ease;
            box-sizing: border-box;
        }
        
        /* Reset body margin and padding */
        body {
            margin: 0;
            padding: 0;
        }
        
        .modern-navbar.scrolled {
            background: #4d4402e0; 
            padding: 0.2rem 0;
            box-shadow: 0 4px 20px #4d4402e0;
        }
        
        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navbar-logo a {
            display: flex;
            align-items: center;
            text-decoration: none;
            height: 100%;
        }
        
        .logo-img {
            height: 80px;
            width: auto;
            transition: all 0.3s ease;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.5)) 
                    brightness(1.2) 
                    contrast(1.2) 
                    saturate(1.4);
        }
        
        .modern-navbar.scrolled .logo-img {
            height: 50px; /* Slightly smaller when scrolled, increased from 35px */
        }
        
        .logo-text {
            font-size: 1.5rem;
            line-height: 1;
        }
        
        .logo-subtext {
            font-size: 0.8rem;
            opacity: 0.8;
            margin-top: 2px;
            letter-spacing: 2px;
        }
        
        .navbar-links {
            display: flex;
            gap: 1rem;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap');
        
        .nav-link {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600; /* Slightly bolder */
            font-size: 0.95rem;
            letter-spacing: 0.8px;
            position: relative;
            padding: 0.4rem 0rem;
            margin: 0rem 0.7rem;
            transition: all 0.3s ease;
           
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            border-radius: 4px;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0.7rem;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #fff, #fff);
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1), transform 0.3s ease;
            transform-origin: left;
            border-radius: 2px;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: #fff;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
            transform: scaleX(1);
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: #ffffff;
           
        }
        
        .nav-link.active {
            /* No font weight change */
        }
        
        /* CTA Button Styles */
        .nav-cta-button {
            display: inline-block;
            padding: 10px 30px;
            border-radius: 50px;
            font-family: questrial, sans-serif;
    font-size: calc(15 * var(--theme-spx-ratio));
    font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
            background-color: transparent;
            color: #fff !important;
            border: 2px solid #fff;
            margin-left: 1.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-shadow: none;
        }
        
        .nav-cta-button:hover {
            background-color: #fff;
            color: #000 !important;
            border-color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* Mobile Menu Button */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            padding-right: 1.2rem;
            z-index: 1001;
        }
        
        .menu-line {
            display: block;
            width: 30px;
            height: 4px;
            background-color: #fff;
            margin: 5px 0;
            transition: all 0.3s ease;
            transform-origin: center;
        }
        
        /* Menu button animation */
        .mobile-menu-btn.active .menu-line {
            background-color: #4d4402e0;
        }
        
        .rotate-45 {
            transform: rotate(45deg);
        }
        
        .-rotate-45 {
            transform: rotate(-45deg);
        }
        
        .translate-y-2 {
            transform: translateY(7px);
        }
        
        .-translate-y-2 {
            transform: translateY(-7px);
        }
        
        .opacity-0 {
            opacity: 0;
        }
        
        /* Mobile Navigation */
        .mobile-nav {
            display: none;
            flex-direction: column;
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            max-width: 320px;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 4rem 1.5rem 2rem;
            z-index: 1000;
            transition: right 0.3s ease-in-out;
            overflow-y: auto;
        }
        
        .mobile-nav.active {
            display: flex;
            right: 0;
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.2);
        }
        
        .mobile-close-btn {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: none;
            border: none;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            z-index: 1001;
            opacity: 0.8;
            transition: opacity 0.2s ease;
        }
        
        .mobile-close-btn:hover {
            opacity: 1;
        }
        
        .mobile-nav-link {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            font-size: 1.1rem;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: color 0.3s ease, padding-left 0.3s ease;
        }
        
        .mobile-nav-link:hover {
            color: #fff;
            transform: translateX(8px);
        }
        
        .mobile-nav-link.active {
            font-weight: bold;
            color: #fff;
            text-decoration: underline;
        }
        
        .mobile-nav .nav-cta-button {
            background-color: #4d4402e0;
            color: #1a1a1a !important;
            text-align: center;
            margin: 1rem 0 0;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.8rem;
            border: 2px solid #4d4402e0;
            width: 100%;
            max-width: 200px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        
        .mobile-nav .nav-cta-button:hover {
            background-color: #4d4402e0;
            color: #1a1a1a !important;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            opacity: 0.95;
        }
        
        /* Navbar Scroll Effect */
        .modern-navbar.scrolled {
            padding: 0.0rem 0;
            background:#4d4402e0;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid #4d4402e0;
            box-shadow: 0 2px 20px #4d4402e0;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .navbar-links {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
        }
        
        @media (min-width: 993px) {
            .mobile-nav {
                display: none;
            }
        }
        
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

    <!-- Navbar JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const mobileNav = document.querySelector('.mobile-nav');
            const mobileCloseBtn = document.querySelector('.mobile-close-btn');
            const menuLines = document.querySelectorAll('.menu-line');
            
            function toggleMobileMenu() {
                mobileNav.classList.toggle('active');
                mobileMenuBtn.classList.toggle('active');
                document.body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : '';
                
                // Animate hamburger to X
                menuLines[0].classList.toggle('rotate-45');
                menuLines[0].classList.toggle('translate-y-2');
                menuLines[1].classList.toggle('opacity-0');
                menuLines[2].classList.toggle('-rotate-45');
                menuLines[2].classList.toggle('-translate-y-2');
            }
            
            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', toggleMobileMenu);
            }
            
            if (mobileCloseBtn) {
                mobileCloseBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    toggleMobileMenu();
                });
            }
            
            // Close mobile menu when clicking on a link
            const mobileLinks = document.querySelectorAll('.mobile-nav-link');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileNav.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                    menuLines[0].classList.remove('rotate-45', 'translate-y-2');
                    menuLines[1].classList.remove('opacity-0');
                    menuLines[2].classList.remove('-rotate-45', '-translate-y-2');
                });
            });
            
            // Navbar scroll effect
            const navbar = document.querySelector('.modern-navbar');
            if (navbar) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 50) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                });
                
                // Initialize navbar state on page load
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                }
            }
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        e.preventDefault();
                        window.scrollTo({
                            top: targetElement.offsetTop - 80, // Adjust for fixed navbar
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</section>