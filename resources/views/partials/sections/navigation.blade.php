    <!-- Navigation -->
    <nav class="relative z-40 bg-transparent px-4" style="width:100%;">
        <div class="max-w-7xl mx-auto px-0 sm:px-0 lg:px-0">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0" style="max-width:200px; max-height:200px">
                    <a   href="/" class="text-white text-2xl font-bold">
                        <img src="{{ asset('images/image-used/vanana.png') }}" alt="crowned Wild Africa" class="logo-img w-80 h-auto pt-8">
                    </a>
                </div>

                <!-- Book Now Button and Mobile Menu -->
                <div class="flex items-center justify-around w-48">
                    <div class="block">
                        <a  href="{{ route('book-now') }}" class="bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                            Enquiry Now
                        </a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="">
                        <button type="button" class="text-white hover:text-gray-200 focus:outline-none cursor-pointer" id="mobile-menu-button">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="fixed inset-0 z-50 hidden" id="mobile-menu" style="display: none;">
            <!-- Overlay -->
            <div class="fixed inset-0 bg-black/50" id="mobile-menu-overlay"></div>
            
            <!-- Menu Panel -->
            <div class="fixed inset-y-0 right-0 w-full bg-white shadow-xl overflow-y-auto">
                <div class="flex justify-between items-center px-4 py-4 border-b">
                    <img src="{{ asset('images/image-used/vanana.png') }}" alt="Crowned Wild Africa" class="h-12">
                    <button type="button" class="text-gray-500 hover:text-gray-700 cursor-pointer" id="close-mobile-menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <div class="px-4 pt-2 pb-6 space-y-1">
                    <a href="/" class="block px-4 py-3 rounded-lg text-base font-medium {{ Request::is('/') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}">Home</a>
                    
                    <!-- Safaris Mobile Dropdown -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="w-full flex justify-start items-center px-4 py-3 rounded-lg text-base font-medium {{ in_array(request('category'), ['northern-safaris', 'short-safaris', 'southern-safaris']) ? 'bg-gray-100' : 'text-gray-700 hover:bg-gray-50' }}">
                            <span class="pr-2">Safaris</span>
                            <svg class="w-5 h-5 transition-transform duration-200" :class="{'transform rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse class="pl-4 space-y-1 mt-1">
                            <a href="{{ route('all-packages', ['category' => 'northern-safaris']) }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-lg {{ request('category') === 'northern-safaris' ? 'bg-gray-100' : '' }}">
                                Northern Safaris
                            </a>
                            <a href="{{ route('all-packages', ['category' => 'short-safaris']) }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-lg {{ request('category') === 'short-safaris' ? 'bg-gray-100' : '' }}">
                                Short Safaris
                            </a>
                            <a href="{{ route('all-packages', ['category' => 'southern-safaris']) }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-lg {{ request('category') === 'southern-safaris' ? 'bg-gray-100' : '' }}">
                                Southern Safaris
                            </a>
                        </div>
                    </div>
                    
                    <a href="{{ route('all-packages', ['category' => 'kilimanjaro']) }}" class="block px-4 py-3 rounded-lg text-base font-medium {{ request('category') === 'kilimanjaro' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}">Kilimanjaro</a>
                    
                    <a href="{{ route('all-packages', ['category' => 'zanzibar']) }}" class="block px-4 py-3 rounded-lg text-base font-medium {{ request('category') === 'zanzibar' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}">Zanzibar</a>
                    
                    <a href="{{ route('about') }}" class="block px-4 py-3 rounded-lg text-base font-medium {{ Request::is('about*') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}">About</a>
                    
                    <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-lg text-base font-medium {{ Request::is('contact*') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}">Contact</a>
                    
                </div>
            </div>
        </div>
        
        <!-- Mobile menu toggle script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                const closeButton = document.getElementById('close-mobile-menu');
                const overlay = document.getElementById('mobile-menu-overlay');
                
                function toggleMenu() {
                    mobileMenu.style.display = mobileMenu.style.display === 'block' ? 'none' : 'block';
                    document.body.style.overflow = mobileMenu.style.display === 'block' ? 'hidden' : '';
                }
                
                mobileMenuButton.addEventListener('click', toggleMenu);
                closeButton.addEventListener('click', toggleMenu);
                overlay.addEventListener('click', toggleMenu);
                
                // Close menu when clicking on nav links
                document.querySelectorAll('#mobile-menu a').forEach(link => {
                    link.addEventListener('click', toggleMenu);
                });
            });
        </script>
    </nav>
