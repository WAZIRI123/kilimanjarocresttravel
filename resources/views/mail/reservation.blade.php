@component('mail::message')
<p>New reservation for {{ $package }} {{ $for_zanzibar }} starting at {{ $start_date }}
@if($people != '') for {{ $people }} people @endif
@if($price != '') for ${{ $price }} @endif
has been placed by user with this email {{ $email }} and name {{ $name }}.</p>
<p>Kindly email them back at {{ $email }}</p>
@endcomponent