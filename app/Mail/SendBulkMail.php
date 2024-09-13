<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendBulkMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $msg;
    protected $sbj;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sbj,$msg)
    {
        $this->msg = $msg;
        $this->sbj = $sbj;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: strtoupper(trim($this->sbj)),
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
            markdown: 'admin.email.mail',
            with: [
                'msg' => $this->msg,
                'sbj' => $this->sbj,
            ],
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
