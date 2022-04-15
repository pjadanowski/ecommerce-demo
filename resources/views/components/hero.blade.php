@props([
    'title', 
    'description', 
    'btnText', 
    'actionUrl' => '#', 
    'image',
])

<div class="flex flex-col border-b border-gray-200 lg:border-0">
    <div class="relative">
        <div aria-hidden="true" class="hidden absolute w-1/2 h-full bg-gray-100 lg:block"></div>
        <div class="relative bg-gray-100 lg:bg-transparent">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:grid lg:grid-cols-2">
                <div class="max-w-2xl mx-auto py-24 lg:py-64 lg:max-w-none">
                    <div class="lg:pr-16">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl xl:text-6xl">
                            {{ $title }}
                        </h1>
                        <p class="mt-4 text-xl text-gray-600">All the charts, datepickers, and notifications in the world
                            can't beat checking off some items on a paper card.</p>
                        <div class="mt-6">
                            <a href="{{ $actionUrl }}"
                                class="inline-block bg-indigo-600 border border-transparent py-3 px-8 rounded-md font-medium text-white hover:bg-indigo-700">
                                {{ $btnText }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-48 sm:h-64 lg:absolute lg:top-0 lg:right-0 lg:w-1/2 lg:h-full">
            <img src="{{ $image }}" alt=""
                class="w-full h-full object-center object-cover">
        </div>
    </div>
</div>
