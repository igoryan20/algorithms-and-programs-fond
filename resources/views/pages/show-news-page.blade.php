@extends('layouts.main-layout')

@section('title')
    Новости
@endsection

@section('page-content')

    <div style="background-color: #f9fbe7">
        <h1 class="pt-4 mr-auto ml-auto w-75">Новости</h1>
        <hr class="ml-auto w-75">

        <div class="mr-auto ml-auto w-75 border">
            <h2 class="pl-4 py-2 border-bottom">Новость 1</h2>
            <p class="px-4">Российские разработчики создали сервис распознавания технологий
                 «фальшивых» лиц на видео при помощи нейросетей. Разработка была представлена
                  в рамках программно-образовательного интенсива «Архипелаг 20.35» для специалистов
                  в области искусственного интеллекта.</p>
        </div>
    </div>


@endsection
