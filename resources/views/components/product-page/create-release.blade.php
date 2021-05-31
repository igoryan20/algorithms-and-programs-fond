
<div class="modal fade" id="create-release" role="dialog" aria-labelledby="category-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="category-label">Создание релиза</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/upload-release" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="url" class="col-form-label">Название релиза</label>
                        <input type="text" class="form-control" id="edit-release-name" name="name"
                                required autocomplete="off">
                        <div class="invalid-feedback">
                            Введите название релиза
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Описание изменений</label>
                        <textarea class="form-control" id="release-changes" name="description" required ></textarea>
                        <div class="invalid-feedback">
                            Введите описание изменений
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-primary">
                              <input type="radio" name="Windows" id="option1" checked> Windows
                            </label>
                            <label class="btn btn-outline-primary">
                              <input type="radio" name="MacOS" id="option2"> MacOS
                            </label>
                            <label class="btn btn-outline-primary">
                              <input type="radio" name="Linux" id="option3"> Linux
                            </label>
                        </div>
                    </div>
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="upload" accept=".exe, .iso, .rar, .zip" name='release' required>
                        <div class="invalid-feedback">
                            Выберите загружаемый файл
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

<script src="{{asset('js/validate-release-form.js')}}"></script>

