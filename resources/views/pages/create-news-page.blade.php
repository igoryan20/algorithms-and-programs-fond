@extends('layouts.main-layout')

@section('title')
    Создание новости
@endsection

@section('page-content')

    <div style="background-color: #f9fbe7">
        <h1 class="pt-4 mr-auto ml-auto w-75">Создание новости</h1>
        <hr class="ml-auto w-75">

        <div class="mr-auto ml-auto w-75">
            <form action="/create-news" method="POST" >
                {{ csrf_field() }}
                <div class="mb-4">
                    <h4>Заголовок</h4>
                    <input type="text" class="w-50" name="title" />
                </div>

                <div class="mb-4">
                    <h4>Содержимое</h4>
                    <textarea type="text" class="w-50" name="content" style="height: 10rem"> </textarea>
                </div>

                <div class="d-flex flex-row mb-4">
                    <button class="btn btn-primary mr-2">Сохранить</button>
                    <button class="btn btn-secondary">Отмена</button>
                </div>
            </form>
        </div>
    </div>


@endsection
