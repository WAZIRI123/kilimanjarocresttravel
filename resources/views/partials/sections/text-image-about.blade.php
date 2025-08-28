<section class="bg-background py-12 md:py-12 mx-auto" style='width: 90%;'>
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
            <!-- Text Content -->
            <div class="space-y-6">
                <p class="text-lg text-muted-foreground leading-relaxed">
               <span class="font-bold text-2xl text-foreground">The Crowned Wild Africa</span> is a premier tour and safari company born out of a deep passion for the natural beauty, diverse cultures, and incredible wildlife of Tanzania.We offer unique tours, Mount Kilimanjaro climbs, serene Zanzibar beach getaways, and unforgettable safaris.
                    
                </p>
                <div class="w-full">
                    <!-- Three Column Image Grid -->
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <!-- Image 1 -->
                        <div class="group relative overflow-hidden rounded-lg bg-card text-card-foreground shadow-sm hover:shadow-md transition-all duration-300">
                            <div class="aspect-square overflow-hidden">
                                <img 
                                    src="{{ asset('images/image-used/amazing-bird-eyes-view-zanzibar.webp') }}" 
                                    alt="beaches"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                <!-- Text Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex flex-col justify-end p-4">
                                    <h3 class="text-white font-medium text-sm">Zanzibar Beaches</h3>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 2 -->
                        <div class="group relative overflow-hidden rounded-lg bg-card text-card-foreground shadow-sm hover:shadow-md transition-all duration-300">
                            <div class="aspect-square overflow-hidden">
                                <img 
                                    src="{{ asset('images/image-used/Mount-Kilimanjaro-Marangu-2.webp') }}" 
                                    alt="Mountain Climbing"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                <!-- Text Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex flex-col justify-end p-4">
                                    <h3 class="text-white font-medium text-sm">Mountain Climbing</h3>
                                   
                                </div>
                            </div>
                        </div>
                        
                        <!-- Image 3 -->
                        <div class="group relative overflow-hidden rounded-lg bg-card text-card-foreground shadow-sm hover:shadow-md transition-all duration-300">
                            <div class="aspect-square overflow-hidden">
                                <img 
                                    src="{{ asset('images/image-used/chui.PNG') }}" 
                                    alt="safaris"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                <!-- Text Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex flex-col justify-end p-4">
                                    <h3 class="text-white font-medium text-sm">Safaris</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            
            <!-- Image -->
            <div class="relative aspect-video overflow-hidden rounded-xl  bg-muted shadow-lg">
                <img 
                    src="{{ asset('images/image-used/heroimage.webp') }}" 
                    alt="Beautiful landscape"
                    class="absolute inset-0 w-full h-full object-cover"
                >
            </div>
        </div>
    </div>
</section>