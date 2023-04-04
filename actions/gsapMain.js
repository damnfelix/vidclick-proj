gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
if(ScrollTrigger.isTouch !==1){
    ScrollSmoother.create({
        wrapper: '.gsap-wrapper',
        content: '.gsap-content',
        smooth: 1.5,
        effects: true
    })
}

gsap.fromTo('.text-side', { opacity: 1 }, {
    opacity: 0, 
    scrollTrigger: {
        trigger: '.text-side',
        start: 'center',
        end: '650',
        scrub: true
    }
})

let utilList = gsap.utils.toArray('.blue-anim__header, .blue-anim__p, .blue-anim__img, #btn-help-ua');

utilList.forEach(item => {
    gsap.fromTo(item, { x: 35}, {
        x: 0, 
        scrollTrigger: {
            trigger: item,
            scrub: true
        }
    })
});

gsap.fromTo('.text-side', {x: -40}, {x: 0, duration: 1.5, delay: 0.8});
gsap.fromTo('.hashtag-content', {y: -20}, {y: 0, duration: 1.2});
gsap.fromTo('.soldier-image', {opacity: 0, x: -30}, {opacity: 1, x: 0,  duration: 1.2})


