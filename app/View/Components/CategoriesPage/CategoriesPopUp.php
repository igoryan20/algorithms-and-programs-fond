<?php

namespace App\View\Components\CategoriesPage;

use Illuminate\View\Component;

class CategoriesPopUp extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.categories-page.categories-pop-up');
    }
}
