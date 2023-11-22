<div class="mt-4 text-left">
    <div class="font-bold text-xl">Tags</div>
    <div>
        @foreach($availableTags as $tagSlug=>$tagName)
            <div class="inline-block">
            <button type="button" class="flex mt-2 text-sm bg-gray-500 text-white">
                <div class="px-2 py-1" wire:click="filterTag('{{$tagSlug}}')"> {{$tagName}}</div>
                @if(in_array($tagSlug, $filteredTags))
                <div class="flex items-center px-2 bg-white/30" wire:click="filterRemoveTag('{{$tagSlug}}')">
                    X
                </div>
                @endif
            </button>
            </div>
        @endforeach
    </div>
    @if(!empty($filteredTags))
    <button type="button" wire:click="filterClearTags()"
            class="bg-gray-200 px-3 py-1 text-black mt-2">
        Clear All
    </button>
    @endif
</div>
