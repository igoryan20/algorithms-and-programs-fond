<?php

namespace App\View\Components\ProductPage;

use Illuminate\View\Component;
use App\Models\Product;

class CreateRelease extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $program;
    public function __construct(Product $program)
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
        return view('components.product-page.create-release');
    }
}
