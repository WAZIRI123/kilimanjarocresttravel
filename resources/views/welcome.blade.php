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
                                        @include('partials.sections.hero')
                                        @include('partials.sections.why-choose-us')

                                        @include('partials.sections.testmonials')
                                        @include('partials.sections.trusted')
                                        @php
                                        $packages = \App\Models\Package::where(
                                            'is_featured',
                                            true,
                                        )
                                            ->where('is_active', true)
                                            ->orderBy('sort_order', 'asc')
                                            ->take(3)
                                            ->get();
                                        @endphp
                                        @include('partials.sections.explore', [
                'title' => 'Our Best Packages',
                'viewAllLink' => '#',
                'packages' => $packages->map(function($package) {
                    return [
                        'title' => $package->title,
                        'url' => route('package.show', $package->slug),
                        'image' => $package->featured_image ?? 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80',
                        'duration' => $package->duration,
                        'description' => $package->short_description,
                        'views' => $package->views,
                        'likes' => $package->likes
                    ];
                })
            ])
                                        @include('partials.sections.why-luxury')
                                        @include('partials.sections.Inspiring-our-extra-ordinary')
                                        @include('partials.sections.experience-africa-like-never')
                                        @include('partials.sections.video-section')
                                        @include('partials.sections.our-2025')
                                        @include('partials.sections.discover-africa-best')
                                        </main>
                                        @include('partials.sections.footer')
   <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-na2.hs-scripts.com/243011933.js"></script>
<!-- End of HubSpot Embed Code -->    
<style>
      .P0dCOY .PJ4KCX{
        background-color:#fff !important;
    }
@media(max-width:991px)   {
    #comp-m367d9um11,#comp-m367d9ul5{
        margin-left: 0 !important;
    }
}                             
</body>

</html>