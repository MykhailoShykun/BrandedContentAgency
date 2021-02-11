window.addEventListener('load', () => {
    let button = document.querySelector('.play-button-wrapper');
    let video = document.querySelector('.video');

    button.addEventListener('click', () => {
        video.currentTime = 0;
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.mozRequestFullScreen) {
            video.mozRequestFullScreen();
        } else if (video.webkitRequestFullscreen) {
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) {
            video.msRequestFullscreen();
        } else if (video.webkitEnterFullscreen) {
            video.webkitEnterFullscreen();
            video.enterFullscreen();
        }
    })
    document.addEventListener('fullscreenchange', () => {
        video.muted = !video.muted;
        video.play();
    })
})