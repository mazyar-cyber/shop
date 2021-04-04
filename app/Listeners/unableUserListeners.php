<?php

namespace App\Listeners;

use App\Events\doingPayment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class unableUserListeners
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
     * @param doingPayment $event
     * @return void
     */
    public function handle(doingPayment $event)
    {
        $user = $event->getUser();
        $user->status = '0';
        $user->save();
    }
}
