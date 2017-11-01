<?php

namespace App\Listeners;

use App\Events\Invitation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvitationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Invitation  $event
     * @return void
     */
    public function handle(Invitation $event)
    {
        return $user->id;
    }
}
