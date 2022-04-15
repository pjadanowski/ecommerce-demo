<x-app-layout>

    <div class="bg-gray-100">


        <main class="max-w-7xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto lg:max-w-none">
                <h1 class="sr-only">Checkout</h1>

                <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
                    <div>
                        <div>
                            <h2 class="text-xl font-medium text-gray-900">Contact information</h2>

                            <div class="mt-4">
                                <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <div class="mt-1">
                                    <input type="email" id="email-address" name="email-address" autocomplete="email"
                                        class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 border-t border-gray-200 pt-10">
                            <h2 class="text-xl font-medium text-gray-900">Shipping information</h2>

                            <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                        name</label>
                                    <div class="mt-1">
                                        <input type="text" id="first-name" name="first-name" autocomplete="given-name"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                        name</label>
                                    <div class="mt-1">
                                        <input type="text" id="last-name" name="last-name" autocomplete="family-name"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="company"
                                        class="block text-sm font-medium text-gray-700">Company</label>
                                    <div class="mt-1">
                                        <input type="text" name="company" id="company"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="address"
                                        class="block text-sm font-medium text-gray-700">Address</label>
                                    <div class="mt-1">
                                        <input type="text" name="address" id="address" autocomplete="street-address"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="apartment" class="block text-sm font-medium text-gray-700">Apartment,
                                        suite, etc.</label>
                                    <div class="mt-1">
                                        <input type="text" name="apartment" id="apartment"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <div class="mt-1">
                                        <input type="text" name="city" id="city" autocomplete="address-level2"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="country"
                                        class="block text-sm font-medium text-gray-700">Country</label>
                                    <div class="mt-1">
                                        <select id="country" name="country" autocomplete="country-name"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="region" class="block text-sm font-medium text-gray-700">State /
                                        Province</label>
                                    <div class="mt-1">
                                        <input type="text" name="region" id="region" autocomplete="address-level1"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="postal-code" class="block text-sm font-medium text-gray-700">Postal
                                        code</label>
                                    <div class="mt-1">
                                        <input type="text" name="postal-code" id="postal-code"
                                            autocomplete="postal-code"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                    <div class="mt-1">
                                        <input type="text" name="phone" id="phone" autocomplete="tel"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 border-t border-gray-200 pt-10">
                            <fieldset x-data="window.Components.radioGroup({ initialCheckedIndex: 0 })" x-init="init()">
                                <legend class="text-xl font-medium text-gray-900">
                                    Delivery method
                                </legend>

                                <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">

                                    <label x-radio-group-option=""
                                        class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none"
                                        x-description="Checked: &quot;border-transparent&quot;, Not Checked: &quot;border-gray-300&quot;	Active: &quot;ring-2 ring-indigo-500&quot;"
                                        :class="{ 'border-transparent': (value === 'Standard'), 'border-gray-300': !(value === 'Standard'), 'ring-2 ring-indigo-500': (active === 'Standard'), 'undefined': !(active === 'Standard') }">
                                        <input type="radio" x-model="value" name="delivery-method" value="Standard"
                                            class="sr-only" aria-labelledby="delivery-method-0-label"
                                            aria-describedby="delivery-method-0-description-0 delivery-method-0-description-1">
                                        <div class="flex-1 flex">
                                            <div class="flex flex-col">
                                                <span id="delivery-method-0-label"
                                                    class="block text-sm font-medium text-gray-900">
                                                    Standard
                                                </span>
                                                <span id="delivery-method-0-description-0"
                                                    class="mt-1 flex items-center text-sm text-gray-500">
                                                    4–10 business days
                                                </span>
                                                <span id="delivery-method-0-description-1"
                                                    class="mt-6 text-sm font-medium text-gray-900">
                                                    $5.00
                                                </span>
                                            </div>
                                        </div>
                                        <svg class="h-5 w-5 text-indigo-600" x-description="Not Checked: &quot;hidden&quot;

