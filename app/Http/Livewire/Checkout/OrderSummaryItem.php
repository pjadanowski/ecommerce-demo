<?php

namespace App\Http\Livewire\Checkout;

use Illuminate\View\View;
use Livewire\Component;

class OrderSummaryItem extends Component
{
    public int $itemId;
    public int $quantity;

    public function render(): View
    {
        $item = cart()->products()->get($this->itemId);
        
        if ($item) {
            $this->quantity = $item->getQuantity();
        }

        return view('livewire.checkout.order-summary-item', compact('item'));
    }

    public function updatedQuantity(int $value): void
    {
        cart()->setQuantity($value, $this->itemId);
        $this->emit('productAdded');
    }

    public function remove()
    {
        cart()->remove($this->itemId);
        $this->emit('productRemoved');
    }
}
