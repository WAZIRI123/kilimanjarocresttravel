<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormNotification;
use App\Mail\ContactConfirmation;
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
            'message' => 'required|string|max:5000',
        ]);

        try {
            
            // Create contact record
            $contact = Contact::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'message' => $validated['message'],
            ]);

            // Send notification to admin
            try {
                $adminEmail = config('mail.admin_email', 'info@grandezzazanzibar.co.tz');
                Mail::to($adminEmail)->send(new ContactFormNotification($contact));
            } catch (\Exception $e) {
                Log::error('Failed to send admin notification email: ' . $e->getMessage());
            }

            return redirect()->back()->with('success', 'Thank you for your Enquiry! We will get back to you soon.');

        } catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'An error occurred while submitting your message. Please try again.');
        }
    }
}
