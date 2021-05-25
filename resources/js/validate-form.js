$(document).ready(function () {
    $('#next').on('click', function (event) {
        event.preventDefault();
        var fill_fields = 0
        if($('#name').val() == '') {
            $('#name_err').html('Введите название продукта').css({'color' : 'red'})
        } else {
            $('#name_err').html('')
            fill_fields += 1
        }
        if($('#description').val() == '') {
            $('#description_err').html('Введите описание продукта').css({'color' : 'red'})
        } else {
            $('#description_err').html('')
            fill_fields += 1
        }
        if($('#full_description').val() == '') {
            $('#full_description_err').html('Введите подробное описание продукта').css({'color' : 'red'})
        } else {
            $('#full_description_err').html('')
            fill_fields += 1
        }
        if($('#categories').val() == '') {
            $('#categories_err').html('Выберите категории').css({'color' : 'red'})
        } else {
            $('#categories_err').html('')
            fill_fields += 1
        }
        if($('#windows').hasClass('active') || $('#macos').hasClass('active') || $('#linux').hasClass('active')) {
            $('#os_err').html('')
            fill_fields += 1
        } else {
            $('#os_err').html('Выберите операционную систему').css({'color' : 'red'})
        }
        if (fill_fields == 5) {
            $('.text').hide();
            $('.text').removeClass('mb-4');
            $('.media').show();
        }
    })
    $('.media').hide();

    $('#input-avatar').change(function(event) {
        var img = document.getElementById('img-avatar')
        var file = document.getElementById('input-avatar').files[0]
        var reader = new FileReader()
        
        reader.onloadend = function () {
            img.src = reader.result
        }

        if (file.type.slice(0, 5) === 'image') {
            reader.readAsDataURL(file)
        } else {
            img.src = '/img/default.png'
        }
    })

    $('#input-avatar').change(function(event) {
        var img = document.getElementById('img-avatar')
        var file = document.getElementById('input-avatar').files[0]
        var reader = new FileReader()
        
        reader.onloadend = function () {
            img.src = reader.result
        }

        if (file.type.slice(0, 5) === 'image') {
            reader.readAsDataURL(file)
        } else {
            img.src = '/img/default.png'
        }
    })
});