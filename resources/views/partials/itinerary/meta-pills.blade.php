@props([
    'items' => []
])

@if(count($items) > 0)
    <div class="itinerary-meta" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 0.5rem; margin: 0 auto 1.5rem; width: 100%; max-width: 800px;">
        @foreach($items as $item)
            <div style="background: white; border-radius: 20px; padding: 0.5rem 1rem; display: inline-flex; align-items: center; font-size: 0.9rem; white-space: nowrap;">
                <span style="color: #333; margin-right: 0.5rem;">{{ $item['label'] }}</span>
                <span style="font-weight: 500;">{{ $item['value'] }}</span>
            </div>
        @endforeach
    </div>
@endif
