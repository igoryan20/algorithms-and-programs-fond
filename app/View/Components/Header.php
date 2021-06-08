<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $categories;
    public $users;
    public $username;

    public function __construct($categories, $users, $username)
    {
        $this->categories = $categories;
        $this->users = $users;
        $this->username = $username;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
