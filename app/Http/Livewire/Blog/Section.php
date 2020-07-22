<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Wink\WinkPost;

class Section extends Component
{
    public $items;

    public function mount($items = 9)
    {
        $this->items = $items;
    }

    public function render()
    {
        return view('livewire.blog.section', [
            'posts' => WinkPost::with('tags')->paginate($this->items),
        ]);
    }
}
