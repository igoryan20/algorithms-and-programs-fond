<div>
    @if(!$product->is_published)
        <p class="py-4 px-4 rounded" style="background-color: #ffe14d">Продукт не опубликован</p>
    @endif
    <div>
        <h1>Категории</h1>
        @foreach ($categories as $category)
            <p>{{ $category->name }}</p>
        @endforeach
    </div>
    <div>
        <h1>Разработчик</h1>
        <p>{{ $developer->surname }} {{ $developer->name }} {{ $developer->patronymic }}</p>
    </div>
</div>
