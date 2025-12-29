<x-layouts.app>
    <div class="relative flex min-h-screen flex-col">
        <div class="flex-1">
            @include('partials.sections.hero')

            @php
                $packages = \App\Models\Package::take(3)->get();
            @endphp

            <div id="next-section" class="reveal-card">
                @include('partials.sections.grandezza1')
            </div>
            <div id="next-section" class="reveal-card">
                @include('partials.sections.grandezza2')
            </div>
            <div id="next-section" class="reveal-card">
                @include('partials.sections.grandezza3')
            </div>
            <div id="next-section" class="reveal-card">
                @include('partials.sections.grandezza4')
            </div>
            <div id="next-section" class="reveal-card">
                @include('partials.sections.grandezza5')
            </div>

           <style>
               .reveal-card {
    opacity: 0;
    transform: translateY(250px);
    transition: opacity 2s ease, transform 1s ease;
}
.reveal-card.show {
    opacity: 1;
    transform: translateY(0);
}

            </style>

          <script>
                const cards = document.querySelectorAll('.reveal-card');
                const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
                }
                });
                }, { threshold: 0 });

                cards.forEach(card => observer.observe(card));
            </script>
           

</x-layouts.app>
