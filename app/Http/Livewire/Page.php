<?php

namespace App\Http\Livewire;

use GNAHotelSolutions\ImageCacher\Cacher;
use GNAHotelSolutions\ImageCacher\Image;
use Livewire\Component;
use Wink\WinkPage;

class Page extends Component
{
    public $page;

    public function mount($slug)
    {
        $image = new Image('david-torralbo-hero-section.jpg', 'img');

        $resized = (new Cacher())->resize($image, 1920, 1080); // Get a smaller version of the image or the same if the size is smaller.
        dd($resized);
        $page = WinkPage::where('slug', $slug)->first();

        if($page === null) {
            abort(404);
        }

        $this->page = $page;
    }
}
