<div class="section" id="about">
    <div class="container">
        <div class="row">   
            <div class="column-info col">
                <img src="<?php bloginfo('template_url') ?>/src/img/logo.svg" alt="logo" class="background">

                <div class="h2">Goliath Web Services LTD</div>

                <div class="info">
                    <div class="info-with-icon">
                        <div class="icon">
                            <img src="<?php bloginfo('template_url') ?>/src/img/icons/pin.svg" alt="phone">
                        </div>
                        <div class="text">
                            <div class="h3">Офис</div>
                            <p>Хотите обсудить проект лично при встрече? Приходите:</p>
                            <a href="#about" class="primary"><?=ADRESS?></a>
                            <div class="small">Пн-ПТ с 10:00 до 18:00</div>
                        </div>
                    </div>
                    <div class="info-with-icon">
                        <div class="icon">
                            <img src="<?php bloginfo('template_url') ?>/src/img/icons/phone.svg" alt="phone">
                        </div>
                        <div class="text">
                            <div class="h3">Позвоните</div>
                            <p>Позвоните нам и мы проконсультируем Вас по вопросам Вашего проекта. </p>
                            <a href="tel:<?=PHONE_HREF?>" target="_blank" class="primary"><?=PHONE?></a>
                            <div class="small">Пн-ПТ с 10:00 до 18:00</div>
                        </div>
                    </div>
                    <div class="info-with-icon">
                        <div class="icon">
                            <img src="<?php bloginfo('template_url') ?>/src/img/icons/mail.svg" alt="mail">
                        </div>
                        <div class="text">
                            <div class="h3">Почта</div>
                            <p>Отправьте нам заявку по Эл Почте и мы ответим на все Ваши вопросы</p>
                            <a href="mailto:<?=EMAIL?>" target="_blank" class="primary"><?=EMAIL?></a>
                        </div>
                    </div> 
                </div>
                <!-- /.info -->
            </div>
            <div class="column-map col" id="map"></div>
        </div>
        <!-- /.custom-row -->
    </div>
</div>
<!-- /#about.section -->