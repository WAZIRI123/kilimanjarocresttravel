<x-filament-panels::page>
    <div class="space-y-6 bg-white rounded-lg shadow p-6">
        <!-- Header -->
        <div class="border-b pb-6 mb-6">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Booking #{{ $record->id }}</h2>
                    <p class="text-sm text-gray-500">Created on {{ $record->created_at->format('F j, Y') }}</p>
                </div>

            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Traveler Information -->
            <div class="space-y-4">
                <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Traveler Information</h3>
                <div class="space-y-2">
                    <p><span class="font-medium">Name:</span> {{ $record->first_name }} {{ $record->last_name }}</p>
                    <p><span class="font-medium">Email:</span> <a href="mailto:{{ $record->email }}" class="text-primary-600 hover:underline">{{ $record->email }}</a></p>
                    <p><span class="font-medium">Phone:</span> <a href="tel:{{ $record->phone }}" class="text-primary-600 hover:underline">{{ $record->phone }}</a></p>
                    <p><span class="font-medium">Country:</span> {{ $record->country }}</p>
                </div>
            </div>

            <!-- Trip Details -->
            <div class="space-y-4">
                <h3 class="text-lg font-medium text-gray-900 border-b pb-2">Trip Details</h3>
                <div class="space-y-2">
                    <p><span class="font-medium">Destination:</span> {{ $record->destination }}</p>
                    <p><span class="font-medium">Budget:</span>{{ $record->budget }}</p>
                    <p><span class="font-medium">Travel Date Option:</span> {{ $record->travel_date_option }}</p>
                    
                    <p><span class="font-medium">Traveling With:</span> {{ ucfirst($record->traveling_with) }}</p>
                    <p><span class="font-medium">Trip Duration:</span> {{ $record->selected_duration }}</p>
                    
                    @if($record->travel_date_option === 'flexible')
                        <p><span class="font-medium">Preferred Dates:</span> 
                            {{ $record->selected_month ? now()->setMonth($record->selected_month)->format('F') : 'N/A' }}
                            {{ $record->selected_day ? $record->selected_day : '' }}
                        </p>
                    @else
                        <p><span class="font-medium">Arrival Date:</span> {{ $record->arrival_date?->format('F j, Y') ?? 'N/A' }}</p>
                        <p><span class="font-medium">Departure Date:</span> {{ $record->departure_date?->format('F j, Y') ?? 'N/A' }}</p>
                    @endif
                    <p><span class="font-medium">selected month:</span> {{ $record->selected_month??'N/A' }}</p>
                    <p><span class="font-medium">selected day:</span> {{ $record->selected_day??'N/A' }}</p>
                </div>

            </div>
            <p><span class="font-medium">Travel Preferences:
                </span>{{ $record->safari_preferences??'N/A' }}</p>
        </div>

        <!-- Footer -->
        <div class="pt-6 border-t mt-6 text-sm text-gray-500">
            <p>Thank you for choosing our service. If you have any questions, please contact our support team.</p>
        </div>
    </div>
</x-filament-panels::page>
