<div>
    <style>
        .list-item-bc {
            background-color: #f9fbe7;
            color: black;
        }
        .list-item-bc:hover {
            background-color: #ffef78;
            text-decoration: none;
            color: black;
        }
    </style>
    <div class="container px-0 mb-4">
        <ul class="list-group">
            @foreach ($programsData as $item)
                <a href="/product/{{ $item->id }}" class="list-group-item d-flex list-item list-item-bc">
                    @if ($item->img_path != null)
                        <img src="{{ $item->img_path }}" alt="картинка 1" class="mr-2" width="76px" height="76px">
                    @else
                        <img src="/img/default.png" alt="картинка 1" class="mr-2" width="76px" height="76px">
                    @endif
                    <div>
                        <h5 class="mb-0">{{ $item->name }}</h5>
                        <p class="mb-1">{{ $item->description }}</p>
                        <div>
                            @if (in_array(1, $item->os))
                                <i class="fab fa-windows"></i>
                            @endif
                            @if (in_array(2, $item->os))
                                <i class="fab fa-apple"></i>
                            @endif
                            @if (in_array(3, $item->os))
                                <i class="fab fa-linux"></i>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </ul>
    </div>
</div>
