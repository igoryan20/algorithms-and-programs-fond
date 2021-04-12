<?php

namespace App\View\Components\ProductPage;

use Illuminate\View\Component;
use App\Models\Product;

class Menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $product;
    public $isDesired;
    public $isReleasePublished;

    public function __construct(Product $product, $isDesired, $isReleasePublished)
    {
        $this->product = $product;
        $this->isDesired = $isDesired;
        $this->isReleasePublished = $isReleasePublished;
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
