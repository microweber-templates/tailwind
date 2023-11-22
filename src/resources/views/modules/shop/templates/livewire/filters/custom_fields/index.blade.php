<div class="py-4 text-left">

    <div>
        @foreach($availableCustomFields as $customField)
            <div class="font-bold text-xl">{{$customField->name}}</div>
            <div class="mt-2 mb-2">
                @foreach($customField->values as $customFieldValue)
                    <label class="flex gap-2">
                        <input @if(isset($filteredCustomFields[$customField->name_key]) && in_array($customFieldValue->value, $filteredCustomFields[$customField->name_key])) checked="" @endif
                               wire:click="filterToggleCustomField('{{$customField->name_key}}','{{$customFieldValue->value}}')" type="checkbox">
                        <span>{{$customFieldValue->value}}</span>
                    </label>
                @endforeach
            </div>
        @endforeach
    </div>

    @if(!empty($filteredCustomFields))
    <button type="button" wire:click="filterClearCustomFields()" class="bg-black text-white px-3 rounded text-sm text-black mt-2">
        Clear All
    </button>
    @endif
</div>
