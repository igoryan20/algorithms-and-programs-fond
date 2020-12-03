$('#edit-category').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal

    var modal_title = button.data('modal_title')
    var title       = button.data('title') // Extract info from data-* attributes
    var description = button.data('description')
    var url         = button.data('url')
    var weight      = button.data('weight')

    var modal = $(this)
    modal.find('#category-label').text(modal_title)
    modal.find('#edit-title').val(title)
    modal.find('#edit-description').val(description)
    modal.find('#edit-url').val(url)
    modal.find('#edit-weight').val(weight)
})
