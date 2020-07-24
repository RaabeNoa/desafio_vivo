<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GenericEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->from('mail@example.com', 'Mailtrap')
            ->subject('Obrigado por se candidatar')
            ->view('emails.genericEmail');
    }
}
