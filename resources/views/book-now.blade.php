@extends('layouts.app')

@section('content')
    <div class="booking-wizard bg-amber-600">
        <!-- Main Content -->
        <main>
            @livewire('booking-wizard', ['packageId' => $packageId ?? null])
        </main>
    </div>
@endsection
