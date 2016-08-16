<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Plivo\{PlivoChannel, PlivoMessage};

class InvoicePaid extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [PlivoChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return PlivoMessage
     */
    public function toPlivo($notifiable)
    {
        return (new PlivoMessage)
                    ->content('This is a test SMS via Plivo using Laravel Notifications!');
                    // ->from('61419652900'); To override default from number
        // You can override the default from number by chaining the from() method like below
    }
}
