<footer class="w-full  pt-4 bg-[#ffffff] text-black">
    <div class="container mx-auto px-4 py-1 md:py-1">

        <div class="grid grid-cols-1 gap-2">
            <!-- Company Info -->
            <div class="text-center mx-auto">
              <img src="{{ asset('images/image-used/logo-1.png') }}" alt="Logo" align="center">
            </div>
            <!-- Quick Links -->
            <div class="w-full inline-block">
                <ul class="flex flex-wrap justify-center gap-2">
                    <li><a href="/" class="text-center text-muted-foreground ">Home</a></li>
                    <li><a href="/about" class="text-center text-muted-foreground">About Us</a></li>
                </ul>
                <br/>
                <p class="text-center text-muted-foreground">&copy; {{ date('Y') }} All rights reserved.</p>
            </div>    
        </div>
    <div class="gtranslate_wrapper"></div>

</footer>
