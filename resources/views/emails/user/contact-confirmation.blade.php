<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us - {{ config('app.name') }}</title>
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
        .message-box {
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
        .contact-card {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin: 15px 0;
        }
        .contact-name {
            color: #1a5276;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .divider {
            border-top: 1px solid #eeeeee;
            margin: 25px 0;
        }
        .footer {
            background: #1a5276;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }
        .footer a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 10px;
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
            <h1>Thank You for Contacting Us</h1>
            
            <p class="greeting">Hello {{ $contact->name }},</p>
            
            <p>We've received your message and our team will get back to you as soon as possible. Below are the details you submitted:</p>
            
            <div class="message-box">
                <div class="contact-card">
                    <div class="contact-name">Subject:</div>
                    <div>{{ $contact->subject }}</div>
                </div>
                
                <div class="contact-card">
                    <div class="contact-name">Your Message:</div>
                    <div>{{ $contact->message }}</div>
                </div>
                
                <div class="contact-card">
                    <div class="contact-name">Submitted On:</div>
                    <div>{{ $contact->created_at->format('F j, Y \a\t g:i a') }}</div>
                </div>
            </div>
            
            <h2>What's Next?</h2>
            <ul>
                <li>Our team typically responds within 24-48 hours</li>
                <li>For urgent inquiries, please call us at +255 123 456 789</li>
                <li>Learn More About <a href="{{ url('/about') }}">About</a></li>
            </ul>
            
            <p>If you need to add any additional information, please reply to this email.</p>
            
            <p>Thank you for choosing {{ config('app.name') }}!</p>
            
            <p>Best regards,<br>
            The {{ config('app.name') }} Team</p>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>
                <a href="{{ url('/privacy-policy') }}">Privacy Policy</a> | 
                <a href="{{ url('/terms') }}">Terms of Service</a>
            </p>
        </div>
    </div>
</body>
</html>
