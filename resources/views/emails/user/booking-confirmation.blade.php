<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Safari Enquiry - {{ config('app.name') }}</title>
    <style>
        /* Base Styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
        }
        .header {
            background-color: #1a5276;
            padding: 20px 0;
            text-align: center;
        }
        .header img {
            max-width: 200px;
            height: auto;
        }
        .content {
            padding: 30px;
        }
        h1 {
            color: #1a5276;
            font-size: 24px;
            margin-top: 0;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .booking-ref {
            background: #f8f9fa;
            border-left: 4px solid #1a5276;
            padding: 15px;
            margin: 20px 0;
            font-size: 16px;
        }
        .cta-button {
            display: inline-block;
            background: #1a5276;
            color: #ffffff !important;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 4px;
            margin: 20px 0;
            font-weight: bold;
        }
        .office-card {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin: 15px 0;
        }
        .office-name {
            color: #1a5276;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .social-links {
            margin: 20px 0;
        }
        .social-icon {
            display: inline-block;
            margin-right: 10px;
            color: #1a5276;
            text-decoration: none;
        }
        .footer {
            background: #1a5276;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }
        .divider {
            border-top: 1px solid #eeeeee;
            margin: 25px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <img src="{{ asset('images/star-safaris.png') }}" alt="{{ config('app.name') }}">
        </div>
        
        <!-- Main Content -->
        <div class="content">
            <h1>Thank You for Your Safari Enquiry, {{ $booking->first_name }}!</h1>
            
            <p class="greeting">We have received your travel enquiry and it is currently being processed by our reservations team. Someone will be in touch with you within 24 hours (48 hours if it's the weekend) to discuss how we can help you experience the best of East Africa.</p>
            
            @if($booking->package_title)
            <div class="package-details" style="background: #f8f9fa; padding: 15px; border-left: 4px solid #1a5276; margin: 20px 0;">
                <h3 style="margin-top: 0; color: #1a5276;">Package Details</h3>
                <p style="margin: 5px 0 0 0; font-weight: 500;">{{ $booking->package_title }}</p>
            </div>
            @endif
            
            @if($booking->id)
            <div class="booking-ref">
                <strong>Your Booking Reference:</strong> #{{ $booking->id }}
            </div>
            @endif
            
            <p>If you haven't heard from us within 48 hours, please check your spam folder or email us at <a href="mailto:{{ config('mail.from.address') }}" style="color: #1a5276;">{{ config('mail.from.address') }}</a>.</p>
            
            <div class="divider"></div>
            
            <h2>While You're Waiting...</h2>
            
            <p>For some safari inspiration, check out our popular itineraries:</p>
            <a href="{{ route('all-packages') }}" class="cta-button">View Itineraries</a>
            
            <div class="divider"></div>
            
            <h3>Our Offices</h3>
            @if(config('contact.offices'))
                @foreach(config('contact.offices') as $office)
                    <div class="office-card">
                        <div class="office-name">{{ $office['name'] }}</div>
                        <div>{{ $office['address'] }}</div>
                        <div>Phone: <a href="tel:{{ $office['phone'] }}" style="color: #1a5276; text-decoration: none;">{{ $office['phone'] }}</a></div>
                        <div>Email: <a href="mailto:{{ $office['email'] }}" style="color: #1a5276; text-decoration: none;">{{ $office['email'] }}</a></div>
                    </div>
                @endforeach
            @endif
            
            @if(config('contact.social_media'))
                <div class="social-links">
                    <p>Follow us on:</p>
                    @foreach(config('contact.social_media') as $platform => $url)
                        <a href="{{ $url }}" class="social-icon" target="_blank" style="color: #1a5276; margin-right: 15px; text-decoration: none;">
                            {{ ucfirst($platform) }}
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>Warm regards from Africa,<br>
            Your {{ config('app.name') }} Team</p>
            
            <p>
                <a href="{{ config('app.url') }}" style="color: #ffffff;">{{ config('app.url') }}</a> | 
                <a href="mailto:{{ config('mail.from.address') }}" style="color: #ffffff;">{{ config('mail.from.address') }}</a>
            </p>
            
            <p style="font-size: 12px; margin-top: 20px;">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
