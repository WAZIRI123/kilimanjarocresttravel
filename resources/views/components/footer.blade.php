<footer class="w-full  pt-8 bg-white">
    <div class="container mx-auto px-4 py-1 md:py-1">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <div class="flex justify-center lg:justify-start items-center space-x-2">
                    <x-application-logo class="h-8 w-auto" />
                   
                </div>
                <p class="text-muted-foreground text-center lg:text-left">Creating unforgettable safari experiences in the heart of Africa.</p>
        
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-bold lg:text-left text-center">Quick Links</h3>
                @include('partials.sections.divider1')
                <ul class="mt-4 grid grid-cols-2 gap-2 sm:grid-cols-1 sm:gap-0 sm:space-y-2">
                    <li class="lg:text-left text-center"><a href="/" class="text-muted-foreground hover:text-foreground transition-colors font-semibold" wire:navigate.hover>Home</a></li>
                    <li class="lg:text-left text-center" wire:navigate.hover><a href="/about" class="text-muted-foreground hover:text-foreground transition-colors font-semibold" wire:navigate.hover>About Us</a></li>
                    <li class="lg:text-left text-center" wire:navigate.hover><a href="/all-packages" class="text-muted-foreground hover:text-foreground transition-colors font-semibold" wire:navigate.hover>Safari Tours</a></li>
                    <li class="lg:text-left text-center" wire:navigate.hover><a href="/destinations" class="text-muted-foreground hover:text-foreground transition-colors font-semibold" wire:navigate.hover>Destinations</a></li>
                    <li class="lg:text-left text-center sm:col-span-2 md:col-span-1" wire:navigate.hover><a href="/contact" class="text-muted-foreground hover:text-foreground transition-colors font-semibold" wire:navigate.hover>Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-bold lg:text-left text-center">Contact Us</h3>
                @include('partials.sections.divider1')
                <ul class="mt-4 space-y-2 lg:text-left text-center">
                    <li class="flex justify-center lg:justify-start items-start font-semibold">
                        <svg class="h-5 w-5 text-muted-foreground mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-muted-foreground font-semibold text-start">Dar es Salam, Tanzania</span>
                    </li>
                    <li class="flex  items-center font-semibold  justify-center lg:justify-start">
                        <svg class="h-5 w-5 text-muted-foreground mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:info@crownedwildafrica.com" class="text-muted-foreground hover:text-foreground transition-colors font-semibold">info@crownedwildafrica.com</a>
                    </li>
                    <li class="flex justify-center lg:justify-start items-center font-semibold">
                        <svg class="h-5 w-5 text-muted-foreground mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+255743155783" class="text-muted-foreground hover:text-foreground transition-colors font-semibold">+255 743 155 783</a>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-bold lg:text-left text-center">Follow Us</h3>
                @include('partials.sections.divider1')
                <p class="mt-2 text-sm lg:text-left text-center text-muted-foreground">Subscribe to our social media for the latest updates and offers.</p>
              <div class="flex justify-center lg:justify-start space-x-4 mt-3">
                    <a href="#" class="text-muted-foreground hover:text-foreground transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-muted-foreground hover:text-foreground transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.976.045-1.505.207-1.858.344-.466.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.976.207 1.505.344 1.858.182.466.399.8.748 1.15.35.35.684.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.684.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-muted-foreground hover:text-foreground transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    </div>
            </div>
        </div>

        <!-- Payment Methods -->
        <div class="mt-12 pt-8">
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <span class="w-full border-t border-gray-200"></span>
                </div>
                <div class="relative flex justify-center text-xs uppercase">
                    <span class="bg-white px-2 text-muted-foreground">We Accept</span>
                </div>
            </div>
            <div class="mt-6 flex flex-wrap justify-center items-center gap-4 md:gap-6">
             
            <img src="{{ asset('images/image-used/footer-payment.png') }}" alt="Payment Methods">
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-6 pt-6">
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <span class="w-full border-t border-gray-200"></span>
                </div>
            </div>
            <div class="relative flex justify-center">
                <p class="text-sm text-muted-foreground bg-white  px-3">&copy; {{ date('Y') }} Stan Safari. All rights reserved.</p>
            </div>
        </div>
        </div>
           <div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","languages":["en","fr","it","es","de","hi","ru","zh-CN","sw"],"wrapper_selector":".gtranslate_wrapper","alt_flags":{"en":"usa","pt":"brazil","es":"colombia","fr":"quebec"}}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68a9d6b64ebc491927e0fe29/1j3bmtep5';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</footer>
