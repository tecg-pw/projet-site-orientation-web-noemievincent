<?php

namespace App\Listeners;

use App\Events\PendingOfferCreated;
use Illuminate\Support\Facades\Mail;

class NotifyCompanyThatTheirOfferHasBeenSent
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
     * @param  \App\Events\PendingOfferCreated  $event
     * @return void
     */
    public function handle(PendingOfferCreated $event)
    {
        Mail::to($event->offer->contact_email)
            ->queue(new \App\Mail\PendingOfferCreated($event->offer));
    }
}
