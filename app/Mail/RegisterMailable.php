<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subject = "Register Notification";

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datauser)
    {
        $this->data = $datauser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.register');
    }

    public function via ($notifiable) {
        return $notifiable->mail;
    }
}
