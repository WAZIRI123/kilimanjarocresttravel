<section class="bg-background py-12 md:py-12">
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
            <!-- Image -->
            <div class="relative aspect-video overflow-hidden rounded-xl bg-muted shadow-lg order-2 md:order-1">
                <img 
                    src="{{asset('images/image-used/tembo.webp')}}" 
                    alt="Beautiful landscape"
                    class="absolute inset-0 w-full h-full object-cover"
                >
            </div>
            
            <!-- Text Content -->
            <div class="space-y-1 order-1 md:order-2">
                <h2 class="text-3xl font-bold text-gray-900 mb-4" data-aos="fade-up">
                    Discover Amazing Destinations
                </h2>
                <p class="text-gray-500 mb-6 max-w-4xl mx-auto text-xl section-subtitle" data-aos="fade-up" >
                    Experience the adventure of a lifetime with our curated travel experiences. 
                    From stunning landscapes to vibrant cultures, we bring you the best destinations 
                    that will leave you with unforgettable memories.
                    
                </p>
                <div class="w-full">
                    <!-- Three Column Image Grid -->
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <!-- Image 1 -->
                        <div class="group relative overflow-hidden rounded-lg bg-card text-card-foreground shadow-sm hover:shadow-md transition-all duration-300">
                            <div class="aspect-square overflow-hidden">
                                <img 
                                    src="{{asset('images/image-used/great-migration.jpg')}}" 
                                    alt="Great Migration"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                <!-- Text Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex flex-col justify-end p-4">
                                    <h3 class="text-white font-medium text-sm">Great Migration</h3>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 2 -->
                        <div class="group relative overflow-hidden rounded-lg bg-card text-card-foreground shadow-sm hover:shadow-md transition-all duration-300">
                            <div class="aspect-square overflow-hidden">
                                <img 
                                    src="{{asset('images/image-used/serengeti-safari-tanzania.jpg')}}"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                <!-- Text Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex flex-col justify-end p-4">
                                    <h3 class="text-white font-medium text-sm">Big Five</h3>
                                   
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 3 -->
                        <div class="group relative overflow-hidden rounded-lg bg-card text-card-foreground shadow-sm hover:shadow-md transition-all duration-300">
                            <div class="aspect-square overflow-hidden">
                                <img 
                                    src="{{asset('images/image-used/hot-air-ballon.jpg')}}" 
                                    alt="Beach Getaway"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                <!-- Text Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex flex-col justify-end p-4">
                                    <h3 class="text-white font-medium text-sm">Hot Air Balloon</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>