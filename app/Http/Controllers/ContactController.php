<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormNotification;
use App\Mail\ContactConfirmation;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        try {
            // Get client IP address
            $ipAddress = $request->ip();
            
            // Create contact record
            $contact = Contact::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'subject' => $validated['subject'],
                'message' => $validated['message'],
                'ip_address' => $ipAddress,
                'status' => 'new',
            ]);

            // Send notification to admin
            try {
                $adminEmail = config('mail.admin_email', 'info@stansafaris.com');
                Mail::to($adminEmail)->send(new ContactFormNotification($contact));
            } catch (\Exception $e) {
                Log::error('Failed to send admin notification email: ' . $e->getMessage());
            }

            return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');

        } catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'An error occurred while submitting your message. Please try again.');
        }
    }
}
