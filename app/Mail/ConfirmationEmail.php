<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $institution;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($institution)
    {
        $this->institution = $institution;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $confirmation_subject = 'Thank you for submitting your application to join the AAU';
        return $this->subject($confirmation_subject)->markdown('emails.confirmation_email');
    }
}
