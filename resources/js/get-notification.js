$(document).ready(() => {    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    dataString = 'cipher';
    
    $.ajax({
        type: "GET",
        url: "/getCurrentUserId",
        cache: false,
    
        success: (user)  => {
            Echo.private(`App.Models.User.` + user.id)
            .notification((notification) => {
                $('.toast-title').text(notification.title)
                $('.toast-message').text(notification.linkMessage)
                $('.toast-link').text(notification.linkName)
                $('.toast-link').attr('href', notification.link);
                $('.toast').toast('show');
                console.log(notification);
            });
        },
    
        error: function(st, e) {
            console.log(st)
            console.log(e)
        }
    }); 
});
