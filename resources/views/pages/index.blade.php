<x-app-layout>

            <!-- Hero -->
            <x-hero 
                title="Focus on what matters" 
                btnText="More"
                image="https://images.placeholders.dev/?width=1055&height=100&text=Featured product image" />

            <!-- Trending products -->
            <section aria-labelledby="trending-heading" class="bg-white">
                <div class="py-16 sm:py-24 lg:max-w-7xl lg:mx-auto lg:py-32 lg:px-8">
                    <div class="px-4 flex items-center justify-between sm:px-6 lg:px-0">
                        <h2 id="trending-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Trending
                            products</h2>
                        <a href="#"
                            class="hidden sm:block text-sm font-semibold text-indigo-600 hover:text-indigo-500">See
                            everything<span aria-hidden="true"> →</span></a>
                    </div>

                    <div class="mt-8 relative">
                        <div class="relative w-full overflow-x-auto">
                            <ul role="list"
                                class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:space-x-0 lg:grid lg:grid-cols-4 lg:gap-x-8">

                                @forelse ($products as $product)
                                    <li class="w-64 inline-flex flex-col text-center lg:w-auto">
                                        <div class="group relative">
                                            <x-products.product-tile :product="$product" />
                                        </div>
                                    </li>
                                @empty
                                    <li class="text-red-600 bold">There are no products yet. @if(app()->isLocal())<br> Please run seeder.@endif</li>
                                @endforelse

                            </ul>
                        </div>
                    </div>

                    <div class="mt-12 px-4 sm:hidden">
                        <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">See
                            everything<span aria-hidden="true"> →</span></a>
                    </div>
                </div>
            </section>

            <!-- Sale and testimonials -->
            <div class="relative overflow-hidden">
                <!-- Decorative background image and gradient -->
                <div aria-hidden="true" class="absolute inset-0">
                    <div class="absolute inset-0 max-w-7xl mx-auto overflow-hidden xl:px-8">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-sale-full-width.jpg" alt=""
                            class="w-full h-full object-center object-cover">
                    </div>
                    <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
                </div>

                <!-- Sale -->
                <section aria-labelledby="sale-heading"
                    class="relative max-w-7xl mx-auto pt-32 px-4 flex flex-col items-center text-center sm:px-6 lg:px-8">
                    <div class="max-w-2xl mx-auto lg:max-w-none">
                        <h2 id="sale-heading"
                            class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">
                            Get 25% off during our one-time sale
                        </h2>
                        <p class="mt-4 max-w-xl mx-auto text-xl text-gray-600">Most of our products are limited releases
                            that won't come back. Get your favorite items while they're in stock.</p>
                        <a href="#"
                            class="mt-6 inline-block w-full bg-gray-900 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-gray-800 sm:w-auto">Get
                            access to our one-time sale</a>
                    </div>
                </section>

                <!-- Testimonials -->
                <section aria-labelledby="testimonial-heading"
                    class="relative py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:py-32 lg:px-8">
                    <div class="max-w-2xl mx-auto lg:max-w-none">
                        <h2 id="testimonial-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">What
                            are people saying?</h2>

                        <div class="mt-16 space-y-16 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">

                            <blockquote class="sm:flex lg:block">
                                <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                    <path
                                        d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                    <p class="text-lg text-gray-600">
                                        My order arrived super quickly. The product is even better than I hoped it would
                                        be. Very happy customer over here!
                                    </p>
                                    <cite class="mt-4 block font-semibold not-italic text-gray-900">
                                        Sarah Peters, New Orleans
                                    </cite>
                                </div>
                            </blockquote>

                            <blockquote class="sm:flex lg:block">
                                <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                    <path
                                        d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                    <p class="text-lg text-gray-600">
                                        I had to return a purchase that didn’t fit. The whole process was so simple that
                                        I ended up ordering two new items!
                                    </p>
                                    <cite class="mt-4 block font-semibold not-italic text-gray-900">
                                        Kelly McPherson, Chicago
                                    </cite>
                                </div>
                            </blockquote>

                            <blockquote class="sm:flex lg:block">
                                <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                    <path
                                        d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                    <p class="text-lg text-gray-600">
                                        Now that I’m on holiday for the summer, I’ll probably order a few more shirts.
                                        It’s just so convenient, and I know the quality will always be there.
                                    </p>
                                    <cite class="mt-4 block font-semibold not-italic text-gray-900">
                                        Chris Paul, Phoenix
                                    </cite>
                                </div>
                            </blockquote>

                        </div>
                    </div>
                </section>
            </div>
 
</x-app-layout>
