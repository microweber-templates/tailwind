<div class="py-4 text-left">
    <div class="mt-2">
        <div>
           <span class="@if(!$filteredCategory) font-bold @endif"
                       wire:click="filterClearCategory()">
               All Categories
            </span>
        </div>
        @foreach($availableCategories as $category)
            @include('microweber-module-shop::livewire.filters.categories.category-child', ['category' => $category])
        @endforeach
    </div>
</div>
