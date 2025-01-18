<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Reviews extends Component
{

    public $reviewsArray;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($reviewsArray)
    {
        $this->reviewsArray = $reviewsArray;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.reviews');
    }
}
