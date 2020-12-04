<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppAlert extends Component
{
    public ?string $message;

    /**
     * Create a new component instance.
     *
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app.alert');
    }
}
