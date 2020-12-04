<?php

namespace App\Http\Livewire;

use App\Models\Stats;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome', ['stats' => Stats::where('username', 'torralbodavid')->first()])
            ->extends('layouts.app')
            ->section('content');
    }
}
