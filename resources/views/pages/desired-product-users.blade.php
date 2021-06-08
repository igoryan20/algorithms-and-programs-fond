@extends('layouts.main-layout')

@section('title')
    Желающие
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Список желающих получить продукт ({{ count($users) }})</h1>
    <hr class="ml-auto w-75">
    <div class="mr-auto ml-auto w-75">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Имя пользователя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Отчество</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->patronymic }}</td>
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>
@endsection
