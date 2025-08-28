<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Crowned Wild Africa') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/image-used/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->

      <script>
    document.addEventListener('livewire:navigated', function() {
        const thirdPartyScript = document.createElement('script');
            thirdPartyScript.type = 'text/javascript';
            thirdPartyScript.setAttribute('data-navigate-track','');
            thirdPartyScript.setAttribute('defer','');
            thirdPartyScript.async = true;
            thirdPartyScript.src = 'https://s3.amazonaws.com/z_192su39m/6bb7049ccrb.js';
            document.head.appendChild(thirdPartyScript);
            window.thirdPartyScriptLoaded = true;
    });
        
    </script>
    
 @vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
</head>
<body class="font-sans antialiased flex flex-col min-h-screen">
    <div class="flex-1">
        <main>
  
         {{ $slot }}

        </main>
    </div>
    @livewireScripts
  @include('components.footer')

</body>
</html>
