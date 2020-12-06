<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Wink\WinkPost;
use Wink\WinkTag;

class Posts extends Component
{
    public $items;
    public $pagination;
    public $tag;

    public function mount($items = 9, $pagination = true, $tag = null)
    {
        $this->items = $items;
        $this->pagination = $pagination;
        $this->tag = $tag;
    }

    public function render()
    {
        $posts = WinkPost::with('tags')->where('published', true)
            ->orderByDesc('created_at')
            ->paginate($this->items);

        if($this->tag !== null) {
            $posts = WinkTag::with('posts.tags')->where('slug', $this->tag)->first()->posts;
            $posts = $posts->paginate($posts->count());
        }

        return view('livewire.posts', [
            'posts' => $posts,
            'items' => $this->items,
            'pagination' => $this->pagination,
            'page_tag' => WinkTag::where('slug', $this->tag)->first()
        ])
            ->extends('layouts.app')
            ->section('content');
    }

}
