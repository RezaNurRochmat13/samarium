<?php

namespace App\Livewire\Product\Dashboard;

use Livewire\Component;
use Illuminate\View\View;

class ProductEditDescription extends Component
{
    public $product;

    public $description;

    public function mount(): void
    {
        $this->description = $this->product->description;
    }

    public function render(): View
    {
        return view('livewire.product.dashboard.product-edit-description');
    }

    public function update(): void
    {
        $validatedData = $this->validate([
            'description' => 'required',
        ]);

        $this->product->description = $validatedData['description'];
        $this->product->save();
        $this->dispatch('productUpdateDescriptionCompleted');
    }
}
