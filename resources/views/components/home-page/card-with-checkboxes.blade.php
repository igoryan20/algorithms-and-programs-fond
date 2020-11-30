<div>
    <fieldset name="checkbox-card">
        <div class="card mb-4">
            <div class="card-header" :v-bind="header">
                {{ $title }}
            </div>
            @foreach($checkboxes as $item)
                <div class="card-body d-flex flex-row py-1">
                @if (!is_null($checked))
                    @if (in_array($item->id, $checked))
                        <input type="checkbox" class="mr-2 mt-1" id="checkbox" name="checkbox_{{ $entity }}[]" value='{{ $item->id }}' checked />
                    @else
                        <input type="checkbox" class="mr-2 mt-1" id="checkbox" name="checkbox_{{ $entity }}[]" value='{{ $item->id }}' />
                    @endif
                @else
                    <input type="checkbox" class="mr-2 mt-1" id="checkbox" name="checkbox_{{ $entity }}[]" value='{{ $item->id }}' />
                @endif

                    <p class="card-text" for="checkbox">{{ $item[$entity] }}</p>
            </div>
            @endforeach
        </div>
    </fieldset>
</div>
