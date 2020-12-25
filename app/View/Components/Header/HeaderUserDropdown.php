<?php

namespace App\View\Components\Header;

use Illuminate\View\Component;

class HeaderUserDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $username = 45;

    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header.header-user-dropdown');
    }
}
