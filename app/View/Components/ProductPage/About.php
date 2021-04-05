<?php

namespace App\View\Components\ProductPage;

use Illuminate\View\Component;
use Illuminate\Support\Collection;
use App\Models\User;


class About extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categories;
    public $product;
    public $developer;

    public function __construct($product, Collection $categories, User $developer)
    {
        $this->product = $product;
        $this->categories = $categories;
        $this->developer = $developer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-page.about');
    }
}
