@extends('layouts.main-layout')

@section('title')
    Профиль
@endsection

@section('page-content')

<div style="background-color: #f9fbe7">
    <h1 class="pt-4 mr-auto ml-auto w-75">Мой профиль</h1>
    <hr class="ml-auto w-75">

    <div class="mr-auto ml-auto w-75">
        <div class="d-flex flex-row">
            <img src="/img/default.png" alt="" class="w-25 mr-4">
            <div>
                <h2>admin</h2>
                <p>Admin Admin Admin</p>
                <button type="button" class="btn btn-dark mb-4">Изменить</button>
                <h4>Статус: admin</h4>
            </div>
        </div>
    </div>
</div>
@endsection
