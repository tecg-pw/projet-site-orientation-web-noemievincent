<?php

namespace App\Events;

use App\Models\PendingOffer;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PendingOfferCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public PendingOffer $offer;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(PendingOffer $offer)
    {
        $this->offer = $offer;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
