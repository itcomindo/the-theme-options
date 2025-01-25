window.addEventListener('DOMContentLoaded', (event) => {

    gsap.registerPlugin(ScrollTrigger);

    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true,
        smoothTouch: false,
        wrapper: window, // Pastikan ini mengacu pada elemen yang benar
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
        ScrollTrigger.update();
    }

    requestAnimationFrame(raf);

    // animHeroLogo
    function animHeroLogo() {
        gsap.to('#hero-logo', {
            scale: 2,
            duration: 1,
            scrollTrigger: {
                //    markers: true,
                trigger: '#features',
                start: 'top 80%',
                end: 'top 30%',
                scrub: true
            }
        });
    }
    animHeroLogo();
    // animHeroLogo





});