gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
if(ScrollTrigger.isTouch !==1){
    ScrollSmoother.create({
        wrapper: '.gsap-wrapper',
        content: '.gsap-content',
        smooth: 1.5,
        effects: true
    })
}