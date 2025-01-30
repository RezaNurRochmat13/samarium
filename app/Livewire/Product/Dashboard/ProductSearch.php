<?php

namespace App\Livewire\Product\Dashboard;

use Livewire\Component;
use App\Product;

class ProductSearch extends Component
{
    public $product_search_name;

    public $products;
    public $searchDone = false;

    public function render()
    {
        return view('livewire.product.dashboard.product-search');
    }

    public function search()
    {
        $validatedData = $this->validate([
            'product_search_name' => 'required',
        ]);

        $products = Product::where('name', 'like', '%'.$validatedData['product_search_name'].'%')->get();

        $this->products = $products;
        $this->searchDone = true;
    }
}
