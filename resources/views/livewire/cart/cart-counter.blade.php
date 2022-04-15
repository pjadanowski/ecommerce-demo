<div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
    <button type="button"
        class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <button @click="isCartOpen = !isCartOpen" class="flex items-end text-gray-600 focus:outline-none mx-4 sm:mx-0">
            <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                x-description="Heroicon name: outline/shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">{{ cart()->count() }}</span>
            <span class="sr-only">items in cart, view bag</span>
        </button>
    </button>
</div>
