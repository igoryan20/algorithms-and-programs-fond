@extends('layouts.main-layout')

@section('title')
    Категории
@endsection

@section('page-content')

    <div style="background-color: #f9fbe7">
        <h1 class="pt-4 mr-auto ml-auto w-75">Категории</h1>
        <hr class="ml-auto w-75">
        <div class="mr-auto ml-auto w-75">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Заголовок и описание</th>
                      <th scope="col">URL</th>
                      <th scope="col">Вес</th>
                      <th scope="col">Редактирование</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->category }}</td>
                            <td>{{ $category->url }}</td>
                            <td>{{ $category->weight }}</td>
                            <th scope="col">
                                <button type="button" class="btn material-icons mr-2">edit</button>
                                <button type="button" class="btn material-icons mr-2">clear</button>
                            </th>
                        </tr>
                    @endforeach
                  </tbody>
            </table>
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#create-category">Добавить</button>
            <x-categories-pop-up />
        </div>
    </div>
@endsection
