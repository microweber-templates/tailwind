<div class="flex justify-between items-center mt-3">
    <div class="w-full">
        <label>Search</label>
        <input type="text" class="bg-gray-200 px-3 py-2 text-black w-full" wire:model="keywords" placeholder="Type to search...">
    </div>
    <div class="w-full flex gap-2 justify-end">
        <div>
            <label>Sort</label>
            <div>
                <select class="bg-gray-200 px-3 py-2 text-black w-full">
                    <option wire:click="filterSort('created_by', 'asc')">Newest</option>
                    <option wire:click="filterSort('created_by', 'desc')">Oldest</option>
                    <option wire:click="filterSort('title', 'asc')">Title: A-Z</option>
                    <option wire:click="filterSort('title', 'desc')">Title: Z-A</option>
                    <option wire:click="filterSort('price', 'asc')">Price: Low to High</option>
                    <option wire:click="filterSort('price', 'desc')">Price: High to Low</option>
                </select>
            </div>
        </div>
        <div>
            <label>Limit</label>
            <div>
                <select class="bg-gray-200 px-3 py-2 text-black w-full">
                    <option wire:click="filterLimit(1)">1</option>
                    <option wire:click="filterLimit(12)">12</option>
                    <option wire:click="filterLimit(24)">24</option>
                    <option wire:click="filterLimit(48)">48</option>
                    <option wire:click="filterLimit(96)">96</option>
                </select>
            </div>
        </div>
    </div>
</div>
