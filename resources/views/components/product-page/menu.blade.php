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
        </div>
    </div>
    <div class="d-flex mt-4">
        <button class="btn btn-secondary mr-2">Изменить</button>
        <button class="btn btn-secondary mr-2">Удалить</button>
        <button class="btn btn-secondary mr-2" disabled>Опубликовать</button>
        <div class="dropdown mr-2">
            <a class="nav-link dropdown-toggle btn btn-secondary" href="#" id="categoriesDropdown"
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
        @if ($isDesired)
            <form action="/product/{{ $product->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="product_id" value={{ $product->id }}>
                <button type="submit" class="btn btn-success mr-2" name="btn" value="del">Желаемое</button>
            </form>
        @else
        <form action="/product/{{ $product->id }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="product-id" value={{ $product->id }}>
            <button type="submit" class="btn btn-info mr-2" name="btn" value="add">Желаемое</button>
        </form>
        @endif

    </div>
