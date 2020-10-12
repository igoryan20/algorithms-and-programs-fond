<?php

namespace App\View\Components\HomePage;

use Illuminate\View\Component;

class CardWithCheckboxes extends Component
{

    public $title;
    public $checkboxes;

    public function __construct($title, $checkboxes)
    {
        $this->title = $title;
        $this->checkboxes = $checkboxes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home-page.card-with-checkboxes');
    }
}
