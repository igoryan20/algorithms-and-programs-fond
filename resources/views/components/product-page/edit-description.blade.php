
<div class="modal fade" id="edit-description" role="dialog" aria-labelledby="category-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-description-label">Редактирование описания продукта</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/update-product-description/{{$product->id}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Название</label>
                        <input type="text" class="form-control" id="edit-name" name="name"
                                required oninvalid="this.setCustomValidity('Введите значение')"
                                oninput="setCustomValidity('')" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Краткое описание</label>
                        <textarea class="form-control" id="edit-description"
                                    name="description" autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="full_description" class="col-form-label">Полное описание</label>
                        <textarea class="form-control" id="edit-full_description"
                                    name="full_description" autocomplete="off"></textarea>
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

