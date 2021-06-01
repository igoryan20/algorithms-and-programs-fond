@extends('layouts.main-layout')

@section('title')
    Главная
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto" style="margin-left:50px">{{ $title }} ({{ $productsCount }})</h1>
    <hr style="margin-left:50px; margin-right:50px">
    <div class="d-flex flex-row justify-content-between">
        <div class="ml-5 mt-2"  style="width: 70vw">
            @if ($products->isEmpty())
                <h3 class="mx-auto w-50 mt-4">По вашему запросу продуктов не найдено</h3>
            @else
                <x-home-page.programs-list :products="App\Models\Product::paginateCollection($products, 6)" />
            @endif

        </div>
        <div class="mr-5 mt-2">
            <div class="container">
            <form method="GET" >
                <input id="search" name="search" type="text"
                class="form-control mb-4" placeholder="Название программы" :value="search"/>
                <x-home-page.card-with-checkboxes title="Категории" :checkboxes="$categories" entity="category" :checked="$checkedCategories" />
                <!-- <x-home-page.card-with-select title="Стоимость" /> -->
                <x-home-page.card-with-checkboxes title="Операционная система" :checkboxes="$operationSystems" entity="os" :checked="$checkedOperationSystems" />
                <button type='submit' class="btn btn-primary w-100 mb-4" >Применить фильтр</button>
                @foreach($products as $product)
                    <input type="hidden" name="products_id[]" value="{{ $product->id }}"/>
                @endforeach
            </form>
            </div>
        </div>
    </div>
@endsection
