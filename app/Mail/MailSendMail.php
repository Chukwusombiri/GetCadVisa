<?php

namespace App\Mail;

use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailSendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    public $sbj;
    public $path;
    public $attachee_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg,$sjt,$path=null,$attachee_name=null)
    {
        $this->msg = $msg;
        $this->sbj = $sjt;
        if($path!=null){
            $this->path = $path;
            $this->attachee_name = $attachee_name;
        }
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->sbj,
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
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        if($this->path!=null){
            return [
                Attachment::fromStorage($this->path)->as($this->attachee_name),
            ];
        }   
    }

    public function build()
    {
        return $this->subject($this->sbj)->
        replyTo(config('mail.reply_to.address'))->from(config('mail.from.address'))
        ->markdown('admin.email.mail',[
            'msg'=>$this->msg,
            'sbj'=>$this->sbj,
        ]);
    }
}
