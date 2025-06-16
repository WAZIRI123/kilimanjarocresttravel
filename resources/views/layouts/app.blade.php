<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" id="wixDesktopViewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Girl+Next+Door&display=swap" rel="stylesheet">

    <!-- Gallery Fix Script -->
    <script src="{{ asset('js/gallery-fix.js') }}"></script>
    <script src="{{ asset('js/gallery-slider.js') }}"></script>
    <script src="{{ asset('js/remove-wix-error.js') }}"></script>
    <script src="{{ asset('js/sticky-header.js') }}"></script>

    @include('partials.imagejs')
    @include('partials.main-css')
    
    @stack('styles')
    @stack('head-scripts')
    
    <title>@yield('title', 'Stan Safari')</title>
</head>

<body class="responsive" style="--scrollbar-width: 15px;" data-new-gr-c-s-check-loaded="14.1235.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <!--pageHtmlEmbeds.bodyStart start-->
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart start"></script>
    <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart end"></script>
    <!--pageHtmlEmbeds.bodyStart end-->
    
    <div id="SITE_CONTAINER">
        <div id="main_MF" class="main_MF">
            <div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" tabindex="-1" role="region"
                aria-label="top of page">
                <span class="mHZSwn">top of page</span>
            </div>
            
            <button id="SKIP_TO_CONTENT_BTN" class="SKIP_TO_CONTENT_BTN LHrbPP has-custom-focus" tabindex="0">
                Skip to Main Content
            </button>
            
            <div id="site-root" class="overflow-clip-in-mobile site-root">
                <div id="masterPage" class="masterPage css-editing-scope">
                    <div id="SITE_PAGES" class="JsJXaX SITE_PAGES">
                        <div id="c1dmp" class="P0dCOY c1dmp">
                            <div class="PJ4KCX wixui-page" data-testid="page-bg"></div>
                            <div>
                                <div class="c1dmp-overflow-wrapper xpmKd_" data-testid="responsive-container-overflow">
                                    <div data-testid="responsive-container-content" tabindex="-1" class="c1dmp-container">
                                        <!-- Main Content -->
                                        <main id="main-content" class="c1rIl3" data-main-content-parent="true">
                                            @yield('content')
                                        </main>
                                        
                                        <!-- Footer -->
                                        @include('partials.sections.footer')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @stack('scripts')
    
    <!-- HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na2.hs-scripts.com/243011933.js"></script>
    <!-- End of HubSpot Embed Code -->
</body>

</html>
