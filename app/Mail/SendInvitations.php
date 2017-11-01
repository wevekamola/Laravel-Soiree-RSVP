<?php

namespace App\Mail;


use App\Guest;
use App\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvitations extends Mailable
{
    use Queueable, SerializesModels;

    public $event, $guest, $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Guest $guest, Event $event)
    {
        
        $this->guest = $guest;
        $this->event = $event;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('Soiree Invitation')->markdown('emails.sendinvitation')->with($token);
    }
}
