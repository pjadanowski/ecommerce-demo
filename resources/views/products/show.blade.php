<x-app-layout>

    <main class="mt-16 max-w-2xl mx-auto pb-16 px-4 sm:pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:auto-rows-min lg:gap-x-8">
            <div class="lg:col-start-8 lg:col-span-5">
                <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $product->name }}</h1>

                    <div class="mt-3">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl text-gray-900">{{ $product->price }}</p>
                    </div>


                    <div class="mt-6">
                        <h3 class="sr-only">Description</h3>

                        <div class="text-base text-gray-700 space-y-6">

                            <p>{{ $product->description }}</p>

                        </div>
                    </div>

                    <form class="mt-6">
                        <!-- Colors -->
                        <div>
                            <h3 class="text-sm text-gray-600">Color</h3>

                            <fieldset x-data="window.Components.radioGroup({ initialCheckedIndex: 0 })" x-init="init()" class="mt-2">
                                <legend class="sr-only">
                                    Choose a color
                                </legend>
                                <div class="flex items-center space-x-3">

                                    <label x-radio-group-option=""
                                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-700"
                                        x-description="Active and Checked: &quot;ring ring-offset-1&quot;	Not Active and Checked: &quot;ring-2&quot;"
                                        :class="{ 'ring ring-offset-1': (active === 'Washed Black') &amp;&amp; (value === 'Washed Black'), 'undefined': !(active === 'Washed Black') || !(value === 'Washed Black'), 'ring-2': !(active === 'Washed Black') &amp;&amp; (value === 'Washed Black'), 'undefined': (active === 'Washed Black') || !(value === 'Washed Black') }">
                                        <input type="radio" x-model="value" name="color-choice" value="Washed Black"
                                            class="sr-only" aria-labelledby="color-choice-0-label">
                                        <p id="color-choice-0-label" class="sr-only">
                                            Washed Black
                                        </p>
                                        <span aria-hidden="true"
                                            class="h-8 w-8 bg-gray-700 border border-black border-opacity-10 rounded-full"></span>
                                    </label>

                                    <label x-radio-group-option=""
                                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400"
                                        x-description="Active and Checked: &quot;ring ring-offset-1&quot;	Not Active and Checked: &quot;ring-2&quot;"
                                        :class="{ 'ring ring-offset-1': (active === 'White') &amp;&amp; (value === 'White'), 'undefined': !(active === 'White') || !(value === 'White'), 'ring-2': !(active === 'White') &amp;&amp; (value === 'White'), 'undefined': (active === 'White') || !(value === 'White') }">
                                        <input type="radio" x-model="value" name="color-choice" value="White"
                                            class="sr-only" aria-labelledby="color-choice-1-label">
                                        <p id="color-choice-1-label" class="sr-only">
                                            White
                                        </p>
                                        <span aria-hidden="true"
                                            class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                                    </label>

                                    <label x-radio-group-option=""
                                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-500"
                                        x-description="Active and Checked: &quot;ring ring-offset-1&quot;	Not Active and Checked: &quot;ring-2&quot;"
                                        :class="{ 'ring ring-offset-1': (active === 'Washed Gray') &amp;&amp; (value === 'Washed Gray'), 'undefined': !(active === 'Washed Gray') || !(value === 'Washed Gray'), 'ring-2': !(active === 'Washed Gray') &amp;&amp; (value === 'Washed Gray'), 'undefined': (active === 'Washed Gray') || !(value === 'Washed Gray') }">
                                        <input type="radio" x-model="value" name="color-choice" value="Washed Gray"
                                            class="sr-only" aria-labelledby="color-choice-2-label">
                                        <p id="color-choice-2-label" class="sr-only">
                                            Washed Gray
                                        </p>
                                        <span aria-hidden="true"
                                            class="h-8 w-8 bg-gray-500 border border-black border-opacity-10 rounded-full"></span>
                                    </label>

                                </div>
                            </fieldset>
                        </div>

                        <div class="mt-10 flex sm:flex-col1">
                            <livewire:products.add-to-cart-btn :productId="$product->id">

                            <button type="button"
                                class="ml-4 py-3 px-3 rounded-md flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                                <svg class="h-6 w-6 flex-shrink-0" x-description="Heroicon name: outline/heart"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                                <span class="sr-only">Add to favorites</span>
                            </button>
                        </div>
                    </form>

                    <section aria-labelledby="details-heading" class="mt-12">
                        <h2 id="details-heading" class="sr-only">Additional details</h2>

                        <div class="border-t divide-y divide-gray-200">

                            <div x-data="{ open: true }">
                                <h3>
                                    <button type="button" x-description="Expand/collapse question button"
                                        class="group relative w-full py-6 flex justify-between items-center text-left"
                                        aria-controls="disclosure-1" @click="open = !open" aria-expanded="false"
                                        x-bind:aria-expanded="open.toString()">
                                        <span class="text-gray-900 text-sm font-medium" x-state:on="Open"
                                            x-state:off="Closed" :class="{ 'text-indigo-600': open, 'text-gray-900': !(open) }">
                                            Features
                                        </span>
                                        <span class="ml-6 flex items-center">
                                            <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                                x-state:on="Open" x-state:off="Closed" :class="{ 'hidden': open, 'block': !(open) }"
                                                x-description="Heroicon name: outline/plus-sm"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <svg class="hidden h-6 w-6 text-indigo-400 group-hover:text-indigo-500"
                                                x-state:on="Open" x-state:off="Closed" :class="{ 'block': open, 'hidden': !(open) }"
                                                x-description="Heroicon name: outline/minus-sm"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M18 12H6"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <div class="pb-6 prose prose-sm" id="disclosure-1" x-show="open">
                                    <ul role="list">

                                        <li>Multiple strap configurations</li>

                                        <li>Spacious interior with top zip</li>

                                        <li>Leather handle and tabs</li>

                                        <li>Interior dividers</li>

                                        <li>Stainless strap loops</li>

                                        <li>Double stitched construction</li>

                                        <li>Water-resistant</li>

                                    </ul>
                                </div>
                            </div>

                            <div x-data="{ open: false }">
                                <h3>
                                    <button type="button" x-description="Expand/collapse question button"
                                        class="group relative w-full py-6 flex justify-between items-center text-left"
                                        aria-controls="disclosure-1" @click="open = !open" aria-expanded="false"
                                        x-bind:aria-expanded="open.toString()">
                                        <span class="text-gray-900 text-sm font-medium" x-state:on="Open"
                                            x-state:off="Closed" :class="{ 'text-indigo-600': open, 'text-gray-900': !(open) }">
                                            Care
                                        </span>
                                        <span class="ml-6 flex items-center">
                                            <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                                x-state:on="Open" x-state:off="Closed" :class="{ 'hidden': open, 'block': !(open) }"
                                                x-description="Heroicon name: outline/plus-sm"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <svg class="hidden h-6 w-6 text-indigo-400 group-hover:text-indigo-500"
                                                x-state:on="Open" x-state:off="Closed" :class="{ 'block': open, 'hidden': !(open) }"
                                                x-description="Heroicon name: outline/minus-sm"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M18 12H6"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <div class="pb-6 prose prose-sm" id="disclosure-1" x-show="open">
                                    <ul role="list">

                                        <li>Spot clean as needed</li>

                                        <li>Hand wash with mild soap</li>

                                        <li>Machine wash interior dividers</li>

                                        <li>Treat handle and tabs with leather conditioner</li>

                                    </ul>
                                </div>
                            </div>

                            <div x-data="{ open: false }">
                                <h3>
                                    <button type="button" x-description="Expand/collapse question button"
                                        class="group relative w-full py-6 flex justify-between items-center text-left"
                                        aria-controls="disclosure-1" @click="open = !open" aria-expanded="false"
                                        x-bind:aria-expanded="open.toString()">
                                        <span class="text-gray-900 text-sm font-medium" x-state:on="Open"
                                            x-state:off="Closed" :class="{ 'text-indigo-600': open, 'text-gray-900': !(open) }">
                                            Shipping
                                        </span>
                                        <span class="ml-6 flex items-center">
                                            <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                                x-state:on="Open" x-state:off="Closed" :class="{ 'hidden': open, 'block': !(open) }"
                                                x-description="Heroicon name: outline/plus-sm"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <svg class="hidden h-6 w-6 text-indigo-400 group-hover:text-indigo-500"
                                                x-state:on="Open" x-state:off="Closed" :class="{ 'block': open, 'hidden': !(open) }"
                                                x-description="Heroicon name: outline/minus-sm"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M18 12H6"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <div class="pb-6 prose prose-sm" id="disclosure-1" x-show="open">
                                    <ul role="list">

                                        <li>Free shipping on orders over $300</li>

                                        <li>International shipping available</li>

                                        <li>Expedited shipping options</li>

                                        <li>Signature required upon delivery</li>

                                    </ul>
                                </div>
                            </div>

                            <div x-data="{ open: false }">
                                <h3>
                                    <button type="button" x-description="Expand/collapse question button"
                                        class="group relative w-full py-6 flex justify-between items-center text-left"
                                        aria-controls="disclosure-1" @click="open = !open" aria-expanded="false"
                                        x-bind:aria-expanded="open.toString()">
                                        <span class="text-gray-900 text-sm font-medium" x-state:on="Open"
                                            x-state:off="Closed" :class="{ 'text-indigo-600': open, 'text-gray-900': !(open) }">
                                            Returns
                                        </span>
                                        <span class="ml-6 flex items-center">
                                            <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                                x-state:on="Open" x-state:off="Closed" :class="{ 'hidden': open, 'block': !(open) }"
                                                x-description="Heroicon name: outline/plus-sm"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <svg class="hidden h-6 w-6 text-indigo-400 group-hover:text-indigo-500"
                                                x-state:on="Open" x-state:off="Closed" :class="{ 'block': open, 'hidden': !(open) }"
                                                x-description="Heroicon name: outline/minus-sm"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M18 12H6"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <div class="pb-6 prose prose-sm" id="disclosure-1" x-show="open">
                                    <ul role="list">

                                        <li>Easy return requests</li>

                                        <li>Pre-paid shipping label included</li>

                                        <li>10% restocking fee for returns</li>

                                        <li>60 day return window</li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>

            <!-- Image gallery -->
            <div class="mt-8 lg:mt-0 lg:col-start-1 lg:col-span-7 lg:row-start-1 lg:row-span-3">
                <h2 class="sr-only">Images</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-2 lg:gap-8">
                    <img src="{{ $product->image }}" alt="" class="lg:col-span-2 lg:row-span-2 rounded-lg">
                </div>
            </div>

            <div class="mt-8 lg:col-span-5">
                <form>
                    <!-- Size picker -->
                    <div class="mt-8">
                        <div class="flex items-center justify-between">
                            <h2 class="text-sm font-medium text-gray-900">Size</h2>
                            <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">See
                                sizing chart</a>
                        </div>

                        <fieldset x-data="window.Components.radioGroup({ initialCheckedIndex: 2 })" x-init="init()" class="mt-2">
                            <legend class="sr-only">
                                Choose a size
                            </legend>
                            <div class="grid grid-cols-3 gap-3 sm:grid-cols-6">

                                <label x-radio-group-option=""
                                    class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none"
                                    x-description="In Stock: &quot;cursor-pointer&quot;, Out of Stock: &quot;opacity-25 cursor-not-allowed&quot;	Active: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;	Checked: &quot;bg-indigo-600 border-transparent text-white hover:bg-indigo-700&quot;, Not Checked: &quot;bg-white border-gray-200 text-gray-900 hover:bg-gray-50&quot;"
                                    :class="{ 'ring-2 ring-offset-2 ring-indigo-500': (active === 'XXS'), 'undefined': !(active === 'XXS'), 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700': (value === 'XXS'), 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50': !(value === 'XXS') }">
                                    <input type="radio" x-model="value" name="size-choice" value="XXS"
                                        class="sr-only" aria-labelledby="size-choice-0-label">
                                    <p id="size-choice-0-label">
                                        XXS
                                    </p>
                                </label>

                                <label x-radio-group-option=""
                                    class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none"
                                    x-description="In Stock: &quot;cursor-pointer&quot;, Out of Stock: &quot;opacity-25 cursor-not-allowed&quot;	Active: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;	Checked: &quot;bg-indigo-600 border-transparent text-white hover:bg-indigo-700&quot;, Not Checked: &quot;bg-white border-gray-200 text-gray-900 hover:bg-gray-50&quot;"
                                    :class="{ 'ring-2 ring-offset-2 ring-indigo-500': (active === 'XS'), 'undefined': !(active === 'XS'), 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700': (value === 'XS'), 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50': !(value === 'XS') }">
                                    <input type="radio" x-model="value" name="size-choice" value="XS"
                                        class="sr-only" aria-labelledby="size-choice-1-label">
                                    <p id="size-choice-1-label">
                                        XS
                                    </p>
                                </label>

                                <label x-radio-group-option=""
                                    class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none"
                                    x-description="In Stock: &quot;cursor-pointer&quot;, Out of Stock: &quot;opacity-25 cursor-not-allowed&quot;	Active: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;	Checked: &quot;bg-indigo-600 border-transparent text-white hover:bg-indigo-700&quot;, Not Checked: &quot;bg-white border-gray-200 text-gray-900 hover:bg-gray-50&quot;"
                                    :class="{ 'ring-2 ring-offset-2 ring-indigo-500': (active === 'S'), 'undefined': !(active === 'S'), 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700': (value === 'S'), 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50': !(value === 'S') }">
                                    <input type="radio" x-model="value" name="size-choice" value="S"
                                        class="sr-only" aria-labelledby="size-choice-2-label">
                                    <p id="size-choice-2-label">
                                        S
                                    </p>
                                </label>

                                <label x-radio-group-option=""
                                    class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none"
                                    x-description="In Stock: &quot;cursor-pointer&quot;, Out of Stock: &quot;opacity-25 cursor-not-allowed&quot;	Active: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;	Checked: &quot;bg-indigo-600 border-transparent text-white hover:bg-indigo-700&quot;, Not Checked: &quot;bg-white border-gray-200 text-gray-900 hover:bg-gray-50&quot;"
                                    :class="{ 'ring-2 ring-offset-2 ring-indigo-500': (active === 'M'), 'undefined': !(active === 'M'), 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700': (value === 'M'), 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50': !(value === 'M') }">
                                    <input type="radio" x-model="value" name="size-choice" value="M"
                                        class="sr-only" aria-labelledby="size-choice-3-label">
                                    <p id="size-choice-3-label">
                                        M
                                    </p>
                                </label>

                                <label x-radio-group-option=""
                                    class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none"
                                    x-description="In Stock: &quot;cursor-pointer&quot;, Out of Stock: &quot;opacity-25 cursor-not-allowed&quot;	Active: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;	Checked: &quot;bg-indigo-600 border-transparent text-white hover:bg-indigo-700&quot;, Not Checked: &quot;bg-white border-gray-200 text-gray-900 hover:bg-gray-50&quot;"
                                    :class="{ 'ring-2 ring-offset-2 ring-indigo-500': (active === 'L'), 'undefined': !(active === 'L'), 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700': (value === 'L'), 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50': !(value === 'L') }">
                                    <input type="radio" x-model="value" name="size-choice" value="L"
                                        class="sr-only" aria-labelledby="size-choice-4-label">
                                    <p id="size-choice-4-label">
                                        L
                                    </p>
                                </label>

                                <label x-radio-group-option=""
                                    class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 opacity-25 cursor-not-allowed"
                                    x-description="In Stock: &quot;cursor-pointer&quot;, Out of Stock: &quot;opacity-25 cursor-not-allowed&quot;	Active: &quot;ring-2 ring-offset-2 ring-indigo-500&quot;	Checked: &quot;bg-indigo-600 border-transparent text-white hover:bg-indigo-700&quot;, Not Checked: &quot;bg-white border-gray-200 text-gray-900 hover:bg-gray-50&quot;"
                                    :class="{ 'ring-2 ring-offset-2 ring-indigo-500': (active === 'XL'), 'undefined': !(active === 'XL'), 'bg-indigo-600 border-transparent text-white hover:bg-indigo-700': (value === 'XL'), 'bg-white border-gray-200 text-gray-900 hover:bg-gray-50': !(value === 'XL') }">
                                    <input type="radio" x-model="value" name="size-choice" value="XL" disabled=""
                                        class="sr-only" aria-labelledby="size-choice-5-label">
                                    <p id="size-choice-5-label">
                                        XL
                                    </p>
                                </label>

                            </div>
                        </fieldset>
                    </div>

                    <livewire:products.add-to-cart-btn :productId="$product->id" />
                </form>

                <!-- Product details -->
                <div class="mt-10">
                    <h2 class="text-sm font-medium text-gray-900">Description</h2>

                    <div class="mt-4 prose prose-sm text-gray-500">

                        <p>{{ $product->description }}</p>

                    </div>
                </div>



                <!-- Policies -->
                <section aria-labelledby="policies-heading" class="mt-10">
                    <h2 id="policies-heading" class="sr-only">Our Policies</h2>

                    <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">

                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 text-center">
                            <dt>
                                <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400"
                                    x-description="Heroicon name: outline/globe" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                                <span class="mt-4 text-sm font-medium text-gray-900">
                                    International delivery
                                </span>
                            </dt>
                            <dd class="mt-1 text-sm text-gray-500">
                                Get your order in 2 years
                            </dd>
                        </div>

                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 text-center">
                            <dt>
                                <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400"
                                    x-description="Heroicon name: outline/currency-dollar"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                                <span class="mt-4 text-sm font-medium text-gray-900">
                                    Loyalty rewards
                                </span>
                            </dt>
                            <dd class="mt-1 text-sm text-gray-500">
                                Don't look at other tees
                            </dd>
                        </div>

                    </dl>
                </section>
            </div>
        </div>

        <!-- Reviews -->
        <section aria-labelledby="reviews-heading" class="mt-16 sm:mt-24">
            <h2 id="reviews-heading" class="text-lg font-medium text-gray-900">Recent reviews</h2>

            <div class="mt-6 border-t border-b border-gray-200 pb-10 divide-y divide-gray-200 space-y-10">

                <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
                    <div
                        class="lg:col-start-5 lg:col-span-8 xl:col-start-4 xl:col-span-9 xl:grid xl:grid-cols-3 xl:gap-x-8 xl:items-start">
                        <div class="flex items-center xl:col-span-1">
                            <div class="flex items-center">

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" x-state:on="Active"
                                    x-state:off="Inactive"
                                    x-state-description="Active: &quot;text-yellow-400&quot;, Inactive: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                            </div>
                            <p class="ml-3 text-sm text-gray-700">5<span class="sr-only"> out of 5
                                    stars</span></p>
                        </div>

                        <div class="mt-4 lg:mt-6 xl:mt-0 xl:col-span-2">
                            <h3 class="text-sm font-medium text-gray-900">Can't say enough good things</h3>

                            <div class="mt-3 space-y-6 text-sm text-gray-500">

                                <p>I was really pleased with the overall shopping experience. My order even included
                                    a little personal, handwritten note, which delighted me!</p>
                                <p>The product quality is amazing, it looks and feel even better than I had
                                    anticipated. Brilliant stuff! I would gladly recommend this store to my friends.
                                    And, now that I think of it... I actually have, many times!</p>

                            </div>
                        </div>
                    </div>

                    <div
                        class="mt-6 flex items-center text-sm lg:mt-0 lg:col-start-1 lg:col-span-4 lg:row-start-1 lg:flex-col lg:items-start xl:col-span-3">
                        <p class="font-medium text-gray-900">Risako M</p>
                        <time datetime="2021-01-06"
                            class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">May
                            16, 2021</time>
                    </div>
                </div>

                <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
                    <div
                        class="lg:col-start-5 lg:col-span-8 xl:col-start-4 xl:col-span-9 xl:grid xl:grid-cols-3 xl:gap-x-8 xl:items-start">
                        <div class="flex items-center xl:col-span-1">
                            <div class="flex items-center">

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" x-state:on="Active"
                                    x-state:off="Inactive"
                                    x-state-description="Active: &quot;text-yellow-400&quot;, Inactive: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                            </div>
                            <p class="ml-3 text-sm text-gray-700">5<span class="sr-only"> out of 5
                                    stars</span></p>
                        </div>

                        <div class="mt-4 lg:mt-6 xl:mt-0 xl:col-span-2">
                            <h3 class="text-sm font-medium text-gray-900">Very comfy and looks the part</h3>

                            <div class="mt-3 space-y-6 text-sm text-gray-500">

                                <p>After a quick chat with customer support, I had a good feeling about this shirt
                                    and ordered three of them.</p>
                                <p>Less than 48 hours later, my delivery arrived. I haven't worn anything else since
                                    that day! These shirts are so comfortable, yet look classy enough that I can
                                    wear them at work or even some formal events. Winning!</p>

                            </div>
                        </div>
                    </div>

                    <div
                        class="mt-6 flex items-center text-sm lg:mt-0 lg:col-start-1 lg:col-span-4 lg:row-start-1 lg:flex-col lg:items-start xl:col-span-3">
                        <p class="font-medium text-gray-900">Jackie H</p>
                        <time datetime="2021-01-06"
                            class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">April
                            6, 2021</time>
                    </div>
                </div>

                <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
                    <div
                        class="lg:col-start-5 lg:col-span-8 xl:col-start-4 xl:col-span-9 xl:grid xl:grid-cols-3 xl:gap-x-8 xl:items-start">
                        <div class="flex items-center xl:col-span-1">
                            <div class="flex items-center">

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" x-state:on="Active"
                                    x-state:off="Inactive"
                                    x-state-description="Active: &quot;text-yellow-400&quot;, Inactive: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-200&quot;"
                                    x-description="Heroicon name: solid/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>

                            </div>
                            <p class="ml-3 text-sm text-gray-700">4<span class="sr-only"> out of 5
                                    stars</span></p>
                        </div>

                        <div class="mt-4 lg:mt-6 xl:mt-0 xl:col-span-2">
                            <h3 class="text-sm font-medium text-gray-900">The last shirts I may ever need</h3>

                            <div class="mt-3 space-y-6 text-sm text-gray-500">

                                <p>I bought two of those comfy cotton shirts, and let me tell you: they're amazing!
                                    I have been wearing them almost every day. Even after a dozen of washes, that
                                    still looks and feel good as new. Will definitely order a few more... If I ever
                                    need to!</p>

                            </div>
                        </div>
                    </div>

                    <div
                        class="mt-6 flex items-center text-sm lg:mt-0 lg:col-start-1 lg:col-span-4 lg:row-start-1 lg:flex-col lg:items-start xl:col-span-3">
                        <p class="font-medium text-gray-900">Laura G</p>
                        <time datetime="2021-01-06"
                            class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">February
                            24, 2021</time>
                    </div>
                </div>

            </div>
        </section>

        <!-- Related products -->
        <section aria-labelledby="related-heading" class="mt-16 sm:mt-24">
            <h2 id="related-heading" class="text-lg font-medium text-gray-900">Customers also purchased</h2>

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                <div class="group relative">
                    <div
                        class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-02.jpg"
                            alt="Front of men's Basic Tee in white."
                            class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Aspen White</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-03.jpg"
                            alt="Front of men's Basic Tee in dark gray."
                            class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Charcoal</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-04.jpg"
                            alt="Front of men's Artwork Tee in peach with white and brown dots forming an isometric cube."
                            class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Artwork Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Iso Dots</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>

                <div class="group relative">
                    <div
                        class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                            alt="Front of men's Basic Tee in black."
                            class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>

            </div>
        </section>
    </main>

</x-app-layout>
