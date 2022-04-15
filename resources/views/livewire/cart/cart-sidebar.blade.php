<div>


    <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
        <div class="mt-8">
            <div class="flow-root">
                <ul role="list" class="-my-6 divide-y divide-gray-200">

                    @forelse ($cart as $item)
                        <li class="flex py-6">
                            <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                <img src="{{ $item->getImage() }}" alt=""
                                    class="h-full w-full object-cover object-center">
                            </div>

                            <div class="ml-4 flex flex-1 flex-col">
                                <div>
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                        <h3>
                                            <a href="#"> {{ $item->getName() }} </a>
                                        </h3>
                                        <p class="ml-4">{{ $item->getFormattedPrice() }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-1 items-end justify-between text-sm">
                                    <p class="text-gray-500">Qty {{ $item->getQuantity() }}</p>

                                    <div class="flex">
                                        <button wire:click.prevent='remove({{ $item->getId() }})' type="button"
                                            class="font-medium text-red-600 hover:text-red-500">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li>
                            <p>Your cart is empty.</p>
                        </li>
                    @endforelse


                </ul>
            </div>
        </div>
    </div>

    @if (cart()->total() > 0)
        <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
            <div class="flex justify-between text-base font-medium text-gray-900">
                <p>Subtotal</p>
                <p> {{ formatMoney(cart()->total()) }}</p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
            <div class="mt-6">
                <a href="{{ route('checkout') }}" class="btn-primary">Checkout</a>
            </div>
        </div>
    @endif

</div>
