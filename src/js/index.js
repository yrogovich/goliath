(function($) {
$(function() {
    const templateUrl = wp.templateUrl;

    // Theme color managing
    let switcher = $('.switcher-box input');
    if (localStorage.getItem('colorScheme')) {
        $('html').attr('data-theme', localStorage.getItem('colorScheme'));
    }  

    if($('html').attr('data-theme') === 'default') {
        switcher.attr( 'checked', true );
    }
    
    switcher.on('input', function() {
        if ($(this).is(":checked") ) {
            localStorage.setItem('colorScheme', 'default');
            $('html').attr('data-theme', localStorage.getItem('colorScheme'));
        } else {
            localStorage.setItem('colorScheme', 'light');
            $('html').attr('data-theme', localStorage.getItem('colorScheme'));
        }
    });

    // Form handler
    $('form').submit(function(event) {
        console.log("Отправка запроса");
        event.preventDefault ? event.preventDefault() : event.returnValue = false;
        var req = new XMLHttpRequest();
        req.open('POST', `${templateUrl}/src/send.php`, true);
        req.onload = function() {
            if (req.status >= 200 && req.status < 400) {
            json = JSON.parse(this.response);
                console.log(json);
                
                if (json.result == "success") {
                    // Если сообщение отправлено
                    console.log("Сообщение отправлено");
                    $.fancybox.close();
                    $.fancybox.open({
                        src: '#thanks-modal', 
                        modal: true
                    });
                    setTimeout(() => { 
                        $.fancybox.close();
                    }, 2000);
                } else {
                    // Если произошла ошибка
                    console.log("Ошибка. Сообщение не отправлено");
                    $.fancybox.close();
                }
            // Если не удалось связаться с php файлом
            } else {console.log("Ошибка сервера. Номер: "+req.status);}}; 
        
        // Если не удалось отправить запрос. Стоит блок на хостинге
        req.onerror = function() {console.log("Ошибка отправки запроса");};
        req.send(new FormData(event.target));
    });

    // Menu toggle script
    $('.menu-icon').click(function () {
        $(this).toggleClass('active');
        $('html').toggleClass('overflow-hidden');

        $('.mobile-menu').toggleClass('active');
        $('.navbar').toggleClass('active');
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
            duration: 1500, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations    
          });
    } catch (error) {
        console.log(`AOS plugin error: ${error}`);
    }

    // Cookie check script
    let cookieAlert = $('.cookie-alert');
    let cookieAlertButton = $('.cookie-alert button');

    if (!localStorage.getItem('cookie')) {
        setTimeout(() => cookieAlert.addClass('not-accepted'), 4000);
    }  

    cookieAlertButton.click(() => {
        localStorage.setItem('cookie', 'accepted');
        cookieAlert.removeClass('not-accepted');
    });


    ////attachments
    $('.attachment input').change(function() {
        const fileList = this.files;
        let text = $('.attachment .area-text');
        let ul = $('.attachment-list');

        ul.empty();
        text.css('display', 'none');

        ul.append(`<li>Количество прикреплённых файлов: ${fileList.length}</li>`);
        for(let i = 0; i <= fileList.length; i++) {
           ul.append(`<li>${fileList[i].name}</li>`);
        }
    });

    //  Show ymaps on scroll
    let point = $('#technologiesAndProjects');
    let handler;
    if(!point.length) {
        showMap();
        return;
    } else {
        let pointTop = point.offset().top;
        handler = function () {
            let windowTop = $(this).scrollTop();
            console.log(typeof(point));
            if (windowTop > pointTop || point == null) {
                showMap();
            }
        };
        $(window).bind( "scroll", handler );  
    }

    function showMap() {
        // if( !$('#map').length ) {
        //     return;
        // }

        $('#map').html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2478.883043148375!2d-0.2356441764747555!3d51.588706879118114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487610d7f771e71d%3A0x5a0ce33e7eec2ce4!2zUmFtYmxlciBDb3VydCwgNyBTd3luZm9yZCBHYXJkZW5zLCBMb25kb24gTlc0IDRYTCwg0JLQtdC70LjQutC-0LHRgNC40YLQsNC90LjRjw!5e0!3m2!1sru!2sby!4v1591343516925!5m2!1sru!2sby" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');

        $(window).unbind( "scroll", handler );
    }
});
})(jQuery);