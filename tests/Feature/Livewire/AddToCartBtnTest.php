<?php

namespace Tests\Feature\Livewire;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Products\AddToCartBtn;

class AddToCartBtnTest extends TestCase
{

    public function testAddingProductToCart()
    {
        $product = $this->createProduct();

        Livewire::test(AddToCartBtn::class, ['productId' => $product->id])
            ->call('add')
            ->assertEmitted('productAdded');
    }
}
