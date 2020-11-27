<?php

namespace App\Http\Livewire;

use App\Mail\Contact as MailContact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $surname;
    public $email;
    public $text;

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'text' => 'required|max:500',
        ]);

        Mail::to('davidtorralboperez@gmail.com')->send(new MailContact($this->name, $this->surname, $this->email, $this->text));

        session()->flash('title', 'Mail sent correctly!');
        session()->flash('description', "I will reply you as soon as possible 😊.");

        return redirect()->to(route('contact'));
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
