@props(['product'])

<a href="{{ $product->show() }}">
    <div class="w-full bg-gray-200 rounded-md overflow-hidden aspect-w-1 aspect-h-1">
        <img src="{{ $product->image }}"
            alt="{{ $product->name }}"
            class="w-full h-full object-center object-cover group-hover:opacity-75">
    </div>
    <div class="mt-6">
        <p class="text-sm text-gray-500">
            Black
        </p>
        <h3 class="mt-1 font-semibold text-gray-900">
            <a href="{{ $product->show() }}">
                <span class="absolute inset-0"></span>
                {{ $product->name }}
            </a>
        </h3>
        <p class="mt-1 text-gray-900">
            {{ $product->price }}
        </p>
    </div>
</a>
