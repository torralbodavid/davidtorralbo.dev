<?php

namespace App\Http\Livewire;

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

        Mail::to('davidtorralboperez@gmail.com')->send(new \App\Mail\Contact($this->name, $this->surname, $this->email, $this->text));

        session()->flash('title', 'Mensaje enviado correctamente');
        session()->flash('description', "Le contestaré tan pronto como sea posible 😊.");

        return redirect()->to(route('contact'));
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
