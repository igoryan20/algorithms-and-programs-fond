@extends('layouts.main-layout')

@section('title')
    Журнал
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Журнал релизов</h1>
    <hr class="ml-auto w-75">
    <div class="mr-auto ml-auto w-75">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Название</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Операционная система</th>
                    <th >Ссылка для скачивания</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($releases as $release)
                    <tr>
                        <td>{{ $release->name }}</td>
                        <td>{{ $release->description }}</td>
                        <td>
                            <div class="mx-auto w-50">
                                @if ($release->os_id == 1)
                                <i class="fab fa-windows fa-2x"></i>
                                @endif
                                @if ($release->os_id == 2)
                                    <i class="fab fa-apple fa-2x"></i>
                                @endif
                                @if ($release->os_id == 3)
                                    <i class="fab fa-linux fa-2x"></i>
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="mx-auto w-50">
                                <a href="/download-release/{{ $release->id }}"><i class="fas fa-download fa-2x"></i></a>
                            </div>
                        </td>
                        {{-- <th scope="col">
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
                        </th> --}}
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>
@endsection
