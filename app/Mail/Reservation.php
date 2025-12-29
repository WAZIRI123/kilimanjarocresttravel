<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Reservation extends Mailable
{
    use Queueable, SerializesModels;

 public $email;
 public $package;
 public $name;
 public $start_date;
 public $people;
 public $price;
 public $for_zanzibar;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$package,$name,$start_date,$people="",$price="", $for_zanzibar='')
    {
        $this->email = $email;
        $this->name = $name;
        $this->package = $package;
        $this->start_date = $start_date;
        $this->people = $people;
        $this->price = $price;
        $this->for_zanzibar = $for_zanzibar;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.reservation');
    }
}
