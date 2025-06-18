<div class="itinerary-day">
    <div class="itinerary-header">
        <h4>{{ $dayTitle }}</h4>
    </div>
    <div class="itinerary-content">
        @if(isset($image))
        <div class="itinerary-image">
            <img src="{{ $image }}" alt="{{ $imageAlt ?? 'Itinerary Image' }}">
        </div>
        @endif
        <div class="itinerary-text">
            <p>{{ $description }}</p>
        </div>
    </div>
</div>
