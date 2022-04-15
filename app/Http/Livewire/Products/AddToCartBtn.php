<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class AddToCartBtn extends Component
{
    public int $productId;

    public function mount(int $productId)
    {
        $this->productId = $productId;
    }

    public function render()
    {
        return view('livewire.products.add-to-cart-btn');
    }

    public function add(): void
    {
        cart()->add($this->productId);

        $this->emit('productAdded');
        $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => '🔥 Product was added to cart!']);
    }
}
