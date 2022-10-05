<?php

namespace App\Mail;

use App\Models\SettingEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NilysMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = SettingEmail::latest()->first()->suject;
        return $this->from('belfrid1@gmail.com')
            ->subject($subject)
            ->view('emails.nilysEmail');
    }
}
