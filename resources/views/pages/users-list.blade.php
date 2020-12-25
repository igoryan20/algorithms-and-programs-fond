@extends('layouts.main-layout')

@section('title')
    Пользователи
@endsection

@section('page-content')

    <div style="background-color: #f9fbe7">
        <h1 class="pt-4 mr-auto ml-auto w-75">Список пользователей</h1>
        <hr class="ml-auto w-75">
        <div class="mr-auto ml-auto w-75">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Имя пользователя</th>
                      <th scope="col">Фамилия</th>
                      <th scope="col">Имя</th>
                      <th scope="col">Отчество</th>
                      <th scope="col">Последний вход</th>
                      <th scope="col">Редактирование</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->patronymic }}</td>
                            <td>{{ $user->last_login }}</td>
                            <th scope="col">
                                <a href="/users-list/edit-user/{{ $user->id }}" type="button" id="btn-edit-category" class="btn material-icons mr-2">edit</a>
                            </th>
                        </tr>
                    @endforeach
                  </tbody>
            </table>
            <button type="button" class="btn btn-primary mb-4">Выполнить</button>

        </div>
    </div>
@endsection
