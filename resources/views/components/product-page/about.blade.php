<div>
    <p class="py-4 px-4 rounded" style="background-color: #ffe14d">Продукт не опубликован</p>
    <div>
        <h1>Категории</h1>
        @foreach ($categories as $category)
            <p>{{ $category }}</p>
        @endforeach
    </div>
    <div>
        <h1>Контакты</h1>
        <i>Не указаны</i>
    </div>
</div>