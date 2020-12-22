@extends('layouts.main-layout')

@section('title')
    {{ $program->programName }}
@endsection

@section('page-content')
    <div style="background-color: #f9fbe7">
        <div class="mx-auto w-75 py-4">
            <div class="d-flex">
                @if ($program->imgPath != null)
                    <img src="{{ $program->imgPath }}" alt="картинка 1" class="mr-2" width="76px" height="76px">
                @else
                    <img src="/img/default.png" alt="картинка 1" class="mr-2" width="76px" height="76px">
                @endif
                <div class="d-flex flex-column ml-4">
                    <h1>{{ $program->programName }}</h1>
                    <p>{{ $program->description }}</p>
                </div>
            </div>
            <div class="d-flex mt-4">
                <button class="btn btn-secondary mr-2">Изменить</button>
                <button class="btn btn-secondary mr-2">Удалить</button>
                <button class="btn btn-secondary mr-2" disabled>Опубликовать</button>
                <button class="btn btn-secondary mr-2">Дополнительно</button>
                <button class="btn btn-secondary mr-2">Желаемое</button>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div id="carouselExampleIndicators" class="carousel slide w-75" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="https://placeimg.com/1080/500/animals" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="https://placeimg.com/1080/500/arch" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="https://placeimg.com/1080/500/nature" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
                <div>
                    <p class="py-4 px-4 rounded" style="background-color: #ffe14d">Продукт не опубликован</p>
                    <div>
                        <h1>Категории</h1>
                        <p>Общесистемное ПО</p>
                    </div>
                    <div>
                        <h1>Контакты</h1>
                        <i>Не указаны</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
