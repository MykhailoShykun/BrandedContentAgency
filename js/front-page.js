let scrollOffset = window.pageYOffset;

window.addEventListener('load', () => {
    window.addEventListener('scroll', () => {
        scrollOffset = window.pageYOffset;
    })
    let preloader = document.querySelector('.preloader');
    let preloaderInner = document.querySelector('.preloader__inner');
    let preloaderCircle = document.querySelector('.preloader__circle');
    let wrapper = document.querySelector('.wrapper');

    let headerLogotype = document.querySelector('.header > .container > .logotype-wrapper');

    let checkWidth = () => {
        wrapper.style.width = window.innerWidth / 2 + 'px';
        wrapper.style.height = window.innerWidth / 2 + 'px';
    }

    preloader.classList.add('_loaded');
    wrapper.style.width = window.innerWidth / 2 + 'px';
    wrapper.style.height = window.innerWidth / 2 + 'px';
    window.addEventListener('resize', checkWidth);

    setTimeout(() => {
        preloaderCircle.classList.add('_shorten')
    }, 300)

    setTimeout(() => {
        window.removeEventListener('resize', checkWidth)
        let offsetLeft = headerLogotype.offsetLeft;
        let offsetTop = headerLogotype.offsetTop;
        preloaderInner.style = `left: ${offsetLeft}px; top: ${offsetTop}px; transform: translate(0, 0)`;
        wrapper.style.width = window.getComputedStyle(headerLogotype).width;
        wrapper.style.height = window.getComputedStyle(headerLogotype).height;
        setTimeout(() => {
            preloader.classList.add('_hide')
            setTimeout(() => {
                preloader.remove();
            }, 300)
        }, 500);
    }, 800)

})