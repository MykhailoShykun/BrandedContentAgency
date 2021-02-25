let scrollOffset = window.pageYOffset;

window.addEventListener('load', () => {
    window.addEventListener('scroll', () => {
        scrollOffset = window.pageYOffset;
    })
})