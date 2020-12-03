<!-- Modal -->
<div class="modal fade" id="delete-category" tabindex="-1" role="dialog" aria-labelledby="deleteCategoryLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteCategoryLabel">Подтверждение</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="delete-text">
          Вы действительно хотите удалить категорию ?
        </div>
        <form action="/categories" method="POST">
            {{ csrf_field() }}
            <input type="hidden" id="delete-id" name="id" />
            <input type="hidden" id="delete-type" name="type" value="delete">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-danger">Удалить</button>
            </div>
        </form>
      </div>
    </div>
  </div>
