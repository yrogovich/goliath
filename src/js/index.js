(function($) {
$(function() {
    const templateUrl = wp.templateUrl;

    // Form handler
    $('form').submit(function(event) {
        event.preventDefault();

        console.log('form func is running');

        let msg = jQuery(this).serialize();

        jQuery.ajax({
            type: 'POST',
            url: `${templateUrl}/send.php`,
            data: msg,
            success: function(data) {
                console.log('form ok');
                $.fancybox.close();
                $.fancybox.open({
                    src: '#thanks-modal', 
                    modal: true
                });
                setTimeout(() => { 
                    $.fancybox.close();
                }, 2000);
            },
            error: function () {
                console.log('form error');
                $.fancybox.close();
            }
        });
    });

    $('.switcher-box input').on('input', function() {
        if($(this).attr("checked") == 'checked') {
            $('html').attr('data-theme', 'light');
        } else {
            $('html').attr('data-theme', 'default');
        }
    });

    // Menu toggle script
    $('.menu-icon').click(function () {
        $(this).toggleClass('active');
        $('html').toggleClass('overflow-hidden');
        $('.mobile-menu').toggleClass('active');
    });

    // Jquery LazyLoad init
    try {
        $('.lazy').Lazy();
    } catch (error) {
        console.log(`LazyLoad plugin error: ${error}`);
    }

    // AOS init
    try {
        $('.h2').attr('data-aos', 'fade-up');
        AOS.init({      
            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 1000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations    
          });
    } catch (error) {
        console.log(`AOS plugin error: ${error}`);
    }

    /*
    //  Show ymaps on scroll
    let point = $('#discounts');
    let pointTop = point.offset().top;
    let handler = function () {
        let windowTop = $(this).scrollTop();
        if (windowTop > pointTop) {
            $('#map').html('<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7ebdb72eaffd8f5252bee2db8223a3e5d51e60278d52b1cc7e6b2288974cfa42&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>');
            $(window).unbind( "scroll", handler );
        }
    };
    $(window).bind( "scroll", handler ); 
    */
});
})(jQuery);