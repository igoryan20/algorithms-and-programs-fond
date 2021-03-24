<!-- Modal -->
<div class="modal fade" id="{{ $action }}-contacts" tabindex="-1" role="dialog" aria-labelledby="changeNameLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="create-contacts-label">Добавление контактов</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/{{ $action }}-contacts" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username" class="col-form-label">Телефон</label>
                        <input type="text" class="form-control" id="update-phone" name="phone"
                                autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="surname" class="col-form-label">Email</label>
                        <input class="form-control" id="update-email" name="email"
                                autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Адрес</label>
                        <input type="text" class="form-control" id="update-address" name="address"
                                autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Другое</label>
                        <input type="text" class="form-control" id="update-other" name="other"
                                autocomplete="off">
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
