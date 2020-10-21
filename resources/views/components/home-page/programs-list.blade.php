<div>

    <div class="container mb-4" style="width: 70vw">
        <ul class="list-group">
            @foreach ($programsData as $item)
                <div class="list-group-item d-flex" style="background-color: #f9fbe7">
                    @if ($item->imgPath != null)
                        <img src="{{ $item->imgPath }}" alt="картинка 1" class="mr-2" width="76px" height="76px">
                    @else
                        <img src="/img/default.png" alt="картинка 1" class="mr-2" width="76px" height="76px">
                    @endif
                    <div>
                        <h5 class="mb-0">{{ $item->programName }}</h5>
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
                </div>
            @endforeach
        </ul>
    </div>
</div>