<?php

namespace App\View\Components\Header;

use Illuminate\View\Component;

class HeaderItems extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categories;
    public $users;
    public function __construct($categories, $users)
    {
        $this->categories = $categories;
        $this->users = $users;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header.header-items');
    }
}
