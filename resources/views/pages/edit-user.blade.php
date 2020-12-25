@extends('layouts.main-layout')

@section('title')
    Редактирование пользователя
@endsection

@section('page-content')

    <div style="background-color: #f9fbe7">
        <h1 class="pt-4 mr-auto ml-auto w-75">Редактирование пользователя "{{ $user->username }}"</h1>
        <hr class="ml-auto w-75">

        <div class="mr-auto ml-auto w-75">
            <div class="toast d-flex align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body">
                  Hello, world! This is a toast message.
                </div>
                <button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <h2>Общая информация</h2>
            <form action="/users-list/edit-user/{{ $user->id }}" method="POST">
                {{ csrf_field() }}
                <div class="mb-4">
                    <h4>Фамилия</h4>
                    <input type="text" name="surname" class="w-50" value="{{ $user->surname }}" />
                </div>

                <div class="mb-4">
                    <h4>Имя</h4>
                    <input type="text" name="name" class="w-50" value="{{ $user->name }}" />
                </div>

                <div class="mb-4">
                    <h4>Отчество</h4>
                    <input type="text" name="patronymic" class="w-50" value="{{ $user->patronymic }}" />
                </div>

                <div class="mb-4">
                    <h4>Электронная почта</h4>
                    <input type="email" name="email" class="w-50" value="{{ $user->email }}" />
                </div>

                <div class="mb-4">
                    <h4>Имя пользователя</h4>
                    <input type="text" name="username" class="w-50" value="{{ $user->username }}" />
                </div>

                <div class="mb-4">
                    <h4>Пароль</h4>
                    <input type="password" name="password" class="w-50" value="{{ $user->password }}" />
                </div>


                <div class="d-flex flex-row mb-4">
                    <button type="submit" class="btn btn-primary mr-2">Сохранить</button>
                    <a href="/users-list" class="btn btn-secondary">Отмена</a>
                </div>
            </form>
        </div>
    </div>
@endsection