<?php

namespace App\View\Components\HomePage;

use Illuminate\View\Component;

class CardWithSelect extends Component
{

    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home-page.card-with-select');
    }
}
