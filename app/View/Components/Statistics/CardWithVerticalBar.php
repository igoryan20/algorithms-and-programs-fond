<?php

namespace App\View\Components\Statistics;

use Illuminate\View\Component;

class CardWithVerticalBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $chart;

    public function __construct($chart)
    {
        $this->chart = $chart;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.statistics.card-with-vertical-bar');
    }
}
