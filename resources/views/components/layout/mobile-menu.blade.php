<!-- Mobile menu -->

<div x-show="open" class="fixed inset-0 flex z-40 lg:hidden"
    x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
    aria-modal="true">

    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
        class="fixed inset-0 bg-black bg-opacity-25" @click="open = false" aria-hidden="true">
    </div>


    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        x-description="Off-canvas menu, show/hide based on off-canvas menu state."
        class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
        <div class="px-4 pt-5 pb-2 flex">
            <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400"
                @click="open = false">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Links -->
        <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick"
            @tab-keydown.window="onTabKeydown">
            <div class="border-b border-gray-200">
                <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">

                    <button id="tabs-1-tab-1"
                        class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                        x-state:on="Selected" x-state:off="Not Selected"
                        :class="{ 'text-indigo-600 border-indigo-600': selected, 'text-gray-900 border-transparent': !(selected) }"
                        x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab" x-init="init()"
                        @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect"
                        :tabindex="selected ? 0 : -1" :aria-selected="selected ? 'true' : 'false'" type="button">
                        Women
                    </button>

                    <button id="tabs-1-tab-2"
                        class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                        x-state:on="Selected" x-state:off="Not Selected"
                        :class="{ 'text-indigo-600 border-indigo-600': selected, 'text-gray-900 border-transparent': !(selected) }"
                        x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab" x-init="init()"
                        @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect"
                        :tabindex="selected ? 0 : -1" :aria-selected="selected ? 'true' : 'false'" type="button">
                        Men
                    </button>
                </div>
            </div>


            <div id="tabs-1-panel-1" class="px-4 pt-10 pb-6 space-y-12"
                x-description="'Women' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)"
                aria-labelledby="tabs-1-tab-1" x-init="init()" x-show="selected"
                @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                    <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                        <div>
                            <p id="mobile-featured-heading-0" class="font-medium text-gray-900">
                                Featured
                            </p>
                            <ul role="list" aria-labelledby="mobile-featured-heading-0" class="mt-6 space-y-6">
                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Sleep
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Swimwear
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Underwear
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p id="mobile-categories-heading" class="font-medium text-gray-900">
                                Categories
                            </p>
                            <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Basic Tees
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Artwork Tees
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Bottoms
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Underwear
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Accessories
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                        <div>
                            <p id="mobile-collection-heading" class="font-medium text-gray-900">
                                Collection
                            </p>
                            <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Everything
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Core
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        New Arrivals
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Sale
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div>
                            <p id="mobile-brand-heading" class="font-medium text-gray-900">
                                Brands
                            </p>
                            <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Full Nelson
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        My Way
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Re-Arranged
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Counterfeit
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Significant Other
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tabs-1-panel-2" class="px-4 pt-10 pb-6 space-y-12"
                x-description="'Men' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)"
                aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected"
                @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                    <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                        <div>
                            <p id="mobile-featured-heading-1" class="font-medium text-gray-900">
                                Featured
                            </p>
                            <ul role="list" aria-labelledby="mobile-featured-heading-1" class="mt-6 space-y-6">

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Casual
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Boxers
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Outdoor
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <p id="mobile-categories-heading" class="font-medium text-gray-900">
                                Categories
                            </p>
                            <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Artwork Tees
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Pants
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Accessories
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Boxers
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Basic Tees
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                        <div>
                            <p id="mobile-collection-heading" class="font-medium text-gray-900">
                                Collection
                            </p>
                            <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Everything
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Core
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        New Arrivals
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Sale
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div>
                            <p id="mobile-brand-heading" class="font-medium text-gray-900">
                                Brands
                            </p>
                            <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Significant Other
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        My Way
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Counterfeit
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Re-Arranged
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="text-gray-500">
                                        Full Nelson
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="border-t border-gray-200 py-6 px-4 space-y-6">

            <div class="flow-root">
                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>
            </div>

            <div class="flow-root">
                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>
            </div>

        </div>

        <div class="border-t border-gray-200 py-6 px-4 space-y-6">
            <div class="flow-root">
                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create an account</a>
            </div>
            <div class="flow-root">
                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
            </div>
        </div>
    </div>
</div>
