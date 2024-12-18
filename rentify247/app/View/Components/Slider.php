<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Slider extends Component
{
    public $slideArray;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slideArray)
    {
        //
        $this->slideArray = $slideArray;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slider');
    }
}
