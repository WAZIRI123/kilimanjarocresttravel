    <!-- Navigation -->
    <nav class="relative z-40 bg-transparent lg:px-4" style="width:100%;">
        <div class="max-w-7xl mx-auto px-0 sm:px-0 lg:px-0">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0" style="max-width:150px; max-height:200px">
                    <a   href="/" class="text-white text-2xl font-bold">
                        <img src="{{ asset('images/image-used/side.png') }}" alt="crowned Wild Africa" class="logo-img h-auto pt-4 pr-[4.5rem] lg:pr-[2.5rem]">
                    </a>
                </div>

                <!-- Book Now Button and Mobile Menu -->
                <div class="flex items-center justify-around w-48">
                    <div class="block">
                        <a  href="{{ route('book-now') }}" class="bg-[#e7247a] hover:text-gray-800 px-[10px] lg:px-[20px] py-2 lg:py-[12px] text-white rounded-sm text-sm font-medium hover:bg-white transition-colors text-[9px] lg:text-[12px]" style="font-family: brandon-bold-webfont, sans-serif; letter-spacing: 2.84px !important; text-transform: uppercase !important; font-weight: 700 !important; line-height: 1 !important;">
                            Enquire Now
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
        <div class="fixed inset-0 z-50 hidden" id="mobile-menu" style="display: none; transition: 1500ms cubic-bezier(0.4, 0, 0.2, 1);">
            <!-- Overlay -->
            <div class="fixed inset-0 bg-black/50 duration-1500 ease-in-out" id="mobile-menu-overlay"></div>
            
            <!-- Menu Panel -->
            <div class="fixed inset-y-0 right-0 w-full bg-white shadow-xl overflow-y-auto transform transition-transform duration-1500 ease-[cubic-bezier(0.4,0,0.2,1)] translate-x-full" id="menu-panel">
                <div class="flex justify-between items-center px-4 py-4 border-b">
                    <h2 class="cursor-pointer px-4 font-bold" style="font-family: 'AlternateGotNo1D', sans-serif; font-weight: 400; font-size: 1.4375rem !important; letter-spacing: 1.84px !important; text-transform: uppercase !important;">+255 612 068 540</h2>
                    <button type="button" class="text-gray-1000 hover:text-gray-700 cursor-pointer" id="close-mobile-menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <div class="px-4 pt-2 pb-6 space-y-1">
                    <a href="/" class="block px-4 py-3 rounded-lg text-base font-medium {{ Request::is('/') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}" style="font-family: 'AlternateGotNo1D', sans-serif; font-weight: 400; font-size: 1.4375rem !important; letter-spacing: 1.84px !important; text-transform: uppercase !important;">Home</a>
                    
                     
                    <a href="{{ route('all-packages', ['category' => 'hiking']) }}" class="block px-4 py-3 rounded-lg text-base font-medium {{ request('category') === 'hiking' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}" style="font-family: 'AlternateGotNo1D', sans-serif; font-weight: 400; font-size: 1.4375rem !important; letter-spacing: 1.84px !important; text-transform: uppercase !important;">hiking</a>
                    
                    <a href="{{ route('all-packages', ['category' => 'day-trip']) }}" class="block px-4 py-3 rounded-lg text-base font-medium {{ request('category') === 'day-trip' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}" style="font-family: 'AlternateGotNo1D', sans-serif; font-weight: 400; font-size: 1.4375rem !important; letter-spacing: 1.84px !important; text-transform: uppercase !important;">day-trip</a>
                    
                    <a href="{{ route('about') }}" class="block px-4 py-3 rounded-lg text-base font-medium {{ Request::is('about*') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}" style="font-family: 'AlternateGotNo1D', sans-serif; font-weight: 400; font-size: 1.4375rem !important; letter-spacing: 1.84px !important; text-transform: uppercase !important;">About</a>
                    
                    <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-lg text-base font-medium {{ Request::is('contact*') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }}" style="font-family: 'AlternateGotNo1D', sans-serif; font-weight: 400; font-size: 1.4375rem !important; letter-spacing: 1.84px !important; text-transform: uppercase !important;">Contact</a>
                    
                </div>
            </div>
        </div>
        
        <!-- Mobile menu toggle script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                const menuPanel = document.getElementById('menu-panel');
                const closeButton = document.getElementById('close-mobile-menu');
                const overlay = document.getElementById('mobile-menu-overlay');
                
                function openMenu() {
                    mobileMenu.style.display = 'block';
                    setTimeout(() => {
                        menuPanel.classList.remove('translate-x-full');
                    }, 10);
                    document.body.style.overflow = 'hidden';
                }
                
                function closeMenu() {
                    menuPanel.classList.add('translate-x-full');
                    setTimeout(() => {
                        mobileMenu.style.display = 'none';
                        document.body.style.overflow = '';
                    }, 1500); // Increased to 1500ms
                }
                
                function toggleMenu() {
                    if (mobileMenu.style.display === 'block') {
                        closeMenu();
                    } else {
                        openMenu();
                    }
                }
                
                mobileMenuButton.addEventListener('click', openMenu);
                closeButton.addEventListener('click', closeMenu);
                overlay.addEventListener('click', closeMenu);
                
                // Close menu when clicking on a menu item
                document.querySelectorAll('#mobile-menu a').forEach(link => {
                    link.addEventListener('click', closeMenu);
                });
                
                // Close menu on window resize if it becomes desktop view
                window.addEventListener('resize', function() {
                    if (window.innerWidth >= 768) {
                        closeMenu();
                    }
                });
            });
        </script>
    </nav>
