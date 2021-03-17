<?php

namespace App\View\Components\Statistics;

use Illuminate\View\Component;

class CardWithTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $productsCount;
    public $usersCount;
    public $releasesCount;

    public function __construct($productsCount, $usersCount, $releasesCount)
    {
        $this->productsCount = $productsCount;
        $this->usersCount = $usersCount;
        $this->releasesCount = $releasesCount;
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.statistics.card-with-table');
    }
}
