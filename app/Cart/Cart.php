<?php

namespace App\Cart;

use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Cart
{
    /**
     * Shopping cart content.
     * content will be stored in following form
     * [
     *   "productId"  => ["quantity" => 4],
     *   "productId2" => ["quantity" => 1],
     *   ...
     * ]
     */
    private Collection $content;

    /**
     * added coupons
     * 
     */
    private Collection $coupons;


    public function __construct()
    {
        $this->content = new Collection();
        $this->coupons = new Collection();
    }

    public function key(): string
    {
        return 'cart-' . Auth::user() ?? Request::ip();
    }


    public function content(): Collection
    {
        return $this->content = session($this->key(), collect());
    }

    public function add(int $productId, int $quantity = 1): void
    {
        $currentQuantity = 0;

        if ($this->content()->keys()->contains($productId)) {
            $currentQuantity = $this->content->get($productId)['quantity'];
        }

        $this->setQuantity($currentQuantity + $quantity, $productId);

        $this->storeContentInSession();
    }

    public function setQuantity(int $quantity, int $productId): void
    {
        $this->content()->put($productId, [
            'quantity' => $quantity
        ]);

        $this->storeContentInSession();
    }


    public function remove($productId): void
    {
        $this->content()->forget($productId);
        $this->storeContentInSession();
    }


    public function count(): int
    {
        return $this->content()->sum('quantity');
    }


    public function products(): Collection
    {
        return Product::find($this->content()->keys())
            ->map(fn (Product $product) => new CartItem(
                id: $product->id,
                name: $product->name,
                price: $product->getRawOriginal('price'),
                quantity: $this->content()->get($product->id)['quantity'] ?? 0,
                image: $product->image,
            ));
    }

    public function total(): int
    {
        return $this->products()->sum(fn (CartItem $item) => $item->getTotal());
    }

    public function coupons(): Collection
    {
        return $this->getCoupons();
    }

    protected function getCoupons(): Collection
    {
        return $this->coupons = session('coupons', collect());
    }

    public function addCoupon(string $couponCode): void
    {
        $this->coupons()->put($couponCode, Coupon::firstWhere('code', $couponCode));

        session()->put('coupons', $this->coupons);
    }

    public function storeContentInSession(): void
    {
        session()->put($this->key(), $this->content);
    }
}
