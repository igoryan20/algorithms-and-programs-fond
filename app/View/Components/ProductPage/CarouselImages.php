<?php

namespace App\View\Components\ProductPage;

use Illuminate\View\Component;

class CarouselImages extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $categories;
    private $program;

    public function __construct($categories, $program)
    {
        $this->categories = $categories;
        $this->program = $program;
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
