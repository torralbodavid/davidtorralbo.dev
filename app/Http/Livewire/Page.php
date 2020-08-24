<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Wink\WinkPage;

class Page extends Component
{
    public $page;

    public function mount($slug)
    {
        $page = WinkPage::where('slug', $slug)->first();

        if($page === null) {
            abort(404);
        }

        $this->page = $page;
    }
}
