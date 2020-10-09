<?php

namespace App\View\Components\HomePage;

use Illuminate\View\Component;

class ProgramsList extends Component
{

    public $programsData;

    public function __construct($data)
    {
        $this->programsData = $data;
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
