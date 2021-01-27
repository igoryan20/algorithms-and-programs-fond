@extends('layouts.main-layout')

@section('title')
    {{ $program->programName }}
@endsection

@section('page-content')
    <div class="mx-auto w-75 py-4">
        <div>

        </div>
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
            <div class="dropdown mr-2">
                <a class="nav-link dropdown-toggle btn btn-secondary" href="#" id="categoriesDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Дополнительно
                </a>
                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                    <a class="dropdown-item" href="" data-toggle="modal"
                    data-target="#create-release">Создать релиз</a>
                    <a class="dropdown-item" href="">Контакты</a>
                    <a class="dropdown-item" href="/journal/{{ $program->id }}">Журнал</a>
                    <a class="dropdown-item" href="">Пользователи</a>
                    <a class="dropdown-item" href="">Ключи</a>
                </div>
                <x-create-release :id="$program->id" />
            </div>
            <button class="btn btn-secondary mr-2">Желаемое</button>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <div>
                <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($photo_paths as $photo_path)
                            @if ($photo_paths->search($photo_path) == 0)
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            @else
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $photo_paths->search($photo_path) }}"></li>
                            @endif
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($photo_paths as $photo_path)
                            @if ($photo_paths->search($photo_path) == 0)
                                <div class="carousel-item active">
                                    <img class="d-block" src="/storage/default.jpg" style="width: 60em" alt="">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ $photo_path }}" alt="Second slide">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
                <form action="" method="POST" class="mt-4">
                    <button for="upload-photo" class="btn btn-success">Добавить изображение</button>
                    <input type="file" name="photo" id="upload-photo" />
                    <style>
                        label {
                            cursor: pointer;
                        }
                        #upload-photo {
                            opacity: 0;
                            position: absolute;
                            z-index: -1;
                        }
                    </style>
                </form>
            </div>
            <div>
                <p class="py-4 px-4 rounded" style="background-color: #ffe14d">Продукт не опубликован</p>
                <div>
                    <h1>Категории</h1>
                    @foreach ($categories as $category)
                        <p>{{ $category }}</p>
                    @endforeach
                </div>
                <div>
                    <h1>Контакты</h1>
                    <i>Не указаны</i>
                </div>
            </div>
        </div>
    </div>
@endsection
