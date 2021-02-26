let timeline = new TimelineMax();

let tween = TweenMax.to('.animated-circle', 1, {rotation: -360, ease: Linear.easeNone,})
    ;
let innerCircle = TweenMax.to('.inner-circle', 1, {width: '100%', height: '100%', top: '50%', right: '50%'});

timeline.add(tween).add(innerCircle);

let controller = new ScrollMagic.Controller();

let scene = new ScrollMagic.Scene({
    triggerElement: '.section_animation',
    duration: 1000,
})
    .setPin('.section_animation')
    .setTween(timeline)
    .addTo(controller)
    .on('end', () => {
        let circle = document.querySelector('.animated-circle');
        circle.style = '';
        document.querySelector('.section_animation').classList.toggle('fill');
    });

let frontPageReturn = document.querySelector('.return-to-the-top');

frontPageReturn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    })
})