<?php
/*
* Template name: Contacts
*/

get_header();
?>
<?php get_template_part( 'template-parts/section-breadcrumbs'); ?>

<div class="template-area" id="contacts-page">

    <div class="inner-section" id="contacts">
        <div class="container">
            <h1 class="h1"><?the_title()?></h1>
        
            <div class="row">
                <div class="column-about">
                    <div class="h2">Goliath Web Services LTD</div>

                    <div class="quotes">
                        <div class="h3">Креативно Современно Безопасно </div>
                        <p>Для наших клиентов мы предоставляем современные решения по созданию веб-сайтов. Вы можете получить профессиональный и уникальный веб сайт уже сегодня. Наши сайты построены на самой известной платформе под названием «WORDPRESS», поэтому вы безграничны в создании и интеграции всех услуг, которые Вам могут понадобится. Мы не просто создаем веб-сайты, но мы переходим на новый уровень благодаря высококлассным системам безопасности, великолепному SEO и потрясающему дизайну, которые создаются для каждого персонально. Мы подберём вам идеальный домен для вашего сайта, предоставим хостинг, который лучше всего подойдет для вашего бизнеса. Вы можете получить систему бронирования и оплаты на вашем сайте, чтобы иметь возможность без проблем заниматься своим любимым делом. Для тех, кто в этом нуждается — мы предоставляем высококлассную тех поддержку для дальнейшего развития бизнеса. Если ваш бизнес ещё не в сети — он скоро исчезнет … Свяжитесь с нами сегодня и перенесите свой бизнес в онлайн!</p>
                    </div>
                    <!-- /.quotes -->
                </div>
                <!-- /.column-about -->
                <div class="column-img" data-aos="fade-up">
                    <img src="<?php bloginfo('template_url') ?>/src/img/contacts/main.jpg" alt="Goliath Web Services LTD">
                </div>
                <!-- /.column-img -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.inner-section -->

    <?php get_template_part('template-parts/section-contacts'); ?>

</div>
<!-- /#contacts.template-area -->

<?php
get_footer();