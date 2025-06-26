<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission - {{ config('app.name') }}</title>
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
        .alert-badge {
            background: #e74c3c;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 15px;
        }
        .message-box {
            background: #f8f9fa;
            border-left: 4px solid #1a5276;
            padding: 15px;
            margin: 20px 0;
            font-size: 16px;
        }
        .contact-card {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
        }
        .contact-name {
            color: #1a5276;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .action-buttons {
            margin: 25px 0;
            text-align: center;
        }
        .action-button {
            display: inline-block;
            background: #1a5276;
            color: #ffffff !important;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 4px;
            margin: 0 10px 10px 0;
            font-weight: bold;
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
            <div class="alert-badge">NEW MESSAGE</div>
            <h1>New Contact Form Submission</h1>
            
            <p>You have received a new contact form submission from the website. Please find the details below:</p>
            
            <div class="message-box">
                <div class="contact-card">
                    <div class="contact-name">Contact Information</div>
                    <div><strong>Name:</strong> {{ $contact->name }}</div>
                    <div><strong>Email:</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></div>
                    <div><strong>Phone:</strong> {{ $contact->phone ?? 'Not provided' }}</div>
                    <div><strong>IP Address:</strong> {{ $contact->ip_address }}</div>
                    <div><strong>Submitted On:</strong> {{ $contact->created_at->format('F j, Y \a\t g:i a') }}</div>
                </div>
                
                <div class="contact-card">
                    <div class="contact-name">Message Details</div>
                    <div><strong>Subject:</strong> {{ $contact->subject }}</div>
                    <div><strong>Message:</strong></div>
                    <div style="white-space: pre-line; margin-top: 10px;">{{ $contact->message }}</div>
                </div>
            </div>
            
            <div class="action-buttons">
                @if(isset($adminUrl) && $adminUrl)
                <a href="{{ $adminUrl }}" class="action-button">View in Admin Dashboard</a>
                @endif
                <a href="mailto:{{ $contact->email }}" class="action-button">Reply to {{ $contact->name }}</a>
            </div>
            
            <div class="divider"></div>
            
            <p><strong>Note:</strong> This is an automated notification. Please respond to the sender directly using the email address provided above.</p>
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
