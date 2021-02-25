let isPacmanRevealed = false;

window.addEventListener('load', function () {
    let aboutSection = document.querySelector('.front-page-about-us');
    let marqueeWrappers = document.querySelectorAll('.marquee-wrapper');
    let pacmans = document.querySelectorAll('.pacman__inner');
    let pacmanFirst = pacmans[0];
    let pacmanSecond = pacmans[1];
    let targetHeight = aboutSection.offsetTop;
    let checkScroll = () => {
        if (scrollOffset + 300 >= targetHeight && isPacmanRevealed === false) {
            isPacmanRevealed = true;
            setTimeout(() => {
                marqueeWrappers.forEach((wrapper) => {
                    wrapper.classList.add('secret');
                })
                pacmanFirst.classList.add('_move-first');
                setTimeout(() => {
                        pacmanSecond.classList.add('_move-second');
                }, 1000);
                setTimeout(() => {
                    pacmans.forEach((item) => {
                        item.classList.add('_hide');
                    })
                    marqueeWrappers.forEach((wrapper) => {
                        wrapper.classList.remove('secret');
                    });
                }, 10000)
            }, 1000);
        }
    }

    window.addEventListener('scroll', checkScroll)
})