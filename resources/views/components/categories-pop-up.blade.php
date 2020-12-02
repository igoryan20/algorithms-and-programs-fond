
<div class="modal fade" id="create-category" role="dialog" aria-labelledby="category-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="category-label">Создание категории</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/categories" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Заголовок</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Описание</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="form-group">
                                <label for="url" class="col-form-label">URL</label>
                                <input type="text" class="form-control" id="url" name="url">
                            </div>
                            <div class="form-group">
                                <label for="weight" class="col-form-label">Вес</label>
                                <input type="text" class="form-control" id="weight" name="weight">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>

