$(document).keypress(function (event) {
    if(event.keyCode == 13) {
        $("[type='submit'").click();
    }
})