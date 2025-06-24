<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminBookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $formattedTravelDates;
    
    /**
     * Create a new message instance.
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
        $this->formattedTravelDates = $this->formatTravelDates($booking);
    }
    
    /**
     * Format travel dates for display in email
     */
    protected function formatTravelDates($booking)
    {
        if ($booking->travel_date_option === 'I have specific dates' && $booking->arrival_date && $booking->departure_date) {
            return 'From ' . \Carbon\Carbon::parse($booking->arrival_date)->format('F j, Y') . 
                   ' to ' . \Carbon\Carbon::parse($booking->departure_date)->format('F j, Y');
        } elseif ($booking->travel_date_option === 'I am flexible' && $booking->selected_duration) {
            return 'Flexible dates - ' . $booking->selected_duration;
        } elseif (is_numeric($booking->travel_date_option) && $booking->selected_month) {
            $date = $booking->selected_month . ' ' . $booking->travel_date_option;
            if ($booking->selected_day) {
                $date .= ', ' . $booking->selected_day;
            }
            return $date;
        }
        return 'Not specified';
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Admin Booking Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.admin.booking-notification',
            with: [
                'booking' => $this->booking,
                'formattedTravelDates' => $this->formattedTravelDates,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
