Echo.channel(`release`)
    .listen('ReleasePublished', (e) => {
        console.log(e);
    });
