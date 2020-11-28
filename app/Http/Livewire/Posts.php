<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Wink\WinkPost;

class Posts extends Component
{
    public $items;
    public $pagination;

    public function mount($items = 9, $pagination = true)
    {
        $this->items = $items;
        $this->pagination = $pagination;
    }

    public function render()
    {
        return view('livewire.posts', [
            'posts' => WinkPost::with('tags')->orderByDesc('created_at')->paginate($this->items),
            'items' => $this->items,
            'pagination' => $this->pagination
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
