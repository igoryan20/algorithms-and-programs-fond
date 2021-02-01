<?php

namespace App\View\Components\ProductPage;

use Illuminate\View\Component;
use Illuminate\Support\Collection;
use App\Models\Program;

class CarouselImages extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $photoPaths;
    public $program;

    public function __construct(Collection $photoPaths, $program)
    {
        $this->photoPaths = $photoPaths;
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
