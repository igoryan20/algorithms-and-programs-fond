<div>
    <fieldset name="checkbox-card">
        <div class="card mb-4">
            <div class="card-header" :v-bind="header">
                {{ $title }}
            </div>
            @foreach($checkboxes as $checkbox)
                <div class="card-body d-flex flex-row py-1">
                    <input type="checkbox" class="mr-2 mt-1" id="checkbox" name="checkbox_{{ $entity }}[]" value='{{ $checkbox->id }}' />
                    <p class="card-text" for="checkbox">{{ $checkbox->name }}</p>
            </div>
            @endforeach
        </div>
    </fieldset>
</div>
