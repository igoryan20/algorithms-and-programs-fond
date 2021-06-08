<!-- Modal -->
<div class="modal fade" id="change-name" tabindex="-1" role="dialog" aria-labelledby="changeNameLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="change-user-title">Изменение ФИО</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/update-fullname" method="POST" class="needs-validation" novalidate>
          @csrf
          <div class="modal-body">
                  <div class="form-group">
                      <label for="username" class="col-form-label">Никнейм</label>
                      <input type="text" class="form-control" id="edit-username" name="username"
                              required>
                      <div class="invalid-feedback">
                        Введите никнейм
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="surname" class="col-form-label">Фамилия</label>
                      <input class="form-control" id="edit-surname" name="surname"
                                  required></textarea>
                      <div class="invalid-feedback">
                        Введите фамилию
                      </div>
                  </div>
                  <div class="d-flex flex-row justify-content-between">
                      <div class="form-group">
                          <label for="name" class="col-form-label">Имя</label>
                          <input type="text" class="form-control" id="edit-name" name="name"
                                  required>
                          <div class="invalid-feedback">
                            Введите имя
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="patronymic" class="col-form-label">Отчество</label>
                          <input type="text" class="form-control" id="edit-patronymic" name="patronymic" required />
                          <div class="invalid-feedback">
                            Введите отчество
                          </div>
                      </div>
                      <input type="hidden" id="edit-id" name = "id" />
                  </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
              <button id="save-name-btn" type="submit" class="btn btn-primary">Сохранить</button>
          </div>
          </form>
      </div>
    </div>
  </div>
