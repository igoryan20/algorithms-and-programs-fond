@extends('layouts.main-layout')

@section('title')
    Журнал
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Журнал релизов</h1>
    <hr class="ml-auto w-75">
    <div class="mr-auto ml-auto w-75">
        @if ($releases->isEmpty())
            <h5 class="mb-2">У данного продукта ещё нет релизов</h5>
            <a class="btn btn-success mb-4" href="" data-toggle="modal"
                data-target="#create-release">Создать релиз</a>
            <x-product-page.create-release :program="$program" />
            <div>
                <a href="/" class="btn btn-info" style="color: white">Перейти на страницу с продуктами</a>
                <a href="/product/{{ $program->id }}" class="btn btn-info" style="color: white">Перейти на страницу с данным продуктом</a>
            </div>
        @else
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
                        </tr>
                    @endforeach
                @endif

                </tbody>
        </table>
    </div>
@endsection
