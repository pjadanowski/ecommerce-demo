<div :class="isCartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'"
    class="fixed right-0 top-0 h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300 z-40 hidden"
    x-init="() => { $el.classList.remove('hidden'); }">

    <div class="flex items-center justify-between">
        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
        <button @click="isCartOpen = !isCartOpen" class="text-gray-600 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" stroke="currentColor">
                <path d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <hr class="my-3">


   <livewire:cart.cart-sidebar />

   
</div>
