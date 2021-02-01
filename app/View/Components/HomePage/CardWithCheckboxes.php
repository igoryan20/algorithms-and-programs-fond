<?php

namespace App\View\Components\HomePage;

use Illuminate\View\Component;

class CardWithCheckboxes extends Component
{

    public $title;
    public $checkboxes;
    public $entity;

    public function __construct($title, $checkboxes, $entity)
    {
        $this->title = $title;
        $this->checkboxes = $checkboxes;
        $this->entity = $entity;
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
