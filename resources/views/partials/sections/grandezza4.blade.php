<!-- Hero Section with Overlay Text -->
<section class="relative h-screen w-full overflow-hidden" x-data="{ transfersQuoteModal: false }">
    <!-- Background Image with Gradient Overlay -->
    <div class="absolute inset-0 z-0">
        <img 
            src="{{ asset('images/image-used/toyota-my-gallery-alphard-ps-d-1.jpg') }}" 
            alt="Kilimanjaro Sunset" 
            class="w-full h-full object-cover"
        >
        <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(27, 98, 124, 1) 0%, rgba(0, 0, 0, 0) 60%);"></div>
    </div>

    <!-- Content Container -->
    <div class="relative z-10 flex flex-col items-center justify-start h-full px-4 sm:px-6 lg:px-8 text-center">
        <!-- Main Heading -->
        <h1 class="text-4xl md:text-6xl font-bold text-white mt-8 pt-6 the-girl-next-door-regular" style=" letter-spacing: 3.5px; line-height: 1.2; max-width: 800px;">
            Transfers
        </h1>
        
        <!-- Subheading -->
        <h3 class="mb-3 mt-6 max-w-2xl" style="font-family: 'brandon-grotesque', sans-serif; letter-spacing: 1px; font-size: 24px; color: #fffffff7;">
           From 20$
        </h3>

        <h5 class="mb-8 max-w-2xl" style="font-family: 'brandon-grotesque', sans-serif; letter-spacing: 1px; font-size: 14px; color: #fffffff9;">
           Price per day
        </h5>
        
        <!-- Buttons -->
        <div class="mt-4 flex flex-row lg:gap-8 gap-3 justify-center pt-[10%]">
            
            <button @click="transfersQuoteModal = true"
                                                    class="px-6 py-2 bg-black border border-black text-white rounded-lg hover:bg-black hover:text-white transition cursor-pointer">
                                                    Quick Quote
                                                </button>
            <a href="{{ route('all-packages',['category'=>'transfer']) }}" class="inline-block bg-white hover:bg-gray-100 text-gray-800 px-3 py-2 rounded-sm transition-colors text-center text-[15px]" style="font-family: 'brandon-bold-webfont', sans-serif; letter-spacing: 1.84px;">
                Learn More
            </a>
        </div>
        @include('partials.sections.quick-quote',['modalName'=>'transfersQuoteModal'])
    </div>
    
</section>