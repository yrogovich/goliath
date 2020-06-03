window.addEventListener('load', () => {
    setTimeout(hidePreload, 2000); // onLoad wait 2 sec
});

// Globals
let timeline1;

(function($) {
    $(function() {
        let macbook = $('.macbook');
        let ipad = $('.ipad');
        let iphone = $('.iphone');

        timeline1 = new TimelineMax({ paused: true});

        timeline1.to(macbook, 0, {opacity: 0, scale: 0, y: 200})
                .to(ipad, 0, {opacity: 0, y: -300})
                .to(iphone, 0, {opacity: 0, y: -200} )
                .to(macbook, 2, {opacity: 1, scale: 1, y: 0, ease: Power2.easeOut})    
                .to(ipad, 2, {opacity: 1, y: 0, ease: Power2.easeOut}, "-=1")
                .to(ipad, 3, {
                    y: -20,
                    yoyo: true, 
                    repeat: -1, 
                    ease: Sine.easeInOut
                })
                .to(iphone, 1.5, {opacity: 1, y: 0, ease: Power2.easeOut}, "-=4")
                .to(iphone, 2.5, {
                    y: -50,
                    yoyo: true, 
                    repeat: -1, 
                    ease: Sine.easeInOut
                })
                .to(macbook, 2.5, {
                    y: -10,
                    yoyo: true, 
                    repeat: -1, 
                    ease: Sine.easeInOut
                }, "-=3.5");

    });
})(jQuery);

function hidePreload() {
    const preload = document.querySelector('.preload');
    preload.classList.add('preload-finish');

    timeline1.play();
}