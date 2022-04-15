 <div class="mt-10 lg:mt-0">
     <h2 class="text-xl font-medium text-gray-900">Order summary</h2>

     <div class="mt-4 bg-white border border-gray-200 rounded-lg shadow-sm">
         <h3 class="sr-only">Items in your cart</h3>
         <ul role="list" class="divide-y divide-gray-200">

             @forelse (cart()->content()->keys() as $itemId => $qty)
                 <livewire:checkout.order-summary-item :itemId="$itemId" :key="$itemId" />
             @empty
                 <li class="flex py-6 px-4 sm:px-6">
                     <p>Your cart is empty.</p>
                 </li>
             @endforelse
         </ul>
         <dl class="border-t border-gray-200 py-6 px-4 space-y-6 sm:px-6">
             <div class="flex items-center justify-between">
                 <dt class="text-sm">
                     Subtotal
                 </dt>
                 <dd class="text-sm font-medium text-gray-900">
                     {{ formatMoney($total) }}
                 </dd>
             </div>
             <div class="flex items-center justify-between">
                 <dt class="text-sm">
                     Shipping
                 </dt>
                 <dd class="text-sm font-medium text-gray-900">
                     {{-- for this purpose it is hardcoded to 5$. You can implement ShippingService to calculate correct amount based on some conditions --}}
                     {{ formatMoney($shipping = 500) }}
                 </dd>
             </div>
             <div class="flex items-center justify-between">
                 <dt class="text-sm">
                     Taxes
                 </dt>
                 <dd class="text-sm font-medium text-gray-900">
                     {{ formatMoney($total * config('store_settings.tax')) }}
                 </dd>
             </div>
             <div class="flex items-center justify-between border-t border-gray-200 bold pt-6">
                 <dt class="text-base font-medium">
                     Total
                 </dt>
                 <dd class="text-base font-medium text-gray-900">
                     {{ formatMoney($total + $shipping) }}
                 </dd>
             </div>
         </dl>

         <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
             <button type="submit" class="btn-primary w-full" {{ $total === 0 ? 'disabled' : ''}}>Confirm order</button>
         </div>
     </div>
 </div>
