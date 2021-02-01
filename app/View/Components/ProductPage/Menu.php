<?php

namespace App\View\Components\ProductPage;

use Illuminate\View\Component;
use App\Models\Program;

class Menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $program;

    public function __construct(Program $program)
    {
        $this->program = $program;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-page.menu');
    }
}
