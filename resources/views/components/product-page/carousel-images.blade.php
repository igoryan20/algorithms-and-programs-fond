<div>
    <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel" style="max-width:60em;">
        <ol class="carousel-indicators">
            @foreach ($photoPaths as $photoPath)
                @if ($photoPaths->search($photoPath) == 0)
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                @else
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $photoPaths->search($photoPath) }}"></li>
                @endif
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($photoPaths as $photoPath)
                @if ($photoPaths->search($photoPath) == 0)
                    <div class="carousel-item active">
                        <img class="d-block" src="{{ $photoPath->name }}" style="width: 60em; height: 30em" alt="">
                    </div>
                @else
                    <div class="carousel-item">
                        <img class="d-block" src="{{ $photoPath->name }}" style="width: 60em; height: 30em" alt="">
                    </div>
                @endif
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    @if(Auth::user()->id == $product->developed_by or Auth::user()->group->id == 3)
        <form action="/upload-product-photo" method="POST" enctype="multipart/form-data" id="upload-photo-form" class="mt-4">
            {{ csrf_field() }}
            <button id="upload-photo-button" for="upload-photo" class="btn btn-success">Добавить изображение</button>
            <input type="file" name="photo" id="upload-photo" />
            <input type="hidden" name="id" value="{{ $product->id }}" />
        </form>
    @endif
</div>

