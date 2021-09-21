<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Redis;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', ['stats' => json_decode(Redis::get('github:stats'))])
            ->extends('layouts.app')
            ->section('content');
    }
}
