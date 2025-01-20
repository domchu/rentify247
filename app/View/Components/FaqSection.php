<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FaqSection extends Component
{
   
    public $faqs;

     /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($faqs)
    {
        $this->faqs = $faqs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.faq-section');
    }
}
