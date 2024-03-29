<div class="py-4 text-left">
    <div class="font-bold text-xl">Tags</div>
    <div>
        @foreach($availableTags as $tagSlug=>$tagName)
            <div class="inline-block">
            <button type="button" class="flex mt-2 text-sm bg-black/50 text-white rounded">
                <div class="px-2" wire:click="filterTag('{{$tagSlug}}')"> {{$tagName}}</div>
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
            class="bg-black text-white px-3 rounded text-sm text-black mt-2">
        Clear All
    </button>
    @endif
</div>
