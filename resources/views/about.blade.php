<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" id="wixDesktopViewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Wix.com Website Builder">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Gallery Fix Script -->
    <script src="js/gallery-fix.js"></script>
    <script src="js/gallery-slider.js"></script>
    <script src="js/remove-wix-error.js"></script>
    <script src="js/sticky-header.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    @include('partials.imagejs')

    <!-- Original trials -->

@include('partials.inside')
    
@include('partials.main-css')
  
</head>

<body class="responsive" style="--scrollbar-width: 15px;" data-new-gr-c-s-check-loaded="14.1235.0"
    data-gr-ext-installed="" cz-shortcut-listen="true">
    <!--pageHtmlEmbeds.bodyStart start-->
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart start"></script>

    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart end"></script>
    <!--pageHtmlEmbeds.bodyStart end-->
    @php
    $teamMembers = \App\Models\TeamMember::all();
    @endphp
    <div id="SITE_CONTAINER">
        <div id="main_MF" class="main_MF">
            <div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" tabindex="-1" role="region"
                aria-label="top of page"><span class="mHZSwn">top of page</span></div><!--$--><!--/$--><button
                id="SKIP_TO_CONTENT_BTN" class="SKIP_TO_CONTENT_BTN LHrbPP has-custom-focus" tabindex="0">Skip to Main
                Content</button>
            <div id="site-root" class="overflow-clip-in-mobile site-root"><!--$-->
                <div id="masterPage" class="masterPage css-editing-scope">
                    <div id="SITE_PAGES" class="JsJXaX SITE_PAGES">
                        <div id="c1dmp" class="P0dCOY c1dmp">
                            <div class="PJ4KCX wixui-page" data-testid="page-bg"></div>
                            <div>
                                <div class="c1dmp-overflow-wrapper xpmKd_" data-testid="responsive-container-overflow">
                                    <div data-testid="responsive-container-content" tabindex="-1"
                                        class="c1dmp-container"><!--$-->
                                        <main id="PAGE_SECTIONSc1dmp" class="PAGE_SECTIONSc1dmp c1rIl3"
                                            data-main-content-parent="true"><!--$-->
                                            @include('partials.sections.page-hero', [
                                                'image' => asset('storage/images/tanzania-serengeti.jpg'),
                                                'title' => 'About Stan Safaris',
                                                'subtitle' => 'Your Trusted Safari Experts'
                                            ])

                                        @include('partials.sections.why-luxury-about')
                                        <!-- Meet the Team -->
                                        <section class="py-10 bg-white" style="grid-area: 10 / 1 / 11 / 2;">
                                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                <div class="text-center mb-16">
                                                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                                                        Meet Our Safari Family
                                                    </h2>
                                                    <div class="h-1 w-24 bg-[#363317] mx-auto mb-8"></div>
                                                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                                                        Our team of passionate experts is dedicated to making your African adventure truly unforgettable.
                                                    </p>
                                                </div>

                                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                                                    @foreach ($teamMembers as $member)
                                                    <div class="group relative overflow-hidden rounded-xl">
                                                        <div class="aspect-w-1 aspect-h-1">
                                                            <img src="{{ asset('/storage/' . $member->image) }}" 
                                                                 alt="{{ $member->name }} - {{ $member->title }}" 
                                                                 class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                                        </div>
                                                        <div class="absolute inset-0 bg-gradient-to-t from-black to-35% to-transparent transition duration-300 flex items-end p-6">
                                                            <div>
                                                                <h4 class="text-white text-xl font-bold">{{ $member->name }}</h4>
                                                                <p class="text-white">{{ $member->title }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>

                                                <div class="mt-16 relative rounded-2xl overflow-hidden py-16 px-6 sm:px-12">
                                                    <!-- Background Image with Overlay -->
                                                    <div class="absolute inset-0">
                                                        <img src="{{ asset('images/serengeti-safari-tanzania.jpg') }}" 
                                                             alt="African Safari" 
                                                             class="w-full h-full object-cover object-center">
                                                        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                                                    </div>
                                                    
                                                    <!-- Content -->
                                                    <div class="relative max-w-4xl mx-auto text-center">
                                                        <h3 class="text-3xl md:text-4xl font-light text-white mb-6">
                                                            Ready to Start Your Adventure?
                                                        </h3>
                                                        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                                                            Let's create your dream safari experience together. Our team is ready to help you plan the perfect African adventure.
                                                        </p>
                                                        <div class="flex flex-col sm:flex-row justify-center gap-4">
                                                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-transparent text-base font-medium rounded-full text-gray-900  hover:scale-105 transition-all duration-300" style="background-color:#fff">
                                                                Plan My Safari
                                                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                                </svg>
                                                            </a>
                                                            <a href="tel:+255123456789" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-base font-medium rounded-full text-white bg-transparent hover:bg-white hover:bg-opacity-10 hover:scale-105 transition-all duration-300">
                                                                <i class="fas fa-phone-alt mr-2"></i>
                                                                +255754 261 101
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                       
                                        </main>
                                        @include('partials.sections.footer')
   <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-na2.hs-scripts.com/243011933.js"></script>
<!-- End of HubSpot Embed Code -->    
<style>
    @media(min-width:991px){
    #comp-m1oo0rkh .comp-m1oo0rkh-container{
        padding-top: 5% !important;
        padding-bottom: 5% !important;
    }
}
    #comp-m1oof7jp{
        margin-top: 80px !important;
    }
@media(max-width:991px)   {
    #comp-m367d9um11,#comp-m367d9ul5{
        margin-left: 0 !important;
    }
}                             
</body>

</html>