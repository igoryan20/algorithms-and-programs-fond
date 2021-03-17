$('#edit-category').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal

    var modal_title = button.data('modal_title')
    var id          = button.data('id')
    var title       = button.data('title')
    var description = button.data('description')
    var url         = button.data('url')
    var weight      = button.data('weight')

    var modal = $(this)
    modal.find('#category-label').text(modal_title)
    modal.find('#edit-id').val(id)
    modal.find('#edit-title').val(title)
    modal.find('#edit-description').val(description)
    modal.find('#edit-url').val(url)
    modal.find('#edit-weight').val(weight)
})

$('#delete-category').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal

    var name = button.data('name')
    var id   = button.data('id')

    var modal = $(this)
    modal.find('#delete-text').text('Вы действительно хотите удалить категорию "' + name + '"' + '?')
    modal.find('#delete-id').val(id)
})

$('change-name').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);

    
})
