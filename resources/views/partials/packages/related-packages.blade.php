@if (isset($packages) && count($packages) > 0)
    <div class="related-packages" style="padding: 3rem 0; margin: 0 auto;">
        <div style="width: 100%; display: flex; justify-content: center;">
            <div style="width: 100%; max-width: 100%; padding: 0 15px;">
                @if (isset($title) || isset($viewAllLink))
                    <div
                        style="display: flex; justify-content:center; align-items: center; margin-bottom: 2rem; padding: 0 15px;">
                        @if (isset($title))
                            <h2 style="font-size: 1.5rem; color: #333; font-weight: 300; margin: 0; text-align: center;"
                                class="lg:w-[80%] w-[95%]">
                                @if ($category == 'default')
                                    "From the dusty plains of the Serengeti to the dazzling shores of Zanzibar, this is
                                    a journey defined by adventure and independent discovery."
                                @elseif($category == 'safari')
                                    "Beyond the horizon, the untamed heart of Africa beats. Witness the Great Migration
                                    and walk among giants; the true wilderness begins here."
                                @elseif($category == 'zanzibar')
                                    "Beyond a destination, a Zanzibar package is a journey to paradise: where turquoise
                                    waters meet the spice-scented air, and every day is an immersion in history,
                                    serenity, and unparalleled coastal luxury."
                                @elseif($category == 'excursion')
                                    "Dive into the turquoise waters or wander the winding alleys of Stone Town. Every
                                    Zanzibar excursion is a blend of spice, history, and pure island bliss."
                                @elseif($category == 'car-rental')
                                    "Forget the schedule; follow the scent of cloves. Rent a car and chase the perfect
                                    sunset, giving yourself the freedom to discover Zanzibar at your own pace."
                                @endif

                                @if(session('error'))
                            <div style="color:red; text-align: center;">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if(session('success'))
                            <div style="color:white; background-color: green; text-align: center;">
                                {{ session('success') }}
                            </div>
                        @endif
                            </h2>
                        @endif
                    </div>
                @endif

                <div
                    class="grid grid-cols-1  mx-auto sm:grid-cols-2 lg:grid-cols-2 gap-8 relative z-10 lg:w-[90%] w-[90%] justify-items-center">
                    @foreach ($packages as $package)
                        <!-- {{ asset('storage/' . $package['image']) }} CARD -->
                        <div class="relative  w-full h-80 rounded-xl overflow-hidden shadow-lg" x-data="{ tourModal: false, quoteModal: false }">

                            <img src="{{ asset($package['image']) }}" class="w-full h-full object-cover"
                                alt="{{ $package['title'] }}">

                            <div class="absolute inset-0 bg-black/40"></div>

                            <div class="absolute bottom-6 left-6 text-white z-20">
                                <h3 class="text-2xl font-bold w-[80%]">{{ $package['title'] }}</h3>
                                <p class="text-[16px] mt-1 w-[80%] line-clamp-2">{{ $package['description'] }}</p>

                                <button @click="tourModal = true"
                                    class="inline-block mt-4 px-6 py-2 border border-white rounded-full text-sm font-semibold hover:bg-white hover:text-black transition">
                                    EXPLORE
                                </button>
                            </div>

                            <!-- ============================== -->
                            <!--  MODAL 1 — TOUR DETAILS MODAL -->
                            <!-- ============================== -->

                            <div x-show="tourModal" 
                                x-transition.opacity
                                x-cloak
                                x-data="{ open: false }"
                                x-init="() => { 
                                    open = true; 
                                    document.body.style.overflow = 'hidden';
                                }"
                                @keydown.escape.window="tourModal = false"
                                x-on:close.stop="tourModal = false"
                                x-on:keydown.escape.window="tourModal = false"
                                x-show="tourModal"
                                class="fixed inset-0 bg-black/50 flex items-start justify-center z-50 overflow-y-auto py-8"
                                x-bind:class="{ 'pointer-events-none': !open }"
                                x-on:close="open = false"
                                x-effect="if (tourModal) { 
                                    document.body.style.overflow = 'hidden';
                                } else {
                                    document.body.style.overflow = '';
                                }" style="height: 80vh;">
                                <!-- Modal Box -->
                                <div x-show="tourModal" x-transition @click.outside="tourModal = false"
                                    class="bg-white rounded-lg max-w-5xl w-full mx-4 shadow-xl overflow-y-auto max-h-[90vh]">
                                    <div class="grid grid-cols-1 md:grid-cols-2">

                                        <!-- Left Image -->
                                        <img src="{{ asset($package['image']) }}"
                                            class="w-full h-full object-cover" alt="{{ $package['title'] }}">

                                        <!-- Right Content -->
                                        <div class="p-8 relative">

                                            <!-- Close Button -->
                                            <button @click="tourModal = false"
                                                class="absolute top-4 right-4 bg-black text-white w-8 h-8 rounded-full flex items-center justify-center cursor-pointer text-lg leading-none">
                                                <span class="pb-1 text-xl">&times;</span>
                                            </button>

                                            <h2 class="text-3xl font-bold mb-4">{{ $package['title'] }}</h2>

                                           @if (request()->query('category') !== 'transfer')
                                            <h3 class="text-lg font-semibold mb-2">What to expect</h3>
                                            <p class="text-gray-700 leading-relaxed mb-6">{!! $package['description'] ? $package['description'] : 'No description available' !!}
                                            </p>
                                            @endif

                                            <hr class="my-4">
                                            <p class="text-gray-700 leading-relaxed mb-6">
                                            @if (request()->query('category') == 'transfer')
                                                Price: {{ preg_replace('/\s*per\s*person/i', '', $package['price']) }}
                                            @else
                                                Price: {{ $package['price'] ?? 'Price depends on number of people' }}
                                            @endif
                                            </p>

                                            <div class="flex items-center justify-between">
                                                <button @click="tourModal = false; quoteModal = true"
                                                    class="px-6 py-2 bg-transparent border border-black text-black rounded-full hover:bg-black hover:text-white transition">
                                                    Quick Quote
                                                </button>

                                                @if (request()->query('category') == 'transfer')
                                                    <a href="{{ route('car.index', $package['slug']) }}"
                                                        class="px-6 py-2 bg-black text-white rounded-full hover:bg-black/80 transition">
                                                        Learn More
                                                    </a>
                                                @elseif(request()->query('category') == 'safari')
                                                    <a href="{{ route('safari.index', $package['slug']) }}"
                                                        class="px-6 py-2 bg-black text-white rounded-full hover:bg-black/80 transition">
                                                        Learn More
                                                    </a>
                                                @elseif(request()->query('category') == 'zanzibar')
                                                    <a href="{{ route('zanzibar.index', $package['slug']) }}"
                                                        class="px-6 py-2 bg-black text-white rounded-full hover:bg-black/80 transition">
                                                        Learn More
                                                    </a>
                                                @elseif(request()->query('category') == 'activity')
                                                    <a href="{{ route('activity.index', $package['slug']) }}"
                                                        class="px-6 py-2 bg-black text-white rounded-full hover:bg-black/80 transition">
                                                        Learn More
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ============================== -->
                            <!--  MODAL 2 — QUICK QUOTE FORM   -->
                            <!-- ============================== -->

                            <div x-show="quoteModal" 
                                x-transition.opacity
                                x-cloak
                                x-data="{ open: false }"
                                x-init="() => { 
                                    open = true; 
                                    document.body.style.overflow = 'hidden';
                                }"
                                @keydown.escape.window="quoteModal = false"
                                x-on:close.stop="quoteModal = false"
                                x-on:keydown.escape.window="quoteModal = false"
                                x-show="quoteModal"
                                class="fixed inset-0 bg-black/50 flex items-start justify-center z-50 overflow-y-auto py-8"
                                x-bind:class="{ 'pointer-events-none': !open }"
                                x-on:close="open = false"
                                x-effect="if (quoteModal) { 
                                    document.body.style.overflow = 'hidden';
                                } else {
                                    document.body.style.overflow = '';
                                }">
                                <div x-show="quoteModal" x-transition @click.outside="quoteModal = false"
                                    class="bg-white rounded-lg max-w-md w-full mx-4 p-6 shadow-xl relative overflow-y-auto max-h-[90vh]">

                                    <!-- Close -->
                                    <button @click="quoteModal = false"
                                        class="absolute top-4 right-4 bg-black text-white w-8 h-8 rounded-full flex items-center justify-center cursor-pointer text-lg leading-none">
                                        <span class="pb-1 text-xl">&times;</span>
                                    </button>

                                    <h2 class="text-2xl font-bold mb-4">Quick Quote</h2>

                                    <form class="space-y-4" action="{{route('contact.submit')}}" method="POST">
                                        @csrf
                                        @if (session('error'))
                                            <div style="color:red">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        @if (session('success'))
                                            <div style="color:green">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <div>
                                            <label class="block text-sm font-medium mb-1">Email</label>
                                            <input type="email" name="email" class="w-full border rounded-md px-3 py-2">
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium mb-1">Your Name</label>
                                            <input type="text" class="w-full border rounded-md px-3 py-2"
                                                name="name">
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium mb-1">Quote Message</label>
                                            <textarea class="w-full border rounded-md px-3 py-2 h-24" name="message">{{ $package['title'] }}</textarea>
                                        </div>

                                        <button type="submit"
                                            class="w-full py-2 bg-black text-white rounded-full hover:bg-black/80 transition cursor-pointer">
                                            Submit Quote Request
                                        </button>

                                    </form>

                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            /* Responsive adjustments */
            @media (max-width: 1024px) {
                .related-packages>div {
                    width: 100% !important;
                    max-width: 100% !important;
                    padding: 0 0px;
                }
            }

            @media (max-width: 768px) {
                .package-grid {
                    grid-template-columns: minmax(280px, 400px) !important;
                    justify-content: center !important;
                    gap: 1.5rem !important;
                    padding: 0 15px;
                }

                .related-packages {
                    padding: 2rem 0 !important;
                }
            }

            /* Match main content width */
            @media (min-width: 1024px) {
                .related-packages>div>div {
                    width: 100%;
                    max-width: 1200px;
                    margin: 0 auto;
                }
            }

            /* Hover effects */
            .package-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .package-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
            }

            .package-card-link {
                color: inherit;
                text-decoration: none;
                display: block;
                height: 100%;
            }

            .package-card {
                height: 100%;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .package-card-link:hover .package-card {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
            }
        </style>
    @endpush
@endif
