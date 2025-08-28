import './bootstrap';

// Only initialize Alpine if it's not already loaded
if (!window.Alpine) {
    import('alpinejs').then(Alpine => {
        window.Alpine = Alpine;
        window.Alpine.start();
    });
}

document.addEventListener('livewire:navigated', function() {
    const menuButton = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    
    if (menuButton && menu) {
        menuButton.addEventListener('click', function(e) {
            e.stopPropagation();
            menu.classList.toggle('hidden');
        });
    }
    
});



function loadScripts() {
    // Load GTranslate
    if (!window.gtranslateSettings) {
        window.gtranslateSettings = {
            default_language: "en",
            languages: ["en", "fr", "it", "es", "de", "hi", "ru", "zh-CN", "sw"],
            wrapper_selector: ".gtranslate_wrapper",
            alt_flags: {"en": "usa", "pt": "brazil", "es": "colombia", "fr": "quebec"}
        };
        
        // Load GTranslate script if not already loaded
        if (!document.querySelector('script[src*="gtranslate"]')) {
            const gtranslateScript = document.createElement('script');
            gtranslateScript.src = 'https://cdn.gtranslate.net/widgets/latest/float.js';
            gtranslateScript.defer = true;
            document.head.appendChild(gtranslateScript);
        }
    }

//load safari booking reviews
if (!window.safariBookingReviewsLoaded) {
    const safariBookingReviewsScript = document.createElement('script');
    safariBookingReviewsScript.src = 'https://s3.amazonaws.com/z_192su39m/6bb7049ccrb.js';
    safariBookingReviewsScript.async = true;
    document.head.appendChild(safariBookingReviewsScript);
    window.safariBookingReviewsLoaded = true;
}

    if (!window.Tawk_API) {
        if (!document.querySelector('script[src*="tawk.to"]')) {
            const tawkScript = document.createElement('script');
            //add wire:ignore 
            tawkScript.setAttribute('wire:ignore', true);
            tawkScript.type = 'text/javascript';
            tawkScript.async = true;
            tawkScript.src = 'https://embed.tawk.to/68a9d6b64ebc491927e0fe29/1j3bmtep5';
            tawkScript.charset = 'UTF-8';
            tawkScript.setAttribute('crossorigin', '*');
            document.head.appendChild(tawkScript);
        }
    }

}

document.addEventListener('DOMContentLoaded', function() {
    loadScripts();
});

