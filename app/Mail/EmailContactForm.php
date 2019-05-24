<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $message;
    public $email;
	public $phone;
	public $country;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $message, $email, $phone, $country)
    {
        $this->name = $name;
        $this->message = $message;
        $this->email = $email;
        $this->phone = $phone;
        $this->country = $country;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.user_inscription');
    }
}
