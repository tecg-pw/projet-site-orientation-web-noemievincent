<?php

namespace App\Providers;

use App\Events\QuestionCreated;
use App\Events\ReplyCreated;
use App\Listeners\NotifyUserAReplyHasBeenPostedToTheirQuestion;
use App\Listeners\NotifyUserTheyPostedAQuestion;
use App\Models\Question;
use App\Observers\ResolvedQuestionObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ReplyCreated::class => [
            NotifyUserAReplyHasBeenPostedToTheirQuestion::class
        ],
        QuestionCreated::class => [
            NotifyUserTheyPostedAQuestion::class
        ],
    ];

    /**
     * The model observers for your application.
     *
     * @var array
     */
    protected $observers = [
        Question::class => [ResolvedQuestionObserver::class],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
