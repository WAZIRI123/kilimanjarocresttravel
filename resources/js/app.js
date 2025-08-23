import './bootstrap';

import Alpine from 'alpinejs';

// If you want Alpine's instance to be available globally (optional but useful for debugging)
window.Alpine = Alpine;


Alpine.start();

document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    
    menuButton.addEventListener('click', function(e) {
        e.stopPropagation();
        menu.classList.toggle('hidden');
    });


    document.addEventListener('click', function(e) {
        if (!menu.contains(e.target) && !menuButton.contains(e.target)) {
            menu.classList.add('hidden');
        }
    });

 
    const menuLinks = menu.querySelectorAll('a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            menu.classList.add('hidden');
        });
    });
});