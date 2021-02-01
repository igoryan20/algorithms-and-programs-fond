<?php

namespace App\View\Components\ProductPage;

use Illuminate\View\Component;
use Illuminate\Support\Collection;
use App\Models\Product;

class CarouselImages extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $photoPaths;
    public $product;

    public function __construct(Collection $photoPaths, $product)
    {
        $this->photoPaths = $photoPaths;
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-page.carousel-images');
    }
}
