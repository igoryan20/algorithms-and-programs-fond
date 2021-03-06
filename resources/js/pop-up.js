$(document).ready(function () {
    $('#create-category').on('show.bs.modal', function (event) {
        $(document).keypress(function(e) {
            console.log(e.keyCode)
            if (e.keyCode == 13 && !e.shiftKey) {
                $('#create-category-btn').click()
            }
        })
    })
    
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

        $(document).keypress(function(e) {
            console.log(e.keyCode)
            if (e.keyCode == 13 && !e.shiftKey) {
                $('#edit-category-btn').click()
            }
        })
    })
    
    $('#delete-category').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
    
        var name = button.data('name')
        var id   = button.data('id')
    
        var modal = $(this)
        
        modal.find('#delete-text').text('Вы действительно хотите удалить категорию "' + name + '"' + '?')
        modal.find('#delete-id').val(id)

        $(document).keypress(function(e) {
            console.log(e.keyCode)
            if (e.keyCode == 13) {
                $('#cancel-delete-category').click()
            }
        })

    })
    
    $('#change-name').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
    
        var id          = button.data('id')
        var username    = button.data('username')
        var name        = button.data('name')
        var surname     = button.data('surname')
        var patronymic  = button.data('patronymic')
    
    
        var modal = $(this)
        modal.find('#edit-id').val(id)
        modal.find('#edit-username').val(username)
        modal.find('#edit-name').val(name)
        modal.find('#edit-surname').val(surname)
        modal.find('#edit-patronymic').val(patronymic)

        $(document).keypress(function(e) {
            console.log(e.keyCode)
            if (e.keyCode == 13 && !e.shiftKey) {
                $('#save-name-btn').click()
            }
        })
    })

    $('#create-contacts').on('show.bs.modal', function (event) {
        $(document).keypress(function(e) {
            console.log(e.keyCode)
            if (e.keyCode == 13 && !e.shiftKey) {
                $('#create-contacts-btn').click()
            }
        })
    })

    $('#update-contacts').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
    
        var phone   = button.data('phone')
        var email   = button.data('email')
        var address = button.data('address')
        var other   = button.data('other')
    
        var modal = $(this)
        
        modal.find('#update-phone').val(phone)
        modal.find('#update-email').val(email)
        modal.find('#update-address').val(address)
        modal.find('#update-other').val(other)

        $(document).keypress(function(e) {
            console.log(e.keyCode)
            if (e.keyCode == 13 && !e.shiftKey) {
                $('#update-contacts-btn').click()
            }
        })
    })

    $('#edit-description').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        

        var button = $(event.relatedTarget);
    
        var name = button.data('name')
        var description = button.data('description')
        var full_description = button.data('full_description')
    
        var modal = $(this)

        modal.find('#edit-name').val(name)
        modal.find('#edit-description').val(description)
        modal.find('#edit-full_description').val(full_description)

        $(document).keypress(function(e) {
            if (e.keyCode == 13 && !e.shiftKey) {
              $('#save-description').click();
            }
        })
    })
    
    $('#delete-product').on('show.bs.modal', function (event) {
        $(document).keypress(function(e) {
            if (e.keyCode == 13) {
              $('#cancel-btn').click();
            }
        })
    })

    $('#create-release').on('show.bs.modal', function (event) {
        $(document).keypress(function(e) {
            if (e.keyCode == 13) {
              $('#cancel-btn').click();
            }
        })
    })

});

