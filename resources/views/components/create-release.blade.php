
<div class="modal fade" id="create-release" role="dialog" aria-labelledby="category-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="category-label">Создание релиза</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/categories" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="url" class="col-form-label">Название релиза</label>
                        <input type="text" class="form-control" id="edit-url" name="url"
                                required oninvalid="this.setCustomValidity('Введите значение')"
                                oninput="setCustomValidity('')" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Описание изменений</label>
                        <textarea class="form-control" id="edit-description"
                                    name="description" autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="btn-group" role="group">
                            <label class="btn btn-outline-primary mr-2" for="btncheck1">
                                <input type="checkbox" class="btn-check mr-2" id="btncheck1" autocomplete="off">
                                Windows</label>
                            <label class="btn btn-outline-primary mr-2" for="btncheck2">
                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                Linux</label>
                            <label class="btn btn-outline-primary" for="btncheck3">
                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                MacOS</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="upload">Выберите загружаемый файл</label>
                            <input type="file" class="form-control-file" id="upload" accept=".exe, .iso, .rar, .zip">
                        </div>
                    </div>
                    <input type="hidden" id="edit-id" name = "id" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>

