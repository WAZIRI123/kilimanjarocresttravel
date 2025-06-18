@if(isset($highlights) && is_array($highlights) && count($highlights) > 0)
<div class="content-section">
    <h3>Trip Highlights</h3>
    <ul class="trip-highlights">
        @foreach($highlights as $highlight)
            <li>{{ $highlight }}</li>
        @endforeach
    </ul>
</div>
@endif
