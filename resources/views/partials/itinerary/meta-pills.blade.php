@props([
    'items' => []
])

@php
    // Ensure items is an array and filter out any invalid items
    $items = is_array($items) ? $items : [];
    $validItems = [];
    
    foreach ($items as $item) {
        if (is_array($item) && (isset($item['value']) || array_key_exists('value', $item))) {
            $validItems[] = [
                'value' => is_scalar($item['value']) ? $item['value'] : (is_array($item['value']) ? implode(', ', array_filter($item['value'], 'is_scalar')) : '')
            ];
        }
    }
@endphp

@if(count($validItems) > 0)
    <div class="itinerary-meta" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 0.5rem; margin: 0 auto 1.5rem; width: 100%; max-width: 800px;">
        @foreach($validItems as $item)
            <div style="background: white; border-radius: 20px; padding: 0.5rem 1rem; display: inline-flex; align-items: center; font-size: 0.9rem; white-space: nowrap;">
                <span style="font-weight: 500;">{{ $item['value'] }}</span>
            </div>
        @endforeach
    </div>
@endif
