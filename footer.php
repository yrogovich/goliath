<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goliath-theme
 */

?>
    <?php get_template_part( 'template-parts/section-consult' ); ?>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col col-1">
                    <a href="<?=get_home_url(null, '')?>" class="logo">
                        <img src="<?php bloginfo('template_url') ?>/src/img/logo.svg" alt="logo" class="logo-img">
                        <img src="<?php bloginfo('template_url') ?>/src/img/logo-text.svg" alt="logo-text" class="logo-text">
                    </a>

                    <div class="h3">Goliath Web Services LTD</div>
                    <p>7 Swynford Gardens, NW4 4XL London, UK</p>

                    <ul class="links">
                        <li>
                            <img src="<?php bloginfo('template_url') ?>/src/img/icons/footer-phone.svg" alt="icon">
                            <a href="tel:<?=PHONE_HREF?>"><?=PHONE?></a>
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_url') ?>/src/img/icons/footer-mail.svg" alt="icon">
                            <a href="mailto:<?=EMAIL?>"><?=EMAIL?></a>
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_url') ?>/src/img/icons/footer-calendar.svg" alt="icon">
                            <a href="#about">Пн-ПТ с 10:00 до 18:00</a>
                        </li>
                    </ul>


                    <div class="switcher-box">
                        <span>Светлая тема</span>

                        <input type="checkbox" id="switch" checked/>
                        <label for="switch">Toggle</label>

                        <span>Тёмная тема</span>
                    </div>
                </div>
                <!-- /.col col-1 -->
                <div class="col col-2">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'Main menu',
                                'container' => false, 
                                'menu_class' => 'primary-menu'
                            )
                        );
                    ?>
                </div>
                <!-- /.col col-2 -->
                <div class="col col-3">
                    <div class="h3">Услуги</div>

                    <ul class="menu">
                        <li>Разработка сайтов</li>
                        <li>Поддержка сайтов 24/7</li>
                        <li>Очистка заражений</li>
                        <li>Работа с WordPress</li>
                        <li>Мобильная Адаптация</li>
                        <li>Аналитика и Статистика</li>
                        <li>Онлайн Маркетинг</li>
                        <li>Безопасность</li>
                        <li>СЕО Оптимизация</li>
                    </ul>
                </div>
                <!-- /.col col-3 -->
                <div class="col col-4">
                    <div class="h3">Хостинг и домен</div>

                    <ul class="menu">
                        <li>Регистрация домена</li>
                        <li>Word Press Хостинг</li>
                        <li>Cloud хостинг</li>
                        <li>Web хостинг</li>
                    </ul>
                </div>
                <!-- /.col col-4 -->
            </div>

            <div class="foot">
                Copyright © 2014 - <?=date("Y")?>  Goliath Web Services | All rights reserved | Company number: 11873385 | <a href="<?=get_privacy_policy_url()?>">Terms & Conditions | Privacy policy</a>
            </div>
        </div>
    </div>
</div><!-- #page -->

<!-- Cookie-alert -->
<div class="cookie-alert">
  <div class="cookie-alert__text">Сайт использует куки-файлы, чтобы включить основные функции веб-сайта, предложить вам лучший опыт, анализировать трафик и обслуживать целевую рекламу. Для получения дополнительной информации о файлах cookie, см. <a href="<?=get_privacy_policy_url()?>">Нашу политику конфиденциальности</a></div>
  <button class="cookie-alert__btn">Принять</button>
</div>

<?php get_template_part('template-parts/modals'); ?>

<div class="mobile-menu">
    <img src="<?php bloginfo('template_url') ?>/src/img/logo.svg" alt="logo" class="background">

    <div class="body">
        <div class="container">
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Main menu',
                        'container' => false, 
                    )
                );
            ?>
        </div>
    </div>
    <!-- /.body -->
    <div class="foot">
        <div class="container">
            <a href="tel:<?=PHONE_HREF?>" class="phone"><?=PHONE?></a>
        </div>
        <a href="<?=WHATSAPP_LINK?>" target="_blank" class="btn btn-whatsapp-mobile">Написать в WhatsApp</a>
    </div>
    <!-- /.foot -->           
</div>

<?php wp_footer(); ?>

</body>
</html>
