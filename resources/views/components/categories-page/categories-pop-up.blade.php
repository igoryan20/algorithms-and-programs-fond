
<div class="modal fade" id="{{ $id }}" role="dialog" aria-labelledby="category-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="category-label">Создание категории</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/categories" method="POST" class="needs-validation" novalidate>
                {{ csrf_field() }}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Заголовок</label>
                            <input type="text" class="form-control" id="edit-title" name="title"
                                    required autocomplete="off">
                            <div class="invalid-feedback">
                                Введите название категории
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Описание</label>
                            <textarea class="form-control" id="edit-description"
                                        name="description" autocomplete="off"></textarea>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="form-group">
                                <label for="url" class="col-form-label">URL</label>
                                <input type="text" class="form-control" id="edit-url" name="url"
                                        required autocomplete="off">
                                <div class="invalid-feedback">
                                    Введите URL
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="weight" class="col-form-label">Вес</label>
                                <input type="number" class="form-control" id="edit-weight" name="weight" required />
                                <div class="invalid-feedback">
                                    Введите вес продукта
                                </div>
                            </div>
                            <input type="hidden" id="edit-id" name = "id" />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    @if($id == 'create-category')
                        <button id='create-category-btn' type="submit" class="btn btn-primary">Сохранить</button>
                    @else
                        <button id='edit-category-btn' type="submit" class="btn btn-primary">Сохранить</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

