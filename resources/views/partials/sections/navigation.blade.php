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
            <div class="dropdown">
                <a href="{{ route('all-packages') }}" class="nav-link nav-link-dropdown dropdown-toggle {{ request()->is('all-packages*') ? 'active' : '' }}" id="packagesDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Our Packages
                    <i class="fas fa-chevron-down ml-1"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="packagesDropdown">
                    <a class="dropdown-item {{ !request('category') ? 'active' : '' }}" href="{{ route('all-packages') }}">All Packages</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ request('category') === 'safari' ? 'active' : '' }}" href="{{ route('all-packages', ['category' => 'safari']) }}">Safari Packages</a>
                    <a class="dropdown-item {{ request('category') === 'zanzibar' ? 'active' : '' }}" href="{{ route('all-packages', ['category' => 'zanzibar']) }}">Zanzibar Packages</a>
                    <a class="dropdown-item {{ request('category') === 'kilimanjaro' ? 'active' : '' }}" href="{{ route('all-packages', ['category' => 'kilimanjaro']) }}">Kilimanjaro Packages</a>
                </div>
            </div>
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
    <div class="mobile-dropdown-container">
        <button class="mobile-dropdown-toggle">
            <span class="mobile-dropdown-text {{ in_array(request('category'), ['safari', 'zanzibar', 'kilimanjaro']) ? 'active' : '' }}" style="padding-right: 5px;">Our Packages</span>
            <i class="fas fa-chevron-down mobile-dropdown-icon"></i>
        </button>
        <div class="mobile-dropdown">
            <a href="{{ route('all-packages') }}" class="mobile-dropdown-item {{ !request('category') ? 'active' : '' }}">
                All Packages
            </a>
            <a href="{{ route('all-packages', ['category' => 'safari']) }}" class="mobile-dropdown-item {{ request('category') === 'safari' ? 'active' : '' }}">
                Safari Packages
            </a>
            <a href="{{ route('all-packages', ['category' => 'zanzibar']) }}" class="mobile-dropdown-item {{ request('category') === 'zanzibar' ? 'active' : '' }}">
                Zanzibar Packages
            </a>
            <a href="{{ route('all-packages', ['category' => 'kilimanjaro']) }}" class="mobile-dropdown-item {{ request('category') === 'kilimanjaro' ? 'active' : '' }}">
                Kilimanjaro Packages
            </a>
        </div>
    </div>
    <a href="{{ route('destinations') }}" class="mobile-nav-link {{ request()->is('destinations*') ? 'active' : '' }}">Destinations</a>
    <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->is('about*') ? 'active' : '' }}">About Us</a>
    <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->is('contact*') ? 'active' : '' }}">Contact Us</a>
    <a href="https://wa.me/255754261101" target="_blank" rel="noopener noreferrer" class="mobile-whatsapp-btn">
        <i class="fab fa-whatsapp"></i> WhatsApp Us
    </a>
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
        /* Dropdown Styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 220px;
            border-radius: 4px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 8px 0;
            margin-top: 5px;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
            border: 1px solid #eaeaea;
        }
        
        .dropdown:hover .dropdown-menu,
        .dropdown:focus-within .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
            animation: fadeIn 0.2s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .dropdown-item {
            display: block;
            padding: 10px 20px;
            color: #333333;
            text-decoration: none;
            transition: all 0.2s ease;
            font-size: 15px;
            font-weight: 500;
            line-height: 1.5;
        }
        
        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #4d4402e0;
            padding-left: 22px;
        }
        
        .dropdown-item.active {
            color: #4d4402e0;
            font-weight: 600;
            background-color: #f0f0f0;
            border-left: 3px solid #4d4402e0;
            padding-left: 17px; /* 20px - 3px border */
        }
        
        .dropdown-toggle {
            display: flex;
            align-items: center;
            cursor: pointer;
            position: relative;
            transition: color 0.2s ease;
        }
        
        .dropdown-toggle .fa-chevron-down {
            margin-left: 8px;
            font-size: 11px;
            transition: all 0.2s ease;
            color: #ffffff !important; /* Ensure chevron is always white */
            position: relative;
            top: -1px;
            opacity: 0.9;
        }
        
        .dropdown:hover .dropdown-toggle .fa-chevron-down {
            transform: rotate(180deg);
            color: #ffffff !important; /* Maintain white color on hover */
            opacity: 1;
        }
        
        /* Mobile Dropdown Styles */
        .mobile-dropdown {
            display: none;
            padding: 0;
            background-color: transparent;
            margin: 0;
            border: none;
            text-align: center;
            width: 100%;
        }
        
        .mobile-dropdown.show {
            display: block;
        }
        
        .mobile-dropdown-toggle {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 14px 0;
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            background: transparent;
            border: none;
            cursor: pointer;
            text-align: center;
            transition: all 0.2s ease;
            margin: 0 auto;
        }
        
        .mobile-dropdown-toggle:hover .mobile-dropdown-icon,
        .mobile-dropdown-toggle:focus .mobile-dropdown-icon {
            color: #ffffff !important; /* Maintain white color on hover/focus */
            opacity: 1;
        }
        
        .mobile-dropdown-icon {
            transition: all 0.2s ease;
            color: #ffffff !important; /* Ensure mobile chevron is always white */
            opacity: 0.9;
        }
        
        /* Mobile dropdown text active state */
        .mobile-dropdown-text {
            transition: all 0.2s ease;
        }
        
        .mobile-dropdown-text.active {
            color: #ffffff;
            font-weight: 600;
            text-decoration: underline;
            text-underline-offset: 4px;
        }
        
        .mobile-dropdown-icon.rotate-180 {
            transform: rotate(180deg);
        }
        
        .mobile-dropdown-item {
            display: block;
            padding: 12px 0;
            color: #ffffff;
            text-decoration: none;
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.2s ease;
            background: transparent;
            text-align: center;
            opacity: 0.9;
        }
        
        .mobile-dropdown-item:hover,
        .mobile-dropdown-item.active {
            color: #ffffff;
            opacity: 1;
            text-decoration: underline;
            text-underline-offset: 4px;
        }
        
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
            font-weight: 700; /* Slightly bolder */
            font-size: 1.1rem;
            letter-spacing: 0.8px;
            position: relative;
            padding: 0.4rem 0rem;
            margin: 0rem 0.7rem;
            transition: all 0.3s ease;
           
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            border-radius: 4px;
        }
        .nav-link-dropdown::after {
            content: '';
            position: absolute;
            bottom: 0.1rem !important;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #fff, #fff);
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1), transform 0.3s ease;
            transform-origin: left;
            border-radius: 2px;
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
    display: block;
    padding: 12px 25px;
    color: #ffffff;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    transition: all 0.3s ease;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    position: relative;
    z-index: 2;
    text-align: center;
}

.mobile-whatsapp-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 25px;
    border-radius: 50px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.8rem;
    background-color: transparent;
    color: #fff !important;
    border: 2px solid #fff;
    margin: 15px auto;
    max-width: 200px;
    width: 100%;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.mobile-whatsapp-btn:hover {
    background-color: #fff;
    color: #000 !important;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.mobile-whatsapp-btn i {
    margin-right: 8px;
    font-size: 1.1rem;
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
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Mobile menu toggle
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const mobileNav = document.querySelector('.mobile-nav');
            
            // Mobile dropdown toggle
            const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
            mobileDropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const dropdown = this.nextElementSibling;
                    const icon = this.querySelector('.mobile-dropdown-icon');
                    dropdown.classList.toggle('show');
                    icon.classList.toggle('rotate-180');
                });
            });
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