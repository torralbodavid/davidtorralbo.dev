<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Wink\WinkPost;

class Post extends Component
{
    public $post;

    public function mount($slug)
    {
        $post = WinkPost::where('slug', $slug)->where('published', true)
            ->where('publish_date', '<=', now())->first();

        if($post === null) {
            abort(404);
        }

        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post')
            ->extends('layouts.app')
            ->section('content');
    }
}
