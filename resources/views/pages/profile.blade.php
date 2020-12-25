@extends('layouts.main-layout')

@section('title')
    Профиль
@endsection

@section('page-content')

<div style="background-color: #f9fbe7">
    <h1 class="pt-4 mr-auto ml-auto w-75">Мой профиль</h1>
    <hr class="ml-auto w-75">

    <div class="mr-auto ml-auto w-75">
        <div class="d-flex flex-row">
            <img src="/img/admin.jpg" alt="" class="w-25 mr-4" style="height: 200px">
            <div class="d-flex flex-column">
                <h2>{{ $user->username }}</h2>
                <p>{{ $user->surname }} {{ $user->name }} {{ $user->patronymic }}</p>
                <button type="button" class="btn btn-dark mb-4">Изменить</button>
                <h4>Статус: системный разработчик</h4>
                <h4>Контакты</h4>
                <div class="d-flex flex-row mb-2">
                    <button type="button" class="btn btn-dark material-icons mr-2">edit</button>
                    <button type="button" class="btn btn-dark material-icons mr-2">clear</button>
                    <p class="mb-0 mt-2">45-77 (раб.)</p>
                </div>
                <button type="button" class="btn btn-dark mb-4">Добавить</button>
                <h4>Адрес</h4>
                <p>РФ, Москва, Студенческая 33</p>
                <div class="d-flex flex-row mb-4">
                    <button type="button" class="btn btn-dark mr-2">Изменить</button>
                    <button type="button" class="btn btn-dark mr-2">Удалить</button>
                    <button type="button" class="btn btn-dark">Подробнее</button>
                </div>
                <h4>Персональные данные</h4>
                <i class="mb-2">Не указаны</i>
                <button type="button" class="btn btn-dark mb-4">Добавить</button>
            </div>
        </div>
    </div>
</div>
@endsection
