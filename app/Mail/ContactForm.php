<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $bodyMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($email, $name, $bodyMessage)
    {
      $this->email = $email;
      $this->name = $name;
      $this->bodyMessage = $bodyMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send')
                    ->from($this->email, $this->name)
                    ->replyTo($this->email, $this->name)
                    ->subject('Consulta desde cristianfaune.cl');
    }
}
