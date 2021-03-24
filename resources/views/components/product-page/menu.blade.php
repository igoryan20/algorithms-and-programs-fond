<div class="mx-auto w-75 py-4">
    <div class="d-flex">
        @if ($product->img_path != null)
            <img src="{{ $product->img_path }}" alt="картинка 1" class="mr-2" width="76px" height="76px">
        @else
            <img src="/img/default.png" alt="картинка 1" class="mr-2" width="76px" height="76px">
        @endif
        <div class="d-flex flex-column ml-4">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p>{{ $product->full_description }}</p>
        </div>
    </div>
    <div class="d-flex mt-4">
        @if(Auth::user()->group_id != 1)
            @if(Auth::user()->id == $product->developed_by or Auth::user()->group->id == 3)    
                <button class="btn btn-outline-secondary mr-2">Изменить описание</button>
                <button class="btn btn-outline-danger mr-2">Удалить</button>
                <div class="dropdown mr-2">
                    <a class="nav-link dropdown-toggle btn btn-outline-secondary" href="#" id="categoriesDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Дополнительно
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        <a class="dropdown-item" href="" data-toggle="modal"
                        data-target="#create-release">Создать релиз</a>
                        <a class="dropdown-item" href="">Контакты</a>
                        <a class="dropdown-item" href="/journal/{{ $product->id }}">Журнал</a>
                        <a class="dropdown-item" href="">Пользователи</a>
                        <a class="dropdown-item" href="">Ключи</a>
                    </div>
                    <x-product-page.create-release :product="$product" />
                </div>
                @if(!$product->is_published)
                    <a href="/publish/{{ $product->id }}" class="btn btn-outline-info mr-2">Опубликовать</a>
                @endif
            @endif
        @endif
        @if(Auth::user()->id != $product->developed_by)
            @if ($isDesired)
                <form action="/product/{{ $product->id }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value={{ $product->id }}>
                    <button type="submit" class="btn btn-outline-success h-100" name="btn" value="del">Удалить из желаемого</button>
                </form>
            @else
            <form action="/product/{{ $product->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="product-id" value={{ $product->id }}>
                <button type="submit" class="btn btn-outline-secondary h-100" name="btn" value="add">Добавить в желаемое</button>
            </form>
            @endif
        @endif

    </div>
