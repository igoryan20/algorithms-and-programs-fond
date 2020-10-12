<div>
    <div>
        <div class="card mb-4">
            <div class="card-header" :v-bind="header">
                {{ $title }}
            </div>
            @foreach($checkboxes as $item)
                <div class="card-body d-flex flex-row py-1">
                    <input type="checkbox" class="mr-2 mt-1" />
                    <p class="card-text">{{ $item->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
