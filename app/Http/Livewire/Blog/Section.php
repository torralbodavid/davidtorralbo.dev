<?php

namespace App\Http\Livewire\Blog;

use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Wink\WinkPost;

class Section extends Component
{
    private LengthAwarePaginator $posts;

    public function mount($posts)
    {
        $this->posts = $posts;
    }

    public function render()
    {
        return view('livewire.blog.section', [
            'posts' => $this->posts,
        ]);
    }
}
