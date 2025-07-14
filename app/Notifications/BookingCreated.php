<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingCreated extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $booking)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Booking Created')
            ->line('Your booking has been successfully created!')
            ->line('Booking Date: ' . $this->booking->date)
            ->when($this->booking->note, function ($message) {
                return $message->line('Note: ' . $this->booking->note);
            })
            ->action('View Dashboard', url('/dashboard'))
            ->line('Thank you for using our booking system!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'booking_id' => $this->booking->id,
            'date' => $this->booking->date,
            'note' => $this->booking->note,
            'message' => 'New booking created for ' . $this->booking->date,
        ];
    }
}
