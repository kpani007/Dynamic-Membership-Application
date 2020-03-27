<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateConfirmationEmail extends Mailable
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
        return $this->markdown('emails.update_confirmation_email');
    }
}
