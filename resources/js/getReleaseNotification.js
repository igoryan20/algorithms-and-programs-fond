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
            $('.toast').toast('show')
            console.log(notification);
        });
    },

    error: function(st, e) {
        console.log(st)
        console.log(e)
    }
});

