window.addEventListener('load', () => {
    setTimeout(hidePreload, 2000); // onLoad wait 2 sec
});
function hidePreload() {
    const preload = document.querySelector('.preload');
    preload.classList.add('preload-finish');
}

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
        if($(this).attr("checked") != 'checked') {
            $('html').attr('data-theme', 'default');
        } else {
            $('html').attr('data-theme', 'light');
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
        $(".lazy-blur").Lazy({
            threshold: 0,
            afterLoad: function(element) {
              element.addClass("no-blur");
            }
        });
    } catch (error) {
        console.log(`LazyLoad plugin error: ${error}`);
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