window.addEventListener('load', () => {
    let swiperWrapper = document.querySelector('.swiper-container__wrapper');
    let container = document.querySelector('.section_single-content > .container');
    let footerContainer = document.querySelector('.footer > .container');
    let singleTextBlock = document.querySelector('.single__text-block');

    if (window.innerWidth - 200 >= 1280) {
        let marginLeft = window.getComputedStyle(footerContainer).marginLeft;
        swiperWrapper.style = `margin-left: ${marginLeft}; width: calc(100% - ${marginLeft})`;
        container.style = `margin-left: ${marginLeft}; width: calc(100% - ${marginLeft})`;
        singleTextBlock.style = `padding-right: ${marginLeft};`;
    }

    window.addEventListener('resize', () => {
        if (window.innerWidth - 200 >= 1280) {
            let marginLeft = window.getComputedStyle(footerContainer).marginLeft;
            swiperWrapper.style = `margin-left: ${marginLeft}; width: calc(100% - ${marginLeft})`;
            container.style = `margin-left: ${marginLeft}; width: calc(100% - ${marginLeft})`;
            singleTextBlock.style = `padding-right: ${marginLeft};`;
        }
    })


    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination_mobile',
        },
        breakpoints: {
            1200: {
                slidesPerView: 2,
                spaceBetween: '50px',
                pagination: {
                    el: '.swiper-pagination_desktop',
                },
            }
        }
    });

    let button = document.querySelectorAll('.play-button-wrapper');
    let video = document.querySelectorAll('.swiper-video');

    console.log(button, video)

    for (let i = 0; i < button.length; i++) {
        console.log(button[i], video[i])
        if (video[i].parentNode.classList.contains('swiper-slide-duplicate') === false) {
            button[i].addEventListener('click', () => {
                video[i].currentTime = 0;
                if (video[i].requestFullscreen) {
                    video[i].requestFullscreen();
                } else if (video[i].mozRequestFullScreen) {
                    video[i].mozRequestFullScreen();
                } else if (video[i].webkitRequestFullscreen) {
                    video[i].webkitRequestFullscreen();
                } else if (video[i].msRequestFullscreen) {
                    video[i].msRequestFullscreen();
                } else if (video[i].webkitEnterFullscreen) {
                    video[i].webkitEnterFullscreen();
                    video[i].enterFullscreen();
                }
            })
            document.addEventListener('fullscreenchange', () => {
                video[i].muted = !video[i].muted;
                video[i].play();
            })
        }
    }
})