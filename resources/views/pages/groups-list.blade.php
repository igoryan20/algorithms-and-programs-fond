@extends('layouts.main-layout')

@section('title')
    Группы
@endsection

@section('page-content')

    <div class="mx-auto w-75">
        <h1 class="pt-4">Список групп</h1>
        <button class="btn btn-primary">Создать</button>

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
                @foreach ($groups as $group)
                    <tr>
                        <th>{{ $group->id }}</th>
                        <td>{{ $group->name }}</td>
                        <td>{{ $group->description }}</td>
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
        <button type="button" class="btn btn-primary mb-4">Выполнить</button>
    </div>
@endsection
