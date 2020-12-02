@extends('layouts.main-layout')

@section('title')
    Категории
@endsection

@section('page-content')

    <div style="background-color: #f9fbe7">
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
                            <td>{{ $category->category }}</td>
                            <td>{{ $category->url }}</td>
                            <td>{{ $category->weight }}</td>
                            <th scope="col">
                                <button type="button" class="btn material-icons mr-2">edit</button>
                                <button type="button" class="btn material-icons mr-2">clear</button>
                            </th>
                        </tr>
                    @endforeach
                  </tbody>
            </table>
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Добавить</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание категории</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Заголовок</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Описание</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">URL</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Вес</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-primary">Сохранить</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>


@endsection
