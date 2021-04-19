@extends('layouts.main-layout')

@section('title')
    Профиль
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Мой профиль</h1>
    <hr class="ml-auto w-75">
    <div class="mr-auto ml-auto w-75">
        <div class="d-flex justify-content-row flex-wrap">

            <!-- Форма для изменения автара пользователя -->
            <form id="form-avatar" action="/update-user-avatar" method="POST" enctype="multipart/form-data" class="d-flex flex-column mr-4" style="max-width: 100%">
                @csrf
                @if($user->avatar_path)
                    <img src="{{ $user->avatar_path }}" alt="" style="width: 100%">
                @else
                    <img src="/img/admin.jpg" alt="" style="width: 100%">
                @endif
                <input type="file" id="input-avatar" name="avatar" >
                <button type="submit" id="update-avatar" class="btn btn-outline-secondary mt-2">Изменить фото</button>
            </form>
            
            
            <div class="d-flex flex-column">
                <!-- Вывод ФИО и кнопки для вызова модального окна их изменения -->
                <h2>{{ $user->username }}</h2>
                <p>{{ $user->surname }} {{ $user->name }} {{ $user->patronymic }}</p>
                <button type="submit" id="btn-change-name" class="btn btn-outline-secondary mb-4" data-toggle="modal"
                                    data-target="#change-name"
                                    data-id="{{ $user->id }}"
                                    data-username="{{ $user->username }}"
                                    data-name="{{ $user->name }}"
                                    data-surname="{{ $user->surname }}"
                                    data-patronymic="{{ $user->patronymic }}"                                    
                                    >
                 Изменить</button>
                 <div class="mb-4">
                    <h4 class="mb-4">Группа: {{ $user->group->name }}</h4>
                    @if($user->group->id == 1)
                        @if(!$user->requestForDeveloperStatus)
                            <form action="/create-request/{{ $user->id }}" method="POST">
                                @csrf
                                <button class="btn btn-outline-secondary">Сделать запрос на получение статуса разработчика</button>
                            </form>
                        @else
                            <p class="py-4 px-4 rounded" style="background-color: #ffe14d;">
                            Статус запроса на получение прав разработчика: {{ $user->requestForDeveloperStatus->status }}</p>
                        @endif
                    @endif
                 </div>
                <!-- Вывод контактов и кнопки для вызова модального окна их изменения -->
                <h4>Контакты</h4>
                @if($user->contacts)
                    <div class="d-flex flex-column mb-2">
                        @if($user->contacts->phone)
                            <p class="mb-0 mt-2">Телефон: {{ $user->contacts->phone }}</p>
                        @endif
                        @if($user->contacts->email)
                            <p class="mb-0 mt-2">Почта: {{ $user->contacts->email }}</p>
                        @endif
                        @if($user->contacts)
                            <p class="mb-0 mt-2">Адрес: {{ $user->contacts->address }}</p>
                        @endif
                        @if($user->contacts->other)
                            <p class="mb-0 mt-2">Дополнительно: {{ $user->contacts->other }}</p>
                        @endif
                        
                        <button type="button" class="btn btn-outline-secondary mt-2 mb-4" data-toggle="modal"
                                    data-target="#update-contacts"
                                    data-id="{{ $user->id }}"
                                    data-phone="{{ $user->contacts->phone }}"
                                    data-email="{{ $user->contacts->email }}"
                                    data-address="{{ $user->contacts->address }}"
                                    data-other="{{ $user->contacts->other }}"
                                    >
                        Изменить</button>
                    </div>
                @else
                    <div class="mb-2">
                        <i>Не указаны</i>
                    </div>
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal"
                                    data-target="#create-contacts"
                                    data-id="{{ $user->id }}"
                    >Добавить</button>
                @endif              
                    
            </div>
        </div>
    </div>

    <!-- Компоненты профиля -->
    <x-profile.change-name />
    <x-profile.post-contacts action="create" />
    <x-profile.post-contacts action="update" />

    <!-- Убрал инпут автаар из поля видимости -->
    <style>
        #input-avatar {
            position: absolute;
            left: -10000px;
            top: -10000px;
        }
    </style>

    <!-- Скрипт для изменения аватара  -->
    <script>
        $('#update-avatar').click( (event) => {
            event.preventDefault()
            $('#input-avatar').click()
        })
        $('#input-avatar').change( (event) => {
            $('#form-avatar').submit()
        })
    </script>

@endsection
