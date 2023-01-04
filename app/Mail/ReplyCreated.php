<?php

namespace App\Mail;

use App\Models\Question;
use App\Models\Reply;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReplyCreated extends Mailable
{
    use Queueable, SerializesModels;

    public Reply $reply;
    public Question $question;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reply $reply, Question $question)
    {
        $this->reply = $reply;
        $this->question = $question;
    }

    /**
     * Get the message envelope.
     *
     * @return Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: __('emails.forum.reply_created.subject'),
        );
    }

    /**
     * Get the message content definition.
     *
     * @return Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.forum.reply-created',
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
