

<!-- Hero Section with Navigation -->
<header class="relative h-screen w-full overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img 
            src="https://gie.co.tz/wp-content/uploads/2023/10/8-days-tanzania-mid-range-tours.jpg" 
            alt="Safari Adventure" 
            class="w-full h-full object-cover"
        >
        <div class="absolute  inset-0 bg-black/50 backdrop-blur-xsm"></div>
    </div>
    
    <!-- Navigation -->
    <nav class="relative z-40 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-white text-2xl font-bold">
                        Stan Safari
                    </a>
                </div>

                <!-- Centered Desktop Navigation -->
                <div class="hidden lg:flex items-center justify-center flex-1 pt-5">
                    <div class="flex items-center space-x-1  rounded-full px-6 py-2 backdrop-blur-sm">
                        <a href="/" class="text-white {{ Request::is('/') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors">Home</a>
                        
                        <!-- Safaris Dropdown -->
                        <div x-data="{ open: false }" 
                            @mouseenter="if(window.innerWidth >= 768) open = true" 
                            @mouseleave="if(window.innerWidth >= 768) open = false" 
                            @click.away="if(window.innerWidth < 768) open = false"
                            class="relative">
                            <button 
                                @click="if(window.innerWidth < 768) open = !open"
                                class="flex items-center text-white {{ Request::is('safaris*') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors"
                                :aria-expanded="open">
                                Safaris
                                <svg class="w-4 h-4 ml-1" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            
                            <!-- Dropdown Content -->
                            <div x-show="open"
                                x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                                class="absolute left-0 mt-2 w-56 rounded-lg bg-white backdrop-blur-md border border-white/20 shadow-lg z-[999]"
                                @mouseenter="if(window.innerWidth >= 768) open = true"
                                @mouseleave="if(window.innerWidth >= 768) open = false"
                                style="display: none;">
                                <div class="p-2 space-y-1">
                                    <a href="/safaris/serengeti" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors">
                                        Serengeti National Park
                                    </a>
                                    <a href="/safaris/ngorongoro" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors">
                                        Ngorongoro Crater
                                    </a>
                                    <a href="/safaris/tarangire" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors">
                                        Tarangire National Park
                                    </a>
                                    <a href="/safaris/lake-manyara" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors">
                                        Lake Manyara National Park
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Climbing Dropdown -->
                        <div x-data="{ open: false }" 
                            @mouseenter="if(window.innerWidth >= 768) open = true" 
                            @mouseleave="if(window.innerWidth >= 768) open = false"
                            @click.away="if(window.innerWidth < 768) open = false"
                            class="relative">
                            <button 
                                @click="if(window.innerWidth < 768) open = !open"
                                class="text-white {{ Request::is('climbing*') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors flex items-center"
                                :aria-expanded="open">
                                Climbing
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" :class="{'transform rotate-180': open}">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open"
                                x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                                class="absolute left-0 mt-2 w-56 rounded-lg bg-white backdrop-blur-md border border-white/20 shadow-lg z-[999]"
                                @mouseenter="if(window.innerWidth >= 768) open = true"
                                @mouseleave="if(window.innerWidth >= 768) open = false"
                                style="display: none;">
                                <div class="p-2 space-y-1">
                                    <a href="/climbing/kilimanjaro" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors">
                                        Mount Kilimanjaro
                                    </a>
                                    <a href="/climbing/meru" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors">
                                        Mount Meru
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Beaches Dropdown -->
                        <div x-data="{ open: false }" 
                            @mouseenter="if(window.innerWidth >= 768) open = true" 
                            @mouseleave="if(window.innerWidth >= 768) open = false"
                            @click.away="if(window.innerWidth < 768) open = false"
                            class="relative">
                            <button 
                                @click="if(window.innerWidth < 768) open = !open"
                                class="text-white {{ Request::is('beaches*') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors flex items-center"
                                :aria-expanded="open">
                                Beaches
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" :class="{'transform rotate-180': open}">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open"
                                x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                                class="absolute left-0 mt-2 w-56 rounded-lg bg-white backdrop-blur-md border border-white/20 shadow-lg z-[999]"
                                @mouseenter="if(window.innerWidth >= 768) open = true"
                                @mouseleave="if(window.innerWidth >= 768) open = false"
                                style="display: none;">
                                <div class="p-2 space-y-1">
                                    <a href="/beaches/zanzibar" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors">
                                        Zanzibar
                                    </a>
                                    <a href="/beaches/pemba" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors">
                                        Pemba Island
                                    </a>
                                    <a href="/beaches/mafia" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors">
                                        Mafia Island
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a href="/about" class="text-white {{ Request::is('about*') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors">About</a>
                        <a href="/contact" class="text-white {{ Request::is('contact*') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors">Contact</a>
                    </div>
                </div>

                <!-- Book Now Button -->
                <div class="hidden lg:block">
                    <button class="bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        Enquiry Now
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button type="button" class="text-white hover:text-gray-200 focus:outline-none" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (unchanged) -->
        <div class="hidden lg:hidden bg-white shadow-lg rounded-lg mx-2 my-1" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('/') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">Home</a>
                
                <!-- Safaris Mobile Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">
                        <span>Safaris</span>
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="{'transform rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="pl-4 space-y-1">
                        <a href="/safaris/serengeti" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                            Serengeti National Park
                        </a>
                        <a href="/safaris/ngorongoro" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                            Ngorongoro Crater
                        </a>
                        <a href="/safaris/tarangire" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                            Tarangire National Park
                        </a>
                        <a href="/safaris/lake-manyara" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                            Lake Manyara National Park
                        </a>
                    </div>
                </div>
                
                <!-- Climbing Mobile Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">
                        <span>Climbing</span>
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="{'transform rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="pl-4 space-y-1">
                        <a href="/climbing/kilimanjaro" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                            Mount Kilimanjaro
                        </a>
                        <a href="/climbing/meru" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                            Mount Meru
                        </a>
                    </div>
                </div>
                
                <!-- Beaches Mobile Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">
                        <span>Beaches</span>
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="{'transform rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="pl-4 space-y-1">
                        <a href="/beaches/zanzibar" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                            Zanzibar
                        </a>
                        <a href="/beaches/pemba" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                            Pemba Island
                        </a>
                        <a href="/beaches/mafia" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md">
                            Mafia Island
                        </a>
                    </div>
                </div>
                
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('about*') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">About</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('contact*') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">Contact</a>
                
                <button class="w-full bg-amber-600 text-white px-4 py-2 rounded-md text-base font-medium hover:bg-amber-700 mt-2 transition-colors">
                    Enquiry Now
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Content (unchanged) -->
    <div class="relative z-10 flex flex-col items-center justify-center h-[calc(100vh-5rem)] px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
            Discover the Wild Beauty
        </h1>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl">
            Experience the thrill of African safaris with our expert guides and luxurious accommodations.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
            <button class="bg-white text-gray-900 px-8 py-3 rounded-full font-medium hover:bg-gray-100 transition-colors  text-sm">
                Explore Tours
            </button>
            <button class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-medium hover:bg-white/10 transition-colors outline-double outline-1 outline-gray-300 text-sm">
                Watch Video 
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu Toggle Script -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>