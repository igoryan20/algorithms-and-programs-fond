@extends('layouts.main-layout')

@section('title')
    Создание продукта
@endsection

@section('page-content')

    <h1 class="pt-4 mr-auto ml-auto w-75">Создание продукта</h1>
    <hr class="ml-auto w-75">
    <div class="mr-auto ml-auto w-75">
        <form action="/create-product" method="POST" enctype=multipart/form-data>
            @csrf
            <div class="mb-4 d-flex flex-column text">
                <div class="text">
                    <h4>Название</h4>
                    <input id="name" type="text" class="w-50" name="name" />
                    <br>
                    <small id="name_err"></small>
                </div>
            </div>
            <div class="mb-4 text d-flex flex-column text">
                <div class="text">
                    <h4>Краткое описание</h4>
                    <input id="description" type="text" class="w-50 text" name="description" />
                    <br>
                    <small id="description_err"></small>
                </div>
            </div>
            <div class="mb-4 text">
                <div class="text">
                    <h4>Подробное описание</h4>
                    <textarea id="full_description" cols="77" rows="10" name="full_description" ></textarea>
                    <br>
                    <small id="full_description_err"></small>
                </div>
            </div>
            <div class="mb-4 d-flex flex-column text">
                <div class="text">
                    <h4 id="label">Категории</h4>
                    <select id="categories" class="w-50" multiple name="categories[]">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <small>Для выбора нескольких вариантов нажмите и держите Ctrl</small>
                    <br>
                    <small id="categories_err"></small>
                </div>
            </div>
            <div class="mb-4 w-25 text">
                <div class="d-flex flex-column">
                    <h4>Операционная система</h4>
                    <fieldset class="btn-group btn-group-toggle" data-toggle="buttons" id="os" name="os">
                        <label class="btn btn-outline-primary" id="windows">
                            <input type="checkbox" value="1" name="os[]"> Windows
                        </label>
                        <label class="btn btn-outline-primary" id="macos">
                            <input type="checkbox" value="2" name="os[]"> MacOS
                        </label>
                        <label class="btn btn-outline-primary" id="linux">
                            <input type="checkbox" value="3" name="os[]"> Linux
                        </label>
                    </fieldset>
                    <small id="os_err"></small>
                </div>
            </div>
            <div class="mb-4 media">
                <div class="d-flex flex-column">
                    <h4>Аватар продукта</h4>
                    <img id="img-avatar" src="/img/default.png" alt="" width="150px" class="mb-2">
                    <input type="file" id="input-avatar" class="position-absolute" name="avatar" accept="image/*" />
                    <button type="button" class="btn btn-outline-secondary material-icons" onclick="$('#input-avatar').click()">Изменить</button>
                </div>
            </div>
            <div class="d-flex flex-row mb-4">
                <button id="next" class="btn btn-primary mr-2 text">Далее</button>
                <button id="submit" class="btn btn-primary mr-2 media">Сохранить</button>
                <a href="/" class="btn btn-secondary">Отмена</a>
            </div>
        </form>
    </div>

    <style>
        #input-avatar {
            left: -10000px;
            top: -10000px;
        }
    </style>

    <!-- <script src="{{asset('js/selectpicker.js')}}"></script> -->
    <script src="{{asset('js/validate-form.js')}}"></script>
@endsection