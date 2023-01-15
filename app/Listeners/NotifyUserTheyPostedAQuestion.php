<?php

namespace App\Listeners;

use App\Events\QuestionCreated;
use Illuminate\Support\Facades\Mail;

class NotifyUserTheyPostedAQuestion
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
     * @param  \App\Events\QuestionCreated  $event
     * @return void
     */
    public function handle(QuestionCreated $event)
    {
        Mail::to($event->question->user->email)
            ->queue(new \App\Mail\QuestionCreated($event->question));
    }
}
