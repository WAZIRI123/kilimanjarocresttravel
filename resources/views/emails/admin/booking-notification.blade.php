<x-mail::message>
# New Safari Booking Received

A new safari booking has been submitted through the website. Here are the details:

## Trip Details
- **Destination:** {{ $booking->destination }}
- **Budget:** {{ $booking->budget }}
- **Travel Dates:** {{ $formattedTravelDates }}
- **Traveling With:** {{ $booking->traveling_with }}

## Contact Information
- **Name:** {{ $booking->first_name }} {{ $booking->last_name }}
- **Email:** {{ $booking->email }}
- **Phone:** {{ $booking->phone }}
- **Country:** {{ $booking->country }}

## Safari Preferences
{{ $booking->safari_preferences ?? 'No specific preferences provided.' }}

## Additional Information
- **Newsletter Subscription:** {{ $booking->subscribe_to_newsletter ? 'Subscribed' : 'Not Subscribed' }}
- **Submitted At:** {{ $booking->created_at->format('F j, Y \a\t g:i A') }}

---

You can view all bookings in the database or set up an admin dashboard to manage them.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
