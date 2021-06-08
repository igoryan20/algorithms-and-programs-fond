<?php

namespace App\View\Components\HomePage;

use Illuminate\View\Component;

class ProgramsList extends Component
{

    public $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home-page.programs-list');
    }
}
