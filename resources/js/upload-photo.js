try {
    $('#upload-photo-button').click(function(event){
        event.preventDefault();
        $('#upload-photo').click();
        $("#upload-photo").change(function(e){
            $('#upload-photo-form').submit();
        });

    });
} catch (e) {}
