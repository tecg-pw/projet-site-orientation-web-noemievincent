<?php

namespace App\Listeners;

use App\Events\ReplyCreated;
use Illuminate\Support\Facades\Mail;

class NotifyUserAReplyHasBeenPostedToTheirQuestion
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
     * @param ReplyCreated $event
     * @return void
     */
    public function handle(ReplyCreated $event)
    {
        Mail::to($event->question->user->email)
            ->queue(new \App\Mail\ReplyCreated($event->reply, $event->question));
    }
}
