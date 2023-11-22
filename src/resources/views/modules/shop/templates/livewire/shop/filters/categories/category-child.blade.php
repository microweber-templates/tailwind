@if(isset($category))
    <div class="pl-3">

        <button type="button" class="flex @if($category->id == $filteredCategory) font-bold @endif">
            <div class="px-2 py-1" wire:click="filterCategory('{{$category->id}}')">
                {{ $category->title }}
            </div>
            @if($category->id == $filteredCategory)
                <div class="flex items-center px-2 text-sm bg-red-400 text-white rounded" wire:click="filterCategory('')">
                    X
                </div>
            @endif
        </button>

        @if(!empty($category->children))
            <div>
                @foreach($category->children as $category)
                    @include('microweber-module-shop::livewire.shop.filters.categories.category-child', ['category' => $category])
                @endforeach
            </div>
        @endif
    </div>
@endif
