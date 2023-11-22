<div class="mt-4 text-left">
    <div class="font-bold text-xl">Categories</div>
    <div class="mt-2">
        <div>
           <span class="text-gray-500 @if(!$filteredCategory) font-bold @endif"
                       wire:click="filterClearCategory()">
               All Categories
            </span>
        </div>
        @foreach($availableCategories as $category)
            @include('microweber-module-shop::livewire.filters.categories.category-child', ['category' => $category])
        @endforeach
    </div>
</div>
