window.addEventListener('load', () => {
    let main = document.querySelector('.main');
    let header = document.querySelector('.header');
    let frontPageLoad = document.querySelector('.front-page-load');


    frontPageLoad.classList.add('hide');
    header.classList.remove('front-page');
    setTimeout(() => {
        main.classList.remove('overlay_white');
        frontPageLoad.remove();
        setTimeout(() => {
            main.classList.remove('front-page')
        }, 3000)
    }, 3000)
})