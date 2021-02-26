window.addEventListener('load', () => {
    let hamburger = document.querySelector('.hamburger');
    let startProject = document.querySelector('.start-project');
    let logotypeWrapper = document.querySelector('.logotype-wrapper');
    let overlayMenu = document.querySelector('.overlay-menu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('rotate');
        startProject.classList.toggle('hide');
        logotypeWrapper.classList.toggle('hide');
        overlayMenu.classList.toggle('show');
    })
})