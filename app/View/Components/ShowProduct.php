<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class ShowProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public $isproducts;
    
    public $categories;
    public function __construct($isproducts, $category)  //parameter yang dikirim dari   <x-show-product :isproducts="$isproducts" :category="$categories" />

    {
        $this->isproducts = $isproducts;
        $this->categories = $category;

        // pake ini nanti kita panggil di view (  $this->categories) mosalnya nanti  $categories->name
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show-product');
    }
}