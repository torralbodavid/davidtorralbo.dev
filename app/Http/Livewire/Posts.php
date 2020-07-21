<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Wink\WinkPost;

class Posts extends Component
{
    public function render()
    {
        return view('livewire.posts', [
            'posts' => WinkPost::with('tags')->paginate(9),
        ]);
    }
}
