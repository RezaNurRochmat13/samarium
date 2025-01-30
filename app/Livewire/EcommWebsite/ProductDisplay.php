<?php

namespace App\Livewire\EcommWebsite;

use Livewire\Component;
use App\Traits\ModesTrait;
use App\Product;

class ProductDisplay extends Component
{
    use ModesTrait;

    public $product;

    public $modes = [
        'createProductReviewMode' => false,

        'createProductQuestionMode' => false,
    ];

    protected $listeners = [
        'createProductReviewCompleted',
        'createProductReviewCancelled',

        'createProductQuestionCompleted',
        'createProductQuestionCancelled',
    ];

    public function render()
    {
        return view('livewire.ecomm-website.product-display');
    }

    public function addItemToCart($productId)
    {
        $product = Product::findOrFail($productId);

        if (! session('cart')) {
            session(['cart' => true,]);
            $cartItems = array();
            $cartItems['' . $product->product_id] = 1;
            session(['cartItems' => $cartItems,]);
        } else {
            $cartItems = session('cartItems');
            if (array_key_exists('' . $product->product_id, $cartItems)) {
                $cartItems['' . $product->product_id] += 1;
            } else {
                $cartItems['' . $product->product_id] = 1;
            }
            session(['cartItems' => $cartItems,]);
        }

        $this->dispatch('itemAddedToCart');
    }

    public function createProductReviewCancelled()
    {
        $this->exitMode('createProductReviewMode');
    }

    public function createProductReviewCompleted()
    {
        $this->exitMode('createProductReviewMode');
    }

    public function createProductQuestionCancelled()
    {
        $this->exitMode('createProductQuestionMode');
    }

    public function createProductQuestionCompleted()
    {
        $this->exitMode('createProductQuestionMode');
    }
}
