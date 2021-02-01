
<div class="modal fade" id="create-release" role="dialog" aria-labelledby="category-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="category-label">Создание релиза</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/upload-release" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="url" class="col-form-label">Название релиза</label>
                        <input type="text" class="form-control" id="edit-url" name="name"
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
                            <label class="btn btn-outline-primary" for="btnradio1">Windows
                                <input type="radio" class="btn-check" id="btnradio1" autocomplete="off" name="Windows">
                            </label>

                            <label class="btn btn-outline-primary" for="btnradio2">MacOS
                                <input type="radio" class="btn-check" id="btnradio2" autocomplete="off" name="MacOS">
                            </label>
                            <label class="btn btn-outline-primary" for="btnradio3">Linux
                                <input type="radio" class="btn-check" id="btnradio3" autocomplete="off" name="Linux">
                            </label>
                          </div>
                    </div>
                    <input type="hidden" value="{{ $id }}" name="id">
                    <div class="form-group">
                        <label for="upload">Выберите загружаемый файл</label>
                        <input type="file" class="form-control-file" id="upload" accept=".exe, .iso, .rar, .zip" name='release'>
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

