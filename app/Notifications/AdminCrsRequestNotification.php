<?php

namespace App\Notifications;

use App\Models\CrsCalculator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminCrsRequestNotification extends Notification
{
    use Queueable;

    protected CrsCalculator $crs;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($crs)
    {
        $this->crs = $crs;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $action = $this->crs->first_name.' '.$this->crs->first_name.' used crs calculator';
        return [
            'action' => $action,
            'summary' => 'crs calculation request.',
        ];
    }
}
