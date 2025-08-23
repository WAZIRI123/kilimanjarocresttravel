import './bootstrap';

// Only initialize Alpine if it's not already loaded
if (!window.Alpine) {
    import('alpinejs').then(Alpine => {
        window.Alpine = Alpine;
        window.Alpine.start();
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    
    if (menuButton && menu) {
        menuButton.addEventListener('click', function(e) {
            e.stopPropagation();
            menu.classList.toggle('hidden');
        });
    }
});