gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
if(ScrollTrigger.isTouch !==1){
    ScrollSmoother.create({
        wrapper: '.gsap-wrapper',
        content: '.gsap-content',
        smooth: 1.5,
        effects: true
    })
}

gsap.fromTo('.header-content.mission-title, .p-centered.mission, .header-content.vision-title, .p-centered.vision', { opacity: 1 }, {
    opacity: .2, 
    scrollTrigger: {
        trigger: '.header-content.mission-title, .p-centered.mission, .header-content.vision-title, .p-centered.vision',
        start: 'center',
        end: '1500',
        scrub: true
    }
})

gsap.fromTo('.header-content.mission-title, .p-centered.mission', {x: 50, opacity: .6}, {x: 0, opacity: 1, duration: 2});
gsap.fromTo('.header-content.vision-title, .p-centered.vision', {x: -40, opacity: .6}, {x: 0, opacity: 1, duration: 2});

gsap.fromTo('.header-content.far-title', { opacity: .6, y: -30,}, {
    opacity: 1, y: 0,
    scrollTrigger: {
        trigger: '.header-content.far-title',
        scrub: true
    }
})

gsap.fromTo('.headings-container', { opacity: .6, y: 50,}, {
    opacity: 1, y: 0,
    scrollTrigger: {
        trigger: '.headings-container',
        scrub: true
    }
})

gsap.fromTo('.about-anim__p', { opacity: .6, y: 20,}, {
    opacity: 1, y: 0,
    scrollTrigger: {
        trigger: '.about-anim__p',
        scrub: true
    }
})
