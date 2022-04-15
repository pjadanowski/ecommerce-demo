<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class CartSidebar extends Component
{
    protected $listeners = [
        'productAdded' => '$refresh',
        'productRemoved' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.cart.cart-sidebar', [
            'cart' => cart()->products()
        ]);
    }

    public function remove(int $productId): void
    {
        cart()->remove($productId);
        $this->emit('productRemoved');
    }
}
