@extends('layouts.main-layout')

@section('title')
    Запросы разрботчиков
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Запросы на получение статуса разработчика</h1>
    <hr class="ml-auto w-75">
    @foreach ($requests as $request)
        <div class="mx-auto w-75 d-flex justify-content-between mb-4">
            <div class="d-flex">
                    <img src="/img/admin.jpg" alt="" class="mr-4" style="width: 100px">
                    <p>{{ $request[0]->name }} {{ $request[0]->patronymic }} {{ $request[0]->surname }}</p>
                <a href=""></a>
            </div>
            <div>
                <button class="btn btn-success">Одобрить</button>
                <button class="btn btn-danger">Отклонить</button>
            </div>
        </div>
    @endforeach
@endsection
