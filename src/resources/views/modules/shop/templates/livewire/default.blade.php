<div>
    <div class="bg-gray-100">
        <div class="max-w-2xl mx-auto py-4 px-4 sm:py-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mb-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">
                            Магазин
                        </h1>
                    </div>
                </div>
            </div>
            <div class="flex gap-3">

                <div class="w-[20rem]">
                    <div class="bg-gray-100 px-4 py-2">
                        @include('microweber-module-shop::livewire.filters.categories.index')
                        @include('microweber-module-shop::livewire.filters.custom_fields.index')
                        @include('microweber-module-shop::livewire.filters.tags.index')
                    </div>
                </div>

                <div class="w-full">

                    <div class="mb-8">
                        @include('microweber-module-shop::livewire.filters.top.index')
                    </div>

                    @if($products->count() == 0)
                        <div class="text-xl">
                            No products found in this category.
                        </div>
                    @else
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 lg:gap-5">
                        @foreach($products as $product)
                            <div><a href="{{$product->link()}}">
                                    <div class="group relative aspect-w-1 aspect-h-1 shadow-md bg-gray-100 overflow-hidden"><img
                                            src="{{$product->thumbnail(600,700, true)}}"
                                            alt="{{$product->title}}"
                                            class="object-center object-cover">
                                        <div class="flex absolute right-1 mt-3 ml-3 gap-2"><span
                                                class="bg-yellow-500 w-16 h-5 text-sm text-center text-white"> ПРОМО </span><span
                                                class="bg-purple-500 w-16 h-5 text-sm text-center text-white"> НОВО </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="h-12 flex items-center">
                                    <a class="text-black" href="{{$product->link()}}">
                                        {{$product->title}}
                                    </a>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="text-lg">
                                            <a href="{{$product->link()}}"  class="font-medium text-black">

                                                @if($product->hasSpecialPrice())
                                                    <span class="text-red-600"> {{currency_format($product->specialPrice)}} </span>
                                                    <span class="line-through text-gray-500"> {{currency_format($product->price)}} </span>
                                                @else
                                                    <span class="text-red-600"> {{currency_format($product->price)}} </span>
                                                @endif

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div><a href="{{$product->link()}}"
                                        class="w-full flex gap-2 justify-center items-center bg-black text-sm text-white hover:bg-red-700 px-4 py-4 mt-2">
                                        Добави в количката
                                        <svg cursor="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                                        </svg>
                                    </a></div>
                            </div>
                        @endforeach
                        </div>
                    @endif

                    <div class="mt-6">
                        <div class="flex gap-2">
                            {{ $products->links("livewire-tables::specific.bootstrap-4.pagination") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
