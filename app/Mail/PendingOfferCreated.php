<?php

namespace App\Mail;

use App\Models\PendingOffer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PendingOfferCreated extends Mailable
{
    use Queueable, SerializesModels;

    public PendingOffer $offer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(PendingOffer $offer)
    {
        $this->offer = $offer;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: __('emails.pending_offer_created.subject'),
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.pending-offer.created',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
