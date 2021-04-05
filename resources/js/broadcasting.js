console.log('heeere')

Echo.private('App.Models.User.2')
    .notification((notification) => {
        console.log(notification.type);
});
