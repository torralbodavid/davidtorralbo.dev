<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    private $name;

    private $surname;

    private $email;

    private $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $surname, string $email, string $text)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("📬 {$this->name} {$this->surname} is contacting through davidtorralbo.dev")->markdown('emails.contact', [
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'text' => $this->text,
        ]);
    }
}
