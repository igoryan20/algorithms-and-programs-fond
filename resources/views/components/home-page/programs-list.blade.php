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
            @foreach ($products as $product)
                <a href="/product/{{ $product->id }}" class="list-group-item d-flex list-item list-item-bc">
                    @if ($product->img_path != null)
                        <img src="{{ $product->img_path }}" alt="картинка 1" class="mr-2" width="76px" height="76px">
                    @else
                        <img src="/img/default.png" alt="картинка 1" class="mr-2" width="76px" height="76px">
                    @endif
                    <div>
                        <h5 class="mb-0">{{ $product->name }}</h5>
                        <p class="mb-1">{{ $product->description }}</p>
                        <div>
                            @foreach ($product->operationSystems as $productOperationSystem)
                                @if ($productOperationSystem->id == 1)
                                    <i class="fab fa-windows"></i>
                                @endif
                                @if ($productOperationSystem->id == 2)
                                    <i class="fab fa-apple"></i>
                                @endif
                                @if ($productOperationSystem->id == 3)
                                    <i class="fab fa-linux"></i>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </a>
            @endforeach
        </ul>
    </div>
</div>
