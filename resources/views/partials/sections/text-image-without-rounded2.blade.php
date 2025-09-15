<section class="bg-background pb-0 md:pb-0">
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
            <!-- Image -->
            <div class="relative w-full h-[400px] md:h-[500px] overflow-hidden bg-muted shadow-lg order-2 md:order-2">
                <img 
                    src="{{ asset('images/image-used/heroimage.webp') }}" 
                    alt="Beautiful landscape"
                    class="w-full h-full object-cover object-center"
                >
            </div>
            
            <!-- Text Content -->
            <div class="space-y-6 order-1 md:order-2">
                <div class="container mx-auto px-4">
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-12 mt-12" >How to Get Started! </h2>
                        <p class="text-gray-500 mt-6 mb-12 max-w-4xl mx-auto text-xl section-subtitle" >You can choose one of our popular Tanzania itineraries or build your own trip exactly on the way you love it. Let us know which national parks and islands you like and we will design the perfect Tanzania vacation for you.</p>
                        <a href="{{ route('contact') }}" class="inline-block bg-black text-white px-6 py-3 rounded-md hover:bg-gray-800 transition duration-300" style="font-family: 'brandon-bold-webfont', sans-serif; font-weight: 100; font-size: 17px!important; letter-spacing: 0.85px !important; line-height: 25.5px !important;" >Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>