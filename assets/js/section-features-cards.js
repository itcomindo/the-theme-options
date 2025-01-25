window.addEventListener('DOMContentLoaded', (event) => {
    gsap.to('.feat-col', {
        scale: 1,
        y: 0,
        duration: 1,
        stagger: 0.5,
        scrollTrigger: {
            trigger: '#features',
            start: 'top 80%',
            end: 'bottom 80%',
            scrub: true,
        },
    })
});