window.addEventListener('DOMContentLoaded', (event) => {

    function animFeaturesColumn() {

        gsap.from('.feat-col', {
            scale: 0,
            duration: 1,
            stagger: 0.2,
            scrollTrigger: {
                trigger: '#features',
                start: 'top 70%',
                end: 'top 30%',
                scrub: 2
            }
        })
    }
    animFeaturesColumn();




});