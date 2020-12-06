<?php

namespace App\Http\Livewire;

use App\Models\Stats;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', ['stats' => Stats::where('username', 'torralbodavid')->first()])
            ->extends('layouts.app')
            ->section('content');
    }
}
