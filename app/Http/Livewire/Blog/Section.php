<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Wink\WinkPost;

class Section extends Component
{
    public function render()
    {
        return view('livewire.blog.section', [
            'posts' => WinkPost::all(),
        ]);
    }
}
