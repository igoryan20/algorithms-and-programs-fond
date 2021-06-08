@extends('layouts.main-layout')

@section('title')
    Главная
@endsection

@section('page-content')
    <h1 class="pt-4 w-75 mx-auto">{{ $title }} ({{ $productsCount }}) 
        <a href="/fap/categories" class="btn btn-outline-secondary">Перейти ко всем категориям</a>
    </h1>
    <hr class="pt-4 w-75 mx-auto">
    <div class="d-flex flex-row justify-content-between">
        <div class="pt-4 w-75 mx-auto">
            @if ($products->isEmpty())
                <h3 class="mx-auto w-50 mt-4">По вашему запросу продуктов не найдено</h3>
            @else
                <x-home-page.programs-list :products="App\Models\Product::paginateCollection($products, 6)" />
            @endif
        </div>
    </div>
@endsection
