
<div class="modal fade" id="edit-description" role="dialog" aria-labelledby="category-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-description-label">Редактирование описания продукта</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update-product-description/{{$product->id}}" method="POST" class="needs-validation" novalidate>
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Название</label>
                        <input type="text" class="form-control" id="edit-name" name="name"
                                required autocomplete="off" />
                        <div class="invalid-feedback">
                            Введите название продукта
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Краткое описание</label>
                        <textarea class="form-control" id="edit-description"
                                    name="description" required value=""></textarea>
                        <div class="invalid-feedback">
                            Введите краткое описание продукта
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="full_description" class="col-form-label">Полное описание</label>
                        <textarea class="form-control" id="edit-full_description"
                                    name="full_description" required autocomplete="off"></textarea>
                        <div class="invalid-feedback">
                            Введите полное описание продукта
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button id="save-description" type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>   