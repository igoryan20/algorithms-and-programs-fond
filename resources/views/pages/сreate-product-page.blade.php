@extends('layouts.main-layout')

@section('title')
    Создание продукта
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Создание продукта</h1>
    <hr class="ml-auto w-75">
    <div class="mr-auto ml-auto w-75">
        <div class="mb-4">
            <h4>Название</h4>
            <input type="text" class="w-50" />
        </div>
        <div class="mb-4">
            <h4>Краткое описание</h4>
            <input type="text" class="w-50" />
        </div>
        <div class="mb-4">
            <h4>Подробное описание</h4>
            <textarea name="" id="" cols="77" rows="10"></textarea>
        </div>
        <div class="mb-4">
            <input type="checkbox" name="free" />
            <label for="free">распространяется свободно</label>
        </div>
        <div class="mb-4">
            <h4>Родительский продукт</h4>
            <input type="text" class="w-50" />
        </div>
        <div class="mb-4">
            <h4>Категории</h4>
            <input type="text" class="w-50" />
        </div>
        <div class="d-flex flex-row mb-4">
            <button class="btn btn-primary mr-2">Сохранить</button>
            <button class="btn btn-secondary">Отмена</button>
        </div>
    </div>
@endsection