Heroicon name: solid/check-circle" :class="{ 'hidden': !(value === 'Standard'), 'undefined': (value === 'Standard') }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="absolute -inset-px rounded-lg border-2 pointer-events-none"
                                            aria-hidden="true"
                                            x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;"
                                            :class="{ 'border': (active === 'Standard'), 'border-2': !(active === 'Standard'), 'border-indigo-500': (value === 'Standard'), 'border-transparent': !(value === 'Standard') }"></div>
                                    </label>

                                    <label x-radio-group-option=""
                                        class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none"
                                        x-description="Checked: &quot;border-transparent&quot;, Not Checked: &quot;border-gray-300&quot;	Active: &quot;ring-2 ring-indigo-500&quot;"
                                        :class="{ 'border-transparent': (value === 'Express'), 'border-gray-300': !(value === 'Express'), 'ring-2 ring-indigo-500': (active === 'Express'), 'undefined': !(active === 'Express') }">
                                        <input type="radio" x-model="value" name="delivery-method" value="Express"
                                            class="sr-only" aria-labelledby="delivery-method-1-label"
                                            aria-describedby="delivery-method-1-description-0 delivery-method-1-description-1">
                                        <div class="flex-1 flex">
                                            <div class="flex flex-col">
                                                <span id="delivery-method-1-label"
                                                    class="block text-sm font-medium text-gray-900">
                                                    Express
                                                </span>
                                                <span id="delivery-method-1-description-0"
                                                    class="mt-1 flex items-center text-sm text-gray-500">
                                                    2–5 business days
                                                </span>
                                                <span id="delivery-method-1-description-1"
                                                    class="mt-6 text-sm font-medium text-gray-900">
                                                    $16.00
                                                </span>
                                            </div>
                                        </div>
                                        <svg class="h-5 w-5 text-indigo-600" x-description="Not Checked: &quot;hidden&quot;

Heroicon name: solid/check-circle" :class="{ 'hidden': !(value === 'Express'), 'undefined': (value === 'Express') }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="absolute -inset-px rounded-lg border-2 pointer-events-none"
                                            aria-hidden="true"
                                            x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;"
                                            :class="{ 'border': (active === 'Express'), 'border-2': !(active === 'Express'), 'border-indigo-500': (value === 'Express'), 'border-transparent': !(value === 'Express') }"></div>
                                    </label>

                                </div>
                            </fieldset>
                        </div>

                        <!-- Payment -->
                        <div class="mt-10 border-t border-gray-200 pt-10">
                            <h2 class="text-lg font-medium text-gray-900">Payment</h2>

                            <fieldset class="mt-4">
                                <legend class="sr-only">Payment type</legend>
                                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">

                                    <div class="flex items-center">

                                        <input id="credit-card" name="payment-type" type="radio" checked=""
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="credit-card" class="ml-3 block text-sm font-medium text-gray-700">
                                            Credit card
                                        </label>
                                    </div>

                                    <div class="flex items-center">

                                        <input id="paypal" name="payment-type" type="radio"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="paypal" class="ml-3 block text-sm font-medium text-gray-700">
                                            PayPal
                                        </label>
                                    </div>

                                    <div class="flex items-center">

                                        <input id="etransfer" name="payment-type" type="radio"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        <label for="etransfer" class="ml-3 block text-sm font-medium text-gray-700">
                                            eTransfer
                                        </label>
                                    </div>

                                </div>
                            </fieldset>

                            <div class="mt-6 grid grid-cols-4 gap-y-6 gap-x-4">
                                <div class="col-span-4">
                                    <label for="card-number" class="block text-sm font-medium text-gray-700">Card
                                        number</label>
                                    <div class="mt-1">
                                        <input type="text" id="card-number" name="card-number" autocomplete="cc-number"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="col-span-4">
                                    <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on
                                        card</label>
                                    <div class="mt-1">
                                        <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="col-span-3">
                                    <label for="expiration-date"
                                        class="block text-sm font-medium text-gray-700">Expiration date (MM/YY)</label>
                                    <div class="mt-1">
                                        <input type="text" name="expiration-date" id="expiration-date"
                                            autocomplete="cc-exp"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                                    <div class="mt-1">
                                        <input type="text" name="cvc" id="cvc" autocomplete="csc"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order summary -->
                    <livewire:checkout.order-summary />
                </form>
            </div>
        </main>

    </div>

</x-app-layout>
