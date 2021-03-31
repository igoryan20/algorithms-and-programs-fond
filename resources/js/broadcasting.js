console.log('heeere')

Echo.private('release.${productId}')
    .listen('ReleasePublished', (e) => {
        console.log('there');
        console.log(e.release);
    });
