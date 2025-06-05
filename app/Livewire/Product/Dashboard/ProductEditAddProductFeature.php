<?php

namespace App\Livewire\Product\Dashboard;

use Livewire\Component;
use Illuminate\View\View;
use App\Models\ProductFeature;

class ProductEditAddProductFeature extends Component
{
    public $product;

    public $feature;
    public $product_feature_heading_id;

    public $productFeatureHeadings;

    public function render(): View
    {
        $this->productFeatureHeadings = $this->product->productFeatureHeadings;

        return view('livewire.product.dashboard.product-edit-add-product-feature');
    }

    public function store(): void
    {
        $validatedData= $this->validate([
             'feature' => 'required|string',
             'product_feature_heading_id' => 'nullable',
        ]);

        $productFeature = new ProductFeature;

        $productFeature->product_id = $this->product->product_id;

        $productFeature->position = $this->product->getLastSpecPosition() + 1;
        $productFeature->feature = $validatedData['feature'];

        if ($validatedData['product_feature_heading_id'] != '---') {
            $productFeature->product_feature_heading_id = $validatedData['product_feature_heading_id'];
        }

        $productFeature->save();

        $this->dispatch('productEditAddProductFeatureModeCompleted');
    }
}
