<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HomePage extends Component
{

    public $programsData;

    public function __construct($programsData)
    {
        $this->programsData = $programsData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home-page');
    }
}
