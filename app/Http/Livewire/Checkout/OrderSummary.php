<?php

namespace App\Http\Livewire\Checkout;

use Livewire\Component;

class OrderSummary extends Component
{
    protected $listeners = [
        'productAdded' => 'render',
        'productRemoved' => 'render',
    ];

    public function render()
    {
        return view('livewire.checkout.order-summary', [
            'cart' => cart()->products(),
            'total' => cart()->total(),
        ]);
    }
}
