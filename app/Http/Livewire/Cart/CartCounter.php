<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class CartCounter extends Component
{
    public int $count = 0;

    protected $listeners = [
        'productAdded'   => '$refresh',
        'productRemoved' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.cart.cart-counter');
    }
}
