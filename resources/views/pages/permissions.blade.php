@extends('layouts.main-layout')

@section('title')
    Разрешения
@endsection

@section('page-content')

    <div class="mx-auto w-75">
        <h1 class="pt-4">Список разрешений</h1>
        <hr />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Название</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <th>{{ $permission->id }}</th>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->description }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="" type="button" class="btn material-icons mr-2">edit</a>
                                <a href="" type="button" class="btn material-icons mr-2">clear</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
        </table>
        <button type="button" class="btn btn-outline-primary mb-4">Добавить разрешение</button>
    </div>
@endsection
