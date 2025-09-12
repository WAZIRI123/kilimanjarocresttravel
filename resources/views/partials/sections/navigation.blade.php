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

                <!-- Centered Desktop Navigation -->
                <div class="hidden lg:flex items-center justify-center flex-1 pt-5">
                    <div class="flex items-center space-x-1  rounded-full px-6 py-2 backdrop-blur-sm">
                        <a  href="/" class="text-white {{ Request::is('/') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors">Home</a>
                        
                        <!-- Package Dropdown -->
                        <div x-data="{ open: false }" 
                            @mouseenter="if(window.innerWidth >= 768) open = true" 
                            @mouseleave="if(window.innerWidth >= 768) open = false" 
                            @click.away="if(window.innerWidth < 768) open = false"
                            class="relative">
                            <button 
                                @click="if(window.innerWidth < 768) open = !open"
                                class="flex items-center text-white {{ request()->is('all-packages?category=short-safaris') || request()->is('all-packages?category=northern-safaris') || request()->is('all-packages?category=southern-safaris') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-0 rounded-full text-lg font-medium transition-colors"
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
                                class="absolute left-0 mt-0 w-56 rounded-lg bg-white backdrop-blur-md border border-white/20 shadow-lg z-[999]"
                                @mouseenter="if(window.innerWidth >= 768) open = true"
                                @mouseleave="if(window.innerWidth >= 768) open = false"
                                style="display: none;">
                                <div class="p-2 space-y-1">
                                    <a   {{ request('category') === 'northern-safaris' ? 'active' : '' }}" href="{{ route('all-packages', ['category' => 'northern-safaris']) }}" class="flex items-center px-4 py-0 text-sm hover:bg-gray-100 rounded-md transition-colors text-black">
                                        Northern Safaris
                                    </a>
                                    <a   {{ request('category') === 'short-safaris' ? 'active' : '' }}" href="{{ route('all-packages', ['category' => 'short-safaris']) }}" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors text-black">
                                         Short Safaris
                                    </a>
                                    <a   {{ request('category') === 'southern-safaris' ? 'active' : '' }}" href="{{ route('all-packages', ['category' => 'southern-safaris']) }}" class="flex items-center px-4 py-1 text-sm hover:bg-gray-100 rounded-md transition-colors text-black">
                                       Southern Safaris
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('all-packages', ['category' => 'kilimanjaro']) }}" class="text-white {{ request('category') === 'kilimanjaro' ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors">Kilimanjaro</a>

                        <a href="{{ route('all-packages', ['category' => 'zanzibar']) }}" class="text-white {{ request('category') === 'zanzibar' ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors">Zanzibar</a>

                        <a   href="{{ route('about') }}" class="text-white {{ Request::is('about*') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors">About</a>
                        <a  href="{{ route('contact') }}" class="text-white {{ Request::is('contact*') ? 'bg-white/10' : 'hover:bg-white/10' }} px-4 py-2 rounded-full text-lg font-medium transition-colors">Contact</a>
                    </div>
                </div>

                <!-- Book Now Button -->
                <div class="hidden lg:block">
                    <a  href="{{ route('book-now') }}" class="bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        Enquiry Now
                    </a>
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

        <!-- Mobile Menu -->
        <div class="hidden lg:hidden bg-white shadow-lg rounded-lg mx-2 my-1" id="mobile-menu" style="text-align: left;">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a   href="/" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('/') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">Home</a>
                
                <!-- Safaris Mobile Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 {{ in_array(request('category'), ['northern-safaris', 'short-safaris', 'southern-safaris']) ? 'active' : '' }}">
                        <span>Safaris</span>
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200" :class="{'transform rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="pl-4 space-y-1">
                        <a  href="{{ route('all-packages', ['category' => 'northern-safaris']) }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md {{ request('category') === 'northern-safaris' ? 'active' : '' }}">
                            Northern Safaris
                        </a>
                        <a  href="{{ route('all-packages', ['category' => 'short-safaris']) }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md {{ request('category') === 'short-safaris' ? 'active' : '' }}">
                            Short Safaris
                        </a>
                        <a  href="{{ route('all-packages', ['category' => 'southern-safaris']) }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md {{ request('category') === 'southern-safaris' ? 'active' : '' }}">
                            Southern Safaris
                        </a>
                    </div>
                </div>
                
                <a href="{{ route('all-packages', ['category' => 'kilimanjaro']) }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request('category') === 'kilimanjaro' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">Kilimanjaro</a>

                <a href="{{ route('all-packages', ['category' => 'zanzibar']) }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request('category') === 'zanzibar' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">Zanzibar</a>
                
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('about*') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">About</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('contact*') ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">Contact</a>
                
                <div class="flex justify-center px-3">
                    <a href="{{ route('book-now') }}" class="w-full bg-amber-600 text-white px-4 py-2 rounded-md text-base font-medium hover:bg-amber-700 mt-2 transition-colors text-center">
                        Enquiry Now
                    </a>
                </div>
            </div>
        </div>
    </nav>
