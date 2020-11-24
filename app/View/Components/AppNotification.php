<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppNotification extends Component
{
    public ?string $title;
    public ?string $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app.notification');
    }
}
