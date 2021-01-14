@extends('layouts.main-layout')

@section('title')
    Категории
@endsection

@section('page-content')
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
                        <td>
                            <p class="mb-0">{{ $category->category }}</p>
                            <small>{{ $category->description }}</small>
                        </td>
                        <td>{{ $category->url }}</td>
                        <td>{{ $category->weight }}</td>
                        <th scope="col">
                            <button type="button" id="btn-edit-category" class="btn material-icons mr-2"
                                        data-toggle="modal"
                                    data-target="#edit-category"
                                    data-id="{{ $category->id }}"
                                    data-modal_title="Редактирование категории"
                                    data-title="{{ $category->category }}"
                                    data-description="{{ $category->description }}"
                                    data-url="{{ $category->url }}"
                                    data-weight="{{ $category->weight }}"
                                    >edit</button>
                            <button type="button" class="btn material-icons mr-2" data-toggle="modal"
                                    data-target="#delete-category"
                                    data-name="{{ $category->category }}"
                                    data-id="{{ $category->id }}">clear</button>
                        </th>
                    </tr>
                @endforeach
                </tbody>
        </table>
        <button type="button" class="btn btn-primary mb-4" data-toggle="modal"
                data-target="#create-category">Добавить</button>
        <x-categories-page.categories-pop-up id="create-category" />
        <x-categories-page.categories-pop-up id="edit-category" />
        <x-categories-page.delete-category />
    </div>
@endsection
