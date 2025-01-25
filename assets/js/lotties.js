window.addEventListener('DOMContentLoaded', (event) => {
    function debounce(func, wait) {
        let timeout;
        return function () {
            const context = this,
                args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(context, args), wait);
        };
    }
    // Run both functions with debounce on resize
    jQuery(window).on(
        'resize',
        debounce(function () {
            gsapEagle();
        }, 200) // Adjust debounce delay as needed
    );
    //---------------------------------------
    // getScreenWidth output return Start
    //---------------------------------------
    function fpGetScreenWidth() {
        var $screenWidth = window.innerWidth;
        return $screenWidth;
    }
    //----------------------------------------
    // getScreenWidth output return End
    //----------------------------------------
    //---------------------------------------
    // lottieEagle Start
    //---------------------------------------
    function lottieEagle() {
        var lottieAnimation = lottie.loadAnimation({
            container: document.getElementById('eagle'), // ID kontainer
            path: '/wp-content/uploads/lotties/eagle.json',
            renderer: 'svg',
            loop: true,
            autoplay: true,
        });
    }
    lottieEagle();
    //----------------------------------------
    // lottieEagle End
    //----------------------------------------
    function gsapEagle() {
        const $eagle = document.getElementById('eagle');
        $screenWidth = fpGetScreenWidth();
        if ($screenWidth < 768) {
            // do nothins
        } else if ($screenWidth < 991) {
            console.log('991 ini < ' + $screenWidth)
            gsap.to($eagle, {
                scale: 1.2,
                duration: 3,
                x: 100,
                y: '-10rem'
            });
        } else if ($screenWidth < 1029) {
            console.log('1029 ini < ' + $screenWidth)
            gsap.to($eagle, {
                scale: 1.2,
                duration: 3,
                x: 200,
                y: '-10rem'
            });
        } else if ($screenWidth < 1441) {
            console.log('1441 ini < ' + $screenWidth)
            gsap.to($eagle, {
                scale: 1.2,
                duration: 3,
                x: 400,
                y: '-10rem'
            });
        } else if ($screenWidth < 1921) {
            console.log('1921 ini < ' + $screenWidth)
            gsap.to($eagle, {
                scale: 1.2,
                duration: 3,
                x: 700,
                y: '-10rem'
            });
        }
    }
    gsapEagle();
});